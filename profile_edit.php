<!DOCTYPE html>
<?php include 'head.php'; ?>
<?php include 'header.php'; ?>

<body>
<?php 
$admin=false;
if($admin)include 'admin-menu.php'; ?>
    <!-- MENU SECTION END-->

    <div class="content-wrapper">
<div class="container">
  <div class="row">
    <div class="col-md-6">
    
      <div class="panel panel-default">
      <div class="panel-body">
                  <div class="row">
                        <div class="col-xs-12 col-sm-8">
                        
                            <p><strong>نام کاربری: </strong> <input type="text" class="form-control" value="شیرین طهماسبی"/> </p>
                            <p><strong>آدرس ایمیل: </strong><input type="text" class="form-control" value="admin@gmail.com"/> </p>
                            
                        </div><!--/col-->          
                        <div class="col-xs-12 col-sm-4 text-center">
                                <img src="assets/img/avatar.png" alt="" class="center-block img-circle img-responsive">
                                
                        </div><!--/col-->

                        
                  </div><!--/row-->

                  <div class="form-group">
    <div class="col-md-2">
        <label class="control-label" for="selectbasic"></label>
    </div>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-success">ثبت اطلاعات</button>
    <button id="button2id" name="button2id" class="btn btn-danger">انصراف</button>
  </div>

              </div><!--/panel-body-->
<!-- Button (Double) -->

</div>
          </div><!--/panel-->

    
    
    </div>
  </div>
</div>

</div>


    <!-- CONTENT-WRAPPER SECTION END-->



    <?php include 'footer.php'; ?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
   
</body>
</html>