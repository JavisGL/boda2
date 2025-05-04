<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Invitación de Boda</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display&display=swap" rel="stylesheet">
    
    <!-- Tu CSS -->
    <link rel="stylesheet" href="{{ asset('estilos.css') }}">
</head>
<body>

    <!-- Imagen de los novios -->
    <img src="https://i.imgur.com/Wl2q0QQ.jpg" class="foto-portada" alt="Foto de los novios">

    <!-- Título y nombres -->
    <h2 class="titulo-cursiva text-center">¡Nos Casamos!</h2>
    <h3 class="nombres text-center">JORGE y CLAUDIA</h3>

    <!-- Frase con imagen de sello -->
    <div class="frase-container text-center">
        <img src="{{ asset('images/boda1.jpg') }}" alt="Sello decorativo" style="height: 70px; margin-bottom: 1rem;">
        <div class="frase">"SIEMPRE TUYO, SIEMPRE MÍA, SIEMPRE NUESTROS."</div>
        <div class="autor">LUDWIG VAN BEETHOVEN</div>
    </div>

    <!-- Sección de la invitación con fecha -->
    <div class="text-center my-5">
        <p>TENEMOS EL HONOR DE INVITARTE A NUESTRA BODA</p>
        <h4>Octubre</h4>
        <div class="d-flex justify-content-center align-items-center gap-3">
            <span>SÁBADO</span>
            <h1>18</h1>
            <span>18:00 P.M</span>
        </div>
        <p>2025</p>
    </div>

    <!-- Contador regresivo -->
    <div class="text-center my-4">
        <p>SOLO FALTAN</p>
        <div id="countdown" class="d-flex justify-content-center gap-3">
            <div><strong id="dias">--</strong><div>DÍAS</div></div>
            <div><strong id="horas">--</strong><div>HORAS</div></div>
            <div><strong id="minutos">--</strong><div>MINUTOS</div></div>
            <div><strong id="segundos">--</strong><div>SEGUNDOS</div></div>
        </div>
    </div>

    <!-- Imagen final -->
    <img src="https://i.imgur.com/3cJrBfV.jpg" alt="Foto pareja final" class="img-fluid">

    <!-- Script del contador -->
    <script>
        const eventoFecha = new Date("2025-06-01T14:00:00").getTime();
        const intervalo = setInterval(() => {
            const ahora = new Date().getTime();
            const distancia = eventoFecha - ahora;

            const dias = Math.floor(distancia / (1000 * 60 * 60 * 24));
            const horas = Math.floor((distancia % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutos = Math.floor((distancia % (1000 * 60 * 60)) / (1000 * 60));
            const segundos = Math.floor((distancia % (1000 * 60)) / 1000);

            document.getElementById("dias").innerText = dias;
            document.getElementById("horas").innerText = horas;
            document.getElementById("minutos").innerText = minutos;
            document.getElementById("segundos").innerText = segundos;

            if (distancia < 0) {
                clearInterval(intervalo);
                document.getElementById("countdown").innerHTML = "¡Ya comenzó la boda!";
            }
        }, 1000);
    </script>
<!-- Sección: Nuestros Padres y Padrinos -->
<div class="text-center my-5 px-3">

    <!-- Padres -->
    <h3>Nuestros Padres</h3>

    <div class="my-3">
        <p><strong>DE LA NOVIA</strong></p>
        <p>MARCELA GUTIERREZ CRUZ</p>
        <p>MIGUEL TORREZ PEREZ</p>
    </div>

    <div class="my-3">
        <p><strong>DEL NOVIO</strong></p>
        <p>SANDRA VASQUEZ ORTIZ</p>
        <p>JULIAN CHÁVEZ ZAMBRANA</p>
    </div>

    <!-- Padrinos -->
    <h3 class="mt-5">Nuestros Padrinos</h3>

    <div class="my-3">
        <p><strong>CIVIL</strong></p>
        <p>JIMENA RUIZ CAMARGO</p>
        <p>NICOLAS CHÁVEZ ZAMBRANA</p>
    </div>

    <div class="my-3">
        <p><strong>RELIGIÓN</strong></p>
        <p>ANDREA GUTIERREZ LÓPEZ</p>
        <p>EMILIANO RAMIREZ CHOQUE</p>
    </div>

</div>

<!-- Sección: Ceremonia Religiosa -->
<div class="text-center my-5 px-3">

    <!-- Ícono opcional (puedes poner una imagen si lo deseas) -->
    <div>
        <!-- <img src="ruta/a/icono.png" alt="Icono iglesia" style="height: 40px;"> -->
        <p>🏛️</p> <!-- puedes reemplazar con imagen más adelante -->
    </div>

    <p>CEREMONIA RELIGIOSA</p>
    <h3>CATEDRAL SAN ILDEFONSO</h3>

    <!-- Imagen de la iglesia -->
    <div class="my-3">
        <img src="{{ asset('images/catedral.jpg') }}" alt="Catedral San Ildefonso" class="img-fluid" style="max-width: 100%; height: auto;">
    </div>

    <!-- Botón para ubicación -->
    <div class="my-4">
        <a href="https://www.google.com/maps?q=Catedral+San+Ildefonso" target="_blank">
            <button type="button">COMO LLEGAR</button>
        </a>
    </div>

</div>

<!-- Sección: Recepción -->
<div class="text-center my-5 px-3">

    <!-- Ícono decorativo (copas) -->
    <div>
        <!-- Puedes usar una imagen o un emoji -->
        <p>🥂</p>
    </div>

    <p>RECEPCIÓN</p>
    <h3>16:00 P.M</h3>
    <h4>SALÓN "JARDIN VIDA"</h4>
    <p>CALLE 123 Y CALLE 56 N° 151</p>

    <!-- Botón para ubicación -->
    <div class="my-3">
        <a href="https://www.google.com/maps?q=Salon+Jardin+Vida" target="_blank">
            <button type="button">COMO LLEGAR</button>
        </a>
    </div>

    <!-- Imagen de fondo o decorativa (manos) -->
    <div>
        <img src="{{ asset('images/recepcion.jpg') }}" alt="Recepción" class="img-fluid" style="max-width: 100%; height: auto;">
    </div>

</div>

<!-- Sección: Código de Vestimenta -->
<div class="text-center my-5 px-3">

    <h3>Código de Vestimenta</h3>
    <h4>FORMAL</h4>

    <!-- Iconos de vestimenta -->
    <div class="my-3">
        <img src="{{ asset('images/vestido.png') }}" alt="Vestido" style="height: 80px; margin-right: 10px;">
        <img src="{{ asset('images/traje.png') }}" alt="Traje" style="height: 80px;">
    </div>

    <p class="mb-5">POR FAVOR NO USAR BLANCO O SIMILARES</p>

    <!-- Icono bebé -->
    <div class="my-3">
        <img src="{{ asset('images/bebe.png') }}" alt="Niños" style="height: 50px;">
    </div>

    <!-- Nota sobre los niños -->
    <p style="max-width: 600px; margin: 0 auto;">
        NOS ENCANTARÍA QUE LOS NIÑOS NOS ACOMPAÑEN EN ESTA CELEBRACIÓN TAN ESPECIAL. CONTAMOS CONTIGO PARA SU CONSTANTE SUPERVISIÓN.
    </p>

</div>


</body>
</html>
