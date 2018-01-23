<div class="container">
    <?php if($mode === 'new'): ?>
        <h2>New Role</h2><br>
    <?php elseif($mode === 'edit'): ?>
        <h2>Edit Role</h2><br>
    <?php endif; ?>

    <?php
			if($mode === 'edit'){
				echo form_open('roles/edit_role/'.$role_id);
			}
			else {
				echo form_open('roles/new_role');
			}
			 
    ?>
    <?php echo validation_errors(); ?>
        <div class="form-group">
            <br>
            <div class="col-xs-6 col-md-4">
                <label class="FormLabel">Role Name *</label>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <input type="text" name="name" class="form-control" value="<?php if($mode === 'edit') { echo $role->role_name; } ?>" required>
            </div>
            <br>
        </div>
        

        <div class="form-group">
            <br>
            <div class="col-xs-6 col-md-4">
                <label class="FormLabel">Description</label>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <input type="text" name="des" class="form-control" value="<?php if($mode === 'edit') { echo $role->role_des; } ?>">
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