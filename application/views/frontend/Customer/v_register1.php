
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>REGISTER AKUN</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/template/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?=base_url()?>assets/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/template/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <style>
  .flex-container-column {
   display: flex;
   /* properti pendukung */
   flex-direction: column;
   max-width: 800px;
   margin: 0 auto;
   text-align: center;
}
.card {
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
   border-radius: 5px;
   padding: 30px;
   margin-top: 20px;
}
.error
{
color:red;
font-family:verdana, Helvetica;
}

small{
  border-style: solid;
  border-width: thin;
  border : 2px ;
  position: absolute ; 
  margin-top: 50px ;
  bottom: 0px  ; 
   left :0px ; 
   visibility:hidden;

}
input 
{
  border-color : red ; 
}
.form-control.success i.fa-check-circle
{
  visibility : visible ; 
  color : #2ecc71 ; 
}

  
  
  </style>
</head>
<body>

<div class="container">
  <div class="row">

  <div class="col-sm-4 mt-5" >
 
  <div class="flex-container-column card">
    <div class="card-body register-card-body">
    
    <a href="<?=base_url()?>assets/template//index2.html"><b>Komodo On Point</b></a>


      <p class="login-box-msg">Create Account</p>

      <?php echo form_open('frontend/Register/register_') ?>
      <form  id="form" action="<?=base_url()?>assets/template/index.html" method="post">
        <div class="input-group mb-3">
          <input   type="text" class="form-control" style ="form-control.success:border-color:blue " placeholder="User Name " name="user_name" id="user_name">
                 <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
              
             
              <small id="errorUserName" class="error"> Error Message</small>
            </div>
            
          </div>
     
        </div>
        
        <div class="input-group mb-3">
          <input required type="email" class="form-control" placeholder="Email" name="email" id="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
             <small class="error">Error Message</small>
     
            </div>
          </div>
         
        </div>
        <div  class="input-group mb-3">
          <input required type="text" class="form-control" placeholder="Phone" name="no_hp" id="no_hp">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
             <small class="error">Error Message</small>
     
            </div>
          </div>
 
        </div>
        <div  class="input-group mb-3">
          <input required type="password" class="form-control" placeholder="Password" name="password" id="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
             <small class="error">Error Message</small>
            </div>
          </div>

     
        </div>
        <div class="input-group mb-3">
          <input type="password" id="password2" class="form-control" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
             
            <small class="error">Error Message</small>
     
            </div>
          </div>

        </div>
        <div class="row">
          
          <!-- /.col -->
          <div  class="col-6">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <?php echo form_close(); ?>



      
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>





  </div>
</div>
    
<script>
const form =document.getElementById("form"); 
const user_name  =document.getElementById("user_name"); 
const email =document.getElementById("email"); 
const no_hp =document.getElementById("no_hp"); 
const password =document.getElementById("password");
const password2 = document.getElementById("password2"); 

if(form)
{
  form.addEventListener("submit" ,(e) => {
  
    checkInput();

});
}


function checkInput()
{
   const user_nameValue = user_name.value.trim() ; 
   const emailValue = email.value.trim() ; 
   const noHpValue = no_hp.value.trim() ; 
   const passwordValue=    password.value.trim() ; 
   const  password2Value=        password2.value.trim(); 
   if(user_nameValue==' ')
   {
     
    //  show Error
    // const error = document.getElementById("errorUserName");
    // error.style.visiblity= 'visible '; 
    window.alert('Tidak Boleh Kosong')
   }


}
</script>




<script>
<?php if($this->session->has_userdata('register')){?>
swal({
	
  title: "<?php echo $this->session->userdata('register')?>",
//   text: "You clicked the button!",
  icon: "error",
  button: "Close",
});
<?php 
$this->session->unset_userdata('register');
 }?>
</script>
<!-- /.register-box -->

<!-- jQuery -->
<script src="<?=base_url()?>assets/template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>assets/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/template/dist/js/adminlte.min.js"></script>


</body>
</html>
