<div class="container-fluid" style="margin-top:30px;">
  <style>
    .card-1 {
      width: 100%;
      height: 500px;
      background-image: url('<?php echo base_url('./images/card.png') ?>');
    }

    .title {
      font-size: 80px;
      font-weight: bold;
      text-shadow: 1px 2px 1px white;
      background-color: #ff8a18;
      text-align: center;
      box-shadow: inset 3px 3px 4px rgba(0, 0, 0, 0.4);
      padding: 10px;
      border: 2px solid rgb(97, 91, 91);
      font-family: 'Odibee Sans', cursive;
    }

    #sub-title {
      /* text-shadow: 1px 2px 1px white; */
      margin-left: 600px;
      text-align: left;
      font-family: 'Bebas Neue', cursive;
      font-size: 40px;
      font-weight: bold;
    }

    .card-2 {
      width: auto;
      height: 1070px;
      background-color: #159d8c;
    }

    .upcoming-shows ul {
      list-style: none;
      font-weight: bold;
    }
  </style>
  <div class="card-1">
  </div>
  <div class="card-2">
    <br>
    <hr>
    <div class="title">
      <h2>UPCOMING SHOWS!</h2>
    </div>
    <hr>
    <p id="sub-title"><u>WHO'S <br> COMING <br> TO YOUR TOWN?</u></p>
    <br>
    <div class="upcoming-shows">

      <div class="container">
        <div id="accordion">
          <?php foreach ($shows as $rows) : ?>


            <div class="card" style="margin-bottom: 1%;">
              <div class="card-body" style="background-color: #159d8c; border: none;">
                <div class="d-flex mb-3">
                  <div class="p-2" style="font-size: 20px;"><?php echo $rows->date; ?></div>
                  <div class="p-2 align-self-sm-center">

                  </div>
                  <div class="p-2 flex-xl-fill align-self-sm-center" style="font-size:30px; color:white;"><?php echo $rows->fest_name; ?>

                  </div>
                  <div class="p-2 ml-auto align-self-sm-center"><a href="<?= base_url() . 'Login'; ?>" class="btn btn-warning">Get ticket</a></div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          <a href="<?= base_url() . 'Login'; ?>" class="btn btn-primary">SEE MORE</a>
          <br><br>
        </div>

      </div>



    </div>
  </div>
</div>