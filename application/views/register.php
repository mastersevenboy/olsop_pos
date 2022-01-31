<?php $this->load->view('layout/user/header'); ?>


  <!--================Login Box Area =================-->
  <section class="login_box_area section-margin">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="login_box_img">
            <div class="hover">
              <h4><font color="yellow">Already have an account?</font></h4>
              <p>Jangan sampai ketinggalan !</p>
              <a class="button button-account" href="<?php echo base_url(); ?>Login">Login Now</a>
              <br>
              <br>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="login_form_inner register_form_inner">
            <h3>Create an account</h3>
            <form class="row login_form" action="<?php echo base_url(); ?>Login/daftar_user" method="POST" id="register_form" enctype="multipart/form-data">
              <div class="col-md-6 form-group">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" required="" minlength="8">
              </div>
                      <div class="col-md-6 form-group">
                <input required type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" minlength="8">
                      </div>
              <div class="col-md-6 form-group">
                <input required type="text" class="form-control" id="nama" name="nama" placeholder="Nama" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama'">
                      </div>
              <div class="col-md-6 form-group">
                <input required type="number" class="form-control" id="nohp" name="nohp" placeholder="No HP" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No HP'" maxlength="14">
              </div>
              <div class="col-md-12 form-group">
                <input required type="email" class="form-control" id="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
              </div>
              <div class="col-md-12 form-group">
                <input required type="number" class="form-control" id="kd_pos" name="kd_pos" placeholder="Kode Pos" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kode Pos'">
              </div>
              <div class="col-md-12 form-group">
                <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="2" placeholder="Alamat" required onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat'"></textarea>
              </div>
              <div class="col-md-12 form-group">
                <div class="creat_account">
                  <input type="checkbox" id="f-option2" name="selector">
                  <label for="f-option2">Keep me logged in</label>
                </div>
              </div>
              <div class="col-md-12 form-group">
                <button type="submit" value="submit" class="button button-register w-100">Register</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Login Box Area =================-->     

<?php $this->load->view('layout/user/footer'); ?>
