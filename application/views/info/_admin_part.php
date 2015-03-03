<div class="col-md-12">
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
          <th>Groups</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
        <?php foreach($users_list as $user): ?>
          <tr>
            <td><?php echo $user->id; ?></td>
            <td><?php echo $user->email; ?></td>
            <td><?php echo $user->name; ?></td>
            <td>
              <ul class="list-group">
                <?php foreach($this->aauth->get_user_groups($user->id) as $group): ?>
                  <li class="list-group-item"><?php echo $group->name; ?></li>
                <?php endforeach ?>
              </ul>
            </td>
            <td><?php echo anchor('change_permission/'.$user->id, 'Change permission', 'class="btn btn-default"') ?><td>
            <td><?php echo anchor($user->id.'/edit/', 'Edit', 'class="btn btn-warning"') ?><td>
            <td><?php echo anchor($user->id.'/delete/', 'Delete', 'class="btn btn-danger"') ?><td>
          </tr>
        <?php endforeach ?>
      </table>
    </div>
  </div>
</div>
