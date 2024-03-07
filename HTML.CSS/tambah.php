<html>

<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Tambah Data</title>
    </head>
    <body>
        <form class=""action="tambah.php" method="post">
            <label for="">Nama</label>
            <input type="text" name="name" value="">
            <label for="">Email</label>
            <input type="email" name="email" value="">
            <label for="">Mobile</label>
            <input type="text" name="phone" value="">

            <input type="submit" name="submit" value="Submit Data">
        </form>
        <?php

        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile = $_POST['phone'];

            include_once("config.php");

            $result = mysqli_query($mysqli,"INSERT INTO user(name,email,mobile)
            VALUES('$name','$email','$mobile')");

            echo "User added successfully.";
        }
        ?>
     
    