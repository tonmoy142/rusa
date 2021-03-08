<?php include 'header.php';?>

<section id="blog-singel" class="pt-20 pb-40 gray-bg">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-lg-12">
        <section id="contact-page" class="gray-bg">
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-lg-8">
                <div class="contact-from mt-30">
                  <div class="section-title pb-20">
                    <h5>DONATION FOR REGISTRATION </h5>
                  </div>
                  <!-- section title -->
                  <div class="main-form">
                    <form id="contact-form" action="#" method="post" data-toggle="validator">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="singel-form form-group">
                            <input name="name" type="text" placeholder="Donar name" data-error="Name is required."
                              required="required" />
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="singel-form form-group">
                            <input name="sname" type="text" placeholder="Spouses Name"
                              data-error="Spouses name is required." required="required" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="singel-form form-group">
                            <input name="date" type="date" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="singel-form form-group">
                            <input name="nid" type="text" placeholder="National Id / Passport No"
                              data-error="Nid or passport no is required." required="required" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="singel-form form-group">
                            <input name="phone" type="text" placeholder="Phone number"
                              data-error="Phone Number is required." required="required" />
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="singel-form form-group">
                            <input name="email" type="email" placeholder="Email" data-error="Email is required."
                              required="required" />
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="singel-form form-group">
                            <input name="password" type="password" placeholder="password"
                              data-error="password is required." required="required" />
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="singel-form form-group">
                            <input name="confpassword" type="password" placeholder="Confirm Password"
                              data-error="password is required." required="required" />
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="singel-form form-group">
                            <input name="damount" type="text" placeholder="Donation Ammount in Taka"
                              data-error="Donation Ammount is required." required="required" />
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="singel-form form-group">
                            <textarea name="presaddress" placeholder="Present Address"
                              data-error="Present Address is required." required="required"></textarea>
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="singel-form form-group">
                            <textarea name="permaddress" placeholder="Permanent Address"
                              data-error="Permanent Address is required." required="required"></textarea>
                          </div>
                          <!-- singel form -->
                        </div>

                        <div class="col-md-7 imgUp mt-20">
                          <div class="imagePreview"></div>
                          <label class="btn btn-primary">
                            Upload NID / Passport Scan Copy<input type="file" class="uploadFile img"
                              value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                          </label>
                        </div>

                        <div class="col-md-5 mt-20">
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-btn">
                                <span class="btn btn-primary btn-file">
                                  Upload Your Photo <input type="file" id="imgInp">
                                </span>
                              </span>
                              <input type="text" class="form-control d-none" readonly>
                            </div>
                            <img id='img-upload' />
                            <div class="col-md-12" id="imgprev">
                              <img src="images/thumb.png" id="preview" class="img-thumbnail">
                            </div>
                          </div>
                        </div>

                        <div class="col-md-12 mt-40">
                          <div class="singel-form">
                            <button type="submit" class="main-btn">
                              REGISTER
                            </button>
                          </div>
                          <!-- singel form -->
                        </div>
                      </div>
                      <!-- row -->
                    </form>
                  </div>
                  <!-- main form -->
                </div>
                <!--  contact from -->
              </div>

            </div>
          </div>
          <!-- row -->
      </div>
      <!-- container -->
</section>
<!-- blog details -->
</div>
</div>
<!-- row -->
</div>
<!-- container -->
</section>

<?php include 'footer.php';?>