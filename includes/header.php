<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php echo $thisPage ?></title>
    <!--
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="css/styles.css">
     
</head>
<body>        
      
        <?php 
           // include('controller/functions.php');


            if(($thisPage == "Home") || ($thisPage == "Login") || ($thisPage == "Patient Registration")  ) {
                include('includes/homenav.php');
                include('controller/functions.php');
            } else if( ($thisPage == "About") || ($thisPage == "Contact") ){
                include('controller/functions.php');
                
                if(!isLoggedIn()) {
                    include('includes/homenav.php');
                } else {
                    include('includes/nav.php');
                }
            }else if( (($thisPage == "Admin Dashboard") || ($thisPage == "Dashboard") || ($thisPage == "Doctor Registration") || ($thisPage == "Doctor Details")) ) {
                include('includes/nav.php');
            } else{
                include('controller/functions.php');
                include('includes/nav.php');
            }
        ?>


        <div class="container-fluid">

    
        
    