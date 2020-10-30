<?php

    namespace Controller;
    

    class Quantidade_de_Vetores {

        private $data;

        public function __construct() {

            $template = file_get_contents('View/Home.html');

            $content = file_get_contents('View/content/Quantidade_de_Vetores.html');
            

            $template = str_replace('{content}', $content, $template);

            $class = 'Quantidade_de_Vetores';

            $template = str_replace('{class}', $class, $template);
            

            echo $template;
            

        }

    }


    





?>