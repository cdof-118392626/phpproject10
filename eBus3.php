<!DOCTYPE html>
<html>
    <head>
        <title>Ebusiness3</title>
        <style>
            h1 { color: red;
                    
                }
body {
        background-color: lightblue;
    }      

* {
  box-sizing: border-box;
}
        </style>
    <h1> Purchase Receipt</h1>
    </head>
    <body>
        <!--  //Starting the session to get the the session variable from last page-->
        <?php
        
        session_start();
        $totalValue = $_POST['txtTotal'];
        
        echo  "The total value is: ".$totalValue.".";
        
        echo "<br>";
        
        $fullNameValue = $_POST['txtName'];
        
        echo "Name: ".$fullNameValue.".";
        
        echo "<br>";
        
        $phoneNumber = $_POST['txtNum'];
        
        echo "Phone Number: ".$phoneNumber.".";
        ?>
    </body> 
</html>




