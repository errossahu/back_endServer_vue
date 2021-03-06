<div class="header_container">
			<div class="container">
				<div class="row">
					<div  class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<a href="#">
            <div style="margin-left:-10px" class="logo_text"><img src="<?=base_url()?>BajoLapak.png" alt=""></div>	<!-- <div class="logo_text" style="font-size:20px;  text-align: center;" >Labuan Bajo <br> <br> On <br><br> The SPOT<span></span></div> -->
								</a>
							<nav   class="main_nav_contaner ml-auto">
								<ul  class="main_nav">
							 </li>
									<li  id="x" ><a style="margin-left:-60px"   href="<?=base_url('frontend/home')?>" >Home</a></li>
									<li><a data-toggle="modal" data-target="#modal-error" href="index.html">Budget Counting</a></li>
									<li><a data-toggle="modal" data-target="#modal-error" href="about.html">Find Trip</a></li>
									<li ><a href="<?=base_url('frontend/cuci')?>">Laundry</a></li>
									<li><a data-toggle="modal" data-target="#modal-error" href="blog.html">Blog</a></li>
	
									<li><a data-toggle="modal" data-target="#modal-error" href="contact.html">Contact</a></li>
                  <li><a href="contact.html"  ></a></li>

								</ul>

								<!-- Hamburger -->
										
								<div style="margin-left:-40px " class="shopping_cart"><button data-toggle="modal" data-target="#modal-lg" type="button"  class="btn btn-link" ><i class="fa fa-shopping-cart " aria-hidden="true"> </i> <span class="badge badge-danger">
								<?php
									
									echo $this->session->userdata('notifikasi') ;
								
								?>
								
								
								</span>
								</button></div>
                				<!-- LOGIN Session-->
								
								<?php
									if ($this->session->has_userdata('nama')) {
										# code...

										echo '<div style="margin-left:2px" class="shopping_cart" data-toggle="modal" data-target="#modal-profile">
										<button type="button" class="btn btn-outline-success ">' ; 
										echo ucwords($this->session->userdata('nama'));
										echo '</button> </div>';
										
								
										

									}
									else{
										echo 	'<div style="margin-left:2px" class="shopping_cart" data-toggle="modal" data-target="#modal-default">
										<button type="button" class="btn btn-outline-success" >
											Sign In
										</button></i></div>' ;
									}
								
								?>
								<!-- Register  -->
								<?php
									if ($this->session->has_userdata('nama')) {
										# code...

									
										
								
										

                  }
                  ?>
                  <?php if($this->session->has_userdata('nama')==''){?>
				
									<div style="margin-left:3px" class="shopping_cart"  >
                  <a href="<?=base_url('frontend/register')?>">	<button type="button" class="btn btn-outline-primary">Sign Up </button></a>
						
												
								
									
                  <?php }?>
								
                              
								<span><div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
								</span>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>
    <div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>

  <!-- Modal -->
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
             <?php include('v_login.php'); ?>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
	  <!-- Modal 2  -->

	  <div class="modal fade" id="modal-profile">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" style="text-align: center;">PROFILE</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <?php include('v_profile.php'); ?>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>								
	  <div class="modal fade" id="modal-error">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" style="text-align: center;">Sorry</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <p>Fitur Ini Belum Bisa Digunakan </p>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<script>
<?php if($this->session->has_userdata('aktivasiAkun')){?>
  swal({
	
  title: "Silakann Verivikasi Email Anda Di Terlebih Dahulu..!",
//   text: "You clicked the button!",
  icon: "error",
  button: "Close",
});
<?php $this->session->unset_userdata('aktivasiAkun'); }?>
<?php if($this->session->has_userdata('emailBelumTerdaftar')){?>
  swal({
	
  title: "Email Belum Terdaftar..!",
//   text: "You clicked the button!",
  icon: "error",
  button: "Close",
});
<?php $this->session->unset_userdata('emailBelumTerdaftar'); }?>
<?php if($this->session->has_userdata('passwordSalah')){?>
  swal({
	
  title: "Password Anda Salah..!",
//   text: "You clicked the button!",
  icon: "error",
  button: "Close",
});
<?php 
$this->session->unset_userdata('passwordSalah'); }?>
<?php if($this->session->has_userdata('temp')){?>
swal({
	
  title: "Login Sukses..!",
//   text: "You clicked the button!",
  icon: "success",
  button: "Close",
});
<?php 
$this->session->unset_userdata('temp');
 }?>
 <?php if($this->session->has_userdata('pesanCuci')){?>
swal({
	
  title: "Silakan Cek Keranjang Anda!",
//   text: "You clicked the button!",
  icon: "success",
  button: "Close",
});
<?php 
$this->session->unset_userdata('pesanCuci');
 }?>

 <?php if($this->session->has_userdata('prosesCucian')){?>
swal({
	
  title: "Selamat Cucian Anda Akan segera Diambial . Silakan cek status Cucian Anda Di Keranjang..!",
//   text: "You clicked the button!",
  icon: "success",
  button: "Close",
});
<?php 
$this->session->unset_userdata('prosesCucian');
 }?>
 <?php if($this->session->has_userdata('aktifasi')){?>
swal({
	
  title: "Selamat Akun Anda Telah Aktif..!",
//   text: "You clicked the button!",
  icon: "success",
  button: "Close",
});
<?php 
$this->session->unset_userdata('aktifasi');
 }?>
 
</script>
<!-- Modal  -->


  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=base_url()?>assets/template/plugins/fontawesome-free/css/all.min.css">
<div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Profil Transaksi</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
		<?php if($this->session->has_userdata('nama')){?>
	
	<style>
	
	table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: white;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: .625em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}
	</style>
	  <table >

    <thead>
      <tr >
        <th scope="col">No</th>
        <th scope="col">Total Harga</th>
        <th scope="col">Status Trasaksi</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
	<?php 
	$no= 1 ;  foreach  ($list as $key => $value) {
		 # code...
	?>
      <tr>
        <td data-label="No"><?=$no++?></td>
        <td data-label="Total Harga"><?=$value->total_harga?></td>
		<?php if($value->status_pembayaran==0){?>
			<td data-label="Status Trasakasi"><small class="badge badge-danger"><i class="fas fa-clock-o "></i> Menunggu Pembayaran</small></td>
    <?php }?>
    <?php if($value->status_pembayaran==1){?>
			<td data-label="Status Trasakasi"><small class="badge badge-warning"><i class="fas fa-truck "></i> Menunggu Pengambilan</small></td>
		<?php }?>
       
        <td data-label="Action">
   <!--  <a class="btn btn-danger" href="<?=base_url('backend/pegawai/delete/'.$value->id_pegawai)?>"  onclick="return confirm('Apakah Data Ingin Dihapus.?')" title=""><i class="fas fa-trash"> </i></a>
                                              -->
		<a href="<?=base_url('frontend/cuci/detailTransaksi/'.$value->id_transaksi_cuci)?>"><button class="btn btn-info"><i class="fas fa-eye"></i></button></a>
    <?php if($value->status_pembayaran==0){?>	
		<a href="<?=base_url('frontend/cuci/hapusTransaksi/'.$value->id_transaksi_cuci)?>" onclick="return confirm('Apakah Data Ini Ingin Dihapus..?')"  title=""><button class="btn btn-danger"><i class="fas fa-trash"></i></button></a>
  <?php }?>
     <?php if($value->status_pembayaran!=0){?> 
        <a  onclick="return confirm('Maaf Data Sudah Ini Sudah Masuk Dalam Antrian..!')"  title=""><button class="btn btn-danger"><i class="fas fa-trash"></i></button></a>
     <?php }?>
		</td>	

		
      </tr>
	<?php }?>
     
    </tbody>
  </table>

	
           
			
	<?php }?>
	
            </div>
            <div class="modal-footer justify-content-between">
 					
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>