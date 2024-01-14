<?php
    require_once("../include/config.php");
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Sistema Experto | Respaldo Académico</title>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <link rel="stylesheet" href="<?php echo CSS_PATH."styles_general.css"?>">
            <link rel="stylesheet" href="<?php echo CSS_PATH."styles_academicSupport.css"?>">
<?php
            require_once("../include/header.php");
            $OBJHeader = new Header;
            $OBJHeader -> showHeader();                    
?>
            <main class="main">
                <div class="container-main">
                    <div class="container-main__title title__main">
                        <h1>RESPALDO ACADÉMICO</h1>
                    </div>
                    <div class="container-sub__title title__main">
                        <h3>[NOMBRE DEL LIBRO / ARTÍCULO]</h3>
                    </div>
                    <div class="container-content">
                        <div class="text">
                            <p>
                                Para la elaboración del presente sistema se realizó una investigación en distintos artículos y libros. Después de una búsqueda exhaustiva, encontramos información en distintos documentos, los cuales se enlistan a continuación, acompañados de su respectivo enlace para acceder a ellos:
                            </p>
                            <ul class="list-main">
                                <li>
                                    VIH / SIDA:
                                    <ul class="list-link">
                                        <li>
                                            <a href="https://www.gob.mx/cms/uploads/attachment/file/236888/Manual_VIHSIDA_vFinal_1nov12.pdf" target="_blank">
                                                <i>Manual de procedimientos estandarizados para la vigilancia epidemológica del VIH - SIDA</i>. Dirección Generel de Epidemiología (DGE)</a>
                                            (pág. 9)
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Enfermedad de Crohn:
                                    <ul class="list-link">
                                        <li>
                                            <a href="https://www.medigraphic.com/pdfs/revmedcoscen/rmc-2016/rmc162zn.pdf" target="_blank">
                                                <i>Enfermedad de Crohn</i>. Revista Médica de Costa Rica y Centroamérica LXXIII</a>
                                            (pág 425)
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Artritis Reumatoide:
                                    <ul class="list-link">
                                        <li>
                                            <a href="https://www.ser.es/wp-content/uploads/2015/09/02.pdf" target="_blank">
                                                <i>¿Qué es la Artritis Reumatoide?</i>. Sociedad Española de Reumatología</a>
                                            (pág. 3)
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Neumonía:
                                    <ul class="list-link">
                                        <li>
                                            <a href="https://www.dge.gob.pe/portal/docs/tools/publico/info_neumonia.pdf" target="_blank">
                                                <i>Información sobre Neumonía</i>. Ministerio de Salud</a>
                                            (pág. 3)
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Hepatitis C:
                                    <ul class="list-link">
                                        <li>
                                            <a href="https://www.medigraphic.com/pdfs/medlab/myl-2011/myl119-10b.pdf" target="_blank">
                                                <i>Medicina & Laboratorio</i>. Universidad de Antioquía</a>
                                            (pág. 411)
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Esclerosis Múltiple:
                                    <ul class="list-link">
                                        <li>
                                            <a href="https://www.medigraphic.com/pdfs/facmed/un-2012/un125e.pdf" target="_blank">
                                                <i>Revista de la Facultad de Medicina de la UNAM</i>. UNAM</a>
                                            (pág. 34)
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Diabetes Tipo 2:
                                    <ul class="list-link">
                                        <li>
                                            <a href="https://iris.paho.org/bitstream/handle/10665.2/53007/OPSWNMHNV200043_spa.pdf?sequence=1&isAllowed=y" target="_blank">
                                                <i>Diagnóstico y manejo de la diabetes de tipo 2</i>. Organización Panamericana de la Salud</a>
                                            (pág. 12)
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Leucemia:
                                    <ul class="list-link">
                                        <li>
                                            <a href="https://www.medigraphic.com/pdfs/facmed/un-2012/un122c.pdf" target="_blank">
                                                <i>Revista de la Facultad de Medicina de la UNAM</i>. UNAM</a>
                                            (pág. 12)
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Insuficiencia Renal Crónica:
                                    <ul class="list-link">
                                        <li>
                                            <a href="https://www.segg.es/tratadogeriatria/pdf/s35-05%2062_iii.pdf" target="_blank">
                                                <i>Tratado de Geriatría para residentes</i></a>
                                            (pág. 641)
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Enfermedad Celíaca
                                    <ul class="list-link">
                                        <li>
                                            <a href="https://www.aeped.es/sites/default/files/documentos/5-celiaca.pdf" target="_blank">
                                                <i>Gastroenterología</i></a>
                                            (pág. 49)
                                        </li>
                                    </ul>
                                </li>
                            </ul>
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
