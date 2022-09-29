(function ($) {
    $("#choice")
        .change(function () {
            $(this)
                .find("option:selected")
                .each(function () {
                    var optionValue = $(this).attr("value");
                    if (optionValue == "client") {
                        $("#clientdiv").show();
                        $("#enterprisediv").hide();
                    } else if (optionValue == "enterprise") {
                        $("#enterprisediv").show();
                        $("#clientdiv").hide();
                    } else {
                        $("#enterprisediv").hide();
                        $("#clientdiv").hide();
                    }
                });
        })
        .change();

    // Login form validation
    $("#formlogin").validate({
        rules: {
            email: {
                required: true,
            },
            password: {
                required: true,
                minlenght: 8,
            },
        },
        messages: {
            email: "Entrez votre adresse mail",
            password: "Saisissez votre mot de passe",
        },
    });

    $("#registerclient").validate({
        rules: {
            name: {
                required: true,
            },
            // fname: {
            //     required: true,
            // },
            // email: {
            //     required: true,
            //     email: true,
            // },
            // old_date: {
            //     required: true,
            // },
            // sex: {
            //     required: true,
            // },
            // numTel: {
            //     required: true,
            // },
            // password: {
            //     required: true,
            //     minlenght: 8,
            // },
            // confirmPassword: {
            //     required: true,
            //     equalTo: "#password",
            // }
        },
        messages: {
            email: "Entrez votre adresse mail",
            password: "Saisissez votre mot de passe",
        },
    });

    $("#registerenterprise").validate({
        rules: {
            name: {
                required: true,
            },
            dreason: {
                required: true,
                notEqual: null,
            },
            numifu: {
                required: true,
            },
            nameManager: {
                required: true,
            },
            fnameManager: {
                required: true,
            },
            email: {
                required: true,
                email: true,
            },
            numTel: {
                number: true,
                required: true,
            },
            password: {
                required: true,
                minlenght: 8,
            },
            confirmPassword: {
                required: true,
                equalTo: "#password",
            },
            okcgu: {
                required: true,
            },
        },
        messages: {
            email: "Entrez votre adresse mail",
            password: "Saisissez votre mot de passe",
        },
    });
})(jQuery);
