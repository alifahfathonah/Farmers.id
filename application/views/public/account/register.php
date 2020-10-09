
<div class="container mb-4" style="width: 100%; max-width: 100%; padding: 0px; min-height: 600px">
    <div class="row category-sample-image mb-4">
        <div class="col-md-12 mt-4 mb-4">
            <h5 class="mt-4 mb-2 mt-4 pa-lc-5">
                <a href="<?php echo base_url(''); ?>" class="pa-lc-5">Account</a> | 
                <b>Register</b></h5>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="<?php echo base_url('api/register'); ?>" class="ajax-form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="full_name"/>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" name="phone"/>
                        </div>
                        <div class="form-group">
                            <label>Full Address</label>
                            <input type="text" class="form-control" name="full_address"/>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email"/>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password"/>
                        </div>
                        <div class="form-group">
                            <label>Retype Password</label>
                            <input type="password" class="form-control" name="retype_password"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary mb-4" value="Register"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>