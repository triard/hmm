

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
<br><br>
        <!-- /.container-fluid -->
        <div class="container" style="margin-left: 225px;">
    <div class="row">
        <div class="col">
        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
            <div class="card" style="padding: 15px">
                <div class="card-body">
                    <?php echo $this->session->flashdata('result'); ?>
                    <form enctype="multipart/form-data" action="<?php echo site_url(); ?>TicketClient/post_process" class="needs-validation" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" id="fest_name" placeholder="Nama" name="fest_name" required>
                        </div>
                        <div class="form-item">
                                                <label for="id_category">Category</label>
                                                <select name="id_category" class="form-input" required>
                                                    <option selected>Choose a category</option>
                                                    <? foreach ($category as $category) : ?>
                                                        <option value="<?= $category->id_category; ?>"><?= $category->name; ?></option>
                                                        
                                                    <? endforeach ?>
                                                </select>
                                            </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="qty" placeholder="qty" name="qty" required>
                        </div>
                        <div class="form-group">
                            Rp.<input type="number" class="form-control" id="price" placeholder="price" name="price" required>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" id="images" placeholder="images" name="images" required>
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" id="date" placeholder="date" name="date" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">+ add</button>
                            </form>
                            <a href="<?php echo site_url(); ?>TicketClient/getProduct" class="btn btn-danger">back</a>
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


















