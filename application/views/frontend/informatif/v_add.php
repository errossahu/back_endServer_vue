<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

 <style>

.card {
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
   border-radius: 5px;
   padding: 30px;
 /*  margin-top: 20px;*/
}

 </style>

  <div class="home">
    <?php 
        $this->session->unset_userdata('current_url');
        $this->session->set_userdata('current_url',current_url() );
        $this->session 
  ?>

        <div class="breadcrumbs_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="<?=base_url()?>">Home</a></li>
                                <li><a href="<?=base_url()?>/frontend/tambahLapak">Ajukan Lapak</a></li>
                       
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>          
    </div>
    <div style="margin-top:20px" class="container card">
    <div style="text-align:center"><h1>AJUKAN LAPAK</h1></div>
    <div id="app">
  <v-app id="inspire">
      <?php echo form_open('frontend/tambahLapak/add')?>
    <form method="post">
      <v-text-field
        v-model="name"
        name="name"
        :error-messages="nameErrors"
    
        label="Nama Lengkap"
        required
        @input="$v.name.$touch()"
        @blur="$v.name.$touch()"
      ></v-text-field>
      <v-text-field
        v-model="email"
        name="email"
        :error-messages="emailErrors"
        label="E-mail"
        required
        @input="$v.email.$touch()"
        @blur="$v.email.$touch()"
      ></v-text-field>
      <v-text-field
        v-model="namaLapak"
        :error-messages="namaLapakErrors"
        :counter="10"
        name="namaLapak"
        label="Nama Lapak Anda"
        required
        @input="$v.namaLapak.$touch()"
        @blur="$v.namaLapak.$touch()"
      ></v-text-field>
      <v-text-field
        v-model="noHp"
        name="noHp"
        :error-messages="noHpErrors"
        :counter="12"
        label="No Hp"
        name="noHp"
        required
        @input="$v.noHp.$touch()"
        @blur="$v.noHp.$touch()"
      ></v-text-field>
     
      <v-checkbox
        v-model="checkbox"
        :error-messages="checkboxErrors"
        label="Setuju Untuk Mengikuti Ketentuan bajolapak ?"
        required
        @change="$v.checkbox.$touch()"
        @blur="$v.checkbox.$touch()"
      ></v-checkbox>
  
      <v-btn
      color="success"
        class="mr-4"
        type="submit"
        @click="submit"
      >
        submit
      </v-btn>
      <v-btn
      color="error"
       @click="clear">
        clear
      </v-btn>
    </form>
    <?php echo form_close()?>
  </v-app>
</div>


    </div>




  <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vuelidate/dist/vuelidate.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/vuelidate/dist/validators.min.js"></script>
  <script>
      
     const { required, maxLength, email, minLength } = validators
const validationMixin = vuelidate.validationMixin

Vue.use(vuelidate.default)

new Vue({
    
  el: '#app',
  vuetify: new Vuetify(),
  mixins: [validationMixin],

  validations: {
    name: { required, maxLength: maxLength(20) },
    noHp: { required ,maxLength: maxLength(12),  minLength: minLength(11)},
    email: { required, email },
    namaLapak:{required},
  
    checkbox: {
      checked (val) {
        return val
      },
    },
  },

  data: () => ({
    name: '',
    email: '',
    namaLapak: '', 
    noHp: '', 
    checkbox: false,
  }),

  computed: {
    checkboxErrors () {
      const errors = []
      if (!this.$v.checkbox.$dirty) return errors
      !this.$v.checkbox.checked && errors.push('You must agree to continue!')
      return errors
    },
 
    namaLapakErrors () {
      const errors = []
      if (!this.$v.namaLapak.$dirty) return errors
      !this.$v.namaLapak.required && errors.push('Nama Lapak Is required')
      return errors
    },
    nameErrors () {
      const errors = []
      if (!this.$v.name.$dirty) return errors
      !this.$v.name.maxLength && errors.push('Name must be at most 10 characters long')
      !this.$v.name.required && errors.push('Name is required.')
      return errors
    },
    noHpErrors () {
      const errors = []
      if (!this.$v.noHp.$dirty) return errors
      !this.$v.noHp.maxLength && errors.push('No Hp Tidak Boleh Lebih Dari 12')
      !this.$v.noHp.minLength && errors.push('No Hp Tidak Boleh Lebih Kecil dari 11')
      !this.$v.noHp.required && errors.push('No HP is required.')
      return errors

      
    },
    emailErrors () {
      const errors = []
      if (!this.$v.email.$dirty) return errors
      !this.$v.email.email && errors.push('Must be valid e-mail')
      !this.$v.email.required && errors.push('E-mail is required')
      return errors
    },
  },

  methods: {
    submit () {
      this.$v.$touch()
    },
    clear () {
      this.$v.$reset()
      this.name = ''
      this.email = ''
      this.select = null
      this.checkbox = false
    },
  },
})

  </script>