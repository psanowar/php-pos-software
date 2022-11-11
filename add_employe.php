

<?php include 'includes/head.php';

?>
<?php include 'includes/preloader.php'; ?>
<?php include 'includes/navbar.php'; ?>
<!-- <?php include 'includes/sidebar.php'; ?> -->



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
                        <li class="breadcrumb-item active">Add Employee</li>
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
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Employee</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body">

                            <?php

                            if (isset($_SESSION['emp_msg'])) {

                            ?>
                                <div class="alert alert-success" role="alert">
                                    <?php
                                    echo $_SESSION['emp_msg'];
                                    unset($_SESSION['emp_msg']);

                                    ?>
                                </div>

                            <?php
                            }

                            ?>
                            <form action="add_employee_post.php" method="post">

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="" class="text-capitalize">Branch Name</label>
                                            <select class="form-control" name="branch_name">
                                                <option value="0">----Select Branch----</option>
                                                <option value="1">komlapur</option>
                                                <option value="2">monipur</option>


                                                <?php foreach ($branch_result as  $key => $branch) : ?>
                                                    <option value="<?= $branch['branch_id'] ?>"><?= $branch['branch_name'] ?></option>

                                                <?php endforeach ?>


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
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="" class="text-capitalize">Employee Designation</label>

                                            <select class="form-control" name="employee_designation">
                                                <option value="0">----Select Designation----</option>
                                                <option value="Super Admin">Super Admin</option>
                                                <option value="Manager">Manager</option>
                                                <option value="Branch Manager">Branch Manager</option>
                                                <option value="Sales Man">Sales Man</option>

                                            </select>
                                            <span style="color:red;">
                                                <?php
                                                if (isset($_SESSION['employee_designation'])) {
                                                    echo $_SESSION['employee_designation'];
                                                    unset($_SESSION['employee_designation']);
                                                }
                                                ?>
                                            </span>


                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="" class="text-capitalize">Employee Name</label>
                                            <input type="text" name="employee_name" class="form-control">
                                            <span style="color:red;">
                                                <?php
                                                if (isset($_SESSION['employee_name'])) {
                                                    echo $_SESSION['employee_name'];
                                                    unset($_SESSION['employee_name']);
                                                }
                                                ?>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="" class="text-capitalize">Employee Email</label>
                                            <input type="email" name="employee_email" class="form-control">
                                            <span style="color:red;">
                                                <?php
                                                if (isset($_SESSION['employee_email'])) {
                                                    echo $_SESSION['employee_email'];
                                                    unset($_SESSION['employee_email']);
                                                }
                                                ?>
                                            </span>

                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="" class="text-capitalize">Employee Phone</label>
                                            <input type="number" name="employee_phone" class="form-control">
                                            <span style="color:red;">
                                                <?php
                                                if (isset($_SESSION['employee_phone'])) {
                                                    echo $_SESSION['employee_phone'];
                                                    unset($_SESSION['employee_phone']);
                                                }
                                                ?>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="" class="text-capitalize">Employee Nid</label>
                                            <input type="number" name="employee_nid" class="form-control">
                                            <span style="color:red;">
                                                <?php
                                                if (isset($_SESSION['employee_nid_er'])) {
                                                    echo $_SESSION['employee_nid_er'];
                                                    unset($_SESSION['employee_nid_er']);
                                                }
                                                ?>
                                            </span>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="" class="text-capitalize">Employee Salary</label>
                                            <input type="number" name="employee_salary" class="form-control">
                                            <span style="color:red;">
                                                <?php
                                                if (isset($_SESSION['employee_salary'])) {
                                                    echo $_SESSION['employee_salary'];
                                                    unset($_SESSION['employee_salary']);
                                                }
                                                ?>
                                            </span>

                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="" class="text-capitalize">employee Join Date</label>
                                            <input type="date" class="form-control" name="employee_join_date">
                                            <span style="color:red;">
                                                <?php
                                                if (isset($_SESSION['employee_join_date'])) {
                                                    echo $_SESSION['employee_join_date'];
                                                    unset($_SESSION['employee_join_date']);
                                                }
                                                ?>
                                            </span>

                                        </div>
                                    </div>



                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="" class="text-capitalize">Employe Password</label>
                                            <input type="text" name="employe_password" class="form-control">
                                            <span style="color:red;">
                                                <?php
                                                if (isset($_SESSION['employe_password'])) {
                                                    echo $_SESSION['employe_password'];
                                                    unset($_SESSION['employe_password']);
                                                }
                                                ?>
                                            </span>

                                        </div>
                                    </div>
                                
                                </div>



                                <button class="btn btn-success" name="submit" type="submit">Add Employee</button>
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