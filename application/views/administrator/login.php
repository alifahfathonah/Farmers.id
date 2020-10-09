
<div class="container mb-4" style="width: 100%; max-width: 100%; padding: 0px; min-height: 600px">
    <div class="row category-sample-image mb-4 text-center">
        <div class="col-md-12 mt-4 mb-4">
            <div class="card w-50" style="margin: 0px auto">
                <div class="card-body">
                    <?php if($this->session->flashdata('message')) { ?>
                        <div class="alert alert-primary" role="alert">
                            This is a primary alert—check it out!
                        </div>
                    <?php } ?>
                    <h2 class="pa-lc-5">Hello Admin Farmersid!</h2>
                    <img src="<?php echo base_url('public/product/logo.jpg'); ?>" style="width: 200px !important;"/> 
                    <form class="mb-4" method="POST">
                        <div class="form-group">
                            <br>
                            <label>Username / Email</label>
                            <input type="text" class="form-control" name="username"/>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary mb-4" value="Login"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>