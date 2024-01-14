$(document).ready(function() {
    let count = 0;
    let arraySymptoms = [];

    $(document).on("change", ".cb-symptom", function() {
        var symptom = $(this).val();

        if($(this).prop("checked")) {
            if(count < 5) {
                count++;
                arraySymptoms.push(symptom);
            } else {
                $(this).prop("checked", false);
                showMessageModal("El máximo de síntomas que puede seleccionar es de 5");
            }  
        } else {
            count--;
            
            var index = arraySymptoms.indexOf(symptom);
            if (index !== -1) {
                arraySymptoms.splice(index, 1);
            }
        }

        $("#count").html(count);
    });

    $("#btnClose").click(function() {
        $("#container-modal").removeClass("show");
        $("#modal").removeClass("show-modal");
    });

    $("#btnDiagnose").click(function(e) {
        e.preventDefault();

        if(arraySymptoms.length < 2) {
            showMessageModal("Seleccione al menos 2 síntomas");
        } else {
            diagnoseDisease();
        } 
    });

    function diagnoseDisease() {
        $("#result").val("");
        $("#result").removeClass("blink");

        let symptoms = arraySymptoms;
        const action ="diagnoseDisease";

        $.ajax({
            url: "../controllers/diagnoseDisease.php",
            type: "POST",
            data: {action, symptoms},
            success: function(response) {
                if(response === "File not found") {
                    showMessageModal("No se encontró el archivo de swi-prolog");
                } else if(response === "Disease not found") {
                    showMessageModal("No hay un diagnóstico conocido para los síntomas seleccionados")
                } else {
                    $("html, body").animate({
                        scrollTop: $("#main").offset().top
                    }, 400);

                    $("#result").val(response);

                    setTimeout(function() {
                        $("#result").addClass("blink");
                    }, 400);
                }
            }
        });
    }

    function showMessageModal(message) {
        var h2 = $("#message")
        h2.html(message);

        var divModal = $("#container-modal")
        divModal.addClass("show");

        var modal = $("#modal")
        modal.addClass("show-modal");
    }
});

