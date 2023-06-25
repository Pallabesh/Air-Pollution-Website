<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arranged Data Page</title>
    <link rel="stylesheet" href="css/ad.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!-- for back sign -->
</head>
<body>
    <div class="navbar" style="height: 35px;">
        <a href="main.php" title="Home Page">
            <i class="fa fa-arrow-left" style="font-size:26px; padding: 3px;"></i>
        </a>
    </div>
    <div class="tcontent">
        <table>
            <tr>
                <td>
                    Name of City
                </td>
                <td>
                    Number of particles of CO (in ppm)
                </td>
                <td>
                    Number of particles of CO<sub>2</sub> (in ppm)
                </td>
                <td>
                    Number of particles of SO<sub>2</sub> (in ppm)
                </td>
                <td>
                    Number of particles of NO (in ppm)
                </td>
                <td>
                    Number of particles of NO<sub>2</sub> (in ppm)
                </td>
                <td>
                    Number of particles of O (in ppm)
                </td>
                <td>
                    Number of particles of Hydrocarbons (in ppm)
                </td>
                <td>
                    Number of particles of O<sub>3</sub> (in ppm)
                </td>
                <td>
                    Number of particles of Pb (in ppm)
                </td>
                <td>
                    Temperature (in Celsius)
                </td>
                <td>
                    Humidity (in %)
                </td>
            </tr>
            <?php
                #   connection part
                $server = "localhost";
                $username = "root";
                $password = "";

                $con = mysqli_connect($server, $username, $password);

                #   checking connection
                if(!$con){
                    die("Connection failed due to error: ".mysqli_connect_error());
                }
                else{
                    echo '<script type="text/javascript">';
                /*   function con(){
                        console.log("Connection established successfully  :)");
                    } */
                    echo 'con();';
                    echo '</script>';
                }
            
                // SQL query to retrieve data
                $sql = "SELECT * FROM nit.airpolution";
            
                // Execute the query
                $result = mysqli_query($con, $sql);
            
                // Check if any rows were returned
                if (mysqli_num_rows($result) > 0) {
                    // Loop through each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['City'] . "</td>";
                        echo "<td>" . $row['Particles of CO (in ppm)'] . "</td>";
                        echo "<td>" . $row['Particles of CO2 (in ppm)'] . "</td>";
                        echo "<td>" . $row['Particles of SO2 (in ppm)'] . "</td>";
                        echo "<td>" . $row['Particles of NO (in ppm)'] . "</td>";
                        echo "<td>" . $row['Particles of NO2 (in ppm)'] . "</td>";
                        echo "<td>" . $row['Particles of O (in ppm)'] . "</td>";
                        echo "<td>" . $row['Particles of Hydrocarbons (in ppm)'] . "</td>";
                        echo "<td>" . $row['Particles of O3 (in ppm)'] . "</td>";
                        echo "<td>" . $row['Particles of Pb (in ppm)'] . "</td>";
                        echo "<td>" . $row['Temperature (in Celsius)'] . "</td>";
                        echo "<td>" . $row['Humidity'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='12'>No data found</td></tr>";
                }
            
                // Close the database connection
                mysqli_close($con);
            ?>
        </table>
    </div>
    <script>
        function con() {
           console.log("Connection established successfully  :)");
        }
    </script>
</body>
</html>


<!-- Below is the code from ChatGPT -->
<!-- 
    <!DOCTYPE html>
<html>
<head>
    <title>Data from MySQL</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>City</th>
            <th>Pollution Level</th>
        </tr>

        <?php
        // Database connection
        $conn = mysqli_connect("localhost", "username", "password", "nit");

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        
        ?>
    </table>
</body>
</html>
 -->