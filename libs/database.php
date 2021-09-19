<?php
    class Database{
        private $host;
        private $db;
        private $user;
        private $password;
        private $charset;

        public function __construct(){
            $this->host = constant('HOST');
            $this->db = constant('DATABASE');
            $this->user = constant('USER');
            $this->password = constant('PASSWORD');
        }

        public function Connect(){
            try {
                $options = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => false
                ];
                $pdo = new PDO('mysql:host='.$this->host.';dbname='.$this->db.';charset=utf8mb4', $this->user, $this->password, $options);
                error_log('Conexión a base de datos exitosa');
                return $pdo;
            } catch (PDOException $e) {
                error_log('Error connection: '.$e->getMessage());
            }
            
        }
    }
?>