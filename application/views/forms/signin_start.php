<div class="row">
  <div class="col-md-offset-4 col-md-8">
    <h1><?php echo $title ?></h1>
  </div>
</div>
<div class="row">
  <div class="col-md-offset-3 col-md-6">
    <?php if(validation_errors()): ?>
      <div class="row">
        <div class="col-md-offset-1 col-md-10">
          <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo validation_errors(); ?>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php echo form_open('signin', $form_attributes); ?>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name" id="inputEmail3" placeholder="Name">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password Confirmation</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" name="password_confirmation" id="inputPassword3" placeholder="Password Confirmation">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success">Sign in</button>
        </div>
      </div>
    </form>
  </div>
</div>
