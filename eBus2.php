<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";
$phoneNumber = "";
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;
$fullNameValue = $_POST['txtName'];
$_SESSION['txtNum'] = $phoneNumber

 
?>
<!DOCTYPE html>
<html>
    <head>
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
        <title>Ebusiness 2</title>
    </head>
    <body>
        <div class="form">
            <form name="Details" method="post" action="Ebus3.php">
                <center>
                    <table cellspacing="10">
                    <tr>
                        <td><b></b></td>
                        <td><b>Enter in your details below</b></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" id="txtName" name="txtName" value="" required  /></td>
                    </tr>
                    <tr>
                        <td>Phone number</td>
                        <td><input type="text" id = "txtNum" name="txtNum" value="" required /></td>
                    </tr>
                   
                    <tr>
                        <td>PIN</td>
                        <td> <input type="password"  name="pincode" maxlength="4"  id="pin" pattern="\d{4}" inputmode="numeric" required/>
                             </td>
                    </tr>
                   
                    <tr>
                       
                        <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"  /></td>
                    </tr>
                </table>
            </center>
           
        <center>
       
       
                <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
        </center>
        </div>
        </form>

