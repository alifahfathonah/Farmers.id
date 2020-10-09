
    <h4 class="mt-4 mb-4">My Cart</h4>

    <div class="card">
        <div class="card-body">
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
            <h3 class="text-right">Total : Rp <?php echo number_format($total); ?></h3>
            <a href="<?php echo base_url('transaction/cart');?>" class="btn btn-primary">Process Cart</a>
        </div>
    </div>
</div>