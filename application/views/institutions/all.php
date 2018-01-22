<div class="container">
    <h2>All Institutions</h2><br>
    <a class="btn btn-default" href="<?php echo base_url().'institutions/new_institution'; ?>"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New</a>
    <br><br>
    <div class="table-responsive">
        <table class="table">
            <tbody>
                <tr class="info">
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone 1</th>
                    <th>Phone 2</th>
                    <th>Email</th>
                    <th></th>
                </tr>

                <?php foreach($institutions as $ins): ?>
                    <tr>
                        <td><?php echo $ins->institution_name; ?></td>
                        <td><?php echo $ins->institution_add; ?></td>
                        <td><?php echo $ins->institution_phone1; ?></td>
                        <td><?php echo $ins->institution_phone2; ?></td>
                        <td><?php echo $ins->institution_email; ?></td>
                        <td>
                            <a href="<?php echo base_url().'institutions/edit_institution/'.$ins->id; ?>" class="btn btn-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                            <a href="<?php echo base_url().'institutions/delete_institution/'.$ins->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>


</div>