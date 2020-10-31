<?php

    namespace Model\Vetores\Vetor_strategy_pattern\Vetor_input;

    use Model\Vetores\Vetor_strategy_pattern\Vetor_input\Vetor_input_interface;


    class Vetor_yzr_input implements Vetor_input_interface {
        
        public function __construct() {

            print Vetor_yzr_input::input('y');
            print Vetor_yzr_input::input('z');
            print Vetor_yzr_input::input('r');

        }
        
        public static function input(string $variavel) {

            // strtoupper() deixa a primeira letra maiúscula

            $label = "<label>" . strtoupper($variavel) . "</label>";

            // {\$i} será uma referência para uma futura substituição através str_replace();

            $input = "<input type=\"number\" name=\"vetor_" . $variavel . "_{\$i}" . "\" >";

            $show = $label . $input;

            return $show;

        }


    }


?>