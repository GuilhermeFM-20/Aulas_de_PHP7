<?php
    if(isset($_GET['status']) == 1){
        echo "Erro";
    }
?>
<script src="https://www.google.com/recaptcha/api.js"></script>

<form action="cadastrar.php" method="post">

    
    <input type="email" name="inputEmail">
    <button type="submit">Enviar</button>
    <div class="g-recaptcha" data-sitekey="6LdCr9gdAAAAAPdKWT0z76A0raP6tdlst7kRNycE"></div>

</form>