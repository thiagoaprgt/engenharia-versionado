<?php


    namespace Controller;

    class Form_Vetores {

        

        public function __construct() {

            

            $template = file_get_contents('View/Home.html');

            if(isset($_GET['quantity'])) {

                $action = 'index.php';
                
                $method = 'get';

                $content = "<form action=\"$action\" method=\"$method\" >";

                for($i=0; $i < $_GET['quantity'] ; $i++) {

                    $vetor = file_get_contents('View/content/Form_Vetores.html');

                    $content .= str_replace('{$i}', $i, $vetor);

                    

                }

                $content .= "<input type=\"hidden\" name=\"namespace\" value=\"Controller\Vetor_intensidade\" >";

                $content .= "<input type=\"submit\" value=\"enviar\" >";

                $content .= "</form>";

            }

            $content = str_replace('{content}', $content, $template);

            echo $content;

        }


        

    }

    


?>