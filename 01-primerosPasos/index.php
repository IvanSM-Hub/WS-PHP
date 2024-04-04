<style>

    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

</style>

<?php
   $name = 'Iván';
   $isDev = true;
   $age = 28;

   var_dump($name);
   var_dump($isDev);
   var_dump($age);
?>

<h1>
    <!--
    <?php echo "Mi primera App"; ?>
    <?= "Método de etiqueta echo corta"; ?>
    -->
    
    <?= 'Hola ' . $name ?>
</h1>

<!--
<?php

    if ($age>30) {
        echo $name . " tiene más de 20 años";
    } else if ($isDev) {
        echo "No eres viejo pero eres desarrollador.";
    } else {
        echo "Eres una persona joven y no eres desarrollador";
    }

?>
-->

<?php
    
?>
