<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            //"https://www.w3schools.com/xml/note.xml"

            function Login() {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open("POST", "index.php");
                console.log(xmlhttp);
            }
        </script>
    </head>
    <body>
        <button type="button" onclick="Login();">Login</button>
    </body>
</html>
