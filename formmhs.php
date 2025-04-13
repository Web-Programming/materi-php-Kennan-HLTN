<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>SELF PAGE</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method = "POST">
        mahasiswa : <input type="text" name="nama"/><br />
        npm : <input type="text" name="npm"/><br />
        email : <input type="text" name="email"/><br />

        <input type="submit" value="add"/>
    </form>
    <?php
        if(isset($_POST['nama']) && isset($_POST['npm']) && isset($_POST['email'])){
            echo "Nama : <b>". $_POST["nama"] ."</b><br/>";
            echo "NPM : <b>". $_POST["npm"] ."</b><br/>";
            echo "Email : <b>". $_POST["email"] ."</b><br/>";

        }
    ?>
    <h2> other page</h2>
    <form action="create.php" method="POST">
        mahasiswa:
        <input type="text" name="nama"/><br />
        <input type="submit" value="add"/>
    </form>
</body>
</html>