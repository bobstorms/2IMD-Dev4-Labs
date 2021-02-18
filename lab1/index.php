<?php

    define("DISTANCE", 5000);

    $checkins = [
        [
            "username" => "Jesse",
            "profile_picture" => "https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260",
            "place" => "Assembly 3.0",
            "location" => "San Francisco, CA",
            "message" => "Le work.",
            "picture" => "",
            "distance" => 3452
        ],
        [
            "username" => "Michal",
            "profile_picture" => "https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500  ",
            "place" => "Voxer",
            "location" => "San Francisco, CA",
            "message" => "",
            "picture" => "",
            "distance" => 5431
        ],
        [
            "username" => "Petr",
            "profile_picture" => "https://images.pexels.com/photos/1680175/pexels-photo-1680175.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260",
            "place" => "ROXY/NoD",
            "location" => "Prague, Czech Republic",
            "message" => "",
            "picture" => "",
            "distance" => 1546
        ],
        [
            "username" => "Jaroslav",
            "profile_picture" => "https://images.pexels.com/photos/1681010/pexels-photo-1681010.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260",
            "place" => "Brno hlavni nadrazi",
            "location" => "Brno, Czech Republic",
            "message" => "",
            "picture" => "https://images.pexels.com/photos/6638874/pexels-photo-6638874.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500",
            "distance" => 4753
        ],
        [
            "username" => "Jesse",
            "profile_picture" => "https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260",
            "place" => "The Mill",
            "location" => "San Francisco, CA",
            "message" => "",
            "picture" => "",
            "distance" => 5154
        ],
        [
            "username" => "Charlie",
            "profile_picture" => "https://images.pexels.com/photos/1858175/pexels-photo-1858175.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260",
            "place" => "Koning Boudewijnpark",
            "location" => "Brussels, Belgium",
            "message" => "Had a nice walk.",
            "picture" => "",
            "distance" => 2565
        ],
        [
            "username" => "Emma",
            "profile_picture" => "https://images.pexels.com/photos/3094215/pexels-photo-3094215.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260",
            "place" => "Havenhuis Antwerpen",
            "location" => "Antwerp, Belgium",
            "message" => "",
            "picture" => "https://images.pexels.com/photos/220760/pexels-photo-220760.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500",
            "distance" => 1567
        ],
        [
            "username" => "Kyle",
            "profile_picture" => "https://images.pexels.com/photos/842980/pexels-photo-842980.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260",
            "place" => "Musée du Louvre",
            "location" => "Paris, France",
            "message" => "",
            "picture" => "https://images.pexels.com/photos/2356/france-landmark-night-paris.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260",
            "distance" => 4563
        ],
        [
            "username" => "Jonas",
            "profile_picture" => "https://images.pexels.com/photos/2923156/pexels-photo-2923156.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260",
            "place" => "AB Ancienne Belgique",
            "location" => "Brussels, Belgium",
            "message" => "Nice concert!",
            "picture" => "",
            "distance" => 667
        ]
    ];
    /*
        todo1: maak een multidimensionale array met daarin alle checkins zoals te zien op screenshots/screenshot1.png
            - denk na over welke data er in je array moet zitten
            - soms voeg je een foto toe, soms niet (tip: gebruik voor je foto's pexels.com of een andere gratis leverancier)
            - op screenshots/screenshot2.jpeg kan je zien wat bedoelt wordt met een checkin met foto
            - werk met isset() of empty() om de foto soms wel en soms niet af te drukken


        todo2: werk met een constant DISTANCE waarmee je kan instellen wat de maximale afstand is om checkins voor te tonen
            - je zal in je array een extra stukje data moeten bijvoegen om deze afstand mee te betrekken in je checkins
    */

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">

    <title>Swarm App</title>
</head>
<body>

    <?php include_once("header.inc.php");?>

    <main>

        <?php // todo3 : lus over je checkins en print deze visueel af zoals op de screenshots/screenshot1.png
        
            foreach($checkins as $checkin) {
                echo "<div class=\"checkin\">";
                    echo "<div class=\"checkin_left\">";
                        echo "<div class=\"profile_picture\">";
                            echo "<img class=\"profile_picture\" src=\"" . $checkin["profile_picture"] . "\"/>";
                        echo "</div>";
                    echo "</div>";
                    
                    echo "<div class=\"checkin_right\">";
                        echo "<p class=\"username\">" . $checkin["username"] . "</p>";
                        echo "<p class=\"place\">" . $checkin["place"] . "</p>";
                        echo "<p class=\"location\">" . $checkin["location"] . "</p>";
                        
                        if(!empty($checkin["message"])) {
                            echo "<p class=\"message\">" . $checkin["message"] . "</p>";
                        }

                        if(!empty($checkin["picture"])) {
                            echo "<img class=\"checkin_picture\" src=\"" . $checkin["picture"] . "\"/>";
                        }
                        
                    echo "</div>";
                echo "</div>";
            }

        ?>

    </main>

    <?php // todo4 : zorg dat je header en footer opgehaald wordt vanuit footer.inc.php en header.inc.php zodat je deze kan hergebruiken op meerdere schermen?>
    <?php include_once("footer.inc.php");?> 
</body>
</html>