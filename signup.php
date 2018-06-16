<!DOCTYPE html>


<?php
    $db = new PDO("mysql:host=localhost;dbname=member_area", "root", "");
?>
    
<html>
    <head>
        <title>MusicForLife</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="script.js"></script>
    </head>
    
    <body>
        <div id="subsription">
            <form name="signup_form" onsubmit="return createProfile()">

                <!--<b>Photo: </b>
                    <input id="photo_admin" type="text" name="search" placeholder="Search..">-->

                <!-- Bouton permettant de chercher une photo dans ses dossiers
                <h3>Photo </h3>
                <input type="file" name="snap"> -->

                <h3>First name: </h3>
                <input type="text" name="first_name" placeholder="Rob">

                <h3>Last name: </h3>
                <input type="text" name="last_name" placeholder="Bourdon">
                
                <h3>Alias: </h3>
                <input type="text" name="alias" placeholder="LPDrummer">

                <h3>Mail: </h3>
                <input type="text" name="email" placeholder="cooperdrummer@music.com">
                
                <h3>Country: </h3>
                <input type="radio" name="country" value="FR">France<br>
                <input type="radio" name="country" value="US">USA<br>
                <input type="radio" name="country" value="CA">Canada<br>
                <input type="radio" name="country" value="Other">Other<br>
                
                <h3>Zip code: </h3>
                <input type="text" name="zip" placeholder="83000">

                <h3>Favorite music genre: </h3>
                <div><input type="radio" name="music_genre" value="classique">Classic, Jazz<br>
                    <input type="radio" name="music_genre" value="electro">Electro, pop, dance<br>
                    <input type="radio" name="music_genre" value="RAP">Hip-Hop, RAP, RnB, Soul<br>
                    <input type="radio" name="music_genre" value="rock">Rock, Metal<br>
                    <input type="radio" name="music_genre" value="reggae">Reggae<br>
                    <input type="radio" name="music_genre" value="autre">Country, Punk, Funk, etc.</div>
                <br>
                
                <h3>Played instruments: </h3>
                <div><input type="radio" name="played_instru" value="drums">Drums, Cajon, etc.<br>
                    <input type="radio" name="played_instru" value="guitars">Guitar, Bass, Youkoulélé, etc.<br>
                    <input type="radio" name="played_instru" value="keys">Piano<br>
                    <input type="radio" name="played_instru" value="wind_instruments">Clarinets, Saxophones, Trumpets, etc.</div>
                <br>

                <!-- Boutons d'envoi et raffraîchissement du formulaire -->
                <input type="submit" value="Sign up">
                <input type="reset" value="Reset">
            </form>
            
            <h3>Profil: </h3> <div id="profile"></div>
        </div>
    </body>
</html>