<?php 
    include "../dbcon.php";
    include "standings.php";
?>


<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>World Cup 2019</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <img class="logo" src="../Images/logo.png" alt="logo">
            <nav>
                <ul class="nav__links">
                    <li><a href="../Home/index.php">Home</a></li>
                    <li><a href="../Teams/index.php">Teams</a></li>
                    <li><a href="../Fixtures/index.php">Fixtures</a></li>
                    <li><a href="index.php">Standings</a></li>
                    <li><a href="../Admin/index.php">Admin</a></li>
                </ul>
            </nav>
        </header>

        <section id="heading">
            <h6> THURSDAY 30 MAY - SUNDAY 14 JULY 2019 </h6>
            <h1> CWC19 STANDINGS </h1>
        </section>

        <section id="standings">
            <table>
                <tr>
                    <th></th>
                    <th>Team Name</th>
                    <th>Played</th>
                    <th>Won</th>
                    <th>Lost</th>
                    <th>Tied</th>
                    <th>Points</th>
                </tr>
                <?php standings(); ?>
            </table>
        </section>
            
    </body>
</html>

