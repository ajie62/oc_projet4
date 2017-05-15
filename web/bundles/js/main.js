$(function() {
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    var date = new Date();

    var journee = $("#bj_reservationbundle_reservation_type>.radio:nth-child(2)");

    if(date.getHours() > 14 && date.getHours() < 20) {
        journee.find("label").children().attr("disabled", "disabled");
        journee.find("label").append(
            " <span data-toggle='tooltip' data-placement='right' title='Type non disponible après 14h.' class='glyphicon glyphicon-question-sign why-disabled'></span>"
        );
    }

    $(".js-datepicker").datepicker({
        minDate: 0,
        maxDate: '+1Y',
        dateFormat: "dd/mm/yy",
        closeText: "Close"
    });

    $(".js-datepicker").focus(function(e) {
         $(this).blur();
    });

    $(".go-back").on('click', function() {
        window.history.back();
    });
});