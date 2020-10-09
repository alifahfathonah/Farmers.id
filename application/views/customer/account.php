<div class="container pa-bc-3-05 mb-4" style="width: 100%; max-width: 100%;">
    <div class="row bg-light">
        <div class="col-md-2 mt-4 mb-4" style="margin-bottom: 300px !important;">
            
            <?php
                $ci =& get_instance();
                $ci->load->model('Process_order');
                $get_wait_payment = $ci->Process_order->get_by_user_wait_payment();
                if($get_wait_payment != null)
                    $get_wait_payment = count($get_wait_payment);
                else
                    $get_wait_payment = null;

                    
                $ci->load->model('Cart');
                $get_cart = $ci->Cart->get($this->session->userdata('user')->id);
                if($get_cart != null)
                    $get_cart = count($get_cart);
                else
                    $get_cart = null;
            ?>

            <h4 class="mt-4"><?php echo $this->session->userdata('user')->full_name; ?></h4>
            <hr/>
            <a class="btn <?php echo $this->uri->uri_string() == 'account/profile' ? 'btn-secondary' : 'btn-info'; ?> btn-block" href="<?php echo base_url('account/profile'); ?>">My Account</a>
            <a class="btn <?php echo $this->uri->uri_string() == 'account/orders' ? 'btn-secondary' : 'btn-info'; ?> btn-block" href="<?php echo base_url('account/orders'); ?>">My Order <?php echo $get_wait_payment != null ? '<span class="badge-notification">' . $get_wait_payment . '</span>' : ''; ?></a>
            <a class="btn <?php echo $this->uri->uri_string() == 'account/cart' ? 'btn-secondary' : 'btn-info'; ?> btn-block" href="<?php echo base_url('account/cart'); ?>">Cart <?php echo $get_cart != null ? '<span class="badge-notification">' . $get_cart . '</span>' : ''; ?></a>
            <a class="btn btn-info btn-block" href="<?php echo base_url('account/logout'); ?>">Log Out</a>
        </div>
        <div class="col-md-10 mt-4 mb-4">
            <?php 
                $this->load->view($data['page'], isset($data['content']) ? $data['content'] : null); 
            ?>
        </div>
    </div>
</div>