<?php

require_once './classes/email.php';
class EmailController extends Controller{
    
    public function __construct()
    {
        parent::__construct();

        //$email = new Email($subject, $message);
    }

    function sendEmail(){
	    $input = json_decode(file_get_contents("php://input"), true);

        $from =$input['remite'];
        $asunto = $input['asunto'];
        $mensaje = $input['mensaje'];
        
        $email = new Email($from, $asunto, $mensaje);
        $email->send();
        header('HTTP/1.1 200 OK');

    }
}
?>