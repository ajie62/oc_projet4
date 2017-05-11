$(function() {
    var d = new Date();
    var minDate = null;
    if(d.getHours() > 14) {
        minDate = 1;
    } else {
        minDate = 0;
    }

    $(".js-datepicker").datepicker({
        minDate: minDate,
        maxDate: '+1Y',
        dateFormat: "dd/mm/yy",
        closeText: "Close"
    });

    $(".birth-datepicker").datepicker({
        maxDate: -365 * 7,
        yearRange: '1920:now - 7Y',
        changeYear: true,
        closeText: "Fermer",
        showButtonPanel: true,
        dateFormat: "dd/mm/yy"
    });

    $(".js-datepicker").focus(function(e) {
        $(this).blur();
    });
});