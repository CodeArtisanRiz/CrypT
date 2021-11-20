<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrypT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>



    <table class="table ">
        <thead>
            <tr>
                <th scope="col ">ID</th>
                <th scope="col ">Buy/Sell</th>
                <th scope="col ">Coin</th>
                <th scope="col ">Price</th>
                <th scope="col ">Quantity</th>
                <th scope="col ">Inr Value</th>
                <th scope="col ">Date & Time</th>
                <!-- <th scope="col ">Patient List</th> -->
                <!-- <th scope="col ">Delete</th> -->
            </tr>
        </thead>
        <tbody>
                        

<!-- PHP Query for fetching Doctor's data from database and displaying in the <table> format. -->
                        <?php
                        require_once ("./assets/php/conn.php");
                            $selectQuery = "SELECT * FROM transaction";

                            $query = mysqli_query($conn, $selectQuery);

                            $nums = mysqli_num_rows($query);

                            while($res = mysqli_fetch_assoc($query)){
                            ?>
                                <tr>
                                    <th scope="row "><?php echo $res['sl']; ?></th>
                                    <td><?php echo $res['transaction_type']; ?></td>
                                    <td><?php echo $res['coin']; ?></td>
                                    <td><?php echo $res['price']; ?></td>
                                    <td><?php echo $res['quantity']; ?></td>
                                    <td><?php echo $res['inrVal']; ?> </td>
                                    <td><?php echo $res['date_time']; ?></td>
                                    <!-- Edit Entry -->
                                    <td><a onclick="putVal(
                                    '<?php echo $res['sl']; ?>',
                                    '<?php echo $res['transaction_type']; ?>',
                                    '<?php echo $res['coin'] ?>',
                                    '<?php echo $res['price']; ?>',
                                    '<?php echo $res['quantity']; ?>',
                                    '<?php echo $res['inrVal']; ?>',
                                    '<?php echo $res['date_time']; ?>')" 
                                    href="" data-toggle="modal" class="fa fa-edit"></a></td>


                                    <td><a href="transDoc.php?doc=<?php echo $res['sl']; ?>
                                    "><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                                
<!--HyperLink for Deleting data in database through Doctor's ID (did). -->
                                    <td><a href="assets/process/docDel.php?ids=
                                    <?php echo $res['sl']?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <a  type="button"href="./transaction.php"><Button>Add</Button></a>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="assets/vendor/jQuery/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="./assets/js/app.js"></script>
</body>
</html>