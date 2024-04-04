<?php 

const API_URL = "https://whenisthenextmcufilm.com/api";

#Primero inicializaremos una nueva sesión de cURL; ch = cURL handle
$ch = curl_init(API_URL);

//indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

/*
Ejecutar la petición y guardamos el resultado.
*/
$result = curl_exec($ch);

// Una alternativa sería utilizar file_get_contents
// $result = file_get_contents( API_URL ); // Si solo quieres hacer un GET de una API
$data = json_decode($result, true);
curl_close($ch);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Próxima película de Marvel</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    />
    <style>
        body {
            display: grid;
            place-content: center;
        }
        section {
            display: flex;
            justify-content: center;
            text-align: center;
        }
        hgroup {
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }
    </style>
</head>
<body>
    <main>
        <!-- <pre>
            <?php var_dump($data); ?>
        </pre> -->
        <section>
            <img src="<?= $data["poster_url"]?>" width="300" alt="Poster de <?= $data["title"] ?>"
                style="border-radius:16px;" />
        </section>

        <hgroup>
            <h3><?= $data["title"] ?> se estrena en <?= $data["days_until"] ?> días</h3>
            <p>Fecha de estreno <?= $data["release_date"] ?>.</p>
            <p>La siguiente es: <?= $data["following_production"]["title"] ?>, el <?= $data["following_production"]["release_date"]?>.</p>
        </hgroup>

    </main>
</body>
</html>