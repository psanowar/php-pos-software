<?php include 'includes/head.php'; 
?>
<?php include 'includes/preloader.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'functions/user.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard v2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form method="POST">
          
        <!-- Info boxes -->
        <div class="row">
          <div class="col-md-12">
              <input type="text" readonly name="brance_id" value="<?php echo $_SESSION['branch_id']; ?>">
              
              <select name="company_id">
                <option>---Select Company---</option>
                <?php
                $result=showCompanyNamePurchase();
                foreach($result as $data){ ?>

                  <option value="<?php echo $data['company_id'];?>
                  "><?php echo $data['company_name'];?></option>

                <?php }
                ?>
              </select>
              <input type="date" name="product_Date" value="<?php if(isset($_POST['search']) || ($_POST['addProduct '])){ echo $_POST['product_Date']; } ?>">

              <input type="text" name="purchase_invoice" placeholder="Enter Invoice Number" value="<?php if(isset($_POST['search']) ){ echo $_POST['purchase_invoice']; } ?>">
            </div>
        </div>

        <?php 
        if(isset($_POST['addProduct'])){

          $branch_id=$_POST['brance_id'];
          $purchase_date=$_POST['product_Date'];
          $purchase_invoice=$_POST['purchase_invoice'];
          $proBarcode=$_POST['barcode'];
          $company_id=$_POST['company_id'];
          $product_cost_price=$_POST['pPrice'];
          $quantity=$_POST['qnt'];
          $total_amount=$_POST['totalPrice'];

          $result = addProduct($branch_id,$purchase_date,$purchase_invoice,$proBarcode,$company_id,$product_cost_price,$quantity,$total_amount);
          echo $result;

        }
        ?>

        <div class="row">
            <div class="col-md-12">
              <input type="text" name="barcode" placeholder="Product Barcode" value="<?php if(isset($_POST['search'])){ echo $_POST['barcode']; } ?>">
              <button name="search">Find</button>


              <?php 

                if(isset($_POST['search'])){
                  $barcode = $_POST['barcode'];
                  $result = searchProductBarcode($barcode);
                  foreach($result as $data){ ?>
                    
                    <input type="text" name="pPrice" id="pPrice" value="<?php echo $data["product_cost_price"]; ?>">
                  <?php }
                }

                ?>


              <input type="text" name="qnt" id="qnt" value="0">
              <input type="button" name="" value="+" onclick="qntAdd()">
              <input type="button" name="" value="-" onclick="qntSub()">
              <input type="text" name="totalPrice" id="totalPrice">
              <button name="addProduct" type="submit" >Add Product</button>
            </div>
        </div>
       
    <!-- /.content -->
    </form>
  </div>
</section>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  <script>
    function qntAdd(){
      var _qnt = parseInt(document.getElementById('qnt').value);
      var _pprice = parseInt(document.getElementById('pPrice').value);
      _qnt +=1;
      _pprice *= _qnt;
      document.getElementById('qnt').value = _qnt;
      document.getElementById('totalPrice').value = _pprice;
    }
    function qntSub(){
      var _qnt = parseInt(document.getElementById('qnt').value);
      var _pprice = parseInt(document.getElementById('pPrice').value);
      
      if(_qnt==0){
        document.getElementById('qnt').value = 0;
      }
      else{
        _qnt -=1;
        _pprice *= _qnt;
      document.getElementById('qnt').value = _qnt;
      document.getElementById('totalPrice').value = _pprice;
      }
    }
  </script>

<?php include 'includes/footer.php'; ?>
