<!DOCTYPE html>
<html>
<head>
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
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
  <!-- Axios -->


  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
</head>
<style>

.card {
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
   border-radius: 5px;
   padding: 30px;
 /*  margin-top: 20px;*/
}
</style>
<body>
  
<div id="content" class="container "> 
  <v-parallax src="https://cdn.vuetifyjs.com/images/parallax/material.jpg">
  <div class="row">
  <div class="col-sm-4" >
     

  <div  id="app">

    <v-app id="inspire">
    
   
    <v-form class="card"
  
      method="post"
      ref="form"
      v-model="valid"
      lazy-validation
    > <h4 style="text-align: center; font-weight: 700;font-family: sans-serif;">Register </h4>
    <?php echo form_open('frontend/Register/register_') ?>
    <form method="post">
    
      <v-text-field

        name="user_name"
        v-model="name"
        :counter="10"
        :rules="nameRules"
        label="User Name"
        required
      ></v-text-field>
  
      <v-text-field

        name="email"
        v-model="email"
        :rules="emailRules"
        label="E-mail"
        required
      ></v-text-field>
      <v-text-field
      name="no_hp"
      type="number"
        v-model="no_hp"
         :counter="12"
        :rules="nohpRules"
        label="No Hp"
        required
      ></v-text-field>
        <v-text-field
        name="password"

        :rules="passwordRules"
        v-model="password"
        :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
         :type="show1 ? 'text' : 'password'"
         @click:append="show1 = !show1"
         label="Password"
      ></v-text-field>
        
        <div style="text-align: center" >
               <v-btn
        :disabled="!valid"
        color="success"
        class="mr-4"
        @click="validate"
        type="submit"

      >
          Submit
      </v-btn>
        </div>
 
      <!-- <button  :disabled="!valid" type="submit"    @click="validate" class="btn btn-primary">Primary</button> -->
            
    </form>
    <?php echo form_close()?>
   
    </v-form>

  </v-app>
  
</div>


  </div>
  <div class="col-sm-8 " >
    <div id="timeline">
  <v-app id="inspire">
    <v-timeline>
      <v-timeline-item
        v-for="n in 3"
        :key="n"
        color="red lighten-2"
        large
      >
        <template v-slot:opposite>
          <span>Tus eu perfecto</span>
        </template>
        <v-card class="elevation-2">
          <v-card-title class="headline">
            Lorem ipsum
          </v-card-title>
          <v-card-text>
            Lorem ipsum dolor sit amet, no nam oblique veritus. Commune scaevola imperdiet nec ut, sed euismod convenire principes at. Est et nobis iisque percipit, an vim zril disputando voluptatibus, vix an salutandi sententiae.
          </v-card-text>
        </v-card>
      </v-timeline-item>
    </v-timeline>
  </v-app>
</div>
  </div>
</div>
</v-parallax>
</div>

  <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
  <script>
  const url="<?=base_url('frontend/Register/register_')?>" ; 
   new Vue({
  el: '#app',
  vuetify: new Vuetify(),
  data: () => ({
      show1: false,
      show2: true,
      show3: false,
      show4: false,
    valid: true,
    name: '',
    nameRules: [
      v => !!v || 'Nama Tidak Boleh Kosong',
      v => (v && v.length <= 10) || 'Nama Harus Kurang dari 10',
    ],
    email: '',
    emailRules: [
      v => !!v || 'E-mail is required',
      v => /.+@.+\..+/.test(v) || 'E-mail harus Valid',
    ],

    no_hp: '',
    nohpRules: [
     v => !!v || 'No Hp  Tidak Boleh Kosong',
     v=> {

        if (v.length  > 12 || v.length < 12) {
          return 'No Hp Tidak Valid '
        }
      
     }  
    ],
    password: '',
    passwordRules: [
     v => !!v || 'Password  is required',
       v=> {

        if (v.length < 5) {
          return 'Password More Than  5 Character'
        }
      
     } 
    ],

  }),

  methods: {
    validate () {
      this.$refs.form.validate()
    },
    
    
  },
})
</script>
  
<script>
<?php if($this->session->has_userdata('register')){?>
swal({
	
  title: "<?php echo $this->session->userdata('register')?>",
//   text: "You clicked the button!",
  icon: "success",
  button: "Close",
});
<?php 
$this->session->unset_userdata('register');
 }?>
 <?php if($this->session->has_userdata('gagal')){?>
swal({
	
  title: "<?php echo $this->session->userdata('gagal')?>",
//   text: "You clicked the button!",
  icon: "error",
  button: "Close",
});
<?php 
$this->session->unset_userdata('gagal');
 }?>
</script>
<script>
  new Vue({
  el: '#timeline',
  vuetify: new Vuetify(),
  
})
</script>
<script>
  
</script>
</body>
</html>