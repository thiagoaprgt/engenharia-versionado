<?php

    namespace model\Vetores\Vetor_strategy_pattern;

    use model\Vetores\Vetor_strategy_pattern\Vetor_interface;


    class Vetor_xyz implements Vetor_interface {

        protected $x, $y, $z;

        public function __construct($x, $y, $z) {}
        
        public function x() {

            return $this->x;

        }

        public function y() {

            return $this->y;

        }

        public function z() {

            return $this->z;

        }

        public function modulo() {

            $a = pow($this->x, 2) + pow($this->y, 2) + pow($this->z, 2);

            $r = pow($a, 0.5);

            return $r;

        }        


        public function versor_X() {

            $v = $this->x() / $this-modulo();

            return $v;
        }

        public function versor_Y() {

            $v = $this->y() / $this->modulo();

            return $v;

        }

        public function versor_Z() {

            $v = $this->z() / $this->modulo();

            return $v;

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