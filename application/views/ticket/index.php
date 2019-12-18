  <div class="container">
    <div class="row mt-4">
      <div class="col">
        <h1>All Ticket</h1>
      </div>
    </div>
    <div class="row mt-2" id="daftar-menu">

    </div>
    <div class="row mt-8">
      <?php foreach ($ticket as $row) : ?>
        <div class="col-md-3">
          <div class="card mb-5" style="border-style:none;">
            <img src="<?= base_url('/images/event/') . $row["images"] ?>" class="card-img-top" alt="">
            <div class="card-body">
              <center>
                <h5 class="card-title"><?= $row["fest_name"] ?></h5>

                <p class="card-text"> <b>Categori: </b>Rp <?= $row["category"] ?></p>
                <span class="pesan">
                  <a style="color:white;" class="btn btn-danger" href="<?= base_url('Fest/detail/') . $row['id_ticket']; ?>">Detail</a>
                </span>
              </center>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS . -->
  </div>