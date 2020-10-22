<!DOCTYPE html>
<html lang="en">
    
    <title>PHP Project 1 | Array Table</title>
    
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheet/stylesheet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <!-- header -->
    <?php include ('include/header.php') ?>
    

    <body>
    <!-- main section -->
    <table border="1" style="text-align: center; margin-left:42%; margin-top:3%; margin-bottom:3%">
        <!--in line styling, couldn't work with an external file -->
        <tr><th style="background-color: #f44336; color:white">Country</th><th style="background-color: #f44336; color:white">Capital</th></tr>
        <?php
            $country = array ("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
            //alphabetical order of the countries
            ksort($country);
            foreach($country as $x => $x_value) {
                echo "<tr> <td>" . $x . "<td>" . $x_value . "</td></tr> ";
            }
        ?>
    </table>

    <!-- footer -->
    <?php include ('include/footer.php') ?>
        </body>
</html>
