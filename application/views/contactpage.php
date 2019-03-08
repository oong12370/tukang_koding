 <!--CONTACT START-->
  <div id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="page-title text-center">
          <h1>Quick Contact</h1>
          <p>Jika ada Saran dan masukan <br>Silahkan isi Form di bawah ini. </p>
          <hr class="pg-titl-bdr-btm"></hr>
        </div>

          <form action="<?=site_url('mywebsite/contact_us')?>" method="post" >
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control text-field-box" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="email" class="form-control text-field-box" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="text" class="form-control text-field-box" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="col-md-12 form-group">
              <textarea class="form-control text-field-box" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
              <button class="button-medium" id="contact-submit" type="submit" name="contact">Submit Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--CONTACT END-->