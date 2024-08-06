$(function () {
    'use strict'
    jQuery.validator.setDefaults({
        wrapper: 'span',
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else if (element.prop('type') === 'radio' && element.parent('.radio-inline').length) {
                error.insertAfter(element.parent().parent());
            } else if (element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                error.appendTo(element.parent().parent());
            } else {
                error.insertAfter(element);
            }
        },
        highlight: function (element, errorClass) {
            if ($(element).prop('type') !== 'checkbox' && $(element).prop('type') !== 'radio') {
                $(element).addClass("is-invalid").removeClass("is-valid");
            }
        },
        unhighlight: function (element, errorClass) {
            if ($(element).prop('type') !== 'checkbox' && $(element).prop('type') !== 'radio') {
                $(element).removeClass("is-invalid");
            }
        },
    });
});
