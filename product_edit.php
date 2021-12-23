  <?php
  include 'include/controller.php';
 
  ?>

  <?php include 'include/header.php'; ?>
  <!-- Left side column. contains the logo and sidebar -->

  <?php include 'include/navigation.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Edit Products
       <!-- <small>Control panel</small> -->
     </h1>
     <?php 
     if ( isset($_GET['error']) && $_GET['error'] == 1 )
     {
       echo '<div class="alert alert-warning alert-dismissible">
       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
       <h4><i class="icon fa fa-warning"></i> Alert!</h4>
       Maximum 3 images can be uploaded
       </div>'; 
     } 
     ?>
   </section>


   <?php 


   if(isset($_GET['p_id'])){

    $productID = $_GET['p_id'];
  }

  $view_product = "SELECT * FROM products WHERE PRODUCT_ID= $productID";
  $select_prodt = mysqli_query($connection, $view_product);  
  while($row = mysqli_fetch_assoc($select_prodt)){
    $id = $row['PRODUCT_ID'];
    $product_name = $row['PRODUCT_NAME'];
    $des = $row['PRODUCT_DES'];
  }




  ?>






  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <form method="post" enctype="multipart/form-data" >
      <div class="box box-success">

        <div class="box-body">
          <div class="col-sm-12">
          <label for="productname"> Product Name </label>
          <input class="form-control" type="text" id="productname" name="PRODUCT_NAME" value=" <?php echo $product_name; ?> " placeholder="Product Name">
        </div>      
        </div>

      
    

        <div class="box-body">
          <label for="description"> Description </label>
          <div class="box-body pad">
            <textarea class="textarea" placeholder="Place some text here" name="PRODUCT_DES" 
            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
            <?php echo $des; ?>
          </textarea>
        </div>
        <br>
        
               <!--  <br>
                <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile" name="image[]" multiple="multiple">
                    <br> -->
                    <button type="submit" name="updateproduct" class="btn  btn-primary">Update Product</button>
                  </div>

                </div>
              </form>

              <?php 

              if(isset($_POST['updateproduct'])){
    // pr($_POST);die();
                $PRODUCT_NAME = $_POST['PRODUCT_NAME'];
                $PRODUCT_DES = $_POST['PRODUCT_DES'];

                $add_client_query = "UPDATE products SET ";
                $add_client_query .="PRODUCT_NAME = '{$PRODUCT_NAME}',";       
                $add_client_query .="PRODUCT_DES = '{$PRODUCT_DES}'";       
                $add_client_query .= "WHERE PRODUCT_ID = {$productID}";      

                $clients_result = mysqli_query($connection, $add_client_query);
    // $result_update = mysqli_query($connection, $update); 

           



                if(!$clients_result){
                  die("QUERY FAILED .". mysqli_error($connection) );
                }


                if($update_img || $clients_result){
                  header ("Location: product_edit.php?p_id=$productID");
                }



              }


              ?>

              <!-- fetch images -->
              <div class="row">
                
                </div>
                <!-- image update form -->
               
              </section>
            </div>




            <!-- /.content-wrapper -->
            <?php include 'include/footer.php'; ?>

           




