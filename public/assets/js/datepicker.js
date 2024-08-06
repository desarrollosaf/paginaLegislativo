$(function () {
    'use strict';

    if ($('.fecha_picker').length) {
        var date = new Date();
        var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
        $('.fecha_picker').datepicker({
            format: "dd/mm/yyyy",
            todayHighlight: true,
            autoclose: true
        });
        $('.fecha_picker').datepicker('setDate', today);
    }
});
