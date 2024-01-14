<?php

    class DiagnosisControl {
        public function renderTableSymptoms() {
            include_once("../model/symptomsModel.php");
            $OBJSymptoms = new SymptomsEntity;
            $symptoms = $OBJSymptoms -> getSymptoms();

            $tableSymptoms = "";

            foreach($symptoms as $symptom) {
                $tableSymptoms .=   "<tr>"
                                        . "<td>" . $symptom["symptom"] . "</td>"
                                        . "<td>"
                                            . "<label for='symptom-" . $symptom["id"] . "' class='label-symptom'>"
                                                . "<input type='checkbox' name='symptom-" . $symptom["id"] ."' id='symptom-" . $symptom["id"] . "' value='s" . $symptom["id"] ."' class='cb-symptom'>"
                                            . "</label>"
                                        . "</td>"
                                    . "</tr>";
            }

            echo $tableSymptoms;
             
        }
    }

?>