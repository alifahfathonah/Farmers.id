
<div class="container mb-4" style="width: 100%; max-width: 100%; padding: 0px; min-height: 600px">
    <div class="row category-sample-image">
        <div class="col-md-12 mt-4">
            <h5 class="mt-4 mb-2 mt-4 pa-lc-5">
                <a href="<?php echo base_url(''); ?>" class="pa-lc-5">Home</a> | 
                My Cart > <b> Pilih Packaging </b></h5>
        </div>
    </div>
    <form action="<?php echo base_url('transaction/checkout'); ?>" method="post">
        <div class="row category-sample-image mt-4 mb-4">
            <div class="col-md-4">
                <h3 class="mb-4 pa-lc-1">Select Package</h3>
                <div id="select_wrap" class="carousel slide">
                    <ol class="carousel-indicators">

                        <?php
                            if(count($data['content']['wrapping_type']) > 0) {
                                foreach($data['content']['wrapping_type'] as $key => $temp) {
                        ?>
                        
                        <li data-target="#select_wrap" data-slide-to="<?php echo $key; ?>" <?php echo $key == 0 ? 'class="active"' : ''; ?>></li>
                        
                        <?php
                                }
                            }
                        ?>
                        
                    </ol>
                    <div class="carousel-inner">

                        <?php
                            if(count($data['content']['wrapping_type']) > 0) {
                                foreach($data['content']['wrapping_type'] as $key => $temp) {
                        ?>

                        <div class="carousel-item <?php echo $key == 0 ? 'active' : ''; ?>" data-name="<?php echo $temp->name; ?>" data-id="<?php echo $temp->id; ?>">
                            <img class="d-block w-100" src="<?php echo base_url('public/uploads/wraping_type/' . $temp->image); ?>">
                        </div>

                        <?php
                                }
                            }
                        ?>
                        
                    </div>
                </div>  
                <h3 class="mt-4 mb-4" id="display_wrap"></h3>
            </div>
                    <a class="carousel-control-prev" href="#select_card" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#select_card" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>  
                  <div class="col-md-4">
                <h3 class="mb-4 pa-lc-1">Tulis di bawah ini untuk tambahan! (Optional)</h3>
                <textarea class="form-control mt-2 mb-4 pa-lc-2" style="height: 150px" name="message"></textarea>
                <input type="hidden" name="wrapping_type_id" id="wrapping_type_id"/>
                <input type="hidden" name="destination_address" value="<?php echo $form_data['destination_address']; ?>"/>
            </div>
            <div class="col-12 mt-4 mb-4 text-center">
                <input type="submit" class="btn btn-primary" value="Checkout">
            </div>
        </div>
    </form>
</div>

<script>
$(document).ready(function() {
    $('.carousel').carousel('pause');
    $('#select_wrap').on('slide.bs.carousel', function(e) {
        setVal('#display_wrap', e.relatedTarget.dataset.name, '#wrapping_type_id', e.relatedTarget.dataset.id)
    });
    function setVal(id_heading, val_heading, id_input, val_input) {
        $(id_heading).text(val_heading);
        $(id_input).val(val_input);
    }
    setVal('#display_wrap', $('#select_wrap .carousel-item.active').data('name'), '#wrapping_type_id', $('#select_wrap .carousel-item.active').data('id'))
    
})
</script>