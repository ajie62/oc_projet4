// L'année en cours.
var year = new Date().getFullYear();

// Tous les jours fériés français.
var feries = [
    "01/01/" + year,
    "17/04/" + year,
    "01/05/" + year,
    "08/05/" + year,
    "25/05/" + year,
    "05/06/" + year,
    "14/07/" + year,
    "15/08/" + year,
    "01/11/" + year,
    "11/11/" + year,
    "25/12/" + year
];

// Permet de désactiver
function disableDates(date) {
    var dt = $.datepicker.formatDate('dd/mm/yy', date);
    var noWeekend = $.datepicker.noWeekends(date);
    return noWeekend[0] ? (($.inArray(dt, feries) < 0) ? [true] : [false]) : noWeekend;
}

$(function() {
    $(".js-datepicker").datepicker({
        minDate: 0,
        maxDate: '+1Y',
        dateFormat: "dd/mm/yy",
        closeText: "Close",
        beforeShowDay: disableDates
    });

    $(".birth-datepicker").datepicker({
        maxDate: -365 * 7,
        yearRange: '1920:now - 7Y',
        changeYear: true,
        closeText: "Fermer",
        showButtonPanel: true,
        dateFormat: "dd/mm/yy"
    });
});