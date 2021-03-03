<?php include 'header.php';?>

<section id="blog-singel" class="pt-20 pb-40 gray-bg">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-lg-12">
        <section id="contact-page" class="gray-bg">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="contact-from mt-30">
                  <div class="section-title pb-20">
                    <h5>MEMBERSHIP FORM FOR REGISTRATION </h5>
                  </div>
                  <!-- section title -->
                  <div class="main-form">
                    <form id="contact-form" action="#" method="post" data-toggle="validator">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="singel-form form-group">
                            <input name="name" type="text" placeholder="Your name" data-error="Name is required."
                              required="required" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="singel-form form-group">
                            <input name="fname" type="text" placeholder="Fathers Name" ˝
                              data-error="Fathers name is required." required="required" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="singel-form form-group">
                            <input name="mname" type="text" placeholder="Mothers Name"
                              data-error="Mothers name is required." required="required" />
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
                          <!-- singel form -->
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
                          <div class="gender form-group">
                            <label style="margin-top: 20px; margin-bottom: 15px;" class="g-name d-block">Blood
                              group</label>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="bga+" name="blood" value="A+" class="custom-control-input">
                              <label class="custom-control-label" for="bga+">A+</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="bga-" name="blood" value="A-" class="custom-control-input">
                              <label class="custom-control-label" for="bga-">A-</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="bgb+" name="blood" value="B+" class="custom-control-input">
                              <label class="custom-control-label" for="bgb+">B+</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="bgb-" name="blood" value="B-" class="custom-control-input">
                              <label class="custom-control-label" for="bgb-">B-</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="bgo+" name="blood" value="O+" class="custom-control-input">
                              <label class="custom-control-label" for="bgo+">O+</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="bgo-" name="blood" value="O-" class="custom-control-input">
                              <label class="custom-control-label" for="bgo-">O-</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="bgab+" name="blood" value="AB+" class="custom-control-input">
                              <label class="custom-control-label" for="bgab+">AB+</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="bgab-" name="blood" value="AB-" class="custom-control-input">
                              <label class="custom-control-label" for="bgab-">AB-</label>
                            </div>
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

                        <div class="col-md-12">
                          <div class="section-title pt-40 pb-20">
                            <h5>Academic information</h5>
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group singel-form">
                            <select name="subject" id="subject"
                              class="form-control js-example-basic-single select2-hidden-accessible"
                              data-select2-id="subject" tabindex="-1" aria-hidden="true">
                              <option value="Select Subject">Select Subject</option>
                              <option value="Accounting and Information Systems">Accounting and
                                Information Systems</option>
                              <option value="Agronomy and Agricultural Extension">Agronomy and Agricultural Extension
                              </option>
                              <option value="Anthropology">Anthropology</option>
                              <option value="Applied Chemistry &amp; Chemical Engineering">Applied Chemistry &amp;
                                Chemical Engineering</option>
                              <option value="Applied Mathematics">Applied Mathematics</option>
                              <option value="Applied Physics and Electronic Engineering">Applied Physics and Electronic
                                Engineering</option>
                              <option value="Arabic">Arabic</option>
                              <option value="Bangla">Bangla</option>
                              <option value="Banking and Insurance">Banking and Insurance</option>
                              <option value="Biochemistry &amp; Molecular Biology">Biochemistry &amp; Molecular Biology
                              </option>
                              <option value="Botany">Botany</option>
                              <option value="Ceramics and Sculpture">Ceramics and Sculpture</option>
                              <option value="Chemistry">Chemistry</option>
                              <option value="Clinical Psychology">Clinical Psychology</option>
                              <option value="Computer Science &amp; Engineering">Computer Science &amp; Engineering
                              </option>
                              <option value="Crop Science and Technology">Crop Science and Technology</option>
                              <option value="Economics">Economics</option>
                              <option value="Electrical and Electronic Engineering">Electrical and Electronic
                                Engineering</option>
                              <option value="English">English</option>
                              <option value="Faculty of Agriculture">Faculty of Agriculture</option>
                              <option value="Faculty of Biological Sciences">Faculty of Biological Sciences</option>
                              <option value="Faculty of Engineering">Faculty of Engineering</option>
                              <option value="Finance">Finance</option>
                            </select>

                          </div>
                        </div>

                        <div class="col-md-12 mt-10">
                          <div class="form-group singel-form">
                            <select name="hall" id="hall"
                              class="form-control js-example-basic-single select2-hidden-accessible"
                              data-select2-id="hall" tabindex="-1" aria-hidden="true">
                              <option value="Bangabandhu Sheikh Mujibur Rahman Hall – বঙ্গবন্ধু শেখ মুজিবুর রহমান হল"
                                data-select2-id="4">Bangabandhu Sheikh Mujibur Rahman Hall – বঙ্গবন্ধু শেখ মুজিবুর রহমান
                                হল</option>
                              <option value="Bangamata  Fazilatunnesa  Hall – বঙ্গমাতা ফজিলাতুন্নেসা হল">Bangamata
                                Fazilatunnesa Hall – বঙ্গমাতা ফজিলাতুন্নেসা হল</option>
                              <option value="Begum Khaleda Zia Hall – বেগম খালেদা জিয়া হল">Begum Khaleda Zia Hall – বেগম
                                খালেদা জিয়া হল</option>
                              <option value="Madar Bux Hall – মাদার বখ্&zwnj;শ হল">Madar Bux Hall – মাদার বখ্&zwnj;শ হল
                              </option>
                              <option value="Mannujan Hall – মুন্নুজান হল">Mannujan Hall – মুন্নুজান হল</option>
                              <option value="Matihar Hall – মতিহার হল">Matihar Hall – মতিহার হল</option>
                              <option value="Nawab Abdul Latif Hall – নবাব আব্দুল লতিফ হল">Nawab Abdul Latif Hall – নবাব
                                আব্দুল লতিফ হল</option>
                              <option value="Rahamatunnesa Hall – রহমতুন্নেসা হল">Rahamatunnesa Hall – রহমতুন্নেসা হল
                              </option>
                              <option value="Rokeya Hall -রোকেয়া হল">Rokeya Hall -রোকেয়া হল</option>
                              <option value="Shah Mukhdum Hall – শাহ্&zwnj; মখদুম হল">Shah Mukhdum Hall – শাহ্&zwnj;
                                মখদুম হল</option>
                              <option value="Shaheed Habibur Rahman Hall – শহীদ হবিবুর রহমান হল">Shaheed Habibur Rahman
                                Hall – শহীদ হবিবুর রহমান হল</option>
                              <option value="Shaheed Shamsuzzoha Hall – শহীদ শামসুজ্জোহা হল">Shaheed Shamsuzzoha Hall –
                                শহীদ শামসুজ্জোহা হল</option>
                              <option value="Shaheed Suhrawardy Hall – শহীদ সোহ্&zwnj;রাওয়ার্দী হল">Shaheed Suhrawardy
                                Hall – শহীদ সোহ্&zwnj;রাওয়ার্দী হল</option>
                              <option value="Shaheed Ziaur Rahman Hall – শহীদ জিয়াউর রহমান হল">Shaheed Ziaur Rahman Hall
                                – শহীদ জিয়াউর রহমান হল</option>
                              <option value="Shahid Mir Abdul Quayyum International Dormitory">Shahid Mir Abdul Quayyum
                                International Dormitory</option>
                              <option value="Sher-e Bangla Fazlul Haque Hall –  শের-ই-বাংলা ফজলুল হক হল">Sher-e Bangla
                                Fazlul Haque Hall – শের-ই-বাংলা ফজলুল হক হল</option>
                              <option value="Syed Amer Ali Hall – সৈয়দ আমীর আলী হল">Syed Amer Ali Hall – সৈয়দ আমীর আলী
                                হল</option>
                              <option value="Tapashi Rabeya Hall – তাপসী রাবেয়া হল">Tapashi Rabeya Hall – তাপসী রাবেয়া
                                হল</option>
                              <option value="Not Applicable">Not Applicable</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-md-12 mt-10">
                          <div class="singel-form form-group">
                            <input name="name" type="text"
                              placeholder="Please entry your admission session as 2020-2021"
                              data-error="Session is required." required="required" />
                          </div>
                        </div>

                        <div class="mt-30 col-md-12">
                          <div class="form-group ">
                            <label style="color: #08294c; font-weight: 600;">DEGREE &nbsp; : &nbsp; &nbsp;
                            </label>
                            <div class="form-check-inline">
                              <label class="form-check-label">
                                <input name="degree[]" type="checkbox" class="form-check-input"
                                  value="Bachelor Degree">Bachelor Degree
                              </label>
                            </div>
                            <div class="form-check-inline">
                              <label class="form-check-label">
                                <input name="degree[]" type="checkbox" class="form-check-input"
                                  value="Master's Degree">Master's Degree
                              </label>
                            </div>
                            <div class="form-check-inline">
                              <label class="form-check-label">
                                <input name="degree[]" type="checkbox" class="form-check-input"
                                  value="MPhil Degree">MPhil Degree
                              </label>
                            </div>
                            <div class="form-check-inline">
                              <label class="form-check-label">
                                <input name="degree[]" type="checkbox" class="form-check-input" value="PhD Degree">PhD
                                Degree
                              </label>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-12 mt-30">
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-btn">
                                <span class="btn btn-primary btn-file">
                                  Upload Academic Certificate/Transcript <input type="file" id="transcript">
                                </span>
                              </span>
                              <input type="text" class="form-control" style="border: none; background: none;" readonly>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-12 mt-30">
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-btn">
                                <span class="btn btn-primary btn-file">
                                  Upload bank receipt copy <input type="file" id="bank_copy">
                                </span>
                              </span>
                              <input type="text" class="form-control" style="border: none; background: none;" readonly>
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
              <div class="col-lg-4">
                <div class="contact-address mt-30">
                  <div class="section-title pt-40 pb-20">
                    <h5>Bank Details</h5>
                  </div>
                  <p><b>Account Name :</b> RU ALUMNI FUND R U</p>
                  <p><b>Account Number :</b> 0200002235952</p>
                  <p><b>Routing number :</b> 010812112</p>
                  <p><b>Agrani Bank Limited</b></p>
                  <p><b>Rajshahi University Branch, Rajshahi</b></p>
                </div>
                <!-- contact address -->
                <div class="map mt-30">
                  <div id="contact-map"></div>
                </div>
                <!-- map -->
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