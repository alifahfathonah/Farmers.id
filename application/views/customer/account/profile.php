
    <h4 class="mt-4 mb-4">My Account</h4>

    <div class="card">
        <div class="card-body">
            <form method="post" action="<?php echo base_url('api/update_profile'); ?>" class="ajax-form" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control" name="full_name" value="<?php echo $users_customer->full_name; ?>"/>
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" name="phone_number" value="<?php echo $users_customer->phone_number; ?>"/>
                </div>
                <div class="form-group">
                    <label>Full Address</label>
                    <input type="text" class="form-control" name="full_address" value="<?php echo $users_customer->full_address; ?>"/>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $users_customer->email; ?>"/>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary mb-4" value="Update Profile"/>
                </div>
            </form>
        </div>
    </div>
</div>