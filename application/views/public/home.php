
<div class="container pa-bc-3-05 mb-4 container-home" style="width: 100%; max-width: 100%; padding: 0px;">
    <div class="row bg-light">
        <div class="col-md-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">

                    <?php
                        if(count($data['content']['banner']) > 0) {
                            foreach($data['content']['banner'] as $key => $temp) {
                    ?>
                    
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $key; ?>" <?php echo $key == 0 ? 'class="active"' : ''; ?>></li>
                    
                    <?php
                            }
                        }
                    ?>
                    
                </ol>
                <div class="carousel-inner">

                    <?php
                        if(count($data['content']['banner']) > 0) {
                            foreach($data['content']['banner'] as $key => $temp) {
                    ?>

                    <div class="carousel-item <?php echo $key == 0 ? 'active' : ''; ?>">
                        <img class="d-block w-100" src="<?php echo base_url('public/uploads/banner/'.$temp->image); ?>">
                    </div>

                    <?php
                            }
                        }
                    ?>
                    
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>    
        </div>
        <div class="col-md-12">
            <ul class="nav justify-content-center mt-4 mb-4">
            
                <?php
                    if(count($data['content']['category']) > 0) {
                        foreach($data['content']['category'] as $key => $temp) {
                ?>

                    <li class="nav-item">
                        <a class="nav-link pa-lc-1" href="<?php echo base_url('categories/product/'.$temp->id); ?>"><?php echo $temp->name; ?></a>
                    </li>

                <?php 
                        }
                    }
                ?>

            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-4 text-center">
            <h2 class="mt-4 mb-4 mt-4 pa-lc-5"> HELLO, HOW ARE YOU? </h2>
        </div>
    </div>
    
    <div class="row category-sample-image">

        <?php
            if(count($data['content']['category']) > 0) {
                foreach($data['content']['category'] as $key => $temp) {
                    if($key < 4) {
        ?>

            <div class="col mb-4">
                <a href="<?php echo base_url('categories/product/'.$temp->id); ?>">
                    <img src="<?php echo base_url('public/uploads/category/'.$temp->image); ?>" style="width: 285px; height: 192px; object-fit: contain;"/>
                </a>
            </div>

        <?php 
                    }
                }
            }
        ?>

    </div>
    <div class="row category-sample-image">
            
        <?php
            if(count($data['content']['category']) > 3) {
                foreach($data['content']['category'] as $key => $temp) {
                    if($key > 3 && $key < 8) {
        ?>

            <div class="col mb-4">
                <a href="<?php echo base_url('categories/product/'.$temp->id); ?>">
                    <img src="<?php echo base_url('public/uploads/category/'.$temp->image); ?>" style="width: 285px; height: 192px; object-fit: contain;"/>
                </a>
            </div>

        <?php 
                    }
                }
            }
        ?>

    </div>
    <div class="row mb-4">
        <div class="col-12 text-center mb-4">
            <button type="button" class="btn btn-primary mb-4">See More</button>
        </div>
    </div>
</div>
<div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 mb-5 text-center"  data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Our Testimonial</h2>
          </div>
        </div>

        <div class="row">

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="teacher text-center">
              <img src="<?php echo base_url();?>public/product/person_1.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Benjamin Stone</h3>
                <p class="position">Student</p>
                <p> Aplikasinya Keren! <p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="teacher text-center">
              <img src="<?php echo base_url();?>public/product/person_3.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Katleen Stone</h3>
                <p class="position">Student</p>
                <p> Memudahkan dalam berbelanja! </p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="teacher text-center">
              <img src="<?php echo base_url();?>public/product/person_2.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Sadie White</h3>
                <p class="position">Student</p>
                <p> Mudah, Prosesnya juga Gampang! </p>
              </div>
            </div>
          </div>
        </div>
      </div>