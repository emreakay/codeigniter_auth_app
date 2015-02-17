
<div class="row">
  <div class="col-md-6">
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Users<span class="pull-right badge"><?php echo $users_counter; ?></span></h3>
      </div>
      <div class="panel-body">
        <table class="table table-striped">
          <tr>
            <th>#</th>
            <th>Email</th>
            <th>Name</th>
          </tr>
          <?php foreach($users_list as $user): ?>
            <tr>
              <td><?php echo $user->id; ?></td>
              <td><?php echo $user->email; ?></td>
              <td><?php echo $user->name; ?></td>
            </tr>
          <?php endforeach ?>
        </table>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="panel panel-warning">
      <div class="panel-heading">
        <h3 class="panel-title">Server requirements</h3>
      </div>
      <div class="panel-body">
        <ul class="list-group">
        <li class="list-group-item">PHP Version: <?php echo PHP_VERSION; ?></li>
        <li class="list-group-item">Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
        <li class="list-group-item">Port: <?php echo $_SERVER['SERVER_PORT']; ?></li>
      </ul>
      </div>
    </div>
  </div>
</div>
