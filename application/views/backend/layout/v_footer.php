 <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
 <!-- jQuery -->

<!-- AdminLTE App -->
<script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
<script src="<?=base_url()?>assets/template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?=base_url()?>assets/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?=base_url()?>assets/template/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url()?>assets/template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url()?>assets/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=base_url()?>assets/template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/template/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?=base_url()?>assets/template/dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?=base_url()?>assets/template/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?=base_url()?>assets/template/plugins/raphael/raphael.min.js"></script>
<script src="<?=base_url()?>assets/template/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?=base_url()?>assets/template/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="<?=base_url()?>assets/template/plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="<?=base_url()?>assets/template/dist/js/pages/dashboard2.js"></script>
<!-- page script -->
 <script src="<?=base_url()?>assets/template/plugins/toastr/toastr.min.js"></script>

<script type="text/javascript">
  window.onload = function() {
    var but_nav = document.getElementById("but_nav");
    var url = window.location.href;
    // alert(url.search("type"));

    if(url.search("type") > -1 || url.search("guide") > -1 || url.search("mobil")> -1){
      document.getElementById('but_nav').click()
    }
      
}
                function validasi() {
                var namaPegawai= document.getElementById('namaPegawai').value;
                var user_name = document.getElementById('user_name').value;
                var password = document.getElementById('password').value;
                var password1 = document.getElementById('password1').value;
                  if (namaPegawai == "") {
                      alert('Nama Pegawai Tidak Boleh Kosong!');
                      return false ;	
                  }
                 
                  if (user_name=="") {

                  	 alert('User Name Tidak Boleh Kosong!');
                      return false ;	
                  }
                  if (password == "") {
                  	alert('Passowr Tidak Boleh kosong ');
                  	return false

                  }
                   if (password1=="") {
                  	alert('Password Tidak Boleh Kosong');
                  	return false ;
                  }
                  if (password!=password1) {
                  	 alert('Password Tidak Sama');
                  	return false;
                  }

                 

              

               
                // body...
              }  
            </script>
<script>

  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

$(document).ready(function(){
  $("#user_name").change(function(){

    var url = window.location.href;
    var user_name = $('#user_name').val();
    var temp = $('#temp').val();


      $.ajax({
          type:'POST',
          data:{user_name: user_name},
          url:'<?php echo site_url('backend/Pegawai/cekUsername'); ?>',
          success: function(result){


            if(url.search("detailPegawai") > -1){
              if(result.search(temp) > -1){
                $('#warning').html("");
              }
              else if(result == 1){
                $('#warning').html("");
              }
              else{
                $('#warning').html("Username is Used*");
                $("#warning").css("color", "red");
                $("#btn").attr("disabled",true);

              }
            }
            else{
              
              if(result != 1){
                $('#warning').html("Username is Used*");
                $("#warning").css("color", "red");
                        $("#btn").attr("disabled",true);

              }
              else{
                $('#warning').html("");
                $("#warning").css("color", "green");
                        $("#btn").attr("disabled",false);

              }
            }
          }
      });

    
  });
});
window.onload = function() {
  var but_nav = document.getElementById("but_nav");
  var url = window.location.href;
  //alert(url.search("mobil"));

  setTimeout(function(){
    if(url.search("mobil") > -1){
      document.getElementById('but_nav').click()
      
    }
  },500)
}
$(document).ready(function(){
  $("#password1,#password").change(function(){

    var password = $('#password').val();
    var password1 = $('#password1').val();

    if(password == password1){
      $('#warning2').html("Password Matched*");
      $("#warning2").css("color", "green");
      $("#btn").attr("disabled", false);
    }
    else{

      $('#warning2').html("Password not Match*");
      $("#warning2").css("color", "red");
      $("#btn").attr("disabled",true);

    }
  });
});
$(document).ready(function(){
  $("#nama_guide,#email,#no_hp,#no_ktp").change(function(){

    var nama_guide = $('#nama_guide').val();
    var email = $('#email').val();
    var no_hp = $('#no_hp').val();
    var no_ktp = $('#no_ktp').val();

    var cek_email = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var cek_num = /^[A-Za-z]+$/;
    var cek_lett = /^\d+$/;

    if(nama_guide ==""){

      $('#warning_guide').html("Inputan Tidak Boleh Kosong ");
      $('#btn').attr("disabled",true);

    }
    else if(cek_num.test(nama_guide) == false)
    {
       $('#warning_guide').html("Hanya Menerima Huruf *");
       $("#btn").attr("disabled",true);

    }
    

    else{

      $('#warning_guide').html("");
       $("#btn").attr("disabled",false);

    }

    if(email == ""){

      $('#warning_guide1').html("Email Tidak Boleh Kosong ");
      $("#btn").attr("disabled",true);

    }
    else if(cek_email.test(email) == false){

      $('#warning_guide1').html("Email format Salah*");
      $("#btn").attr("disabled",true);

    }
    else
    {

     $('#warning_guide1').html("");
     $("#btn").attr("disabled",false);

   }
    if(no_hp == "")
      $('#warning_guide2').html("");
    else if(no_hp.length < 12 || cek_lett.test(no_hp) == false)
      $('#warning_guide2').html("Number too short*");
    else
      $('#warning_guide2').html("");

    if(no_ktp == "")
      $('#warning_guide3').html("");
    else if(no_ktp.length < 13 || cek_lett.test(no_ktp) == false)
      $('#warning_guide3').html("KTP format wrong*");
    else
      $('#warning_guide3').html("");
  });
});

</script>

</body>
</html>
