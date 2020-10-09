
<div class="container mb-4" style="width: 100%; max-width: 100%; padding: 0px; min-height: 600px">
    <div class="row">
        <div class="col-md-12">
            <img src="<?php echo base_url('public/product/hero_2.jpg'); ?>" style="height: 240px; width: 100%; object-fit: cover; "/>
        </div>
    </div>
    <div class="row category-sample-image">
        <div class="col-md-12 mt-4">
            <a href="<?php echo base_url(''); ?>" class="pa-lc-5">Home</a>
            <h1 class="mb-4 mt-0 pa-lc-5"><?php echo $category->name ;?></h1>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="row category-sample-image">

        <?php 
        if($product != null) {
            foreach($product as $key => $temp) { 
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
        ?>

    </div>
    <div class="row category-sample-image mt-3">
        <div class="col-md-12 mb-4">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>