<?php
    class MessageModal {
        public function messageModal() {
?>

            <div id="container-modal" class="container-modal">
                <div id="modal" class="modal">
                    <div class="container-img">
                        <img src="<?php echo ICON_PATH."information-icon.png"?>" class="img-modal">
                    </div>
                    <h2 id="message"></h2>
                    <button id="btnClose" class="btn-close">Cerrar</button>
                </div>
            </div>

<?php
        }
    }
?>