<div class="container-fluid" style="margin-top:30px;">
  <style>
      .card-1{
        width: 100%;
        height: 500px;
        background-image: url('<?php echo base_url('./images/card.png') ?>');
      }
      .title{
        font-size: 80px;
        font-weight: bold;
        text-shadow: 1px 2px 1px white;
        background-color: #ff8a18;
         text-align: center; 
         box-shadow: inset 3px 3px 4px rgba(0,0,0,0.4);
        padding: 10px;
         border: 2px solid rgb(97, 91, 91);
          font-family: 'Odibee Sans', cursive;
      }
      #sub-title{
        /* text-shadow: 1px 2px 1px white; */
        margin-left: 600px;
        text-align: left;
        font-family: 'Bebas Neue', cursive;
        font-size: 40px;
        font-weight: bold ;
      }
      .card-2{
        width: auto;
          height: 1070px;
          background-color: #159d8c;
      }
      .upcoming-shows ul{
        list-style:none;font-weight: bold;
      }

  </style>
    <div class="card-1">
  </div>
  <div class="card-2">
    <br>
    <hr>
    <div class="title">
        <h2>UPCOMING  SHOWS!</h2>
    </div>
    <hr>
    <p id="sub-title"><u>WHO'S <br> COMING <br> TO YOUR TOWN?</u></p>
    <br>
    <div class="upcoming-shows">
    
          <div class="container">
                      <div id="accordion">
                  <div class="card" style="margin-bottom: 1%;">
                      <div class="card-body" style="background-color: #159d8c; border: none;">
                          <div class="d-flex mb-3">
                              <div class="p-2" style="font-size: 50px;">04</div>
                              <div class="p-2 align-self-sm-center">
                                  <ul style="text-align: left; font-size: 15px; display: inline;">
                                      <li>Sunday</li>
                                      <li>january</li>
                                  </ul>
                              </div>
                              <div class="p-2 flex-xl-fill align-self-sm-center">The Sunday Brunches
                                  <a class="card-link" data-toggle="collapse" href="#collapseTwo" style="color: white; font-weight: bolder;">
                                      >
                                    </a>
                              </div>
                              <div class="p-2 ml-auto align-self-sm-center"><a href="./detail.html" class="btn btn-warning">Get ticket</a></div>
                            </div>
                      </div>
                      <div id="collapseTwo" class="collapse" data-parent="#accordion">
                        <div class="card-body" style="background-color: #159d8c;">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                      </div>
                    </div>
                <a href="<?= base_url() . 'Beranda/shows'; ?>" class="btn btn-primary">SEE MORE</a>
                <br><br>
                </div>  
                      
          </div>

        
        
    </div>
    </div>
</div>