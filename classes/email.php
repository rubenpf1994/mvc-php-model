<?php
class Email{
    private $from;
    private $subject;
    private $message;
    public function __construct($from, $subject, $message)
    {
        $this->from = $from;
        $this->subject = $subject;
        $this->message = $message;
    }

    function send(){
        $headers = 'From: '.$this->from. "\r\n".'Reply-To: '.$this->from."\r\n" .'X-Mailer: PHP/' . phpversion();
        if(mail ( constant('TO'), $this->subject ,$this->message, $headers )){
            error_log("email=>Email enviado correctamente");
        }else{
            error_log("email=>Error al enviar el email");
        }
    }
}
?>