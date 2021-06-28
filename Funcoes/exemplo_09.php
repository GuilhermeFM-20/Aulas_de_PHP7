<?php

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
                //Inicio: Diretor Comercial
                array(
                    'nome_cargo' => 'Diretor Comercial',
                    'subordinados' => array(
                        //Inicio: Gerente de Vendas
                        array(
                        'nome_cargo' => 'Gerente de Vendas'
                        )
                        //Termino: Gerente de Vendas 
                    ) 
                ),
                //Termino: Diretor Comercial
                //Inicio: Diretor Financeiro
                array(
                    'nome_cargo' => 'Diretor Financeiro',
                    'subordinados' => array(
                        //Inicio: Gerentre de Contas a Pagar
                        array(
                            'nome_cargo' => 'Gerente de Contas a Pagar',
                            'subordinados' => array(
                                //Inicio: Supervisor de Pagamentos
                                array(
                                    'nome_cargo' => 'Supervisor de Pagamentos'
                                )
                                //Termino: Supervisor de Pagamentos
                            )
                                ),
                        //Termino: Gerentre de Contas a Pagar
                        //Inicio: Gerentes de Compras
                        array(
                            'nome_cargo' => 'Gerentes de Compras',
                            'subordinados' => array(
                                //Inicio: Supervisor de Suprimentos
                                array(
                                    'nome_cargo' => 'Supervisor de Suprimentos',
                                    'subordinados' => array(
                                        array(
                                            'nome_cargo' => "Funcionário"
                                        )
                                    ) 
                                )
                                //Termino: Supervisor de Suprimentos
                            )
                        )
                        //Termino: Gerentes de Compras 
                    )
                )
                //Termino: Diretor Financeiro    
             )
                
        )
);

function exibe($cargos){

    $html = "<ul>";

        foreach($cargos as $cargo){
            
            $html .= "<li>";
            $html .= $cargo['nome_cargo'];
                if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0)
                $html .= exibe($cargo['subordinados']);
            $html .= "</li>";
        }

    $html .= "</ul>";

    return $html;
}
echo exibe($hierarquia);