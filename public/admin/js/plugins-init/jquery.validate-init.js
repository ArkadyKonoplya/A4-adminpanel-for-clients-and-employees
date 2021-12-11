jQuery(".form-valide").validate({
    rules: {
        "username": {
            required: !0,
            minlength: 3
        },
        "firstname": {
            required: !0,
            minlength: 3
        },
        "lastname": {
            required: !0,
            minlength: 3
        },
        "Companyname": {
            required: !0,
            minlength: 3
        },
        "businessnumber": {
            required: !0,
            minlength: 3
        },
        "phonenumber": {
            required: !0,
            minlength: 3
        },
        "cellnumber": {
            required: !0,
            minlength: 3
        },
        "carriers": {
            required: !0,
            minlength: 3
        },


        "country": {
            required: !0,
            minlength: 3
        },
        "email": {
            required: !0,
            email: !0
        },
        "select2": {
            required: !0
        },
        "select2-multiple": {
            required: !0,
            minlength: 2
        },
        "suggestions": {
            required: !0,
            minlength: 5
        },
        "skill": {
            required: !0
        },
        "currency": {
            required: !0,
            currency: ["$", !0]
        },
        "websites": {
            required: !0,
            url: !0
        },
        "phoneus": {
            required: !0,
            phoneUS: !0
        },
        "digits": {
            required: !0,
            minlength: 9
        },
        "number": {
            required: !0,
            number: !0
        },
        "range": {
            required: !0,
            range: [1, 5]
        },
        "terms": {
            required: !0
        },
        "password": {
            required: !0,
            minlength: 5
        }
    },
    messages: {
        "username": {
            required: "Please enter a username",
            minlength: "Your username must consist of at least 3 characters"
        },
        "firstname": {
            required: "Please enter a firstname",
            minlength: "Your firstname must consist of at least 3 characters"
        },
        "lastname": {
            required: "Please enter a lastname",
            minlength: "Your lastname must consist of at least 3 characters"
        },
        "Companyname": {
            required: "Please enter a Company name",
            minlength: "Your Company name must consist of at least 3 characters"
        },
        "businessnumber": {
            required: "Please enter a business number",
            minlength: "Your business number must consist of at least 3 characters"
        },
        "phonenumber": {
            required: "Please enter a phone number",
            minlength: "Your phone number must consist of at least 3 characters"
        },
        "cellnumber": {
            required: "Please enter a cell number",
            minlength: "Your cell number must consist of at least 3 characters"
        },
        "carriers": {
            required: "Please enter a carriers",
            minlength: "Your carriers must consist of at least 3 characters"
        },


        "country": {
            required: "Please enter a country",
            minlength: "Your country must consist of at least 3 characters"
        },
        "email": "Please enter a valid email address",
        "password": {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
        },
        "confirmPassword": {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long",
            equalTo: "Please enter the same password as above"
        },
        "select2": "Please select a value!",
        "select2-multiple": "Please select at least 2 values!",
        "suggestions": "What can we do to become better?",
        "skill": "Please select a skill!",
        "currency": "Please enter a price!",
        "websites": "Please enter your website!",
        "phoneus": "Please enter a US phone!",
        "digits": "Please enter min 9 value!",
        "number": "Please enter a number!",
        "range": "Please enter a number between 1 and 5!",
        "terms": "You must agree to the service terms!"
    },

    ignore: [],
    errorClass: "invalid-feedback animated fadeInUp",
    errorElement: "div",
    errorPlacement: function(e, a) {
        jQuery(a).parents(".form-group > div").append(e)
    },
    highlight: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
    },
    success: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid"), jQuery(e).remove()
    },
});
jQuery(".form-valide1").validate({
    rules: {
        "username": {
            required: !0,
            minlength: 3
        },
        "country": {
            required: !0,
            minlength: 3
        },
        "email": {
            required: !0,
            email: !0
        },
        "password": {
            required: !0,
            minlength: 5
        },
        "passwordNew": {
            required: !0,
            minlength: 5
        },
        "confirmPassword": {
            required: !0,
            equalTo: "#password"
        }
    },
    messages: {
        "username": {
            required: "Please enter a username",
            minlength: "Your username must consist of at least 3 characters"
        },
        "country": {
            required: "Please enter a country",
            minlength: "Your country must consist of at least 3 characters"
        },
        "email": "Please enter a valid email address",
        "password": {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
        },
        "passwordNew": {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
        },
        "confirmPassword": {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long",
            equalTo: "Please enter the same password as above"
        },
        "select2": "Please select a value!",
        "select2-multiple": "Please select at least 2 values!",
        "suggestions": "What can we do to become better?",
        "skill": "Please select a skill!",
        "currency": "Please enter a price!",
        "website": "Please enter your website!",
        "phoneus": "Please enter a US phone!",
        "digits": "Please enter min 9 value!",
        "number": "Please enter a number!",
        "range": "Please enter a number between 1 and 5!",
        "terms": "You must agree to the service terms!"
    },

    ignore: [],
    errorClass: "invalid-feedback animated fadeInUp",
    errorElement: "div",
    errorPlacement: function(e, a) {
        jQuery(a).parents(".form-group > div").append(e)
    },
    highlight: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
    },
    success: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid"), jQuery(e).remove()
    },
});


jQuery(".form-valide-with-icon").validate({
    rules: {
        "username": {
            required: !0,
            minlength: 3
        },
        "country": {
            required: !0,
            minlength: 3
        },
        "password": {
            required: !0,
            minlength: 5
        },
        "passwordNew": {
            required: !0,
            minlength: 5
        }
    },
    messages: {
        "username": {
            required: "Please enter a username",
            minlength: "Your username must consist of at least 3 characters"
        },
        "country": {
            required: "Please enter a country",
            minlength: "Your country must consist of at least 3 characters"
        },
        "password": {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
        },
        "passwordNew": {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
        }
    },

    ignore: [],
    errorClass: "invalid-feedback animated fadeInUp",
    errorElement: "div",
    errorPlacement: function(e, a) {
        jQuery(a).parents(".form-group > div").append(e)
    },
    highlight: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
    },
    success: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-valid")
    }




});