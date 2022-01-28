<?php

include "db_conn.php";

$result = mysqli_query($conn,"SELECT * FROM contact_me ORDER BY id DESC");

if($result == TRUE) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <section class="" style="min-height: 100vh;">
        <div class="container text-light p-5">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<th scope="row">'.$row['id'].'</th>';
                            echo '<td>'.$row['Name'].'</td>';
                            echo '<td>'.$row['Email'].'</td>';
                            echo '<td>'.$row['Phone'].'</td>';
                            echo '<td>'.$row['Message'].'</td>';
                            echo '</tr>';
                        }
                    }
                    else {
                        echo '<p>There is no Data</p>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>