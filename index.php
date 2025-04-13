<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to php</title>
    
</head>
<body>
    <?php echo "<h1>Welcome to my first website with PHP</h1>";?>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus unde ipsa quasi hic dolor ut pariatur, excepturi aliquid reiciendis quos modi aliquam dolore ducimus voluptates! Maxime natus ipsa necessitatibus possimus.</p>
    <p>My name is <?php echo "<b>Uriel</b>";?></p>
    <hr/>
    <h4>Menulis variabel di php</h4>
    <?php
        //variabel dinamis
        $nama = "Uriel"; //string
        $umur = 20; //int 
        $Laki_laki = true; //boolean
        $saldo = null; //null
        $hobi = ["Study", "Games", "Run"]; // array
        $makanan_favorit = array("Model", "Bakso", "Pempek"); //array

        //variabel statis
        const PI = 3.14;
        echo "Nlai PI =". PI;
        echo "<br/>";
        echo "Umur = $umur";
        echo "<br/>";
        //echo "Hobi 1. $hobby[0]";

        //menampilkan nilai array
        foreach($hobi as $key => $value){
            echo "hobi ($key+1) = $value <br/>";
        }

        $saldo = 1000; //dollar
        //tampilkan symbol dolar ($) menggunakan echo
        echo "Saldo = \"\$$saldo USD\"";
    ?>
</body>
</html>