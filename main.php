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
    <script src="script/script.js"></script>
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
                <li class="midnavli"><a href="Documentation.pdf" class="midnava">Documentation</a></li>
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
                <td style="font-size: 15px; color: rgb(108, 50, 124);">Weather Report by AccuWeather<br><br></td>
                <td></td>
                
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
                <td style="text-align: right; font-size: 15px; color: rgb(108, 50, 124);"><br>
                <!-- Last Updated on 18-06-2023, 13:22 -->
                <script>
                    let mydate = new Date();
                   /*  console.log(mydate.getTime()); */
                    console.log("Last Updated on:");
                    console.log("Todays date is:", mydate.getDate(),"-",mydate.getMonth(),"-",mydate.getFullYear());
                    console.log("At: ",mydate.getHours(),":",mydate.getMinutes(),":",mydate.getSeconds(),":",mydate.getMilliseconds())
                    month=mydate.getMonth()
                    if(month==1){
                        m="January";
                    }
                    else if(month==2){
                        m="February";
                    }
                    else if(month==3){
                        m="March";
                    }
                    else if(month==4){
                        m="April";
                    }
                    else if(month==5){
                        m="May";
                    }
                    else if(month==6){
                        m="June";
                    }
                    else if(month==7){
                        m="July";
                    }
                    else if(month==8){
                        m="August";
                    }
                    else if(month==9){
                        m="September";
                    }
                    else if(month==10){
                        m="October";
                    }
                    else if(month==11){
                        m="November";
                    }
                    else{
                        m="December";
                    }
                    document.write("Last Updated on: ", mydate.getDate(),"th ",m,", ",mydate.getFullYear());
                    document.write("\nat: ",mydate.getHours(),":",mydate.getMinutes(),":",mydate.getSeconds());
                </script>
            </td>
            </tr>    
        </table>
        </center>
    </div>
    <script src="script/fetch.js"></script>
</body>
</html>