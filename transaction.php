<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>CrypT</title>
</head>
<body>
    <section id="main">
        <div>
            <form action="./submit.php" method="POST">
                <input type="radio" name="transaction" id="buy" value="BUY">
                <label for="buy">BUY</label>
                <input type="radio" name="transaction" id="sell" value="SELL">
                <label for="sell">SELL</label>
                <select name="coin" id="coin">
                    <option disabled selected value="">Select</option>
                    <option value="BTC">BITCOIN</option>
                    <option value="DOGE">DOGECOIN</option>
                    <option value="FTM">FANTOM</option>
                    <option value="MATIC">POLYGON</option>
                    <option value="MANA">DECENTRALAND</option>
                    <option value="SHIB">SHIBA INU</option>
                    <option value="SAND">THE SANDBOX</option>
                    <option value="LRC">LOOPRING</option>
                    <option value="ADA">CARDANO</option>
                </select>
                <input type="int" name="b_price" id="b_price" placeholder="Bought Price (INR)" onclick="bPrice()">
                <input type="int" name="b_quantity" id="b_quantity" placeholder="Quantity" onclick="bQuantity()">
                <input type="int" name="b_inr_value" id="b_inr_value" placeholder="Amount" onclick="bInrValue()">
                <input type="datetime-local" name="datetime"/>
                <input type="submit" name="submit">
                
            </form>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="assets/vendor/jQuery/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="./assets/js/app.js"></script>

    <script>
        
    </script>
</body>
</html>