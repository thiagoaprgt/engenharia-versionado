<?php

    namespace model\Vetores\Vetor_strategy_pattern;

    class Vetor_xyr implements Vetor_interface {

        protected $x, $y, $r;

        public function __construct($x, $y, $r) {}

        public function x() {
            return $this->x;
        }

        public function y() {
            return $this->y;
        }

        public function z() {

            $a = pow($r, 2) - pow($x, 2) - pow($y, 2);

            $z = pow($a, 0.5);


            return $z;

        }

        public function modulo() {
            return $this->r;
        }
        
        public function versor_X() {

            $v = $this->x / $this->r;

            return $v;
        }

        public function versor_Y() {

            $v = $this->y / $this->r;

        }

        public function versor_Z() {

            $v = $this->z() / $this->r;

        }

        public function alfa() {

            // a função pi() retorna o valor 3,14...
            // a função acos() retorna o valor em radianos

            $angle = ( 180 / pi() ) * acos( versor_X() );

            return $angle;

        }

        public function beta() {

            // a função pi() retorna o valor 3,14...
            // a função acos() retorna o valor em radianos

            $angle = ( 180 / pi() ) * acos( versor_Y() );

            return $angle;

        }

        public function gama() {

            // a função pi() retorna o valor 3,14...
            // a função acos() retorna o valor em radianos

            $angle = ( 180 / pi() ) * acos( versor_Z() );

            return $angle;

        }

    }



?>