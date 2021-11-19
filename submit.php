<?php
require_once ("./assets/php/conn.php");
if(isset($_POST['submit'])){


    $transaction = $_POST['transaction'];
    $coin = $_POST['coin'];
    $price = $_POST['b_price'];
    $quantity = $_POST['b_quantity'];
    $inrVal = $_POST['b_inr_value'];
    $dateTime = $_POST['datetime'];

    print $transaction."<br>";
    print $coin."<br>";
    print $price."<br>";
    print $quantity."<br>";
    print $inrVal."<br>";
    print $dateTime;

    if($transaction=="BUY"){
        $inrVal = $inrVal * 1;
        $quantity = $quantity * 1;
        print $price;
    } else if($transaction=="SELL"){
        $inrVal = $inrVal * 1;
        $quantity = $quantity * 1;
    }

    if(empty($transaction || $coin || $price || $quantity || $inrVal || $date_time))
        {
            echo '<script>alert("Please fill up the empty fields..");</script>' ;
            // header("location:../../doc.php");
        }
        else{

            $insertQuery = "INSERT INTO transaction(transaction_type,coin,price,quantity,inrVal,date_time)VALUES('$transaction','$coin','$price','$quantity','$inrVal','$dateTime')";
            if(mysqli_query($conn, $insertQuery))
            {
                // header("location:../../doc.php");
                echo "DATA INSERTED";
            }
            else {
                mysqli_error();
            }
        }

}


?>