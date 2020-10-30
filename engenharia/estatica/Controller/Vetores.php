<?php

    namespace Controller;

    class Vetores {

        public function __construct() {

            $template = file_get_contents('View/Home.html');

            $content = "Em desenvolvimento ...";

            $content = str_replace('{content}', $content, $template);

            echo $content;

        }

    }





?>