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
                            <input type="text" class="form-control" placeholder="Enter your name" autocomplete="off"
                                required id="username" name="username">
                        </div>
                    </div>

                    <!-- ============== email =============== -->

                    <div class="form-group">
                        <label for="email" class="my-1">Email: </label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary rounded-1">
                                    <i class="fa-solid fa-envelope text-white fs-4 py-1"></i>
                                </span>
                            </div>
                            <input type="email" class="form-control" placeholder="Enter your email" autocomplete="off"
                                required id="username" id="email" name="email">
                        </div>
                    </div>


                    <!-- ============= mobile ================ -->

                    <div class="form-group">
                        <label for="mobile" class="my-1">Mobile: </label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary rounded-1">
                                    <i class="fa-solid fa-phone text-white fs-4 py-1"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter your mobile" autocomplete="off"
                                required id="mobile" name="mobile" maxlength="10" minlength="10">
                        </div>
                    </div>

                    <!-- =============== photo =============== -->

                    <div class="form-group">
                        <label class="my-1">Photo: </label>
                        <div class="input-group">

                            <!--============ custom-file ===========-->

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