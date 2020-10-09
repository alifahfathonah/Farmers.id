
<div class="container mb-4" style="width: 100%; max-width: 100%; padding: 0px; min-height: 600px">
    <div class="row category-sample-image">
        <div class="col-md-12 mt-4">
            <h5 class="mt-4 mb-2 mt-4 pa-lc-5">
                <a href="<?php echo base_url(''); ?>" class="pa-lc-5">Home</a> | 
                My Cart > Pilih Packaging > Checkout > <b>Lanjut Pembayaran</b></h5>
        </div>
    </div>
    <div class="row category-sample-image mt-4 mb-4">
        <div class="col-md-9 mt-4 mb-4">
            <h3 class="mb-4">Process Order Code : <span class="pa-lc-2"> <?php echo $process_order->code; ?></span></h3>
            <h5>Transfer Account : </h5>
            <h5>BCA : xxxxxxxxxxxxxx</h5>
            <h5>BNI : xxxxxxxxxxxxxx</h5>
            <hr/>
            <h3>Jumlah Pembayaran : <span class="pa-lc-2">Rp <?php echo number_format($process_order->total+10000); ?></span></h3>
            <!-- <a href="<?php echo base_url('transaction/payment_process'); ?>" class="btn btn-primary mt-4">Upload Proof of Payment</a> -->
            <a href="<?php echo base_url('account/orders'); ?>" class="btn btn-primary mt-4">Upload bukti pembayaran</a>
            <a href="<?php echo base_url(''); ?>" class="btn btn-secondary mt-4">Back to Home</a>
        </div>
    </div>
</div>