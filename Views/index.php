<!DOCTYPE html>
<html>

<head>
    <title>MENU</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
   
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../static/css/indexx.css">
    <style>
        html,
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Roboto", sans-serif
        }
    </style>
</head>

<body class="w3-light-grey">

    <!-- Page Container -->
    <div class="w3-content w3-margin-top" style="max-width:1400px;">

        <!-- The Grid -->
        <div class="w3-row-padding">

            <!-- Left Column -->
            <div class="w3-third">

                <div class="w3-white w3-text-grey w3-card-4" >
                    <div class="w3-display-container">
                        <img src="../static/images/AP.jpg" style="width:100%" alt="Avatar">
                        <div class="w3-display-bottomleft w3-container w3-text-black">
                            
                        </div>
                    </div>
                    <div class="w3-container">
                        <p><i class="fa fa-paw fa-fw w3-margin-right w3-large w3-text-teal"></i><a href="../Views/Mascota/GestionMascotas.php" class="subrayado">MASCOTAS</a></p>
                        <p><i class="fa fa-smile-o fa-fw w3-margin-right w3-large w3-text-teal" ></i><a href="../Views/Servicio/GestionServicios.php" class="subrayado">SERVICIOS</a></p>
                        <p><i class="fa fa-users fa-fw w3-margin-right w3-large w3-text-teal" ></i><a href="../Views/Veterinario/GestionVeterinarios.php" class="subrayado">VETERINARIOS</a></p>
                        <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><a href="../Views/Medicamento/GestionMedicamentos.php" class="subrayado">MEDICAMENTOS</a></p>
                        <p><i class="fa fa-user fa-fw w3-margin-right w3-large w3-text-teal"></i><a href="../Views/Cliente/GestionClientes.php" class="subrayado">CLIENTES</a></p>
                        <p><i class="fa fa-calendar-times-o fa-fw w3-margin-right w3-large w3-text-teal"></i><a href="../Views/Cita/GestionCitas.php" class="subrayado">CITAS</a></p>
                        
                        <hr>
                        <br>
                    </div>
                </div><br>

                <!-- End Left Column -->
            </div>

            <!-- Right Column -->
            <div class="w3-twothird">

                <div class="w3-container w3-card w3-white w3-margin-bottom">
                    <h2 class="w3-text-grey w3-padding-16"> <img src="../static/images/patitas.png">Cuidado en salud</h2>
                    <div class="slider-container">
                        <div class="slide" id="slide1">
                            <img src="../static/images/sliderImagen1.jpg" style="width:100%" alt="Avatar">
                        </div>
                        <div class="slide" id="slide2">
                            <img src="../static/images/sliderImagen2.jpg" style="width:100%" alt="Avatar">
                        </div>
                        <div class="slide" id="slide3">
                            <img src="../static/images/sliderImagen3.jpg" style="width:100%" alt="Avatar">
                        </div>
                    
                        
                    </div>
                
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>SERVICIOS VETIPOP</b></h5>
                        
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Peluquería y Cuidado Estético:</b></h5>
                        
                        <p>Ofrecemos servicios de peluquería que incluyen baños, cortes de pelo, y cuidado de uñas y orejas.</p>
                        <p>La higiene y el cuidado estético son esenciales para la salud general de tu mascota, y nuestro personal capacitado se asegurará de que se sientan cómodos y felices durante el proceso.</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Vacunación:</b></h5>
                        
                        <p>Proporcionamos programas de vacunación personalizados para proteger a tu mascota contra enfermedades comunes. </p><br>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Consulta General:</b></h5>
                        
                        <p>Realizamos consultas generales para evaluar la salud de tu mascota, discutir cualquier preocupación que puedas tener y brindarte consejos sobre cuidados adicionales. </p><br>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Atención de Emergencia:</b></h5>
                       
                        <p>Ofrecemos servicios de urgencia para atender cualquier situación médica crítica que pueda surgir fuera del horario regular. </p><br>
                    </div>
                </div>

                

                <!-- End Right Column -->
            </div>

            <!-- End Grid -->
        </div>

        <!-- End Page Container -->
    </div>

    <footer class="w3-container w3-teal w3-center w3-margin-top">
        <p>Redes Sociales</p>
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
        <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </footer>
    <script>
       let currentSlide = 1;
let autoSlideInterval;

function showSlide(n) {
    const slides = document.getElementsByClassName('slide');
    
    if (n > slides.length) {
        currentSlide = 1;
    } else if (n < 1) {
        currentSlide = slides.length;
    }

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
    }

    slides[currentSlide - 1].style.display = 'block';
}

function prevSlide() {
    showSlide(currentSlide -= 1);
    resetAutoSlide();
}

function nextSlide() {
    showSlide(currentSlide += 1);
    resetAutoSlide();
}

function autoSlide() {
    nextSlide();
}

function startAutoSlide() {
    autoSlideInterval = setInterval(autoSlide, 2000); // Cambiar cada 3 segundos (ajustable)
}

function resetAutoSlide() {
    clearInterval(autoSlideInterval);
    startAutoSlide();
}

// Mostrar la primera diapositiva al cargar la página y comenzar el slider automático
showSlide(currentSlide);
startAutoSlide();
    </script>
</body>

</html>