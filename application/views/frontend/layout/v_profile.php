

<div class="register-box">
  <div class="register-logo">
    <a href="<?=base_url()?>assets/template//index2.html"><b></a><br>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg"><b><b></p>

      <?php echo form_open('frontend/Login/login_') ?>
      <form action="<?=base_url()?>assets/template/index.html" method="post">
        <div class="input-group mb-3">
        <span>Email: </span>
          <input value="<?=$this->session->userdata('email')?>" type="text" class="form-control" placeholder="Email  " name="email" id="user_email">
          
          <div class="input-group-append">
            <div class="input-group-text">
             
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-8">
            
          </div>
          <!-- /.col -->
         
                <div class="col-4" style="text-align:center">
                <a href="<?=base_url('frontend/login/logoutProfile')?>"><button type="button" class="btn btn-outline-success">LogOut</button> 
                
                </a>
                 
                 
                 </div> 
                <br>
             
         
          
          <!-- /.col -->
        </div>
      </form>
      <?php echo form_close(); ?>


      
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->

