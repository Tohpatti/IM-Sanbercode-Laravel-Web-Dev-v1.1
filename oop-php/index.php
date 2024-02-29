<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        require 'animal.php';
        $sheep = new Animal("shaun");

        echo "Name: " . $sheep->get_name(); // "shaun"
        echo "<br>";
        echo "Legs: " . $sheep->get_legs(); //4
        echo "<br>";
        echo "Cold-blooded: " . $sheep->get_cold_blooded(); // no
        echo "<br><br>";

        require 'frog.php';
        $kodok = new Frog("buduk");
        
        echo "Name: " . $kodok->get_name(); // "buduk"
        echo "<br>";
        echo "Legs: " . $kodok->get_legs(); //4
        echo "<br>";
        echo "Cold-blooded: " . $kodok->get_cold_blooded(); // no
        echo "<br>";
        echo "Jump:  " . $kodok->jump(); // "hop hop"
        echo "<br><br>";

        require 'ape.php';
        $sungokong = new Ape("kera sakti");

        echo "Name: " . $sungokong->get_name(); // "kera sakti"
        echo "<br>";
        echo "Legs: " . $sungokong->get_legs(); //2
        echo "<br>";
        echo "Cold-blooded: " . $sungokong->get_cold_blooded(); // no
        echo "<br>";
        echo "Yell:  " . $sungokong->yell(); // "Auooo"
        

    ?>
</body>
</html>