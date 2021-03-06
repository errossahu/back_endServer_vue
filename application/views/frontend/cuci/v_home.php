
	<!-- Home -->

	<?php 


	$this->session->set_userdata('current_url', current_url() );
	
	?>
	

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li>Cuci</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Courses -->

	<div class="courses">
		<div class="container">
			<div class="row">

				<!-- Courses Main Content -->
				<div class="col-lg-8">
					
					<div class="courses_container">
						<div class="row courses_row">
							
							<!-- Course -->
              <?php foreach ($cuci as $key => $value) {
                # code...
              ?>
							<div style="h" class="col-lg-4 course_col">
								<div class="course">
									<div class="course_image"><img class="responsive" width="600" height="200" src="<?=base_url('gambar_cuci/'.$value->gambar)?>" alt=""></div>
									<div class="course_body">
										<h7 class="course_title"><a href="<?=base_url('frontend/cuci/detailCuci/'.$value->id_cuci)?>"><?=$value->nama_cuci?></a></h7>
										<div class="course_teacher"><i class="fa fa-building" aria-hidden="true"></i>Alamat :<?=$value->alamat?> </div>
										<?php if($value->status_cuci==1){?>
										<div class="course_teacher">Status  : <small class="badge badge-success"><i class="fa fa-check" aria-hidden="true"></i> Tersedia</small> </div>
					
										<?php }?>
										<?php if($value->status_cuci!=1){?>
										<div class="course_teacher">Status  :  <small class="badge badge-danger"><i class="fa fa-times" aria-hidden="true"></i>Tidak Tersedia</small> </div>
					
										<?php }?>
										

										<div class="course_text">
											<p></p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											
											<div class="course_price ml-auto"><button type="button" class="btn btn-outline-success"><a style="color:black" href="<?=base_url('frontend/cuci/detailCuci/'.$value->id_cuci)?>">Lihat</a></button></div>
										</div>
									</div>
								</div>
							</div>
            <?php }?>

							
						</div>
						<div class="row pagination_row">
							<div class="col">
								<div class="pagination_container d-flex flex-row align-items-center justify-content-start">
									<ul class="pagination_list">
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
									</ul>
								
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Courses Sidebar -->
									</div>
				</div>
			</div>
		</div>
	</div>
