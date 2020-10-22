<!DOCTYPE html>
<html lang="en">
    
    <title>PHP Project 1 | Form</title>
    
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheet/stylesheet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">    

    <!-- header -->
    <?php include ('include/header.php') ?>

    <body>
    <!-- main section -->
        <h1 style="margin-left: 3%" >Enter a country name member of the EU and check its capital:</h1>
            <?php
            $country = array ("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw"); 
            ?>
            <br>
            <form style="margin-left: 3%;" method="post" action="page3.php">
                Country: <input type="text" name="usercnt">
                <br><br>
                <input type="submit">
            </form>
            <br>
            <?php
			$temValor = 0;
			if( isset($_POST['usercnt']) )
			{
				$trycnt = $_POST['usercnt'];
				
				foreach($country as $key => $value)
				{
                    //to ignore if the user types everything on uppercase or smallcase and match with the array
					if(strtoupper($key) == strtoupper($trycnt))
					{
                        //if matches with the array
						echo " The Capital of " . $trycnt . " is: <b>'" . $value . "'</b>.<br/>";
						$temValor = 1;
					}
                }
                //if does not match with the array
				if($temValor == 0)
				{
					echo "<b>'" . $trycnt . "'</b> is not an EU country :( .<br/>";
				}
				
            }
            ?>
            <br>
    <!-- footer -->
    <?php include ('include/footer.php') ?>
    </body>
</html>