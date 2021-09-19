<?php 
    class AdminController extends Controller {
        function __construct()
        {
            parent::__construct();
        }

        function loadAdmin(){
            $this->render('admin.php');
        }
    }
?>