<?php
    class Header {
        public function showHeader() {
?>              
                <link rel="icon" type="image/jpg" href="<?php echo ICON_PATH."page-icon.jpg"?>">
            </head>

            <body>
                <header class="main-header">
                    <div class="container-header">
                        <div class="main-header__container">
                            <h1 class="main-header__tittle">SISTEMA EXPERTO</h1>
                            <nav class="main-nav">
                                <ul class="menu">
                                    <li class="menu__item">
                                        <a href="<?php echo ROOTH_PATH."index.php" ?>" class="menu__link">PRESENTACIÓN</a>
                                    </li>
                                    <li class="menu__item">
                                        <a href="<?php echo VIEWS_PATH."academicSupportView.php" ?>" class="menu__link">RESPALDO ACADÉMICO </a>
                                    </li>
                                    <li class="menu__item">
                                        <a href="<?php echo VIEWS_PATH."diagnosisView.php" ?>" class="menu__link">DIAGNÓSTICOS</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="container-logo__main">
                        <div class="container-logo">
                            <img src="<?php echo IMG_PATH."logo-untels.png"?>" alt="">
                        </div>
                    </div>
                </header>

<?php
        }
    }
?>