<?php
    /* connection */
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);
    if(!$con){
        die("Not connected due to the error: ".mysqli_connect_error());
    }
    /* selection of data */
    $sql = "SELECT * FROM `airpolution`"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air pollution site</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;400&display=swap" rel="stylesheet">
</head>
<body>
    <header class="navbar">
        <div class="leftnav">
            <!-- Navigation bar left -->
            <a href="https://www.accuweather.com/" class="leftnava" title="visit accuweather.com">
                Powered by <img src="img/logo.png" height=15px width=15px>AccuWeather
            </a>
        </div>
        <div class="midnav">
            <!-- Navigation bar mid -->
            <ul class="midnavul">
                <li class="midnavli"><a href="service.html" class="midnava">Graphs & Chats</a></li>
                <li class="midnavli"><a href="arrangedData.php" class="midnava">Arranged Data</a></li>
                <li class="midnavli"><a href="service.html" class="midnava">Documentation</a></li>
            </ul>
        </div>
        <div class="rightnav">
            <!-- Navigation bar right -->
            <a href="service.html" title="chat with bot" class="rightnava">
                Chat Box
            </a>
        </div>
    </header><br>
    <div class="wreport">
        <center>
        <table class="wreport-table">
            <tr>
                <td colspan="3" style="font-size: 15px;">Weather Report by AccuWeather</td>
            </tr>
            <tr class="wreport-trow">
                <td class="wreport-tcolumn1" style="background-color: rgb(224, 195, 232); height: 160px;"><img src="img/sun.png" alt="sun" width="200px" height="200px"></td>
                <td class="wreport-tcolumn2" style="background-color: rgb(218, 170, 232); height: 160px;">Temperature<br>41<sup>o</sup>C</td>
                <td class="wreport-tcolumn3" style="background-color: rgb(224, 195, 232); height: 160px;">Humidity<br>35%</td>
            </tr>
            <tr class="wreport-trow">
                <td class="wreport-tcolumn1" style="background-color: rgb(218, 170, 232);">Feels like:<br>Sunny, 43<sup>o</sup>C</td>
                <td class="wreport-tcolumn2" style="background-color: rgb(224, 195, 232);">Wind Speed:<br>WNW 21 km/hr</td>
                <td class="wreport-tcolumn3" style="background-color: rgb(218, 170, 232);">Air Quality:<br>Fair</td>
            </tr>
            <tr class="wreport-trow">
                <td class="wreport-tcolumn1" style="background-color: rgb(224, 195, 232);">Country:<br>India</td>
                <td class="wreport-tcolumn2" style="background-color: rgb(218, 170, 232);">State:<br>Sundergarh</td>
                <td class="wreport-tcolumn3" style="background-color: rgb(224, 195, 232);">City:<br>Rourkela</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="text-align: right; font-size: 15px;">Last Updated on 18-06-2023, 13:22</td>
            </tr>    
        </table>
        </center>
    </div>
    <script src="script/script.js"></script>
</body>
</html>