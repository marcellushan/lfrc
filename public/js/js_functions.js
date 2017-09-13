
$(document).ready(function () {
    $('#education').change(function () {

        if ($('#education').val()==7)
            $("#education_other").css("display", "block");
        else
            $("#education_other").css("display", "none");

    });

});

$(document).ready(function () {
    $('#family_role').change(function () {

        if ($('#family_role').val()==7)
            $("#family_role_other").css("display", "block");
        else
            $("#family_role_other").css("display", "none");

    });

});

$(document).ready(function () {
    $("input[id=income_source_other]:checkbox").change(function () {

//         $("#other_details").css("display", "block");
        $("#income_source_other_details").toggle();
//         // alert('this');

    });

});

$(document).ready(function () {
    $('#referral').change(function () {

        if ($('#referral').val()==10)
            $("#referral_other").css("display", "block");
        else
            $("#referral_other").css("display", "none");

    });

});

$(document).ready(function () {
    $("input[id=abuse_other]:checkbox").change(function () {

//         $("#other_details").css("display", "block");
        $("#abuse_other_details").toggle();
//         // alert('this');

    });

});
