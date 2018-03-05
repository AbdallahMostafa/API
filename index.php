<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Wheather API</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <form>
            <center>
            <input type="text" name="location"/>
            <input type="submit">
            </center>
        </form>
        <?php
        
             if(!empty( $_GET['location']))
             {
                 //get location
                 $location = $_GET['location'];
                 //request    
                 $json_array  = file_get_contents("http://api.weatherbit.io/v2.0/current?city=" . $location . "&key=012449b44da44a719044d3a889584d95");
                
                 //response 
                 $json_code = json_decode($json_array,true);
                 $city = $json_code['data'][0]['city_name'];
                 $timeZone = $json_code['data'][0]['timezone'];
                 $pressrue = $json_code['data'][0]['pres'];
                 $countryCode = $json_code['data'][0]['country_code'];
                 $windSpeed = $json_code['data'][0]['wind_spd'];

                 //printing the response 
                 echo "<p> City Name: ". " ";
                 echo $city;
                 echo "</p>";
                 echo "<br>";

                 echo "<p> Time Zone:". " ";
                 echo $timeZone;
                 echo "</p>";
                 echo "<br>";

                 echo "<p> Pressure: ". " ";
                 echo $pressrue;
                 echo "</p>";
                 echo "<br>";

                 echo "<p> Country Code: ". " ";
                 echo $countryCode;
                 echo "</p>";
                 echo "<br>";

                 echo "<p> Wind Speed: ". " ";
                 echo $windSpeed;
                 echo "</p>";
                 echo "<br>";
             }
        ?>
            
    </body>
</html>