$().ready(function () {
    //valiadte singup form on keyup and submit
    $("#signupForm").validate({
        rules: {
            FirstName: {
                required: true
                },
            LastName: {
                required: true
            },
            DOB: {
                required: true
            },
            Email: {
                required: true,
                email: true
            },
            Password1: {
                required: true,
                minlength: 5
            },
            Password2: {
                required: true,
                minlength: 5,
                equalTo: "#Password1"
            },
            CountryID: {
                required: true
            }
        },
        messages: {
            FirstName: "Please enter your first name",
            LastName: "Please enter your last name"
        },
        Password1: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
        },
        Password2: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long",
            equalTo: "Your password must match the one above"
        },
        CountryID: "please choose a country"
    });
});
