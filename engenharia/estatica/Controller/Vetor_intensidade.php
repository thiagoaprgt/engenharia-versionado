<?php

    namespace Controller;

    use Model\Vetores\Vetor_strategy_pattern\Vetor_input\Vetor_input_interface;
    use Model\Vetores\Vetor_strategy_pattern\Vetor_input\Vetor_xyr_input;
    use Model\Vetores\Vetor_strategy_pattern\Vetor_input\Vetor_xyz_input;
    use Model\Vetores\Vetor_strategy_pattern\Vetor_input\Vetor_xzr_input;
    use Model\Vetores\Vetor_strategy_pattern\Vetor_input\Vetor_yzr_input;

    class Vetor_intensidade {

        public function __construct() {

            $template = file_get_contents('View/Home.html');

            //$content = "Em desenvolvimento ...";

            $action = 'index.php';            

            $content = "<form action=\"$action \" method=\"get\">";

            $i = 0;

            $vetor = array();

            // tem que fazer o require da interface antes das classes que a implementam 

            require_once 'Model/Vetores/Vetor_strategy_pattern/Vetor_input/Vetor_input_interface.php';

                       

            foreach ($_GET as $k => $v) {

                

                if($k != 'namespace') {      
                    
                    
                                        
                    
                    // trata a string do namespace para ser usado no require_once                

                    $path = str_replace('\\', '/', $v) . '.php';

                    require_once $path;

                    // inicia o buffer de saída

                    ob_start(); 

                    $content .= "<div>";

                    $content .= "<label>vetor_$i". ":\t\t\t\t\t\t\t\t" . "</label>";

                    // instanciar a classe das intensidades do vetores (criar os objetos)

                    $object[$i] = new $v;                    

                    // Armazena o conteúdo gerado após o buffer de saída ser iniciado
                    
                    $vetor[$i] = ob_get_contents();

                    // substituir a referência {$i} no html 

                    $vetor[$i] = str_replace('{$i}', $i, $vetor[$i]);

                    // finaliza e limpa o buffer de saída

                    ob_end_clean(); 

                    $content .= $vetor[$i];

                    $class = str_replace('Vetor_input\Vetor_input', 'Vetor', $v);

                    // este input será usado para enviar o namespace da classe de cada objeto criado
                    
                    $content .= "<input type=\"hidden\" name=\"vetor_$i\" value=\"$class\" >";
                    
                    $content .= "</div>";

                    $i++;

                    

                }

                
            }

            $namespace = 'Controller\Calcula_componente';

            $content .= "<input type=\"hidden\" name=\"namespace\" value=\"$namespace\" >";

            $content .= "<input type=\"submit\" value=\"enviar\" >";


            $content .= "</form>"; 
            

            $content = str_replace('{content}', $content, $template);

            echo $content;

        }

    }





?>