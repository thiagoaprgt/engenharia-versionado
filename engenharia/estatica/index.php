<?php

      
    

    if (isset( $_GET['namespace'] ) ) {
        

        $namespace = $_GET['namespace'];  

        $path = str_replace("\\", '/', $namespace) . '.php';

        require_once $path;

        new $namespace;   
        

    }else {

        $class = 'Home';

        $template = file_get_contents('View/Home.html');


        $template = str_replace('{class}', $class, $template);

        echo $template;
        

    }


    



    


?>