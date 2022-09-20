<?php
//include_once "app/hea_ter.php";
?>
<?php
require 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/cff39e050e.js" crossorigin="anonymous"></script>
    <title>PHP Conn MySQL</title>
</head>

<body>

    <?php
    require_once "app/header.php";
    ?>

    <h1 style="text-align:center ; margin-top:100px ;">Data Show</h1>
    <div class="container">
        <table class="table align-middle mb-0 bg-white mt-5">
            <thead class="bg-light">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Feedback</th>
                    <th>Comment</th>
                </tr>
            </thead>
            <?php
            $users = $conn->query("	SELECT users.first_name,
         users.last_name,
          comments.feedback,
           comments.comment
            FROM users
             INNER JOIN comments
              ON users.id = comments.id;");
            ?>
            <tbody>
                <?php while ($row = $users->fetch(PDO::FETCH_ASSOC)) { ?>

                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px; margin-right: 10px;" class="rounded-circle" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1"><?php echo $row['first_name'] ?></p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1"><?php echo $row['last_name'] ?></p>
                        </td>
                        <td>
                            <span class="badge badge-success rounded-pill d-inline"><?php echo $row['feedback'] ?></span>
                        </td>
                        <td><?php echo $row['comment'] ?></td>
                        <!-- <td>
                        <button type="button" class="btn btn-link btn-sm btn-rounded">
                            Edit
                        </button>
                    </td> -->
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>

    <div class="pagesList" style="margin-left: 40%;">
        <ul>
            
            <li><a href="http://localhost/connection/app/header.php">Header Page</a></li>
            <li><a href="http://localhost/connection/app/footer.php">Footer Page</a></li>
            <li><a href="http://localhost/connection/">Data Show</a></li>
            <li><a href="http://localhost/connection/app/add.php">Add Page</a></li>
            <li><a href="http://localhost/connection/app/update.php">Update Page</a></li>
            <li><a href="http://localhost/connection/app/delete.php">Delete Page</a></li>

        </ul>
    </div>



    <?php
    require_once "app/footer.php";
    ?>

</body>

</html>