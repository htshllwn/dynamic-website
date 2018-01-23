<div class="container">
    <h2>All Programs</h2><br>
    <a class="btn btn-default" href="<?php echo base_url().'programs/new_program'; ?>"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New</a>
    <br><br>
    <div class="table-responsive">
        <table class="table">
            <tbody>
                <tr class="info">
                    <th>Program</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th></th>
                </tr>

                <?php foreach($programs as $program): ?>
                    <tr>
                        <td><?php echo $program->program_name; ?></td>
                        <td><?php echo date("d/M/Y", strtotime($program->program_start_date)); ?></td>
                        <td><?php echo date("d/M/Y", strtotime($program->program_end_date)); ?></td>
                        <td>
                            <a href="<?php echo base_url().'programs/edit_program/'.$program->id; ?>" class="btn btn-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                            <a href="<?php echo base_url().'programs/delete_program/'.$program->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>


</div>