<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE html>
<html lang="en" xmins="http.//www.w3.org/1999/xhtml">
    <head>
        <style>
            body {
  background-color: lightblue;
}
        </style>
        <meta charset="utf-8" />
        <title>Ebusiness 1</title>
        <link rel="stylesheet" type="text/css" href="Ebus1.css">
    </head>
        <body>
        <div class="form">
            <form name="intCalc" method="post" action="Ebus2.php">
        <h1 align="center">Shop Calculator</h1>  
        <hr/>
        <center>
            <table cellspacing="10">
                <tr>
                    <td><b>Select a Consulting Service</b></td>
                </tr>
                <tr>
                    <td>Blockchain</td>
                    <td><input type="radio" id="Blockchain" name="rdoGroup" value="1000" /></td>
                </tr>
                <tr>
                    <td>Autonomous Things</td>
                    <td><input type="radio" id="Autonomous" name="rdoGroup" value="2000" /></td>
                </tr>
                <tr>
                    <td>Immersive Experience</td>
                    <td><input type="radio" id="Immersive" name="rdoGroup" value="3000" /></td>
                </tr>
            </table>
        </center>
        <br/>
            <center>
                 <table cellspacing="10">
            <tr>
                    <td><b></b></td>
                    <td><b>Amount</b></td>
            </tr>
                <tr>
                    <td>Sub Total</td>
                    <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
                </tr>
                <tr>
                    <td>Discount @ 30%</td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
                </tr>
                <tr>
                    <td>+ VAT @ 40%</td>
                    <td><input type="text" id="txtVAT" name="txtVAT" readonly /></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly/></td>
                </tr>
            </table>
        </center>
      
        <br />
            <center>
            <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount"/>
            <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>
            <input type="submit" name="btnProceed" id="btnProceed" onclick="" value="Proceed"/>
        </center>
            </form>
        </div>
      
            <script type="text/javascript">
                function calcSub(){
                    //Assigning variables to the values
                    var subAmount = parseFloat(document.getElementById('txtSubTot').value);
                    var Blockchain = parseFloat(document.getElementById('Blockchain').value);
                    var Autonomous = parseFloat(document.getElementById('Autonomous').value);
                    var Immersive = parseFloat(document.getElementById('Immersive').value);
                  
                    // if radio buttons are clicked, values are assigned
                    if (document.getElementById('Blockchain').checked) {
                        document.intCalc.txtSubTot.value = Blockchain;
                        subAmount = Blockchain;
                        calculation(subAmount);
                      
                    }
                   else if (document.getElementById('Autonomous').checked) {
                        document.intCalc.txtSubTot.value = Autonomous;
                        subAmount = Autonomous;
                        calculation(subAmount);
                      
                    }
                    else if (document.getElementById('Immersive').checked) {
                        document.intCalc.txtSubTot.value = Immersive;
                        subAmount = Immersive;
                        calculation(subAmount);
                    }
                }
              
                //function for calculationg the values//
                function calculation(parmSubTotal) {
                    var subTotal = parseFloat(parmSubTotal);
                    var discCalc = parseFloat(subTotal * .30);
                    var vatCalc= parseFloat(subTotal * .40);  
                    var total = parseFloat(subTotal - discCalc + vatCalc);
                  
                    //Inserting them into the correct fields//
                    document.intCalc.txtDisc.value = discCalc;
                    document.intCalc.txtVAT.value = vatCalc;
                    document.intCalc.txtTotal.value = total;
                }
              
                function AmountClear() {
                    document.getElementById("txtSubTot").value="";
                    document.getElementById("txtDisc").value="";
                    document.getElementById("txtVAT").value="";
                    document.getElementById("txtTotal").value="";
                }
                  
            </script>
    </body>
    </html>

