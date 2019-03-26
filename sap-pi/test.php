<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            function Login() {
                $.ajax({
                    url: "https://www.w3schools.com/xml/note.xml",
                    data: {
                        
                    },
                    type: 'POST',
                    contentType: "text/xml",
                    dataType: "text",
                    beforeSend: function () {
                        console.log("Acessando o form...");
                    }
                }).done(function (data) {
                    console.log(data);
                }).fail(function (jqXHR, textStatus, response) {
                    console.log("[!] Não deu certo");
                });
            }
        </script>
    </head>
    <body>
        <button type="button" onclick="Login();">Login</button>
    </body>
</html>
