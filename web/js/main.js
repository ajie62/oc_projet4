$(function() {
    var date = new Date();

    /* Getting the current time */
    function currentTime() {
        var hours = date.getHours() < 10 ? "0" + date.getHours() : date.getHours();
        var minutes = date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes();
        var seconds = date.getSeconds() < 10 ? "0" + date.getSeconds() : date.getSeconds();

        return hours + ":" + minutes + ":" + seconds;
    }

    /* First page datepicker */
    var datepicker = $("#bj_reservationbundle_reservation_date");

    // Tableau des jours fériés français
    var holidays = ['01/01', '14/04', '01/05', '08/05', '25/05', '05/06', '14/07', '15/08', '01/11', '11/11', '25/12'];

    datepicker.datepicker({
        minDate: 0,
        maxDate: '+1Y',
        dateFormat: "dd/mm/yy",
        closeText: "Close",
        firstDay: 1,
        // Holidays, Sunday, and Tuesday are unavailable in the datepicker.
        beforeShowDay: function(date) {
            if($.inArray($.datepicker.formatDate('dd/mm', date), holidays) > - 1) {
                return [false, "", "Unavailable"];
            } else if(date.getDay() === 2 || date.getDay() === 0) {
                return [false, "", "Unavailable"];
            } else {
                return [true, ""];
            }
        }
    });

    $.datepicker.regional['fr'] = {clearText: 'Effacer', clearStatus: '',
        closeText: 'Fermer', closeStatus: 'Fermer sans modifier',
        prevText: '&lt;Préc', prevStatus: 'Voir le mois précédent',
        nextText: 'Suiv&gt;', nextStatus: 'Voir le mois suivant',
        currentText: 'Courant', currentStatus: 'Voir le mois courant',
        monthNames: ['Janvier','Février','Mars','Avril','Mai','Juin',
            'Juillet','Août','Septembre','Octobre','Novembre','Décembre'],
        monthNamesShort: ['Jan','Fév','Mar','Avr','Mai','Jun',
            'Jul','Aoû','Sep','Oct','Nov','Déc'],
        monthStatus: 'Voir un autre mois', yearStatus: 'Voir un autre année',
        weekHeader: 'Sm', weekStatus: '',
        dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
        dayNamesShort: ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam'],
        dayNamesMin: ['Di','Lu','Ma','Me','Je','Ve','Sa'],
        dayStatus: 'Utiliser DD comme premier jour de la semaine', dateStatus: 'Choisir le DD, MM d',
        dateFormat: 'dd/mm/yy', firstDay: 0,
        initStatus: 'Choisir la date', isRTL: false};
    $.datepicker.setDefaults($.datepicker.regional['fr']);

    datepicker.focus(function() {
         $(this).blur();
    });

    /* Calendar change event */
    datepicker.on('change', function() {
        var selectedDate = datepicker.val();
        var date = new Date();

        var jour = date.getDate();
        var mois = date.getMonth() + 1;
        var annee = date.getFullYear();
        jour >= 0 && jour < 10 ? jour = '0' + jour : false;
        mois >= 0 && mois < 10 ? mois = '0' + mois : false;

        var today = jour + "/" + mois + "/" + annee;

        var demiJournee = $("input[type='radio'][value='demi-journée']");
        var journee = $("input[type='radio'][value='journée']");

        if(selectedDate == today && currentTime() > "14:00:00" && currentTime() < "23:59:59") {
            journee.attr("disabled", "true");
            journee.parents('label').append(
                " <span class='why-disabled'><small>(<em>Non disponible après 14h.</em>)</small></span>");
            demiJournee.prop("checked", "true");
        } else {
            // Nothing
            journee.prop("disabled", false);
            $('.why-disabled').remove();
        }
    });

    /* Go back button: second & third page */
    var goBackButton = $('.go-back');
    goBackButton.on('click', function(e) {
        e.preventDefault();
        window.history.back();
    });

    $('.info-booking').on('click', function() {
        $(this).next().fadeToggle();
    });
});