<?php
    
    if(isset($_POST["action"])) {
        $output = "";

        if(!file_exists("../assets/Sistema_Experto.pl")) {
            die("File not found");
        }

        if(isset($_POST["symptoms"])) {
            $arrayDiseases = array(
                "VIH" => "VIH / SIDA",
                "EDC" => "Enfermedad de Crohn",
                "AR" => "Artritis Reumatoida",
                "N" => "Neumonía",
                "HC" => "Hepatitis C",
                "EM" => "Esclerosis Múltiple",
                "DT2" => "Diabetes Tipo 2",
                "L" => "Leucemia",
                "IRC" => "Insuficiencia Renal Crónica",
                "EC" => "Enfermedad Celíaca",
                "" => "Disease not found"
            );

            $arraySymptoms = $_POST["symptoms"];

            $X = '[';

            foreach($arraySymptoms as $symptom) {
                $X .= $symptom . ',';
            }

            if(substr($X, -1, 1) ==',') {
                $X = substr($X, 0, strlen($X)-1);
            }

            $X .= ']';

            $output = `swipl -s ../assets/Sistema_Experto.pl -g "test($X)." -t halt.`;

            $diagnose = $arrayDiseases[$output];
        }

        echo $diagnose;
    }
?>