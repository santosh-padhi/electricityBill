<?php
include "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Form | Input</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
        .invoice-title h2, .invoice-title h3 {
            display: inline-block;
        }

        .table > tbody > tr > .no-line {
            border-top: none;
        }

        .table > thead > tr > .no-line {
            border-bottom: none;
        }

        .table > tbody > tr > .thick-line {
            border-top: 2px solid;
        }
    </style>
</head>
<body>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" style="float: right;margin: 10px">
    Pricing
</button>

<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Pricing Table</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Units</th>
                        <th>Charges</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>First 50 Units</td>
                        <td>&#8377; 9</td>

                    </tr>
                    <tr>
                        <td>Next 50 Units</td>
                        <td>&#8377; 12</td>

                    </tr>
                    <tr>
                        <td>Above 100 units</td>
                        <td>&#8377; 15</td>

                    </tr>
                    </tbody>
                </table>
            </div>



        </div>
    </div>
</div>
</body>

</html>