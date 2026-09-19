<?php

require_once '../config/database.php';

if (!isset($_GET['id'])) {
    die("SCANNER ID IS REQUIRED..");
}

$id = (int) $_GET['id'];

$sql = "SELECT * FROM `scanner` WHERE id=?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows == 0) {
    echo "SCANNER NOT FOUND....";
}

$scan = $result->fetch_assoc();
$stmt->close();
$conn->close();





?>

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
    <h1 class="text-center text-warning bg-dark font-weight-bold">DISPLAY UNIQUE SCANNER</h1>

    <table class="table">
        <thead class="thead-dark ">

            <tr>
                <th scope="col">#</th>
                <td><?php echo $scan['id'];  ?></td>
            </tr>

            <tr>
                <th scope="col">UTR</th>
                <td><?php echo $scan['utr']; ?></td>
            </tr>
            <tr>
                <th scope="col">SCANNER NAME</th>
                <td><?php echo $scan['scanner_name'];  ?></td>
            </tr>
            <tr>
                <th scope="col">BANK NAME</th>
                <td><?php echo $scan['bank_name'];  ?></td>
            </tr>
            <tr>
                <th scope="col">AMOUNT</th>
                <td><?php echo $scan['amount'];  ?></td>
            </tr>
            <tr>
                <th scope="col">CREATE DATE</th>
                <td><?php echo $scan['create_date'];  ?></td>
            </tr>
            <tr>
                <th scope="col">STATUS</th>
                <td>
                    <?php
                        $status = strtolower($scan['status']);

                        $statusColors = [
                            'pending' => 'badge-warning',
                            'settled' => 'badge-success',
                            'running' => 'badge-danger',
                            'cancelled' => 'badge-dark',
                            'failed'    => 'badge-danger'
                        ];

                        $color = $statusColors[$status] ?? 'badge-secondary';
                        ?>

                        <span class="badge <?php echo $color; ?> p-2">
                            <?php echo ucfirst($scan['status']); ?>
                        </span>
                </td>
            </tr>


        </thead>

    </table>
    <div class="text-center">
        <button class="btn btn-warning font-weight-bold" type="submit">
            <a href="index.php">
                <i class="bi bi-speedometer text-dark"> BACK TO DASHBOARD</i>
            </a>
        </button>
    </div>


    <br> <br> <br>
    <h6 class="text-right text-warning font-weight-bold text-dark">Developed By : NIMITRIX [<?php echo "Today is " . date("Y/m/d") ;?>]</h6>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>