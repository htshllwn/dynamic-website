<div class="container">
    <?php if($mode === 'new'): ?>
        <h2>New Institution</h2><br>
    <?php elseif($mode === 'edit'): ?>
        <h2>Edit Institution</h2><br>
    <?php endif; ?>

    <?php
			if($mode === 'edit'){
				echo form_open('institutions/edit_institution/'.$ins_id);
			}
			else {
				echo form_open('institutions/new_institution');
			}
			 
    ?>
        <div class="form-group">
            <br>
            <div class="col-xs-6 col-md-4">
                <label class="FormLabel">Institution Name *</label>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <input type="text" name="name" class="form-control" value="<?php if($mode === 'edit') { echo $institution->institution_name; } ?>" required>
            </div>
            <?php echo validation_errors(); ?>
            <br>
        </div>
        

        <div class="form-group">
            <br>
            <div class="col-xs-6 col-md-4">
                <label class="FormLabel">Address</label>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <input type="text" name="add" class="form-control" value="<?php if($mode === 'edit') { echo $institution->institution_add; } ?>">
            </div>
            <br>
        </div>
        
        <div class="form-group">
            <br>
            <div class="col-xs-6 col-md-4">
                <label class="FormLabel">Phone 1</label>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <input type="text" name="phone1" class="form-control" value="<?php if($mode === 'edit') { echo $institution->institution_phone1; } ?>">
            </div>
            <br>
        </div>

        <div class="form-group">
            <br>
            <div class="col-xs-6 col-md-4">
                <label class="FormLabel">Phone 2</label>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <input type="text" name="phone2" class="form-control" value="<?php if($mode === 'edit') { echo $institution->institution_phone2; } ?>">
            </div>
            <br>
        </div>

        <div class="form-group">
            <br>
            <div class="col-xs-6 col-md-4">
                <label class="FormLabel">Email</label>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <input type="text" name="email" class="form-control" value="<?php if($mode === 'edit') { echo $institution->institution_email; } ?>">
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