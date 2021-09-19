<?php
    class View{
        function __construct()
        {
            error_log('VIEW::Construct-> INicio de la vista');
           $this->root = __DIR__.'/../views';
        }

        function render($template, $data=[]){
            $this->d = $data;
            include $this->root.'/'.$template;
        }
    }
?>