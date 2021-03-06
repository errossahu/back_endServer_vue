
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
                                <li><a href="index.html">Home</a></li>
                                <li><a href="courses.html">Courses</a></li>
                                <li>Course Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>          
    </div>
    
    <div class="course">
        <div class="container">
            <div class="row">

                <!-- Course -->
                <div class="col-sm-12">
                                  
    
  <link rel="stylesheet" href="<?=base_url()?>assets/template/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/template/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- Content Wrapper. Contains page content -->
  <div class="courses">
		<div class="container-fluid">
			<div class="row">


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-12">
          <div class="col-sm-12">
            <h1>Nota Transaksi</h1>
          </div>
       
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Note:</h5>
            Untuk Saat Ini Pembayaran Masih Secara Manual ,Sehingga untuk semua transaksi pembayaran dilakukan di Tempat. Jika ada ingin memproses cucian anda silakan tekan tombol proses cucian
            </div>


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> <?=$identitasCuci->nama_cuci?>, UKM.
                    <small class="float-right">Date:<?php echo "Tgl ".date("Y/m/d")
                    ;?></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>Admin  <?=$identitasCuci->nama_cuci?></strong><br>
                    Alamat : <?=$identitasCuci->alamat?><br>
                  
                    Email: duragoprojek@gmail.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong><?php echo $this->session->userdata('nama');?></strong><br>
                    Alamat: <?=$cuci->alamat?><br>
                    
                    Phone   : <?php echo $this->session->userdata('no_hp');?><br>
                    Email  : <?php echo $this->session->userdata('email');?>
                  </address>
                </div>
                <!-- /.col -->
             
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                <style>
                  td{
                    background-color: white;
                  }
                
                </style>
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>No </th>
                      
                      <th>Jumlah Item </th>
                     
                  
                      <th>Description</th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td data-label="No" >1</td>
                
                      <td data-label="Jumlah Celana"><?=$cuci->jumlah_celana?></td>
                
                 
                      <td data-label="Deskripsi">Jumlah Celana Dikali 3.000</td>
                      <td><?php 
                      $celana=$cuci->jumlah_celana*3000; 
                     echo "Rp.$celana"; ?></td>
                    </tr>
                    <tr>
                      <td data-label="NO">2</td>
                      <td data-label="Jumlah Baju" ><?=$cuci->jumlah_baju?></td>
           
                      <td data-label="Deskripsi ">Jumlah Baju Dikali Rp.2000</td>
                     <td><?php 
                      $baju=$cuci->jumlah_baju*2000; 
                     echo "Rp.$baju"; ?></td>
                    </tr>
                    <tr>
                      <td data-label="NO" >3</td>
                      <td data-label="Jumlah Jacket"><?=$cuci->jumlah_jacket?></td>
                    
                    
                      <td data-label="Deskripsi">Jumlah Jacket Dikali Rp5.000</td>
                     <td><?php 
                      $jacket=$cuci->jumlah_jacket*5000; 
                     echo "Rp.$jacket"; ?></td>
                    </tr>

                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  
                </div>
                <!-- /.col -->
                <div class="col-6">
               
                  <div class="table-responsive">
                    <table class="table">
                      
                      <tr>
                        <th>Biaya Antar Jemput:</th>
                        <td>Rp.5000</td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td><?php $total= $cuci->total_harga+5000 ;echo"Rp.$total"; ?></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                
                 <a href="<?=base_url('frontend/cuci/proesesCucian/'.$cuci->id_transaksi_cuci)?>"><button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Proseskan Cucian
                  </button>
</a>                  
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  </div>
  </div>
  </div>
  
  <script src="<?=base_url()?>assets/template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>assets/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>assets/template/dist/js/demo.js"></script>
    

                    </div>
                </div>
                </div>
        </div>
  