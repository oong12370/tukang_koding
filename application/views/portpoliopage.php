 <!--TEAM START-->
  <div id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="page-title text-center">
          <h1>Portofolio</h1>
          <p>Berikut merupakan hasil karya dan kerja team Tukang koding <br>Lets See. </p>
          <hr class="pg-titl-bdr-btm"></hr>
        </div>
        <div class="">
        <?php $no = 1; foreach ($ambilkonten as $ambilkonten ): ?>
          <div class="col-md-6">
            <div class="team-info">
              <div class="img-sec">
                <img src="" class="img-responsive">
              </div>
              <div class="fig-caption">
                <h3><?php echo $ambilkonten->nama_katagori; ?></h3>
                <p class="marb-20"><?php echo $ambilkonten->nama_konten; ?> ...<a href='?page=detail_informasi&no_info=$r_data[no_info]'>[ Read More ] </a>]</p>
                <p>Share:</p>
                <ul class="team-social">
                  <li class="bgblue-dark"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="bgred"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="bgblue-light"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="bgblue-dark"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
           <?php endforeach; ?>
            
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--TEAM END-->
  <!--CTA2 START-->
  <div class="cta2">
    <div class="container">
      <div class="row white text-center">
        <h3 class="wd75 fnt-24">“Every Thing is designed. Few Things are Designed well.” - Brian Reed</h3>
        <p class="cta-sub-title"></p>
        <a href="#" class="btn btn-default">Request A Quote</a>
      </div>
    </div>
  </div>
  <!--CTA2 END-->



























