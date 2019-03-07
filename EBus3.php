<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
         <link rel="stylesheet" href="EBus1.css" type="text/css" />
    </head>
    <body>
        <h1 style="text-align: center">Receipt</h1>
        <div class="bg">
            <div class="txt">
        <!-- // Starting the session to get the session variable from last page-->
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <?php
        
        session_start();
        $totalValue2 = $_POST['txtTotal'];
        $fullNameValue = $_POST['txtName'];
        echo " The name is : ".$fullNameValue.".";
        echo "<br></br>";
        echo "The total value is : ".$totalValue2.".";
        ?>
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
        
            </div>
        </div>
   </body>
        
</html>