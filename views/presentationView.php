<?php 

    class PresentationView {
        public function showPresentationView() {
            require_once("./include/config.php");
?>

            <!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <title>Sistema Experto</title>
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                    <link rel="stylesheet" href="<?php echo CSS_PATH."styles_general.css"?>">
                    <link rel="stylesheet" href="<?php echo CSS_PATH."styles_index.css"?>">
<?php

                    require_once("./include/header.php");
                    $OBJHeader = new Header;
                    $OBJHeader -> showHeader();                    

?>
                    <main class="main">
                        <div class="container-main">
                            <div class="container-main__title title__main">
                                <h1>DIAGNÓSTICO DE ENFERMEDADES UTILIZANDO UN SISTEMA EXPERTO EN SWI-PROLOG</h1>
                            </div>
                            <div class="container-sub__title title__main">
                                <h3>SISTEMAS INTELIGENTES</h3>
                            </div>
                            <div class="container-content">
                                <div class="container-table">
                                    <table class="table-members">
                                        <thead>
                                            <tr>
                                                <th colspan="2"><h2>INTEGRANTES</h2></th>
                                            </tr>
                                            <tr>
                                                <th>Código</th>
                                                <th>Alumno</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>20A3010737</td>
                                                <td>Fernandez Sotelo, Paolo Jeanpier</td>
                                            </tr>
                                            <tr>
                                                <td>20A3010741</td>
                                                <td>Navarro Yarleque, Jairo Marcelo</td>
                                            </tr>
                                            <tr>
                                                <td>20A3010400</td>
                                                <td>Quispe Pisconte, Jetmayer Guillermo</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </main>
<?php

                    require_once("./include/footer.php");
                    $OBJHeader = new Footer;
                    $OBJHeader -> showFooter();                    

?>
            </html>

<?php
        }
    }

?>