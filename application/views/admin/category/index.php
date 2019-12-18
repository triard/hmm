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

        <!-- /.container-fluid -->
        <div class="container"  style="margin-left: 225px;">
         <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
    <div class="row mt-5">
        <div class="col">
            <div class="card">
             <div class="container" >
             <a style="margin: 10px;" href="<?php echo site_url(); ?>CategoryClient/post"class="btn btn-primary" ><i class="fa fa-plus" aria-hidden="true" ></i> Data</a>
    <div class="row mt-5">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <?php echo $this->session->flashdata('result'); ?>
                    <table class="table table-hover table-bordered"  id="myTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Categoory</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($menu as $rows) : ?>
                                <tr>
                                    <td><?php echo $rows->id_category; ?></td>
                                    <td><?php echo $rows->name; ?></td>
                                    <td><?php echo $rows->desc; ?></td>
                                    <td>
                                    <a href="<?php echo site_url(); ?>CategoryClient/put/<?php echo $rows->id_category; ?>" class="btn btn-warning"><i class="fa fa-edit" style="font-size:15px"></i></a>
                                        <a href="<?php echo site_url(); ?>CategoryClient/delete/<?php echo $rows->id_category; ?> "class="btn btn-danger"  onclick="return confirm('Yakin Data Ini Akan Dihapus');"> <i class="fa fa-trash"></i></a>
                                        </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
               
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


















