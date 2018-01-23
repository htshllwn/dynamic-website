<div class="container">
    <h2>All Roles</h2><br>
    <a class="btn btn-default" href="<?php echo base_url().'roles/new_role'; ?>"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New</a>
    <br><br>
    <div class="table-responsive">
        <table class="table">
            <tbody>
                <tr class="info">
                    <th>Role</th>
                    <th>Description</th>
                    <th></th>
                </tr>

                <?php foreach($roles as $role): ?>
                    <tr>
                        <td><?php echo $role->role_name; ?></td>
                        <td><?php echo $role->role_des; ?></td>
                        <td>
                            <a href="<?php echo base_url().'roles/edit_role/'.$role->id; ?>" class="btn btn-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                            <a href="<?php echo base_url().'roles/delete_role/'.$role->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>


</div>