<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ADVANCED CRUD</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awesome link -->
    <script src="https://kit.fontawesome.com/6afa902829.js" crossorigin="anonymous"></script>
</head>

<body>

    <h2 class="bg-primary text-light text-center p-3">PHP ADVANCE CRUD</h2>

    <div class="container">
        <!--================ form modal======================-->



        <?php include 'form.php' ?>


        <!-- ========= input search and button section ========= -->
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8  pt-sm-3  pt-md-0 mt-md-5">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary py-3 px-3 rounded-start">
                            <i class="fa-solid fa-magnifying-glass text-white"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search User...">
                </div>
            </div>
            <div class="col-md-2 mt-3 mt-md-5">
                <!-- Button trigger modal -->
                <button class="btn btn-primary py-2" type="button" data-bs-toggle="modal"
                    data-bs-target="#usermodal">Add
                    New User</button>
            </div>
        </div>
    </div>
    <!-- ============== table ============== -->
    <?php include './tableData.php'   ?>

    <!-- =============== pagination =============== -->
    <section class="py-5">
        <div class="container">
            <nav aria-label="Page navigation example " id="pagination">
                <ul class=" pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </section>

    <?php include 'profile.php' ?>
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>