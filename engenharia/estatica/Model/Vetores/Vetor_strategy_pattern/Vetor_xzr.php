<?php

    namespace model\Vetores\Vetor_strategy_pattern;

    use model\Vetores\Vetor_strategy_pattern\Vetor_interface;

    class Vetor_xzr implements Vetor_interface {

        protected $x, $z, $r;

        public function __construct() {}

        public function variavel($x, $z, $r) {

            $this->x= $x;
            $this->z = $z;
            $this->r = $r;

        }
                
        public function x() {
            return $this->x;
        }

        public function y() {

            $a = pow($this->modulo(), 2) - pow($this->x(), 2) - pow($this->z(), 2);

            $y = pow($a, 0.5);

            return $y;

        }

        public function z() {
            return $this->z;
        }

        public function modulo() {
            return $this->r;
        }
        
        public function versor_X() {

            $v = $this->x() / $this->modulo();

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

            $angle = ( 180 / pi() ) * acos( $this->versor_X() );

            return $angle;

        }

        public function beta() {

            // a função pi() retorna o valor 3,14...
            // a função acos() retorna o valor em radianos

            $angle = ( 180 / pi() ) * acos( $this->versor_Y() );

            return $angle;

        }

        public function gama() {

            // a função pi() retorna o valor 3,14...
            // a função acos() retorna o valor em radianos

            $angle = ( 180 / pi() ) * acos( $this->versor_Z() );

            return $angle;

        }

    }

?>