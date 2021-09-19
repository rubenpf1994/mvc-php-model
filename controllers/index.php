<?php 
    class IndexController extends Controller {
        function __construct()
        {
            parent::__construct();
        }

        function loadIndex(){
            $this->render('index.php');
        }

    }
?>