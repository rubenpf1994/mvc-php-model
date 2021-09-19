<?php
    require_once 'view.php';
    class Controller{
        function __construct()
        {
            $this->view = new View();
        }


        function redirect(){

        }

        function getGet($param){
            return $_GET[$param];
        }
        function existPost($params){
            foreach($params as $param){
                if(!isset($_POST[$param])){
                    error_log('CONTROLLER::existPost = no existe el parámetro '.$param);
                    return false;
                }
            }
            return true;
        }
    
        function existGet($params){
            foreach($params as $param){
                if(!isset($_GET[$param])){
                    error_log('CONTROLLER::existGet = no existe el parámetro '.$param);
                    return false;
                }
            }
            return true;
        }

        function getParamsGET(){
            var_dump($_GET);
        }

        function render($file){
            $this->view->render($file);
        }


    }
?>