<?php
include 'curl.php';
include 'globals.php';

$name = "Danny";
$isDev = true;
$age = 20;
$newAge = (bool) 40;
$isOld = $age > 60;
$output = "Hola " . $name;
$outputAge = $isOld
    ? 'You are old'
    : 'You are young';
$outputAge2 = match (true) {
    $age < 2 => 'You are a baby.',
    $age < 10 => 'You are a kid.',
    $age < 18 => 'You are an teen.',
    default => 'You are an adult.',
};
$bestLanguages = ["PHP", "JavaScript", "Python"];
$bestLanguages[2] = "Java";
$bestLanguages[] = "TypeScript";

var_dump($name);
echo gettype($name);

const NOMBRE = 'Miguel';
?>

<?php if ($isOld) : ?>
    <h2>You are old.</h2>
<?php elseif ($isDev) : ?>
    <h2>You are not old, but you are a dev.</h2>
<?php else : ?>
    <h2>You are young.</h2>
<?php endif; ?>

<h2><?= $outputAge2 ?></h2>
<h2><?= $output ?></h2>
<h3>The best languages are:</h3>
<ul>
    <?php foreach ($bestLanguages as $key => $language) : ?>
        <li><?= $key . " " . $language ?></li>
    <?php endforeach; ?>
</ul>
<img class="logo" src="<?= LOGO_URL ?>" alt="PHP logo">

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
        text-align: center;
    }

    .logo {
        width: 60px;
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
        align-items: center;
    }

    img {
        margin: 0 auto;
    }
</style>