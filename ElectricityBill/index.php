<?php
include "includes/header.php";
?>
<center><h2 style="padding: 10px"><strong>Electricity Bill Calculator</strong></h2></center>

<?php
if(isset($_POST['submit'])){
    $customer_name = $_POST['customer_name'];
    $connection_no = $_POST['connection_no'];
    $total_units = $_POST['total_units'];

    if($total_units <= 50)
    {
        $amt = $total_units * 9;
    }
    else if($total_units > 50 && $total_units<= 100)
    {
        $amt = 450 + (($total_units-50) * 12);
    }

    else
    {
        $amt = 1050 + (($total_units-100) * 15);
    }

    /*
     * Calculate total electricity bill
     * after adding surcharge
     */

    $total_amount  = $amt;






    $query = "INSERT INTO bill (customer_name, connection_no,total_units,total_amount)";
    $query .= "VALUES('{$customer_name}','{$connection_no}','{$total_units}','{$total_amount}') ";

    $create_bill_query = mysqli_query($connection, $query);

    if ($query) {
        echo "<div class='alert alert-success alert-dismissible'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button>
  <strong>Record</strong> Inserted Sucessfuly !....
</div>";

    }


    if (!$create_bill_query) {
        die('Query Failed' . mysqli_error($connection));
    }

    //  Redirect to Invoice Page Submitting Form
    if($customer_name !=''&& $connection_no !=''&& $total_units !='')
    {

        header("location:invoice.php");
    }
}
?>


<form action="" method="post" style="padding: 20px">
    <div class="row">
        <div class="form-group col-6">
            <label for="name">Customer Name :</label>
            <input type="text" class="form-control" id="name" placeholder="For e.g. John Deo" name="customer_name"
                   autocomplete="off" required>
        </div>
        <div class="form-group col-6">
            <label for="connection_no">Connection No :</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="connection_name">SPD/</span>
                </div>
                <input type="text" class="form-control" name="connection_no" id="connection_no" placeholder="For e.g 1934" aria-describedby="connection_name" required autocomplete="off">
            </div>
        </div>

        <div class="form-group col-6">
            <label for="state">Region</label>
            <input type="text" class="form-control" id="unit" placeholder="Punjab" disabled >
        </div>
        <div class="form-group col-6">
            <label for="unit">Consumption Unit :</label>
            <input type="text" class="form-control" id="unit" placeholder="For e.g. 75" name="total_units"
                   autocomplete="off" required>
            <small id="emailHelp" class="form-text text-muted"><strong>Note: </strong>Your final bill generate as per unit charges. For more details click pricing section. </small>
        </div>

    </div>
    <a href="invoice.php">
        <button type="submit" name="submit" class="btn btn-primary col-12">Click To Generate Bill</button>
    </a>


</form>
<script>
    $(".alert").fadeTo(1000, 1000).slideUp(1000, function () {
        $(".alert").alert('close');
    });
</script>