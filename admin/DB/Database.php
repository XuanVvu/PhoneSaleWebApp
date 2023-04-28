<?php

    class Database {
        
        protected $connect;

        const DB_DSN = 'mysql:host=localhost;dbname=php0722_apple123;charset=utf8';

        const USERNAME = 'PHP0722E_user7';

        const PASSWORD = 'abcdef';

      

       

        protected function connection(){
            try {
                $this->connect = new PDO(Database::DB_DSN, Database::USERNAME, Database::PASSWORD);
              } catch (PDOException $e) {
                die("Kết nối CSDL theo PDO thất bại: " . $e->getMessage());
              }
          
              return $this->connect;
            }
        

        protected function close_connection(){
            $this->connect = null;
        }
    }