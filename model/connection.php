<?php

    class Connection {
        private $connection;
        
        function __construct() {
            $this -> connection = mysqli_connect("localhost", "root", "", "sistema_experto");
        }

        protected function getConnection() {
            return $this -> connection;
        }

        protected function closeConnection() {
            mysqli_close($this -> connection);
        }
    }

?>