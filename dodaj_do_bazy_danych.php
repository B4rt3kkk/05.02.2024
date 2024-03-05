<?php 
include_once("polonczenie.php");

    if(isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['email'])){

    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $email = $_POST['email'];

    echo "$imie, $nazwisko, $email";
    $dodaj_do_bazy_danych = "INSERT INTO arkusz_kalkulacyjny_bez_tytu__u___arkusz1(imie,nazwisko,email) values('$imie','$nazwisko','$email');";

        if($polonczenie->exec($dodaj_do_bazy_danych)){
            echo("Dodano do bazy danych...");
            header("Refresh:3; url=index.php");
        }
        else{
            echo("Error bratku w zapytaniu do bazzzy");
            header("Refresh:3; url=index.php");

        }
      header("Location:index.php");
    }
    else{
        echo "Panie co pan klikosz ???";
        header("Refresh:3; url=index.php");
    }

?>