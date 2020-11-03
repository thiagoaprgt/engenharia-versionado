<?php

    namespace Controller;

    use Model\Vetores\Vetor_strategy_pattern\Vetor_interface;
    use Model\Vetores\Vetor_strategy_pattern\Vetor_xyr;
    use Model\Vetores\Vetor_strategy_pattern\Vetor_xyz;
    use Model\Vetores\Vetor_strategy_pattern\Vetor_xzr;
    use Model\Vetores\Vetor_strategy_pattern\Vetor_yzr;

    class Calcula_componente {

        public function __construct() {

            $template = file_get_contents('View/Home.html');

            $i = 0;

            $vetor = array();

            // tem que fazer o require da interface antes das classes que a implementam 

            require_once 'Model/Vetores/Vetor_strategy_pattern/Vetor_interface.php';

            $content = str_replace('{content', '', $template);


            foreach($_GET as $k => $v) {


                if($k == 'vetor_' . $i) {

                    // identificando as variáveis

                    $variaveis = str_replace('Model\Vetores\Vetor_strategy_pattern\Vetor_input\Vetor_', '', $v);

                    $variaveis = str_replace('_input', '', $variaveis);                                       

                    $variavel = str_split($variaveis);                   
                

                    print_r($variavel);

                    // ajeitando os argumentos do objeto

                    $j = 0;

                    foreach($variavel as $a => $b) {

                        

                        $k = 'vetor_'.$b.'_'.$i;   
                        
                        //echo "<br>\n" . $k . "<br>\n";
                        
                        $arg[$j] = $_GET["$k"];

                        //print_r($arg[$j]);

                        $j++;
                    }

                    // ajeitando o namespace

                    $classe = str_replace('\Vetor_input', '', $v);

                    $classe = str_replace('_input', '', $classe);

                    $class = str_replace("Model\Vetores\Vetor_strategy_pattern", '', $classe);

                    $class = str_replace("\\", '', $class);

                    echo "<br>\n" . $classe . "<br>\n";
                    echo "<br>\n" . $class . "<br>\n";

                    $diretorio = str_replace("\\", '/', $classe) . '.php';

                    require_once $diretorio;

                    

                    // montando o objeto

                    //$class = $classe . '(' . $arg[0] . ',' . $arg[1] . ',' . $arg[2] . ')';

                    //echo $class;

                    $object[$i] = new $classe;

                    $object[$i]->variavel($arg[0], $arg[1], $arg[2]);

                    //print_r($object[$i]);

                    print "<br>\n";
                    print "<br>\n";


                    print "X_$i: " . $object[$i]->x();

                    print "<br>\n";

                    print "<br>\n";

                    print "Y_$i: " . $object[$i]->y();

                    print "<br>\n";

                    print "<br>\n";

                    print "Z_$i: " . $object[$i]->z();

                    print "<br>\n";

                    print "<br>\n";

                    print "Modulo_Resultante_$i: " . $object[$i]->modulo();

                    print "<br>\n";

                    print "<br>\n";

                    

                    print "Versor_X_$i: " . $object[$i]->versor_X();

                    print "<br>\n";

                    print "<br>\n";

                    print "Versor_Y_$i: " . $object[$i]->versor_Y();

                    print "<br>\n";

                    print "<br>\n";

                    print "Versor_Z_$i: " . $object[$i]->versor_Z();

                    print "<br>\n";

                    print "<br>\n";

                    

                    print "Alfa_$i: " . $object[$i]->alfa();

                    print "<br>\n";

                    print "<br>\n";

                    

                    print "Beta_$i: " . $object[$i]->beta();
                    
                    print "<br>\n";

                    print "<br>\n";

                    print "Gama_$i: " . $object[$i]->gama();

                    print "<br>\n";

                    

                    


                    print "<br>\n";

                    $i++;

                }

                



            }

        }

    }





?>