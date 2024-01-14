<?php
    require_once("connection.php");

    class SymptomsEntity extends Connection {
        public function getSymptoms() {
            $conn = $this -> getConnection();

            $arraySymptoms = array();

            $query = "SELECT * FROM síntomas ORDER BY nombre";
            $result = $conn -> query($query);

            if($result -> num_rows > 0) {
                $rows = array();

                while($row = $result -> fetch_assoc()) {
                    $rows[] = array(
                        "id" => $row["id"],
                        "symptom" => $row["nombre"]
                    );
                }

                $arraySymptoms = $rows;
            }

            $this -> closeConnection();
            
            return $arraySymptoms;
        }
    }

?>