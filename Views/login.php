<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../static/css/style.css">
</head>

<body>
    <div class="login-dark">
        <form method="post" onsubmit="return validateLogin()">
            <h2 class="sr-only">Login Form</h2>
            <img src="../static/images/AP.jpg" style="width:100%" alt="Avatar">
           
            <div class="form-group"><input class="form-control" type="text" name="username" id="username" placeholder="Usuario"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" id="password" placeholder="Contraseña"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Ingresar</button></a>

            </div>
            <a href="#" class="forgot">¿Olvidaste tu usuario y contraseña?</a>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
        function validateLogin() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            // Verificar si el usuario y la contraseña son correctos
            if (username === "veterinaria" && password === "1234") {
                // Redirigir a la ruta deseada (cambia 'ruta-deseada' por la URL real)
                window.location.href = 'index.php';
                return false; // Evitar que el formulario se envíe
            } else {
                alert("Usuario o contraseña incorrectos");
                return false; // Evitar que el formulario se envíe
            }
        }
    </script>
    
</body>

</html>