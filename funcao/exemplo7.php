<?php

$hierarquia = array(
    array(
        // Inicio CEO
        'nome_cargo'=>'CEO',
        'subordinados'=>array(
            array(
                // Inicio Diretor
                'nome_cargo'=>'Diretor',
                'subordinados'=>array(
                    array(
                        // Inicio Gerente
                        'nome_cargo'=>'Gerente' 
                    ) // Fim Gerente
                ) // Fim Diretor
            ),
            array(
                // Inicio Diretor
                'nome_cargo'=>'Diretor2',
                'subordinados'=>array(
                    array(
                        // Inicio Gerente
                        'nome_cargo'=>'Gerente' 
                    ),
                    array (
                        'nome_cargo'=>'Gerente2',
                        'salario'=>1000
                    ) // Fim Gerente
                ) // Fim Diretor
            )

        )
    ) // Fim CEO
);


function exibe($cargos){
    $html = "<ul>";
    foreach ($cargos as $cargo) {
        $html .= '<li>';
        $html .= $cargo['nome_cargo'];
        $html .= '</li>';
        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
            $html .= exibe($cargo['subordinados']);
        }
    }
    $html .= "</ul>";
    return $html;
}

echo exibe($hierarquia);

?>