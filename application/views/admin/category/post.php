

<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">

<?php $this->load->view("admin/_partials/navbar.php") ?>

<div id="wrapper">

	<?php $this->load->view("admin/_partials/sidebar.php") ?>

	<div id="content-wrapper">

    <br><br><br>

        <!-- /.container-fluid -->
        <div class="container" style="margin-left: 225px;">
    <div class="row">
        <div class="col">
        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
            <div class="card">
                <div class="card-body">
                    <?php echo $this->session->flashdata('result'); ?>
                    <form action="<?php echo site_url(); ?>CategoryClient/post_process" class="needs-validation" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Nama" name="name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="desc" placeholder="Desc" name="desc" required>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary">+ add</button>
                            </form>
                            <a href="<?php echo site_url(); ?>CategoryClient/" class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i>  back</a>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>


		<!-- Sticky Footer -->


	</div>
	<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    
</body>
</html>


















