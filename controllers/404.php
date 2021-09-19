<?php
    class PageErrorController extends Controller{
        function __construct()
        {
            parent::__construct();
            error_log('Inicio de PageErrorController');

            $this->render('404.php');
        }

        
    }
?>