<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Raleway">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.css"/>
		<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.js"></script>

		<style type="text/css">
			body {
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
				max-width: 60px;
				margin: -13px -16px;
				object-fit: contain;
			}
			.container {
				width: 100% !important;
				max-width: 100% !important;
			}
			.container.container-admin {
				padding: 0px;
				height: 100%;
				overflow-y: hidden;
				overflow-x: hidden;
			}
			#carouselExampleIndicators img {
				height: 520px;
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
				background-color: #ff4364;
			}
			
			.pa-bc-2 {
				background-color: #ADD8E6;
			}

			.pa-bc-3 {
				background-color: #facdae;
			}

			.pa-bc-3-05 {
				background-color: #DCDCDC;
			}

			.pa-bc-4 {
				background-color: #c8c7a8;
			}

			.pa-bc-5 {
				background-color: #84af9b;
			}

			.pa-lc-1, .page-link {
				color: #ff4364;
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
				color: #84af9b;
			}

			.pa-lc-white {
				color: #fff;
				border-color: #fff;
			}

			.btn-primary, .btn-primary:active {
				background-color: #ADD8E6 !important;
				border: none !important;
				-webkit-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.14);
				-moz-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.14);
				box-shadow: 0px 0px 3px 1px rgba(0, 0, 0, 0.14);
				padding-left: 30px;
			    padding-right: 30px;
			}

			.btn-primary, .btn-info, .btn-danger {
				-webkit-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.14);
				-moz-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.14);
				box-shadow: 0px 0px 3px 1px rgba(0, 0, 0, 0.14)
			}
			
			.btn-primary:hover {
				background-color: #bf1c39 !important;
				border: none !important;
			}

			.link-image-list{
				display: block;
			}

			table td {
				font-size: 14px;
			}

			.nav-pills .nav-link.active, .nav-pills .show>.nav-link{
				background-color: #ADD8E6 !important;
				color: #fff !important;
			}

			.nav-pills .nav-link {
				border-radius: 0px !important;
			}

			#v-pills-tab {
				min-height: 650px;
			}

			#v-pills-tab a {
				color: #000000;
			}

			#v-pills-tab .nav-link {
				padding: 13px 20px;
			    border-bottom: 1px #000000 solid;
			}

			.table img {
				max-width: 200px;
			}

			.card {
				-webkit-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.14);
				-moz-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.14);
				box-shadow: 0px 0px 3px 1px rgba(0, 0, 0, 0.14);
			}

			.nav-link .badge-notification {
				color: #ADD8E6 !important;
				padding: 2px 6px;
				margin-left: 6px;
				border-radius: 4px;
				background-color: #fff;
				-webkit-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.14);
				-moz-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.14);
				box-shadow: 0px 0px 3px 1px rgba(0, 0, 0, 0.14);
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
				<form class="form-inline my-2 my-lg-0 mr-4 ml-auto">
				
				</form>
				<ul class="navbar-nav mt-2 my-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('logout'); ?>">Logout</a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="container container-admin">
			<div class="row" style="height: 100%;">
				<div class="col-2">

					<?php
					$ci =& get_instance();
					$ci->load->model('Process_order');
					$get_wait_verification = $ci->Process_order->get_wait_verification();
					if($get_wait_verification != null)
						$get_wait_verification = count($get_wait_verification);
					else
						$get_wait_verification = null;
					?>

					<div class="nav flex-column nav-pills pa-bc-3-05" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link <?php echo $this->uri->segment(2) == 'dashboard' ? 'active' :'' ;?>" href="<?php echo base_url('administrator/dashboard'); ?>">Dashboard</a>
						<a class="nav-link <?php echo $this->uri->segment(2) == 'content_management' ? 'active' :'' ;?>" href="<?php echo base_url('administrator/content_management'); ?>">Content Management</a>
						<a class="nav-link <?php echo $this->uri->segment(2) == 'wraping' ? 'active' :'' ;?>" href="<?php echo base_url('administrator/wraping'); ?>">Packaging Menu</a>
						<a class="nav-link <?php echo $this->uri->segment(2) == 'product_inventory' ? 'active' :'' ;?>" href="<?php echo base_url('administrator/product_inventory'); ?>">Product Inventory</a>
						<a class="nav-link <?php echo $this->uri->segment(2) == 'product_category' ? 'active' :'' ;?>" href="<?php echo base_url('administrator/product_category'); ?>">Product Category</a>
						<a class="nav-link <?php echo $this->uri->segment(2) == 'transaction' ? 'active' :'' ;?>" href="<?php echo base_url('administrator/transaction'); ?>">Transaction <?php echo $get_wait_verification != null ? '<span class="badge-notification">' . $get_wait_verification . '</span>' : ''; ?></a>
						<a class="nav-link <?php echo $this->uri->segment(2) == 'users' ? 'active' :'' ;?>" href="<?php echo base_url('administrator/users'); ?>">Users Admin</a>
						<a class="nav-link <?php echo $this->uri->segment(2) == 'report' ? 'active' :'' ;?>" href="<?php echo base_url('administrator/report'); ?>">Report</a>
					</div>
				</div>
				<div class="col-10" style="overflow-y: scroll; height: 100%;">

					<?php $this->load->view($data['page'], isset($data['content']) ? $data['content'] : null); ?>
				
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