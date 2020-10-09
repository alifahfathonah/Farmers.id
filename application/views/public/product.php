
<div class="container mb-4" style="width: 100%; max-width: 100%; padding: 0px; min-height: 600px">
    <div class="row">
        <div class="col-md-12">
            <img src="<?php echo base_url('public/product/farm.jpg'); ?>" style="height: 240px; width: 100%; object-fit: cover; "/>
        </div>
    </div>
    <div class="row category-sample-image">
        <div class="col-md-12 mt-4">
            <h5 class="mt-4 mb-2 mt-4 pa-lc-5">
                <a href="<?php echo base_url(''); ?>" class="pa-lc-5">Home</a> | 
                <a href="<?php echo base_url('categories/product/'.$category->id); ?>" class="pa-lc-5"><?php echo $category->name; ?></a>
                 | <b><?php echo $product->name; ?></b></h5>
        </div>
    </div>
    <div class="row category-sample-image mt-4 mb-4">
        <div class="col-md-5">
            <img src="<?php echo base_url('public/uploads/product/'.$product->image); ?>" style="width: 100%; "/>
        </div>
        <div class="col-md-7">
            <h2><?php echo $product->name; ?></h2>
            <p>
                <?php echo $product->description;?>
            </p>
            <h4>Price : Rp <?php echo number_format($product->price); ?></h4>
            <a href="<?php echo base_url('transaction/cart/add/'.$product->id); ?>" class="btn btn-primary mt-4">Add to Cart</a>
        </div>
    </div>
    <div class="row category-sample-image">

        <div class="col-12">
            <hr/>
            <h2 class="mt-2 mb-4">Other Products</h2>
        </div>

        <?php 
        if($product_by_category != null) {
            foreach($product_by_category as $key => $temp) { 
                if($key < 4 && $temp->id != $product->id) {
        ?>

            <div class="col-3 mb-3">
                <a href="<?php echo base_url('products/view/'.$temp->id); ?>" class="link-image-list">
                    <img src="<?php echo base_url('public/uploads/product/'.$temp->image); ?>" style="width: 285px; height: 192px; object-fit: contain;"/>
                    <h5 class="ml-2 mt-2 mb-0"><b><?php echo $temp->name; ?></b></h5>
                    <h6 class="ml-2">Rp <?php echo number_format($temp->price); ?></h6>
                </a>
            </div>

        <?php
                }
            } 
        }
        ?>

    </div>
</div>