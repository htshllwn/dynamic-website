<div class="container">
    <?php if($mode === 'new'): ?>
        <h2>New User</h2><br>
    <?php elseif($mode === 'edit'): ?>
        <h2>Edit User</h2><br>
    <?php endif; ?>

    <?php
			if($mode === 'edit'){
				echo form_open('users/edit_user/'.$user_id);
			}
			else {
				echo form_open('users/new_user');
			}
			 
    ?>
    <?php echo validation_errors(); ?>
        <div class="form-group">
            <br>
            <div class="col-xs-6 col-md-4">
                <label class="FormLabel">Full Name *</label>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <input type="text" name="full_name" class="form-control" value="<?php if($mode === 'edit') { echo $user->user_full_name; } ?>" required>
            </div>
            <br>
        </div>
        

        <div class="form-group">
            <br>
            <div class="col-xs-6 col-md-4">
                <label class="FormLabel">Email</label>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <input type="text" name="email" class="form-control" value="<?php if($mode === 'edit') { echo $user->user_email; } ?>">
            </div>
            <br>
        </div>
        
        <div class="form-group">
            <br>
            <div class="col-xs-6 col-md-4">
                <label class="FormLabel">Age *</label>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <input type="number" name="age" class="form-control" value="<?php if($mode === 'edit') { echo $user->user_age; } ?>" required>
            </div>
            <br>
        </div>

        <div class="form-group">
            <br>
            <div class="col-xs-6 col-md-4">
                <label class="FormLabel">Interests</label>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <input type="text" name="interests" class="form-control" value="<?php if($mode === 'edit') { echo $user->user_interests; } ?>">
            </div>
            <br>
        </div>

        <div class="form-group">
            <br>
            <div class="col-xs-6 col-md-4">
                <label class="FormLabel">Education</label>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <input type="text" name="education" class="form-control" value="<?php if($mode === 'edit') { echo $user->user_education; } ?>">
            </div>
            <br>
        </div>

        <div class="form-group">
            <br>
            <div class="col-xs-6 col-md-4">
                <label class="FormLabel">College</label>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <input type="text" name="college" class="form-control" value="<?php if($mode === 'edit') { echo $user->user_college; } ?>">
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