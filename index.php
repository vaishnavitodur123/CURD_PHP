<?php 

include_once ("./config/database.php");
$obj = new Query();
$res =$obj->insertData("user");
echo $res;
$obj->getData("users","*");




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
                <button class="btn btn-success btn-sm float-end"> <a href="./add-user.php" style="float:right">All Users</a></button>
            </h4>
        </div>
    </div>

    <!-- Card -->
    <div class="row">
        <div class="col-md-12">
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
                                <tr>
                                    <td>1</td>
                                    <td>Amit Sharma</td>
                                    <td>amit@gmail.com</td>
                                    <td>9878102933</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">Edit</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>Rohan Saini</td>
                                    <td>rohansaini@yopmail.com</td>
                                    <td>9988012938</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">Edit</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
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
