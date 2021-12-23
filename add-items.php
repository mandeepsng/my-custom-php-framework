<?php
include 'include/controller.php';

$page = 'add-items';
?>

<?php include 'include/header.php'; ?>
<!-- Left side column. contains the logo and sidebar -->

<?php include 'include/navigation.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Add Items</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <!-- <ol class="breadcrumb float-sm-right"> -->
            <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
            <!-- <li class="breadcrumb-item active">Dashboard v1</li> -->
            <!-- </ol> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Basic Info</div>

        <div class="panel-body">
          <form method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group">
              <label class="col-sm-2 control-label">Name<span style="color:red">*</span></label>
              <div class="col-sm-4">
                <input type="text" name="PRODUCT_NAME" class="form-control" required="">
              </div>
              
            </div>

            <div class="hr-dashed"></div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Description<span style="color:red">*</span></label>
              <div class="col-sm-10">
                <textarea class="form-control" name="PRODUCT_DES"></textarea>
              </div>
            </div>

            





        <div class="form-group">
          <div class="col-sm-8 col-sm-offset-2">
            <button class="btn btn-default" type="reset">Cancel</button>
            <button class="btn btn-primary" name="submit" type="submit">Save Changes</button>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>
<?php add_items(); ?>

</div>
<!-- /.content-wrapper -->
<?php include 'include/footer.php'; ?>