<?php
class Usuario{
    // Atributos-----------------:
    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;
    // Métodos------------------:
    function getIdusuario(){
        return $this->idusuario;
    }

    function getDeslogin() {
        return $this->deslogin;
    }

    function getDessenha() {
        return $this->dessenha;
    }

    function getDtcadastro() {
        return $this->dtcadastro;
    }

    function setIdusuario($idusuario){
        $this->idusuario = $idusuario;
    }

    function setDeslogin($deslogin): void {
        $this->deslogin = $deslogin;
    }

    function setDessenha($dessenha): void {
        $this->dessenha = $dessenha;
    }

    function setDtcadastro($dtcadastro): void {
        $this->dtcadastro = $dtcadastro;
    }
    
    public function loadById($id){
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
            ":ID"=>$id
        ));
        if(count($results) > 0){
          $this->setData($results[0]);
            
        }
    }
    
    public static function getList(){
        $sql = new Sql();
        
        return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
    }
    
    public static function search($login){
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin",array(
            ":SEARCH"=>"%".$login."%"
        ));
    }
    public function login($login, $senha){
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :SENHA", array(
            ":LOGIN"=>$login,
            ":SENHA"=>$senha
        ));
        if(count($results) > 0){
            $this->setData($results[0]);
            
        }else{
            throw new Exception("Login inválido");
        }
    }
    public function setData($data){
            $this->setIdusuario($data['idusuario']);
            $this->setDeslogin($data['deslogin']);
            $this->setDessenha($data['dessenha']);
            $this->setDtcadastro(new DateTime($data['dtcadastro']));
    }
    public function insert(){
        $sql = new Sql();
        $results = $sql->select("CALL sp_usuario_insert(:LOGIN, :PASSWORD)", array(
            ":LOGIN"=>$this->getDeslogin(),
            ":PASSWORD"=>$this->getDessenha()
        ));
        if(count($results)>0){
            $this->setData($results[0]);
        }
    }
    public function __construct($login = "", $password = "") {
        $this->setDeslogin($login);
        $this->setDessenha($password);
    }
    public function update($login, $password){
        $this->setDeslogin($login);
        $this->setDessenha($password);
        $sql = new Sql();
        $sql->querys('UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID', array(
            ':LOGIN'=>$this->getDeslogin(),
            ':PASSWORD'=>$this->getDessenha(),
            ':ID'=>$this->getIdusuario()
        ));    
    }
    public function __toString(){
        return json_encode(array(
            "idusuario"=>$this->getIdusuario(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDessenha(),
            "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")        
        ));
    }  
}
