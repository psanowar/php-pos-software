

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
                    <h1 class="m-0">Manage Branch</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Manage Branch</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="card-body box-body table-responsive no-padding">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>

                    <th>sl</th>
                    <th>Branch Name</th>
                    <th>Branch Location</th>
                    <th>Branch Manager Name</th>
                    <th>Branch Phone</th>
                    <th>Branch Email</th>
                    <th>Action</th>

                </tr> 
            </thead>
            <tbody>
               

                <?php 
                include 'config.php';
                 $get_branch = "SELECT * FROM tbl_branches";
                $db_from = mysqli_query($db_connect, $get_branch);
                // $res = $db_connect->query($select_query);
                ?>

                <?php foreach($db_from as $key => $branch) : ?>

                    <tr>
                        <td><?php echo $key + 1 ?></td>
        
                        <td><?php echo $branch['branch_name'] ?></td>
                        <td><?php echo $branch['branch_location'] ?></td>
                        <td><?php echo $branch['branch_manager_name'] ?></td>
                        <td><?php echo $branch['branch_phone'] ?></td>
                        <td><?php echo $branch['branch_email'] ?></td>
                        <td>
                            <a class="btn btn-info" href="edit_branch.php?branch_id=<?= $branch['branch_id'] ?>">Edit</a>
                            <a class="btn btn-danger" href="delete_branch.php?branch_id=<?= $branch['branch_id'] ?>">Delete</a>
                          
                        </td>
                    </tr>

                <?php endforeach?>

                    
            </tbody>
        </table>   
    </div>

</div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<?php include 'includes/footer.php'; ?>
