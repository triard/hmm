<!DOCTYPE html>
<html lang="en">

<head>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>

	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<!-- 
        karena ini halaman overview (home), kita matikan partial breadcrumb.
        Jika anda ingin mengampilkan breadcrumb di halaman overview,
        silahkan hilangkan komentar (//) di tag PHP di bawah.

		-->
		
		<div class="container" style="margin-left:210px; margin-top:50px;">
		<br><br>
		<div class="container">
		<?php $this->load->view("admin/_partials/breadcrumb.php")?>
		</div>
		</div>
			<br>
				<div class="row" style="margin-left:250px;">

					<div class="col-xl-3 col-sm-6 mb-3">

						<div class="card text-white bg-primary o-hidden h-100">
							<div class="card-header">
								<h3>Ticket</h3>
							</div>
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fab fa-money"></i>
								</div>
								<div class="mr-5">amount <?php echo $total_ticket; ?></div>
							</div>
							<div class="card-footer">
								<a href="<?php base_url(); ?> TicketClient/getProduct" class="btn btn-danger float float-right">
									<i class="fas fa-eye "></i>
								</a>
							</div>
						</div>

					</div>
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white bg-warning o-hidden h-100">
							<div class="card-header">
								<h3>Categories</h3>
							</div>
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-align-left"></i>
								</div>
								<div class="mr-5">amount <?php echo $total_categories; ?></div>
							</div>
							<div class="card-footer">
								<a href="<?php base_url(); ?>CategoryClient/" class="btn btn-danger float float-right">
									<i class="fas fa-eye"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white bg-success o-hidden h-100">
							<div class="card-header">
								<h3>Users</h3>
							</div>
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-user"></i>
								</div>
								<div class="mr-5">amount <?php echo $total_user; ?></div>
							</div>
							<div class="card-footer">
								<a href="<?php base_url(); ?>UsersClient/" class="btn btn-danger float float-right">
									<i class="fas fa-eye"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white bg-info o-hidden h-100">
							<div class="card-header">
								<h3>Transaction</h3>
							</div>
							<div class="card-body">
								<div class="card-body-icon">
								<i class="fas fa-exchange-alt"></i>
								</div>
								<div class="mr-5">amount <?php echo $total_transaction; ?></div>
							</div>
							<div class="card-footer">
								<a href="<?php base_url(); ?>TransactionClient/getProduct" class="btn btn-danger float float-right">
									<i class="fas fa-eye"></i>
								</a>
							</div>
						</div>
					</div>
				</div>

				<!-- Area Chart Example-->
				<!-- <div class="card mb-3">
					<div class="card-header">
						<i class="fas fa-chart-area"></i>
						Visitor Stats</div>
					<div class="card-body">
						<canvas id="myAreaChart" width="100%" height="30"></canvas>
					</div>
					<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
				</div>
			</div>
			 /.container-fluid -->

				<!-- Sticky Footer -->