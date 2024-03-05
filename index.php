<!DOCTYPE html>
<html lang="pl">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PDO - CHOPIE</title>

        <style type='text/css'>
            legend{
                display: flex;
                justify-content: center;
            }

            .table_head{
                font-weight: bold;
            }
            td{
                padding: 10px;
            }
            .formularz{
                width: 600px;
                margin: auto;
            }
            input[name='imie'],input[name='nazwisko'],input[name='email']{
                width: 400px;
                height: 25px;
                margin: 25px;
                margin-left: 15%;
                text-align: center;            
            }
            input[name='submit']{
                float: right;
                background-color: orange;
                width: 80px;
            }
            .box{
                width: 600px;
            }


        </style>

    </head>

    <body>

    <div class="formularz">
        <fieldest>
                <legend>Dodaj do bazy danych</legend>
                    <form action="dodaj_do_bazy_danych.php" method="POST">
                        <input type="text" name="imie" placeholder="Podaj imie" required />
                        <input type="text" name="nazwisko" placeholder="Podaj nazwisko" required />
                        <input type="email" name="email" placeholder="Podaj email" required />
                        <input type="submit" name="submit" placeholder="Dodaj" required />

                    </form>
            </fieldest>
        </div>

    <?php include_once("polonczenie.php") ?>
        <div class="box">
                <?php 
                $zapytanie = "SELECT IMIE,NAZWISKO,EMAIL FROM  arkusz_kalkulacyjny_bez_tytu__u___arkusz1";
                echo "<table border=1>";
                echo "<tr class='table_head'><td>IMIE</td><td>NAZWISKO</td><td>EMAIL</td></tr>";
                foreach($polonczenie->query($zapytanie) as $wiersz){
                echo "<tr><td>".$wiersz['IMIE']."</td><td>".$wiersz['NAZWISKO']."</td><td>".$wiersz['EMAIL']."</td></tr>";
                }
                echo"</table>";
                ?>
        </div>

    <?php $polonczenie=null ?>
    
    </body>

</html>


