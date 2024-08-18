<?php 
    $name = "Miguel";
    $isDev = true;
    $age = 70;
    $output = "hola  $name ";
    $newAge = '102';
    $output .= "con una edad de  $age  😘";
    define ('LOGO_URL', 'new-php-logo.svg');    
    const NOMBRE = 'Miguel';
    
    $person = [
        'name' => "miguelardo",
        'age' => 20,
        "isDev" => true,
        "apellido" => 'hernandez',
        "lenguajes" => ['php', 'js', 'css', 'html'],
    ];

    $person['lenguajes'][] = 'python';


    $outputAge = match (true) {
        $age < 2 => "bebe, $name 👦",
        $age <20 => "'joven', $name 👦",
        $age <40 => "'adulto', $name 👦",
        $age < 60=> "'adulto mayor', $name 👦",
        default => "'viejo', $name 👦",
    };

    $besLenguages = array('php', 'js', 'css', 'html');
    $besLenguages[3] = 'python';
    $bestNumbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    ?>


<h1>
    <?= $person ?>
</h1>

<ul>
    <?php foreach($person as $personita): ?>
        <li><?= $personita ?></li>
    <?php endforeach ?>
</ul>
<h2><?= $outputAge ?></h2>


<img src="<?= LOGO_URL ?>" alt="PHP Logo" width="200">
<h1>
    <?= $output ?>
</h1>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

</style>