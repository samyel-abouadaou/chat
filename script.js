$(function () {

    function lireMessages() {

        $("#zone").html(' ');



        $.getJSON("chatGET.php",
                function (data) {
                    for (var i = (data.length) - 1; i > -1; i--) {

                        $.getJSON("session.php", function (data) {
                            $("#zone").html( html + data + " : &#13;");
                        });

                        $("#zone").html ( html + data[i]['date'] + ' : ' + data[i]['message'] + '&#13;');
                    }
                });
    }

    setInterval(lireMessages, 100);

    $("#envoyer").click(function () {

        var message = $("#message").val();
        var now = new Date();

        var heure = now.getHours();
        var minute = now.getMinutes();
        var seconde = now.getSeconds();

        var date = heure + ':' + minute + ':' + seconde;

        $.post("chatPOST.php",
                {
                    message: message,
                    date: date

                }, function (data) {

        });
        $("#message").val(' ');
    });

});


