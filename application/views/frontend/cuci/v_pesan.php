<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
<style>
.flex-container-columnnn {
   display: flex;
   /* properti pendukung */
   flex-direction: column;
   max-width: 800px;
   margin: 0 auto;
   text-align: center;
}
.cardx {
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
   border-radius: 5px;
   padding: 30px;
   margin-top: 20px;
}


</style>

<div class="flex-container-columnnn cardx">
    <h4>Order Laundry </h4>
    <v-form 
   
  
      method="post"
      ref="form"
      v-model="valid"
      lazy-validation
    >
   <?php echo 
    form_open('frontend/cuci/pesan/'.$cuci->id_cuci);
   ?>
    <form  action="post" class="w3-container" >
  <div id="app">
  <v-app id="inspire">
    <v-container fluid>
      <v-row>
        <v-col cols="4">
          <v-subheader> <b>Jumlah Baju</b> </v-subheader>
        </v-col>
        <v-col cols="8">
          <v-text-field
      
       

          name="jumlahBaju"
          id="jumlahBaju"
          
          type="number"
            suffix="buah"

              v-model="jumlahBaju"
                :rules="bajuRules"
          value=0
          ></v-text-field>
        </v-col>
      </v-row>
      <v-row>
        <v-col cols="4">
          <v-subheader> <b>Jumlah Celana</b> </v-subheader>
        </v-col>
        <v-col cols="8">
          <v-text-field

         
             name="jumlahCelana"
            id="jumlahCelana"
          value=0  
              required

              v-model="jumlahCelana"
                :rules="celanaRules"
            type="number"
            suffix="buah"
             @change="defaultValue(this.value, this.dafaultValue)"
          ></v-text-field>
        </v-col>
      </v-row>
      <v-row>
        <v-col cols="4">
          <v-subheader> <b>Jumlah Jacket</b> </v-subheader>
        </v-col>
        <v-col cols="8">
          <v-text-field
       

            id="jumlahJacket"
            name="jumlahJacket"
     
            value=0
            type="number "
            suffix="buah"
              v-model="jumlahJacket"
                :rules="jacketRules"
               required
          ></v-text-field>
        </v-col>
      </v-row>
      <v-row>
        <v-col cols="4">
          <v-subheader> <b>Alamat</b> </v-subheader>
        </v-col>
        <v-col cols="8">
          <style>
  .v-text-field {
    font-size: 1.2em;
  }
</style>
<style>
  .v-text-field input {
    font-size: 1.2em;
  }
</style>
          <v-text-field
          style="font-size:8px"
          class="alamat"
            name="alamat"
            v-bind:id="alamat"
            v-model="alamat"
            placeholder="example : Waemata dekat intan pariwara"
            v-model="alamat"
              :rules="alamatRules"
                    required
            type="text"
            required
        
          ></v-text-field>
        </v-col>
      </v-row>
      <v-row>
        <v-col cols="4">
          <v-subheader> <b>Total Harga</b> </v-subheader>
        </v-col>
        <v-col cols="8">
          <v-text-field
          id="totalHarga" 
          name="totalHarga"
            color="primary"
           
            disabled
            prefilix="Rp."
          ></v-text-field>
        </v-col>
      </v-row>
  
  
      
      
      <?php if($this->session->has_userdata('nama')){?>
    
         <v-btn
          :disabled="!valid"
        color="success"
        class="mr-4"
        @click="validate"
        type="submit"

      >
          Order
      </v-btn>

    <?php }?>
 <?php if($this->session->userdata('nama')==''){?>
       
        <v-alert
        border="left"
        colored-border
        color="deep-purple accent-4"
        elevation="2"
      
      > Log In Terlebih Dahulu Sebelum Memesan..!!   </v-alert>
    <?php }?>
    
    
    
          </div>
    
      </v-container>
     </v-app>
    </div>
   
    
    </form>
    <?php echo 
    form_close();
    ?>
  </v-form>

</div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
<script>
  new Vue({
  el: '#app',
  vuetify: new Vuetify(),
data: () => ({
  jumlahJacket:'0',
  jumlahBaju: '0',
  jumlahCelana:'0',
 
  alamat:'',
  valid: true,
  celanaRules:[
      v=>!!v ||  'Isi Data Dengan 0 jika Tidak Ingin Mencuci Celana',
  ],
    celanaRules:[
      v=>!!v ||  'Isi Data Dengan 0 jika Tidak Ingin Mencuci Celana',
     v=> {

        if (parseInt(v)< 0) {
          return 'Data Tidak Boleh Lebih Kecil Dari 0 '
        }
        },
  ],
    bajuRules:[
      v=>!!v ||  'Isi Data Dengan 0 jika Tidak Ingin Mencuci Baju',
       v=> {

        if (parseInt(v)< 0) {
          return 'Data Tidak Boleh Lebih Kecil Dari 0 '
        }
        },
  ],
    jacketRules:[
      v=>!!v ||  'Isi Data Dengan 0 jika Tidak Ingin Mencuci Jacket',
      v=> {

        if (parseInt(v)< 0) {
          return 'Data Tidak Boleh Lebih Kecil Dari 0 '
        }
        },
  ],
  alamatRules:[
      v=>!!v ||  'Alamat Tidak Boleh kosong ',
  ],
}),
  methods: {
    validate () {
      this.$refs.form.validate()
    },
    
    
  },
  
  
})
</script>

