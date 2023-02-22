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
</head>

<body>


    <h2 class="bg-primary text-light text-center p-3">PHP ADVANCE CRUD</h2>


    <div class="container">

        <!--================ form modal======================-->
        <div class="modal fade" id="usermodal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Adding or Updating Users</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form id="addform" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <!-- user name -->
                            <div class="form-group">
                                <label for="username" class="my-1">Name: </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary rounded-1"><i
                                                class="fa-solid fa-user text-white fs-4 py-1"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Enter your name"
                                        autocomplete="off" required id="username" name="username">
                                </div>
                            </div>

                            <!-- email -->

                            <div class="form-group">
                                <label for="email" class="my-1">Email: </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary rounded-1">
                                            <i class="fa-solid fa-envelope text-white fs-4 py-1"></i>
                                        </span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Enter your email"
                                        autocomplete="off" required id="username" id="email" name="email">
                                </div>
                            </div>


                            <!-- mobile -->

                            <div class="form-group">
                                <label for="mobile" class="my-1">Mobile: </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary rounded-1">
                                            <i class="fa-solid fa-phone text-white fs-4 py-1"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Enter your mobile"
                                        autocomplete="off" required id="mobile" name="mobile" maxlength="10"
                                        minlength="10">
                                </div>
                            </div>

                            <!-- photo -->


                            <div class="form-group">
                                <label class="my-1">Photo: </label>
                                <div class="input-group">

                                    <!--====custom-file=====-->

                                    <input type="file" class="custom-file-input" name="photo" id="userphoto">
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>





        <!-- input search and button section -->
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8  pt-sm-3  pt-md-0 mt-md-5">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary py-3 px-3 rounded-1"><i
                                class="fa-solid fa-magnifying-glass text-white"></i></span>
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

    <!-- font awesome link -->
    <script src="https://kit.fontawesome.com/6afa902829.js" crossorigin="anonymous"></script>
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>