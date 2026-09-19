<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <title>TRUST SOLUTION (PVT) LTD</title>
</head>

<body>
    <h1 class="text-center text-warning bg-dark font-weight-bold">INSERT SCANNER </h1>

    <div class="container">
        <form action='insert.php' method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>UTR</label>
                    <input type="text" class="form-control" name="utr" required>
                </div>
                <div class="form-group col-md-6">
                    <label>SCNNER NAME</label>
                    <input type="text" class="form-control" name="scanner_name" required>
                </div>
                <div class="form-group col-md-6">
                    <label>BANK NAME</label>
                    <input type="text" class="form-control" name="bank_name" required>
                </div>
                <div class="form-group col-md-6">
                    <label>AMOUNT LIMIT</label>
                    <input type="text" class="form-control" name="amount" required>
                </div>
                <div class="form-group col-md-6">
                    <label>CREATE DATE</label>
                    <input type="date" class="form-control" name="create_date" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Status</label>
                    <select class="form-control" name="status">
                        <option value="">Select Option</option>
                        <option value="pending">Pending</option>
                        <option value="running">Running</option>
                        <option value="settled">Settled</option>
                        <option value="cancelled">Cancelled</option>
                        <option value="failed">Failed</option>
                    </select>
                </div>
            </div>

            <button class="btn btn-warning font-weight-bold" type="submit">

                <i class="bi bi-floppy2-fill text-dark"> SUBMIT</i>
                </a>

            </button>

        </form> <br> <br>
        <div class="text-center">
            <button class="btn btn-warning font-weight-bold" type="submit">
                <a href="index.php">
                    <i class="bi bi-speedometer text-dark"> BACK TO DASHBOARD</i>
                </a>
            </button>
        </div>
    </div>


    <br> <br> <br>
    <h6 class="text-right text-warning font-weight-bold text-dark">Developed By : NIMITRIX [<?php echo "Today is " . date("Y/m/d"); ?>]</h6>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>