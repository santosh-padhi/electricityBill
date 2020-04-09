<?php
include "includes/header.php";
?>

<div class="container">
    <nav aria-label="breadcrumb col-6"style="padding: 10px">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Invoice</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-header">
            <strong>Invoice Id :</strong>
            #<?php echo $six_digit_random_number = mt_rand(100000, 999999); ?>

            <span class="float-right"> <strong>Invoice Date : </strong><?php echo date("Y/m/d"); ?> </span>

        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h6 class="mb-3">From:</h6>
                    <div>
                        <strong>Lovely Professional University</strong>
                    </div>
                    <div>Block No : 32</div>
                    <div>Division of Electricity</div>
                    <div>Email: billinfo@lpu.in</div>
                    <div>Phone: +91 91234 56780</div>
                </div>

                <?php


                $query = "SELECT * FROM bill order by id desc limit 1 ";
                $query_bill = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($query_bill)) {

                    $customer_name = $row['customer_name'];
                    $connection_no = $row['connection_no'];
                    $total_units = $row['total_units'];
                    $total_amount = $row['total_amount'];

                }
                ?>

                <div class="col-sm-6">
                    <h6 class="mb-3">To:</h6>
                    <div>
                        <strong><?php echo $customer_name;?></strong>
                    </div>
                    <div>Lovely Professional University,</div>
                    <div>Phagwara, Punjab</div>
                    <div>Email: <?php echo $customer_name?>@gmail.com</div>
                    <div>Phone: +91 123 456 789</div>
                </div>


            </div>

            <div class="table-responsive-sm">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th class="center">#</th>
                        <th>Customer Name</th>
                        <th>Connection Number</th>

                        <th class="right">Total Unit</th>
                        <th class="center">Total Cost</th>
                        <th class="right">Due Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>

                        <td class="center">1</td>
                        <td class="left strong"><?php echo $customer_name;?></td>
                        <td class="left">SPD / <?php echo $connection_no;?></td>
                        <td class="center"><?php echo $total_units;?></td>
                        <td class="right">&#8377; <?php echo $total_amount?>.00</td>

                        <td class="right">2020/04/30</td>

                    </tr>

                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-5">

                </div>

                <div class="col-lg-4 col-sm-5 ml-auto">
                    <table class="table table-clear">
                        <tbody>
                        <tr>
                            <td class="left">
                                <strong>Subtotal</strong>
                            </td>
                            <td class="right">&#8377; <?php echo $total_amount?>.00</td>
                        </tr>

                        <tr>
                            <td class="left">
                                <strong>Extra Charges</strong>
                            </td>
                            <td class="right">&#8377; 0.00</td>
                        </tr>


                        <tr>
                            <td class="left">
                                <strong>Total</strong>
                            </td>
                            <td class="right">
                                <strong>&#8377; <?php echo $total_amount?>.00</strong>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>

            </div>

        </div>
    </div>
</div>