<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Raleway">
		<link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.css"/>
		<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.js"></script>

		<style type="text/css">
			body {
				font-family: 'Raleway', serif;
				padding-top: 56px;
				font-family: 'Raleway', serif;
				padding-top: 56px;
				overflow-x: hidden;
			}
			.navbar {
				-webkit-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.14);
				-moz-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.14);
				box-shadow: 0px 0px 3px 1px rgba(0, 0, 0, 0.14);
			}
			.navbar-brand img {
				max-width: 67px;
				margin: -13px -16px;
				object-fit: contain;
			}
			.navbar-brand h3 {
				display: block;
				float: right;
				margin-left: 30px;
				color: #fff;
				margin-top: 6px;
				margin-bottom: 0px;
			}
			#carouselExampleIndicators img {
				height: 440px;
				object-fit: cover;
			}
			.category-sample-image {
				margin: 0px auto;
				max-width: 992px;
				width: 100%;
			}
			.container-home .category-sample-image:nth-child(4) {
				width: 780px;
			}
			.category-sample-image img {
				width: 100% !important;
				/* margin: 1.5rem 0px !important; */
			}

			.pa-bc-1 {
				background-color: #F0FFFF;
			}
			
			.pa-bc-2 {
				background-color: #ADD8E6;
			}

			.pa-bc-3 {
				background-color: #7971EA;
			}

			.pa-bc-3-05 {
				background-color: #F0FFFF;
			}

			.pa-bc-4 {
				background-color: #20B2AA;
			}

			.pa-bc-5 {
				background-color: #84af9b;
			}

			.pa-lc-1, .page-link {
				color: #008000;
			}

			.page-item a.page-link {
				border-color: #20B2AA;
				transition: .25s all ease-in;
			}

			.page-item a.page-link:hover, .page-item.active a.page-link {
				border-color: #20B2AA;
				background-color: #84af9b;
				color: #fff;
			}
			
			.pa-lc-2 {
				color: #fc9d99;
				border-color: #fc9d99;
			}

			.pa-lc-3 {
				color: #facdae;
			}

			.pa-lc-4 {
				color: #c8c7a8;
			}

			.pa-lc-5 {
				color: #008000;
			}

			.pa-lc-white {
				color: #fff;
				border-color: #fff;
			}

			.btn-primary, .btn-primary:active {
				background-color: #8FBC8F !important;
				border: none !important;
				-webkit-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.14);
				-moz-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.14);
				box-shadow: 0px 0px 3px 1px rgba(0, 0, 0, 0.14);
				padding-left: 30px;
			    padding-right: 30px;
			}
			
			.btn-primary:hover {
				background-color: #bf1c39 !important;
				border: none !important;
			}

			.link-image-list{
				display: block;
				border: 1px #eee solid;
				color: #84af9b !important;
				-webkit-box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.05);
				-moz-box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.05);
				box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.05);
			}

			table td {
				font-size: 14px;
			}

			.card {
				-webkit-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.14);
				-moz-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.14);
				box-shadow: 0px 0px 3px 1px rgba(0, 0, 0, 0.14);
			}

			.nav-item.nav-cart {
				padding: 4px;
				border: 1px #fff solid;
				margin-right: 10px;
				border-radius: 5px;
				background-color: #ffffff42;
				position: relative;
			}

			.nav-item.nav-cart label {
				position: absolute;
				right: 0px;
				bottom: 0px;
				background-color: #fff;
				width: 20px;
				height: 20px;
				border-radius: 10px;
				padding: 0px;
				margin: 0px;
				padding-left: 5px;
			}

			.nav-item.nav-cart span {
				top: -3px;
			    position: absolute;
			}
			
			#select_wrap .carousel-control-next, #select_wrap .carousel-control-prev, #select_card .carousel-control-next, #select_card .carousel-control-prev {
				background-color: #F44336;
			}

			#select_wrap .carousel-indicators li, #select_card .carousel-indicators li {
				-webkit-box-shadow: 0px 0px 3px 1px rgba(0, 0, 0, 0.34);
				-moz-box-shadow: 0px 0px 3px 1px rgba(0, 0, 0, 0.34);
				box-shadow: 0px 0px 3px 1px rgba(0, 0, 0, 0.34);
				width: 20px;
				height: 20px;
				border-radius: 10px;
				opacity: 1;
			}
			
			#select_wrap .carousel-indicators .active, #select_card .carousel-indicators .active {
				background-color: #F44336;
			}

			.btn .badge-notification {
				background-color: #ff4364 !important;
				padding: 2px 6px;
				margin-left: 6px;
				border-radius: 4px;
			}
			
		</style>
	</head>
	<body>

		<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle"><?php echo ucfirst($this->session->userdata('status')); ?></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<?php echo ucfirst($this->session->userdata('message')); ?> 
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<nav class="navbar navbar-expand-lg navbar-light pa-bc-2 fixed-top">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<a class="navbar-brand" href="<?php echo base_url(''); ?>">
					<h3>Farmers.id</h3>
				</a>
				<form class="form-inline my-2 my-lg-0 mr-4 ml-auto">
					<input class="form-control mr-sm-2 pa-lc-2" type="search" placeholder="Search" aria-label="Search" style="width: 250px;">
				</form>
				<?php if($this->session->userdata('user')) { ?>
					<?php
						$ci =& get_instance();
						$ci->load->model('Cart');
						$get_cart = $ci->Cart->get($this->session->userdata('user')->id);
						if($get_cart != null)
							$get_cart = count($get_cart);
						else
							$get_cart = null;
					?>
				<ul class="navbar-nav mt-2 my-lg-0">
					<li class="nav-item nav-cart">
						<a class="nav-link" href="<?php echo base_url('transaction/cart'); ?>"><i class="fa fa-shopping-cart"></i></a>
						<?php if($get_cart != null){ ?>
						<label><span><?php echo $get_cart; ?></span></label>
						<?php } ?>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('account/profile'); ?>"><?php echo $this->session->userdata('user')->full_name; ?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('account/logout'); ?>">Logout</a>
					</li>
				</ul>
				<?php } else { ?>
				<ul class="navbar-nav mt-2 my-lg-0">
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo base_url('account/login'); ?>">Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('account/register'); ?>">Register</a>
					</li>
				</ul>
				<?php } ?>
			</div>
		</nav>

		<?php 
			if(strpos($data['page'], 'customer/account') !== false) {
				$this->load->view('customer/account', [
					$data['page'],
					isset($data['content']) ? $data['content'] : null
				]);
			} else {
				$this->load->view($data['page'], isset($data['content']) ? $data['content'] : null); 
			}
		?>

		<div class="container pa-lc-white" style="width: 100%; max-width: 100%; padding: 0px;">
			<div class="row">
				<div class="col-md-12 pa-bc-4 text-center ">
					<p class="m-1">Follow Us On Twitter and Instagram</p>
				</div>
				<div class="col-md-12 pa-bc-5 text-center">
					<p class="m-3">Powered by Farmers.id</p>
				</div>
			</div>
		</div>

	</body>

	<script src="<?php echo base_url('public/js/custom.js'); ?>"></script>

	<?php if($this->session->flashdata('status') != null) { ?>
		<script>
			$('#exampleModalLong').modal('show');
		</script>
	<?php } ?>

</html>