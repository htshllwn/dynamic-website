<div class="container">
    <h2>All users</h2><br>
    <a class="btn btn-default" href="<?php echo base_url().'users/new_user'; ?>"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New</a>
    <br><br>
    <div class="table-responsive">
        <table class="table">
            <tbody>
                <tr class="info">
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Interests</th>
                    <th>Education</th>
                    <th>College</th>
                    <th></th>
                </tr>

                <?php foreach($users as $user): ?>
                    <tr>
                        <td><?php echo $user->user_full_name; ?></td>
                        <td><?php echo $user->user_email; ?></td>
                        <td><?php echo $user->user_age; ?></td>
                        <td><?php echo $user->user_interests; ?></td>
                        <td><?php echo $user->user_education; ?></td>
                        <td><?php echo $user->user_college; ?></td>
                        <td>
                            <a href="<?php echo base_url().'users/edit_user/'.$user->id; ?>" class="btn btn-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                            <a href="<?php echo base_url().'users/delete_user/'.$user->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>


</div>