<div class="container" style="font-family: 'Roboto Condensed', sans-serif;">
    <br>
    <div class="card">
        <div class="card-header">
            <center>
                <h2 class="card-title"><?php echo $ticket['fest_name']; ?></h2>
            </center>
        </div>
        <div class="card-body">
            <p class="card-text">
                <center>
                    <img src="<?= base_url() . 'images/event/' . $ticket['images'] ?>">
                </center>
            </p>

            <p class="card-text" style="
                    font-size: 20px;">
                <center>
                    <p>Date :
                        <br><?php echo $ticket['date']; ?>
                        <br>Venue :
                        <br><?php echo $ticket['venue']; ?>
                        <br>Price :
                        <br>Rp.<?php echo $ticket['price']; ?>
                        <a style="color:white;" class="btn btn-danger" href="<?= base_url('Beranda/transaction/') . $ticket['id_ticket']; ?>">Checkout</a>
                    </p>

                </center>
            </p>
            <a href="<?php echo site_url('Fest/') ?>" class="btn btn-danger"><i class="fa fa-arrow-left"></i>
                Back</a>
        </div>
    </div>
    <br>
</div>
</div>
</div>