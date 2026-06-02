<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>NETFLIX - Cartelera</title>
    <style>
        /* CSS: El diseño de la página */
        body { 
            background-color: #141414; 
            color: white; 
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; 
            margin: 0; 
        }
        .navbar { 
            background: linear-gradient(to bottom, rgba(0,0,0,1), transparent);
            padding: 20px 4%; 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            position: sticky; 
            top: 0; 
            z-index: 100;
        }
        .logo { 
            color: #E50914; 
            font-size: 30px; 
            font-weight: bold; 
            text-decoration: none; 
            letter-spacing: -1px;
        }
        #buscador { 
            padding: 10px; 
            width: 300px; 
            border-radius: 4px; 
            border: 1px solid #333; 
            background: rgba(0,0,0,0.75); 
            color: white; 
            outline: none;
        }
        .titulo-seccion { padding: 20px 4%; font-size: 24px; }
        
        .contenedor-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); 
            gap: 20px; 
            padding: 0 4% 40px 4%; 
        }
        .peli { 
            cursor: pointer; 
            transition: transform 0.3s; 
            text-align: center;
        }
        .peli:hover { transform: scale(1.08); }
        .peli img { 
            width: 100%; 
            border-radius: 4px; 
            box-shadow: 0 4px 10px rgba(0,0,0,0.5);
            height: 300px;
            object-fit: cover;
        }
        .peli p { margin-top: 10px; font-size: 14px; color: #e5e5e5; }
    </style>
</head>
<body>

    <div class="navbar">
        <a href="#" class="logo">NETFLIX</a>
        <input type="text" id="buscador" placeholder="¿Qué quieres ver hoy?" onkeyup="filtrar()">
    </div>

    <h2 class="titulo-seccion">Tendencias ahora</h2>

    <div class="contenedor-grid" id="listaPelis">
        
        <div class="peli" onclick="verDetalle('Rapidos y furiosos', 'La lealtad de un policía de Los Ángeles se pone a prueba cuando se infiltra en un grupo de corredores de autos callejeros que se sospecha organizan robos a gran velocidad.')">
            <img src="https://m.media-amazon.com/images/M/MV5BZDQzMTEzYzktNjhjNC00N2IwLWIzN2ItMGQ1MjBkNGNhY2VmXkEyXkFqcGc@._V1_.jpg" alt="Rapidos y furiosos">
            <p>Rapidos y Furiosos</p>
        </div>

        <div class="peli" onclick="verDetalle('Scary Movie', 'En esta parodia de las películas de terror de los 90, un grupo de adolescentes sin suerte pero con un oscuro secreto sufren el asedio de un asesino serial igual de torpe que ellos.')">
            <img src="https://resizing.flixster.com/-XZAfHZM39UwaGJIFWKAE8fS0ak=/v3/t/assets/p25765_p_v12_aj.jpg" alt="Scary Movie">
            <p>Scary Movie</p>
        </div>

        <div class="peli" onclick="verDetalle('Beetlejuice', 'Una pareja de jóvenes que se ahogó regresa a su casa como espíritus y buscan la ayuda de un fantasma tontorrón especialista en asustar mortales.')">
            <img src="https://megustaelcine.com/wp-content/uploads/2024/09/POSTER-Beetlejuice-768x1024.jpg" alt="Beetlejuice">
            <p>Beetlejuice</p>
        </div>

        <div class="peli" onclick="verDetalle('El Cadaver de la novia', 'En este cuento de Tim Burton, Víctor está a punto de casarse con su prometida, pero un accidente lo lleva al submundo con una novia cadáver que lo quiere para ella.')">
            <img src="https://m.media-amazon.com/images/M/MV5BMWJlZWQwYzctNDc0Mi00ZTE5LWFmOGMtMzU0NGQzZmFlYTcwXkEyXkFqcGc@._V1_.jpg" alt="El Cadaver de la novia">
            <p>El Cadaver de la novia</p>
        </div>

        <div class="peli" onclick="verDetalle('El libro de la vida', 'Cuenta el viaje de Manolo, un joven torero que se debate entre cumplir con las expectativas de su familia o seguir su corazón y dedicarse a su verdadera pasión: la música')">
            <img src="https://m.media-amazon.com/images/M/MV5BODM1OTRjYjktZjU5Zi00M2Y2LTgxZTctODEwMzAyZDdmNTBjXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg" alt="El libro de la vida">
            <p>El libro de la vida</p>
        </div>

        <div class="peli" onclick="verDetalle('Kingdom', 'Mientras los extraños rumores de la enfermedad del rey alarman al pueblo, el heredero al trono es su única esperanza contra la misteriosa plaga que se apodera del reino.')">
            <img src="https://m.media-amazon.com/images/M/MV5BYWQyMDQyYzItYWFhNi00YmViLTkwZTctY2M2NjEyNDJmNGQ5XkEyXkFqcGc@._V1_.jpg" alt="Kingdom">
            <p>Kingdom</p>
        </div>

        <div class="peli" onclick="verDetalle('SAW II', 'Cuando Jigsaw secuestra a ocho extraños y los encierra, el detective Eric Matthews debe atrapar al asesino antes de que cumpla su sangriento plan.')">
            <img src="https://m.media-amazon.com/images/S/pv-target-images/232ee0ab879ee9132ec41d5c97117c83b2e5d0621afd6d8213281f048d66e1ae._UR2000,3000_CLs%7C2000,3000%7C/G/bundle/BottomRightCardGradient2x3.png,/G/01/digital/video/merch/subs/benefit-id/g-l/howdyus/logos/channels-logo-white.png%7C0,0,2000,3000+0,0,2000,3000+1536,2798,377,115_kva4561e0c3acde3cf4e117d166bfae2a0_SX750_FMjpg_.jpg" alt="SAW II">
            <p>SAW II</p>
        </div>

        <div class="peli" onclick="verDetalle('The hitman's bodyguard', 'Un guardaespaldas debe asegurarse de que un testigo, que resulta ser un peligroso asesino, vive el tiempo suficiente para testificar contra un sanguinario dictador.')">
            <img src="https://m.media-amazon.com/images/M/MV5BMTc4NjAxMjU4OV5BMl5BanBnXkFtZTgwNzQyMzIwMjI@._V1_FMjpg_UX1000_.jpg" alt="The hitmans bodyguard">
            <p>The hitman's bodyguard</p>
        </div>

        <div class="peli" onclick="verDetalle('No manches frida', 'Apenas sale de prisión, un exconvicto toma un trabajo como maestro sustituto en una escuela. La misma escuela donde tiene escondido su gran botín.')">
            <img src="https://videocine.com.mx/wp-content/uploads/2016/11/NMF.jpg" alt="No manches frida">
            <p>No manches frida</p>
        </div>

    </div>

    <script>
        function filtrar() {
            let input = document.getElementById('buscador').value.toLowerCase();
            let tarjetas = document.getElementsByClassName('peli');

            for (let i = 0; i < tarjetas.length; i++) {
                let nombrePeli = tarjetas[i].innerText.toLowerCase();
                if (nombrePeli.includes(input)) {
                    tarjetas[i].style.display = "block";
                } else {
                    tarjetas[i].style.display = "none";
                }
            }
        }

        function verDetalle(titulo, descripcion) {
            alert("Título: " + titulo + "\n\nSinopsis: " + descripcion);
        }
    </script>

</body>
</html>