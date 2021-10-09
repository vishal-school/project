<!doctype html>
<html lang="en">
  <head>
    <title> Laravel 8 Form Validation - Programming Fields</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <form action="<?php echo e(url('/msg-notification')); ?>" method="get">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-xl-6 m-auto">
                    <div class="card shadow">
                        <?php if(Session::has('success')): ?>
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <?php echo e(Session::get('success')); ?>

                            </div>
                        <?php elseif(Session::has('failed')): ?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <?php echo e(Session::get('failed')); ?>

                            </div>
                        <?php endif; ?>

                        
                        <div class="card-header">
                            <h4 class="card-title font-weight-bold">Message Notification </h4>
                        </div>

                        <div class="card-body">
                        <div class="form-group">
                        <label for="name"> email<span class="text-danger"> * </span> </label>
                        <input type="text" name="email" class="form-control" value="<?php echo e(old('email')); ?>" />
                         <?php echo $errors->first("email", "<span class='text-danger'>:message</span>"); ?>

                        </div>
 
                            
                            <div class="form-group">
               <label for="name"> id <span class="text-danger"> * </span> </label>
             <input type="text" name="r_id" class="form-control" value="<?php echo e(old('r_id')); ?>" />
             <?php echo $errors->first("name", "<span class='text-danger'>:message</span>"); ?>

                            </div>

                               
          <div class="form-group">
    <label for="name"> heading<span class="text-danger"> * </span> </label>
      <input type="text" name="heading" class="form-control" value="<?php echo e(old('heading')); ?>" />
      <?php echo $errors->first("heading", "<span class='text-danger'>:message</span>"); ?>

                            </div>

  <div class="form-group">
    <label for="name"> date<span class="text-danger"> * </span> </label>
      <input type="text" name="date" class="form-control" value="<?php echo e(old('date')); ?>" />
      <?php echo $errors->first("date", "<span class='text-danger'>:message</span>"); ?>

                            </div>
                            
                    <div class="form-group">
    <label for="name"> messages_notes<span class="text-danger"> * </span> </label>
<input type="text" name="messages_notes" class="form-control" value="<?php echo e(old('messages_notes')); ?>" />
      <?php echo $errors->first("messages_notes", "<span class='text-danger'>:message</span>"); ?>

                            </div>         

                              <div class="form-group">
    <label for="name"> last Date<span class="text-danger"> * </span> </label>
      <input type="text" name="last_date" class="form-control" value="<?php echo e(old('last_date')); ?>" />
      <?php echo $errors->first("last_date", "<span class='text-danger'>:message</span>"); ?>

                            </div>
 

  <div class="form-group">
    <label for="address"> school option <span class="text-danger"> * </span></label>
    <input type="text" name="school_option" class="form-control" value="<?php echo e(old('school_option')); ?>" />
    <?php echo $errors->first("school_option", "<span class='text-danger'>:message</span>"); ?>

                 </div>

 
<div class="form-group">
    <label for="address"> school option1 <span class="text-danger"> * </span></label>
  <input type="text" name="school_option1" class="form-control" value="<?php echo e(old('school_option1')); ?>" />
    <?php echo $errors->first("school_option1", "<span class='text-danger'>:message</span>"); ?>

                 </div>

                 <div class="form-group">
    <label for="address"> school option 2<span class="text-danger"> * </span></label>
  <input type="text" name="school_option2" class="form-control" value="<?php echo e(old('school_option2')); ?>" />
    <?php echo $errors->first("school_option2", "<span class='text-danger'>:message</span>"); ?>

                 </div>




</div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success"> Register </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>









<?php /**PATH E:\om\htdocs\omkaar\resources\views/notification.blade.php ENDPATH**/ ?>