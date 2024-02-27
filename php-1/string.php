<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>

<body>
    <h1>Berlatih String PHP</h1>
    <?php   
        echo "<h3> Soal No 1</h3>";
        /* 
            SOAL NO 1
            Tunjukan dengan menggunakan echo berapa panjang dari string yang diberikan berikut! Tunjukkan juga jumlah kata di dalam kalimat tersebut! 

            Contoh: 
            $string = "PHP is never old";
            Output:
            Panjang string: 16, 
            Jumlah kata: 4 
        */

        $first_sentence = "Hello PHP!" ; // Panjang string 10, jumlah kata: 2
        $second_sentence = "I'm ready for the challenges"; // Panjang string: 28,  jumlah kata: 5

        function countLength($string){
            return strlen($string);
        }

        function countWords($string){
            $words = explode(" ", $string);
            return count($words);
        }

        echo($first_sentence . "<br>" . "Output: <br>" . "Panjang string: " . countLength($first_sentence) . ", Jumlah kata: " . countWords($first_sentence) . "<br>");
        echo "<br>";
        echo($second_sentence . "<br>" . "Output: <br>" . "Panjang string: " . countLength($second_sentence) . ", Jumlah kata: " . countWords($second_sentence) . "<br>");
        
        echo "<h3> Soal No 2</h3>";
        /* 
            SOAL NO 2
            Mengambil kata pada string dan karakter-karakter yang ada di dalamnya. 
        */
        $string2 = "I love PHP";
        
        echo "<label>String: </label> \"$string2\" <br>";
        echo "Kata pertama: " . substr($string2, 0, 1) . "<br>" ; 
        // Lanjutkan di bawah ini
        echo "Kata kedua: " . substr($string2, 2, 4) . "<br>" ;
        echo "Kata Ketiga: " . substr($string2, 7, 3) . "<br>";

        echo "<h3> Soal No 3 </h3>";
        /*
            SOAL NO 3
            Mengubah karakter atau kata yang ada di dalam sebuah string.
        */
        $string3 = "PHP is old but sexy!";
        echo "String: \"$string3\" <br>"; 
        // OUTPUT : "PHP is old but awesome"
        echo "Output: \"" . str_replace("sexy", "awesome", $string3) . "\"";

    ?>
</body>

</html>