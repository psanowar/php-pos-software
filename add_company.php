

<?php include 'includes/head.php'; ?>
<?php include 'includes/preloader.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>

    <!-- Main content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Company</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Company</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- /.col -->
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Company</h3>
                        </div>

                        <div class="card-body">

                            <?php
                            if(isset($_SESSION['success_msg'])){
                                echo $_SESSION['success_msg'];
                                unset($_SESSION['success_msg']);
                            }
                            ?>

                            <form action="add_company_post.php" method="POST">

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="" class="text-capitalize">Branch Name</label>
                                            <select class="form-control" name="branch_id">
                                                <option value="0">----Select Branch----</option>
                                                <option value="1">Mirpur</option>
                                                <option value="2">Mohakhali</option>


                                                <?php foreach ($branch_result as  $key => $branch) : ?>
                                                    <option value="<?= $branch['branch_id'] ?>"><?= $branch['branch_name'] ?></option>

                                                <?php endforeach ?>


                                            </select>

                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="" class="text-capitalize">Company Name</label>
                                            <input type="text" class="form-control" name="company_name">

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="" class="text-capitalize">Company Address</label>
                                            <input type="text" class="form-control" name="company_address">

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="" class="text-capitalize">Company Phone</label>
                                            <input type="text" class="form-control" name="company_phone">

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="" class="text-capitalize">Company Email</label>
                                            <input type="text" class="form-control" name="company_email">

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="" class="text-capitalize">Company Manager_name</label>
                                            <input type="text" class="form-control" name="company_manager_name">

                                        </div>
                                    </div>

                                </div>



                                <button class="btn btn-success" name="submit" type="submit">Add Branch</button>
                            </form>


                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

    </section>

</div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<?php include 'includes/footer.php'; ?>
