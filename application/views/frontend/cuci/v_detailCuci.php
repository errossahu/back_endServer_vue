

        <!-- Header Content -->
       

        

    <!-- Menu -->


  

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

    <!-- Course -->

    <div class="course">
        <div class="container">
            <div class="row">

                <!-- Course -->
                <div class="col-lg-8">
                    
                    <div class="course_container">
                        <div class="course_title"><?=$cuci->nama_cuci?></div>
                        

                        <!-- Course Image -->
                        <div class="course_image"><img src="<?=base_url('gambar_cuci/'.$cuci->gambar)?>"></div>

                        <!-- Course Tabs -->
                        <div class="course_tabs_container">
                            <div class="tabs d-flex flex-row align-items-center justify-content-start">
                                <div class="tab ">Order</div>
                                
                                <div class="tab active">reviews</div>
                            </div>
                            <div class="tab_panels">

                                <!-- Description -->
                                <div class="tab_panel tab_panel_3">
                                    <div class="tab_panel_title"><?=$cuci->nama_cuci?></div>
                                    <div class="tab_panel_content">
                                        <div class="tab_panel_text">
                                            <p>Ini Deskripsi</p>
                                            <?php include('v_pesan.php');?>
                                        </div>
                                       
                                       
                                        
                                    </div>
                                </div>

                                <!-- Curriculum -->
                               
                                <!-- Reviews -->
                                <div class="tab_panel active ">
                                    <div class="tab_panel_title">Course Review</div>

                                    <!-- Rating -->
                                    <div class="review_rating_container">
                                        <div class="review_rating">
                                            <div class="review_rating_num">4.5</div>
                                            <div class="review_rating_stars">
                                                <div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
                                            </div>
                                            <div class="review_rating_text">(28 Ratings)</div>
                                        </div>
                                        <div class="review_rating_bars">
                                            <ul>
                                                <li><span>5 Star</span><div class="review_rating_bar"><div style="width:90%;"></div></div></li>
                                                <li><span>4 Star</span><div class="review_rating_bar"><div style="width:75%;"></div></div></li>
                                                <li><span>3 Star</span><div class="review_rating_bar"><div style="width:32%;"></div></div></li>
                                                <li><span>2 Star</span><div class="review_rating_bar"><div style="width:10%;"></div></div></li>
                                                <li><span>1 Star</span><div class="review_rating_bar"><div style="width:3%;"></div></div></li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    
                                    <!-- Comments -->
                                    
                                    <?php foreach ($comment as $key => $value) {
                # code...
              ?>
                                    <div id="commentList" class="comments_container">
                                        <ul class="comments_list">
                                            <li>
                                                <div class="comment_item d-flex flex-row align-items-start jutify-content-start">
                                                    <div class="comment_content">
                                                        <div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
                                                            <div class="comment_author"><a href="#"><?=$value->id_customer?></a></div>
                                                            <div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
                                                            <div class="comment_time ml-auto"><?=$value->created_at?></div>
                                                        </div>
                                                        <div class="comment_text">
                                                            <p><?=$value->comment?></p>
                                                        </div>
                                                        <div class="comment_extras d-flex flex-row align-items-center justify-content-start">
                                                            <div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>15</span></a></div>
                                                            <div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                         
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <?php }?>
                                    <a href="#" id="loadMore">Load More</a>
                                    <style>
                                        .pb-cmnt-container {
                                            font-family: Lato;
                                            margin-top: 100px;
                                       
                                        }

                                        .pb-cmnt-textarea {
                                            resize: none;
                                            padding: 20px;
                                            height: 130px;
                                            width: 100%;
                                            border: 1px solid black ;
                                        }
                                    </style>
                                    <!-- COMMENT SESSION -->
                                    <div class="container pb-cmnt-container">
                                     <div class="row">
                                        <div class="col-md-12 col-md-offset-3" >
                                            <div class="panel panel-info">
                                                <div class="panel-body">
                                                    <textarea id="comment" name="comment" placeholder="Write your comment here!" class="pb-cmnt-textarea"></textarea>
                                                    <form class="form-inline">
                                                        <div class="btn-group">
                                                            </div>
                                                        <button id="btn_simpan" class="btn btn-primary pull-right" type="submit">Post</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar">

                        <!-- Feature -->
                        <div class="sidebar_section">
                            <div class="sidebar_section_title">Course Feature</div>
                            <div class="sidebar_feature">
                                <div class="course_price">$180</div>

                                <!-- Features -->
                                <div class="feature_list">

                                    <!-- Feature -->
                                    <div class="feature d-flex flex-row align-items-center justify-content-start">
                                        <div class="feature_title"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Duration:</span></div>
                                        <div class="feature_text ml-auto">2 weeks</div>
                                    </div>

                                    <!-- Feature -->
                                    <div class="feature d-flex flex-row align-items-center justify-content-start">
                                        <div class="feature_title"><i class="fa fa-file-text-o" aria-hidden="true"></i><span>Lectures:</span></div>
                                        <div class="feature_text ml-auto">10</div>
                                    </div>

                                    <!-- Feature -->
                                    <div class="feature d-flex flex-row align-items-center justify-content-start">
                                        <div class="feature_title"><i class="fa fa-question-circle-o" aria-hidden="true"></i><span>Lectures:</span></div>
                                        <div class="feature_text ml-auto">6</div>
                                    </div>

                                    <!-- Feature -->
                                    <div class="feature d-flex flex-row align-items-center justify-content-start">
                                        <div class="feature_title"><i class="fa fa-list-alt" aria-hidden="true"></i><span>Lectures:</span></div>
                                        <div class="feature_text ml-auto">Yes</div>
                                    </div>

                                    <!-- Feature -->
                                    <div class="feature d-flex flex-row align-items-center justify-content-start">
                                        <div class="feature_title"><i class="fa fa-users" aria-hidden="true"></i><span>Lectures:</span></div>
                                        <div class="feature_text ml-auto">35</div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Feature -->
                        

                        <!-- Latest Course -->
                        

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter -->

