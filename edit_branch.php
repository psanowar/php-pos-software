<?php 
include 'config.php';
?>

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
                    <h1 class="m-0">Edit Branch</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Branch</li>
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
                            <h3 class="card-title">Edit Branch</h3>
                        </div>

                        <div class="card-body">

                            <?php
                            
                            if(isset($_SESSION['branch-msg'])){
                                echo $_SESSION['branch-msg'];
                                unset($_SESSION['branch-msg']);
                            }
                            ?>

                            <form action="edit_branch_post.php" method="POST">

                                <div class="row">

                                    <?php 

                                    include 'config.php';

                                    if (isset($_GET['branch_id'])) {
                                        $id = $_GET['branch_id'];
                                        $get_query_branch = "SELECT * FROM tbl_branches WHERE branch_id=$id";
                                   
                                        $db_from_product = mysqli_query($db_connect, $get_query_branch);
                                       
                                        $after_assoc = mysqli_fetch_assoc($db_from_product);
                                         // echo  $after_assoc['branch_id'];

                                        // if ($db_from_product) {
                                        //     echo 'ok';
                                        // } else {
                                        //     echo 'not ok';
                                        // }
                                       
                                    }
                                    ?>

                                    <input type="hidden" class="form-control" name="id" value="<?php echo $after_assoc['branch_id']?>">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="" class="text-capitalize">Branch Name</label>
                                            <input type="text" class="form-control" name="branch_name" value="<?php echo $after_assoc['branch_name']?>">

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="" class="text-capitalize">Branch Location</label>
                                            <input type="text" class="form-control" name="branch_location" value="<?php echo $after_assoc['branch_location']?>">

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="" class="text-capitalize">Branch Manager Name</label>
                                            <input type="text" class="form-control" name="branch_manager_name" value="<?php echo $after_assoc['branch_manager_name']?>">

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="" class="text-capitalize">Branch Phone</label>
                                            <input type="text" class="form-control" name="branch_phone" value="<?php echo $after_assoc['branch_phone']?>">

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="" class="text-capitalize">Branch Email</label>
                                            <input type="text" class="form-control" name="branch_email" value="<?php echo $after_assoc['branch_email']?>">

                                        </div>
                                    </div>

                                </div>



                                <button class="btn btn-success" name="submit" type="submit">Update Branch</button>
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
