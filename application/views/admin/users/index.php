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
        <div class="container" style="margin-left: 225px;">

    <div class="row mt-5">
        <div class="col">
        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
            <div class="card">
             <div class="container">
    <div class="row mt-5">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <?php echo $this->session->flashdata('result'); ?>
                    <table class="table table-hover table-bordered" id="myTable"> 
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>password</th>
                                <th>email</th>
                                <th>Address</th>
                                <th>Telephone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $rows) : ?>
                                <tr>
                                    <td><?php echo $rows->id_user; ?></td>
                                    <td><?php echo $rows->name; ?></td>
                                    <td><?php echo $rows->username; ?></td>
                                    <td><?php echo $rows->password; ?></td>
                                    <td><?php echo $rows->email; ?></td>
                                    <td><?php echo $rows->addres; ?></td>
                                    <td><?php echo $rows->telephone; ?></td>
                                    <td>
                                        <!-- <a href="<?php echo site_url(); ?>UsersClient/put/<?php echo $rows->id_user; ?>">Update</a> -->
                                        
                                        <a href="<?php echo site_url(); ?>UsersClient/delete/<?php echo $rows->id_user; ?>" class="btn btn-danger"  onclick="return confirm('Yakin Data Ini Akan Dihapus');"> <i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- <a href="<?php echo site_url(); ?>UsersClient/post">Tambah</a> -->
                    
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


















