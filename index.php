<?php 
const API_URL = "https://whenisthenextmcufilm.com/api";

$ch = curl_init(API_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Desactiva la verificación SSL
$result = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error en cURL: ' . curl_error($ch);
} else {

    $data = json_decode($result, true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        echo 'Error en la decodificación JSON: ' . json_last_error_msg();
    } else {

    }
}

curl_close($ch);
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    >
</head>

<main> 
    <section>
        <img src= "<?= $data["poster_url"]; ?>" width="300" alt="La proxima Pelicula <?=$data["title"]?>" 
        style="border-radius: 16px"
        />
    </section>
    <hgroup>
        <h2><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> dias</h2>
        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
        <p>La siguiente es  <?= $data["following_production"]["title"]; ?></p>
    </hgroup>
</main>


<style>
    :root {
        color-scheme: light dark;
    }
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

    img {
        margin:0 auto;
    }

</style>