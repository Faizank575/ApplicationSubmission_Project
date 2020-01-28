var request;
$(document).ready(function () {

    var url_string = window.location.href;
    url = new URL(url_string);
    var username = url.searchParams.get("username");
    var data = "username=" + username;
    request = $.ajax({
        url: './include/getApplications.php',
        type: "POST",
        data: data
    })

    request.done(function (response, textStatus, jqXHR) {
        $("#applicationsList").html(response);
    });




    $("#newApplication").click(function () {
        console.log("hello");
        applicationId = create_UUID();
        var serializedData = "applicationId=" + applicationId;
        request = $.ajax({
            url: "./include/createApplication.php",
            type: "POST",
            data: serializedData
        });

        request.done(function (response, textStatus, jqXHR) {
            console.log(response);
            window.location.href = './applicationform.php?applicationId=' + applicationId;
        });

        // Callback handler that will be called on failure
        request.fail(function (jqXHR, textStatus, errorThrown) {
            // Log the error to the console
            console.error(
                "The following error occurred: " +
                textStatus, errorThrown
            );
        });

        // Callback handler that will be called regardless
        // if the request failed or succeeded
        request.always(function () {
            // Reenable the inputs
        });

    });

});