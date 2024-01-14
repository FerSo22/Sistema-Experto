<?php
    require_once("../include/config.php");
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Sistema Experto | Diagnósticos</title>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <link rel="stylesheet" href="<?php echo CSS_PATH."styles_general.css"?>">
            <link rel="stylesheet" href="<?php echo CSS_PATH."styles_diagnosis.css"?>">
            <link rel="stylesheet" href="<?php echo CSS_PATH."styles_modal.css"?>">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script src="<?php echo JS_PATH."ajax.js"?>"></script>
<?php
            require_once("../include/header.php");
            $OBJHeader = new Header;
            $OBJHeader -> showHeader();    
            
            include_once("../include/messageModal.php");
            $OBJModal = new MessageModal;
            $OBJModal -> messageModal();
?>
            <main class="main" id="main">
                <div class="container-main">
                    <div class="container-main__title title__main">
                        <h1>DIAGNÓSTICO DEL SISTEMA EXPERTO</h1>
                    </div>
                    <div class="container-sub__title title__main">
                        <h3>SWI-PROLOG</h3>
                    </div>
                    <div class="container-content">
                        <div class="text">
                            <p>
                                El sistema funciona de la siguiente manera, se deben seleccionar al menos 5 síntomas de los mostrados en la tabla a continuación, una vez hecho esto, se presiona en el botón "Diagnosticar", ubicado inmediatamente después de la tabla, y se obtiene la enfermedad diagnosticada en la caja de texto ubicada inmediatamente después de estas líneas de texto
                            </p>
                        </div>
                        <div class="container-result">
                            <label for="result">
                                <strong>Diagnóstico:</strong>
                            </label>
                            <input type="text" name="result" id="result" placeholder="Aquí se mostrará el diagnóstico" readonly>
                        </div>
                        <div class="container-form">
                            <form action="" class="form-symptom">
                                <table class="table-symptoms">
                                    <thead>
                                        <tr>
                                            <th>SÍNTOMAS</th>
                                            <th>SELECCIÓN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
                                        include_once("../controllers/diagnosisControl.php");
                                        $OBJDiagnosisControl = new DiagnosisControl;
                                        $OBJDiagnosisControl -> renderTableSymptoms();
?>
                                    </tbody>
                                </table>
                                <div class="container-form__footer">
                                    <div class="container-data__selection">
                                        <p><strong>Síntomas seleccionados:</strong></p> <span><p id="count">0</p></span>
                                    </div>
                                    <div class="container-button">
                                        <button type="submit" id="btnDiagnose">Diagnosticar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>

<?php
            require_once("../include/footer.php");
            $OBJHeader = new Footer;
            $OBJHeader -> showFooter();                    
?>
    </html>