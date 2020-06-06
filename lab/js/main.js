$(document).ready(function(){
    $('signup-form').validate({
        rules:{
            fname:"required",
            lname:"required",
            city:"required"
        },
        messages:{
            fname:"Enter your first name",
            lname:"Enter your last name",
            city:"Enter your city name"
        }
    });
})