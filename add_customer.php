<?php
session_start();
?>

<?php include 'includes/head.php';?>
<?php include 'includes/preloader.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Customer</li>
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
                            <h3 class="card-title">Add Customer</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body">

                            <?php

                            if (isset($_SESSION['cusomer_msg'])) {

                            ?>
                                <div class="alert alert-success" role="alert">
                                    <?php
                                    echo $_SESSION['cusomer_msg'];
                                    unset($_SESSION['cusomer_msg']);

                                    ?>
                                </div>

                            <?php
                            }

                            ?>
                            <form action="#" method="post">

                                <div class="row">

                                    <?php
                                    // session_start();
                                    include 'config.php';
                                    ?>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="" class="text-capitalize">Branch Name</label>
                                            <select class="form-control" name="branch_name">
                                                <option value="0">----Select Branch----</option>
                                                <option value="0">Mirpur</option>
                                                <option value="0">Mohakhali</option>


                                     


                                            </select>
                                            <span style="color:red;">
                                                <?php
                                                if (isset($_SESSION['branch_name'])) {
                                                    echo $_SESSION['branch_name'];
                                                    unset($_SESSION['branch_name']);
                                                }
                                                ?>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="" class="text-capitalize">Customer Name</label>
                                            <input type="text" class="form-control" name="customer_name">
                                            <span style="color:red;">
                                                <?php
                                                if (isset($_SESSION['customer_name'])) {
                                                    echo $_SESSION['customer_name'];
                                                    unset($_SESSION['customer_name']);
                                                }
                                                ?>
                                            </span>

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="" class="text-capitalize">Customer Phone</label>
                                            <input type="text" class="form-control" name="customer_phone">
                                            <span style="color:red;">
                                                <?php
                                                if (isset($_SESSION['customer_phone'])) {
                                                    echo $_SESSION['customer_phone'];
                                                    unset($_SESSION['customer_phone']);
                                                }
                                                ?>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="" class="text-capitalize">Customer Address</label>
                                            <input type="text" class="form-control" name="customer_address">
                                            <span style="color:red;">
                                                <?php
                                                if (isset($_SESSION['customer_address'])) {
                                                    echo $_SESSION['customer_address'];
                                                    unset($_SESSION['customer_address']);
                                                }
                                                ?>
                                            </span>

                                        </div>
                                    </div>

                                </div>



                                <button class="btn btn-success" name="submit" type="submit">Add Customer</button>
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