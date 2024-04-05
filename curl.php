<?php
const API_URL = "https://whenisthenextmcufilm.com/api";

$ch = curl_init(API_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// $result = file_get_contents(API_URL); // only for API GET

$result = curl_exec($ch);
$data = json_decode($result, true);

curl_close($ch);
?>

<head>
    <meta charset="UTF-8">
    <title>The next Marvel movie</title>
    <meta name="description" content="The next Marvel movie" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>

<main>
    <pre style="font-size: 8px; overflow: scroll; height: 250px;">
        <?php var_dump($data); ?>
    </pre>
    <section>
        <img src="<?= $data["poster_url"]; ?>" width="200" alt="<?php $data["title"]; ?> Poster">
    </section>
    <hgroup>
        <p>Release date: <?= $data["days_until"]; ?> days</p>
        <p>Release date: <?= $data["release_date"]; ?></p>
    </hgroup>
</main>