
	<!-- Footer -->
	
	<script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
	<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f7035e74704467e89f2a0f3/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

	<footer class="footer">
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-3 footer_col">
					
								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="#">
											<div class="footer_logo_text">Bajo<span>Lapak.com</span></div>
										</a>
									</div>
									<div class="footer_about_text">
										<p>Memberi Bukti Bukan Janji</p>
									</div>
									<div class="footer_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title">Contact Us</div>
									<div class="footer_contact_info">
										<ul>
											<li>Email: duragonprojek@gmail.com</li>
											<li>Phone:  +(88) 111 555 666</li>
											<li>Waemata, Labuan Bajo , Manngarai Barat</li>
										</ul>
									</div>
								</div>
								
							</div>

							<!-- <div class="col-lg-3 footer_col">
					
								
								<div class="footer_section footer_links">
									<div class="footer_title">Contact Us</div>
									<div class="footer_links_container">
										<ul>
											<li><a href="index.html">Home</a></li>
											<li><a href="about.html">About</a></li>
											<li><a href="contact.html">Contact</a></li>
											<li><a href="#">Features</a></li>
											<li><a href="courses.html">Courses</a></li>
											<li><a href="#">Events</a></li>
											<li><a href="#">Gallery</a></li>
											<li><a href="#">FAQs</a></li>
										</ul>
									</div>
								</div>
								
							</div> -->

							<div class="col-lg-3 footer_col clearfix">
					
								<!-- Footer links -->
								<div class="footer_section footer_mobile">
									<div class="footer_title">Mobile</div>
									<div class="footer_mobile_content">
										</div>
								</div>
								
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="row copyright_row">
				<div class="col">
					<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
						<div class="cr_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						<div class="ml-lg-auto cr_links">
							<ul class="cr_list">

								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
<script src="<?=base_url()?>assets/front-end/js/jquery-3.2.1.min.js"></script>
<script src="<?=base_url()?>assets/front-end/styles/bootstrap4/popper.js"></script>
<script src="<?=base_url()?>assets/front-end/styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/front-end/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?=base_url()?>assets/front-end/plugins/easing/easing.js"></script>
<script src="<?=base_url()?>assets/front-end/plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?=base_url()?>assets/front-end/plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="<?=base_url()?>assets/front-end/js/course.js"></script>
<script>
(function ($) {
    $.fn.floatLabels = function (options) {

        // Settings
        var self = this;
        var settings = $.extend({}, options);


        // Event Handlers
        function registerEventHandlers() {
            self.on('input keyup change', 'input, textarea', function () {
                actions.swapLabels(this);
            });
        }


        // Actions
        var actions = {
            initialize: function() {
                self.each(function () {
                    var $this = $(this);
                    var $label = $this.children('label');
                    var $field = $this.find('input,textarea').first();

                    if ($this.children().first().is('label')) {
                        $this.children().first().remove();
                        $this.append($label);
                    }

                    var placeholderText = ($field.attr('placeholder') && $field.attr('placeholder') != $label.text()) ? $field.attr('placeholder') : $label.text();

                    $label.data('placeholder-text', placeholderText);
                    $label.data('original-text', $label.text());

                    if ($field.val() == '') {
                        $field.addClass('empty')
                    }
                });
            },
            swapLabels: function (field) {
                var $field = $(field);
                var $label = $(field).siblings('label').first();
                var isEmpty = Boolean($field.val());

                if (isEmpty) {
                    $field.removeClass('empty');
                    $label.text($label.data('original-text'));
                }
                else {
                    $field.addClass('empty');
                    $label.text($label.data('placeholder-text'));
                }
            }
        }


        // Initialization
        function init() {
            registerEventHandlers();

            actions.initialize();
            self.each(function () {
                actions.swapLabels($(this).find('input,textarea').first());
            });
        }
        init();


        return this;
    };

    $(function () {
        $('.float-label-control').floatLabels();
    });
})(jQuery);


</script>
<script type="text/javascript">

 $(document).ready(function(){

	$('#btn_simpan').on('click',function(){
            var comment=$('#comment').val();
			// window.alert('suksess');
			
            $.ajax({
				type :"POST",
                url  :"<?=base_url('frontend/cuci/addComment/'.$cuci->id_cuci)?>",
                dataType : "JSON",
                data :{comment:comment },
                success: function(data){

					location.reload();
                  
                }
            });
			location.reload();
			return false;

        });
 
	;
	    });

        
 </script>

<script>
$( document ).ready(function () {
  $(".comments_container").slice(0, 3).show();
    if ($(".comments_container:hidden").length != 0) {
      $("#loadMore").show();
    }   
    $("#loadMore").on('click', function (e) {
      e.preventDefault();
      $(".comments_container:hidden").slice(0, 6).slideDown();
      if ($(".comments_container:hidden").length == 0) {
        $("#loadMore").fadeOut('slow');
      }
    });
  });

</script>
<!-- <script>
$(document).ready(function(){
	
  $("#jumlahCelana").keyup(function(){
	
    var baju=  parseInt($("#jumlahCelana").val()) ; 
	var bajux =document.getElementById("jumlahCelana").value ; 
	parseInt(bajux); 
	if(bajux == '' || bajux<0)
	{
		document.getElementById('jumlahCelana').value='0';
	}
  });
});
</script>
 -->
 <script>
 	bajux = document.getElementById("jumlahCelana").value; 
 	parseInt(bajux);
 	function defaultValue(latestValus, defalut_Value)
 	{
     alert(defalut_Value);
 	}
 </script>
<script>
  $(document).ready(function(){
  $("#jumlahBaju,#jumlahCelana, #jumlahJacket").keyup(function()
  {
	  	var bajux =document.getElementById("jumlahCelana").value ; 
	parseInt(bajux); 

    var baju       =   	parseInt($("#jumlahBaju").val()) ; 
    var celana    = 	parseInt($("#jumlahCelana").val()) ; 
    var jacket    = 	parseInt($("#jumlahJacket").val()) ; 
	
	 var total = baju*2000 + celana*3000+jacket*5000 ; 
    $("#totalHarga").val(total); 
   
  });

});
</script>