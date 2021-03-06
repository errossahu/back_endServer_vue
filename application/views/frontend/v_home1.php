<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
</head>
<body >
  <div id="app">
    <v-app>
      <v-main>
      <template color="">
  <v-app id="inspire">
    <v-system-bar height="40px" app>
      <v-spacer></v-spacer>

      <v-btn
      outlined
          class="ma-2"
          color="primary"
          dark
          data-toggle="modal"
           data-target="#modal-default"
        >Log In  <v-icon
            dark
            right
          >
          mdi-login
          </v-icon> </v-btn>


      <v-btn
           
          class="ma-2"
          color="error"
          dark
        > <a style=" text-decoration: none; color:black" href="<?=base_url('frontend/register')?>"> Sign Up <v-icon
            dark
            right
          >
          mdi-account-plus
          </v-icon></a>   </v-btn>

         

    </v-system-bar>

    <v-app-bar app>
      <v-app-bar-nav-icon @click="drawer = !drawer">
      
      
      
      
      </v-app-bar-nav-icon>

      <v-toolbar-title>Bajo Lapak</v-toolbar-title><br>
      <v-toolbar-title>
      <v-btn style="margin-left:30px"
      outlined
      ><v-icon
      
color ="red"
center
>
mdi-cart
</v-icon> </v-btn></v-toolbar-title>

    </v-app-bar>

    <v-navigation-drawer
      v-model="drawer"
      fixed
      temporary
    >
    <v-list>
        <v-list-item
    
        >
          <v-list-item-content>
            <v-list-item-title>Cuci</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>

    <v-main class=" cyan accent-3 lighten-2">
      <v-container>
      <v-row
     
    >
     
      <v-btn
      outlined
        depressed
        color="error"
      >
        Cuci Baju 
        <v-icon
      
         color="primary"
      center
      >
      mdi-washing-machine
      </v-icon
      </v-btn>

    </v-row>
        <v-row class="mb-6">
          
        <v-card
      max-width="344"
      outlined
    >
      <v-list-item three-line>
        <v-list-item-content>
          <div class="overline mb-4">
            OVERLINE
          </div>
          <v-list-item-title class="headline mb-1">
            Headline 5
          </v-list-item-title>
          <v-list-item-subtitle>Greyhound divisely hello coldly fonwderfully</v-list-item-subtitle>
        </v-list-item-content>
  
        <v-list-item-avatar
          tile
          size="80"
          color="grey"
        ></v-list-item-avatar>
      </v-list-item>
  
      <v-card-actions>
        <v-btn
          outlined
          rounded
          text
        >
          Button
        </v-btn>
      </v-card-actions>
    </v-card>
        </v-row>
      </v-container>
    </v-main>
  </v-app>
</template>
<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" style="text-align: center;">LOGIN</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <?php include('layout/v_login.php'); ?>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      </v-main>
    </v-app>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <script>
    new Vue({
      el: '#app',
      vuetify: new Vuetify(),
      data: () => ({ drawer: null }),
    })
  </script>
</body>
</html>