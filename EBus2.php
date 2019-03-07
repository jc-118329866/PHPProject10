<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";
/*
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;

/**
 *Allocate the mobile number session variable to a text box
 */

?>

<!DOCTYPE html>
<html>
    
    <head>
        
        <title>eBusiness 2</title>
        
        <link rel="stylesheet" type="text/css" href="EBus1.css"> 
            
    </head>
    
    
    <body>
        
        
        <div class="bg">
        <div class="form">
            
            
            <form name="Details" method="post" action="EBus3.php">
                
                
                <br></br>
                <br></br>
                <br></br>
                <br></br>
                <br></br>
                <br></br>
                
                
                <center>
                    
                    
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><b>Enter your details below</b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value="" /></td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td><input type="text" id="txtNum" name="txtNum" value="" /></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="text" id="txtPassword" name="txtPassword" value="" /></td>
                        </tr>
                        <tr>
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>
                        </tr>
                        
                    </table>
                </center>
                
                <center>
                    
                    <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
                    
                    <br></br>
                    <br></br>
                    <br></br>
                     <br></br>
                    <br></br>
                    <br></br>
                     <br></br>
                    <br></br>
                    <br></br>
                    <br></br>
                   
                    
                </center>
                
        </div>
            
        </div>
        
</form>
            
    </body>
    
    
</html>