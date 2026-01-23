<?php
session_start();
include_once("./config/database.php");
$obj = new Query();



if (isset($_GET["action"]) && $_GET["action"] == "delete") {

    $id = $_GET["id"];
    $res = $obj->deleteData("users", "id", $id);
    $_SESSION['success'] = "user have been deleted successfully";
    header("Location: index.php");
    exit();

}

$result = $obj->getData("users", "*");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container-fluid mt-4">

        <!-- Heading -->
        <div class="row mb-3">
            <div class="col-md-12">
                <h4 class="fw-bold text-uppercase">
                    Manage Users
                    <button class="btn btn-success btn-sm float-end"> <a href="./add-user.php" style="float:right">All
                            Users</a></button>
                </h4>

            </div>
        </div>

        <!-- Card -->
        <div class="row">
            <div class="col-md-12">
                <?php include_once("alert.php"); ?>
                <div class="card shadow-sm">
                    <div class="card-header">
                        All Users
                    </div>


                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone No</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $i = 1;
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {


                                            ?>

                                            <tr>
                                                <th scope="row"><?php echo $i++; ?></th>

                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['phone']; ?></td>
                                                <td>
                                                    <a href="edit-user.php?id=<?= $row['id']; ?>"
                                                        class="btn btn-primary btn-sm">
                                                        Edit
                                                    </a>

                                                    <a href="index.php?action=delete&id=<?= $row['id']; ?>"
                                                        onclick="return confirm('Are you sure you want to delete this user?');"
                                                        class="btn btn-danger btn-sm">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php }
                                    } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>