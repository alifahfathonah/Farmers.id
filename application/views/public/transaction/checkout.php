
<div class="container mb-4" style="width: 100%; max-width: 100%; padding: 0px; min-height: 600px">
    <div class="row category-sample-image">
        <div class="col-md-12 mt-4">
            <h5 class="mt-4 mb-2 mt-4 pa-lc-5">
                <a href="<?php echo base_url(''); ?>" class="pa-lc-5">Home</a> | 
                My Cart > Pilih Packaging > <b>Checkout</b></h5>
        </div>
    </div>
    <div class="row category-sample-image mt-4 mb-4">
        <div class="col-md-9">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Price</th>
                        <th scope="col">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                
                    <?php 
                    $total = 0;
                    if($cart != null) {
                        foreach($cart as $key => $temp) { 
                    ?>

                    <tr>
                        <th scope="row"><?php echo $key + 1; ?></th>
                        <td>
                            <img src="<?php echo base_url('public/uploads/product/'.$temp->image); ?>" style="width: 110px !important;"/>
                        </td>
                        <td><?php echo $temp->name; ?></td>
                        <td>1</td>
                        <td>Rp <?php echo number_format($temp->price); ?></td>
                        <td>Rp <?php echo number_format($temp->price); $total += $temp->price; ?></td>
                    </tr>

                    <?php 
                        }
                    }
                    ?>
                </tbody>
            </table>
            <h5 class="text-right">Total : Rp <?php echo number_format($total); ?></h5>
            <h5 class="text-right">Ongkos Kirim : Rp 10,000.00</h5>
            <hr/>
            <h3 class="text-right">Grand Total : Rp <?php echo number_format($total + 10000); ?></h3>
        </div>
        <div class="col-md-3">
            <div class="form-group mb-4 mt-4">
                <label class="pa-lc-5 mb-0">Package Type :</label>
                <p><?php echo $wrapping_type->name; ?></p>
                <img class="d-block w-100" src="<?php echo base_url('public/uploads/wraping_type/' . $wrapping_type->image); ?>" style="max-width: 100px;">
                <hr/>
            </div>
            <div class="form-group mb-4 mt-4">
                <label class="pa-lc-5 mb-0">Message (Optional) :</label>
                <p><?php echo $form_data['message']; ?></p>
            </div>
            <div class="form-group mb-4 mt-4">
                <label class="pa-lc-5 mb-0">Alamat Lengkap Anda, Sudah Benar? :</label>
                <p><?php echo $form_data['destination_address']; ?></p>
            </div>
            <form method="post" action="<?php echo base_url('transaction/payment_process'); ?>">
                <input type="hidden" name="message" id="message" value="<?php echo $form_data['message']; ?>"/>
                <input type="hidden" name="wrapping_type_id" id="wrapping_type_id" value="<?php echo $form_data['wrapping_type_id']; ?>"/>
                <input type="hidden" name="destination_address" value="<?php echo $form_data['destination_address']; ?>"/>
                <input type="submit" class="btn btn-primary" value="Lanjut Pembayaran">
            </form>
        </div>
    </div>
</div>