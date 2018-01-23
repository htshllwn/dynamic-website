<div class="container">
    <?php if($mode === 'new'): ?>
        <h2>New Program</h2><br>
    <?php elseif($mode === 'edit'): ?>
        <h2>Edit Program</h2><br>
    <?php endif; ?>

    <?php
			if($mode === 'edit'){
				echo form_open('programs/edit_program/'.$program_id);
			}
			else {
				echo form_open('programs/new_program');
			}
			 
    ?>
    <?php echo validation_errors(); ?>
        <div class="form-group">
            <br>
            <div class="col-xs-6 col-md-4">
                <label class="FormLabel">Program Name *</label>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <input type="text" name="name" class="form-control" value="<?php if($mode === 'edit') { echo $program->program_name; } ?>" required>
            </div>
            <br>
        </div>
        

        <div class="form-group">
            <br>
            <div class="col-xs-6 col-md-4">
                <label class="FormLabel">Start Date *</label>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <input type="date" name="start_date" class="form-control" value="<?php if($mode === 'edit') { echo $program->program_start_date; } ?>" required>
            </div>
            <br>
        </div>

        <div class="form-group">
            <br>
            <div class="col-xs-6 col-md-4">
                <label class="FormLabel">End Date *</label>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <input type="date" name="end_date" class="form-control" value="<?php if($mode === 'edit') { echo $program->program_end_date; } ?>" required>
            </div>
            <br>
        </div>
            
        <div class="form-group">
            <br>
            <div class="col-xs-6 col-md-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
            </div>
            <br>
        </div>
        
    <?php echo form_close(); ?>
</div>