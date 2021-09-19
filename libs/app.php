<?php
require_once 'controllers/index.php';
require_once 'controllers/admin.php';
require_once 'controllers/email.php';
require_once 'controllers/404.php';
    class App {
        public function __construct()
        {
            $request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $request_uri = trim($request_uri, '/');
            $request_uri = explode( '/', $request_uri );
            $controller= $request_uri[0];
            $id=$request_uri[1];
            $id= isset($request_uri[1])?$request_uri[1]:null;
            /*if(!is_int($id)){
                $id=null;
            }*/
            //Posibles url's
            $array_uri = array('', 'admin', 'emailing');
            if(in_array($controller, $array_uri)){
                switch($controller){
                    case '':
                        $index = new IndexController();
                        $index->loadIndex();
                    break;
                    case 'admin':
                        $admin = new AdminController();
                        $admin->loadAdmin();
                    break;
                    case 'emailing':
                        $emailing = new EmailController();
                        $emailing->sendEmail();
                    break;
                }
                
            }else{
                $errorPage = new PageErrorController();
                exit();
            }
        }
    }
    
?>