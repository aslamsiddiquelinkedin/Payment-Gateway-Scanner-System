<?php
require_once '../config/database.php';

$sql = "SELECT * FROM `scanner` ORDER BY id DESC ";

$stmt = $conn->query($sql);

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
    <div class="">
        <h1 class="text-center text-warning bg-dark font-weight-bold">DISPLAY SCANNER DETAILS </h1>

    </div>
    <table class="table">
        <thead class="thead-dark  text-center">
            <tr>
                <th scope="col">#</th>
                <th scope="col">UTR</th>
                <th scope="col">SCANNER NAME</th>
                <th scope="col">BANK NAME</th>
                <th scope="col">AMOUNT</th>
                <th scope="col">CREATED DATE</th>
                <th scope="col">STATUS</th>
                <th scope="col">ACTION</th>

            </tr>
        </thead>
        <tbody class="text-center">
            <?php while ($scan = $stmt->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $scan['id'];  ?></td>
                    <td><?php echo $scan['utr'];  ?></td>
                    <td><?php echo $scan['scanner_name'];  ?></td>
                    <td><?php echo $scan['bank_name'];  ?></td>
                    <td><?php echo $scan['amount'];  ?></td>
                    <td><?php echo $scan['create_date'];  ?></td>
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
                    <td>

                        <button class="btn btn-warning" type="submit">
                            <a href="edit.php?id=<?php echo $scan['id']; ?>">
                                <i class="bi bi-brilliance text-dark"> EDIT</i>
                            </a>
                        </button>
                        <button class="btn btn-danger" type="submit">
                            <a href="delete.php?id=<?php echo $scan['id']; ?>"
                                onclick="return confirm('Are you want to delete...?');">
                                <i class="bi bi-x-octagon text-dark"> DELETE</i>
                            </a>
                        </button>
                        <button class="btn btn-info" type="submit">
                            <a href="view.php?id=<?php echo $scan['id']; ?>">
                                <i class="bi bi-yelp text-dark"> VIEW</i>
                            </a>
                        </button>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>

    <div class="text-center">
        <button class="btn btn-warning font-weight-bold" type="submit">
            <a href="detailsfrm.php">
                <i class="bi bi-qr-code-scan text-dark "> BACK TO ADD SCANNER</i>
            </a>
        </button>
    </div>
    <br> <br> <br>
    <h6 class="text-right text-warning font-weight-bold text-dark">Developed By : NIMITRIX [<?php echo "Today is " . date("Y/m/d"); ?>]</h6>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>