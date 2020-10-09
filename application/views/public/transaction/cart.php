
<div class="container mb-4" style="width: 100%; max-width: 100%; padding: 0px; min-height: 600px">
    <div class="row category-sample-image">
        <div class="col-md-12 mt-4">
            <h5 class="mt-4 mb-2 mt-4 pa-lc-5">
                <a href="<?php echo base_url(''); ?>" class="pa-lc-5">Home</a> | 
                <b>My Cart</b></h5>
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
            <h3 class="text-right">Total Belanja : Rp <?php echo number_format($total); ?></h3>
        </div>
        <div class="col-md-3">
            <h5>Mohon isi Alamat Lengkap Anda ya!</h5>
            <form method="post" action="<?php echo base_url('transaction/package_wrap'); ?>">
                <textarea class="form-control mt-2 mb-4 pa-lc-2" style="height: 150px" name="destination_address" required></textarea>
                <input type="submit" class="btn btn-primary" value="Next">
            </form>
        </div>
    </div>
</div>