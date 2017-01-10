<?php
/**
 * Template Name: Actu
 *
 */
?>
<?php get_header() ?>





<div class="main">
    <div class="main-inner">
        <div class="container">
            <div class="row">

                <div class="col-sm-8 col-lg-9">
                    <div class="content">
                        <div class="page-title">
                            <h1>Notre Actualités</h1>
                        </div> <!-- /.page-title -->

                        <?php while(have_posts()):
                            the_post();
                        $title = $post->post_title;
                        $content = $post_content;
                        
                        ?>
  
                        
                        <div class="posts">

                            <div class="post post-boxed">


                                <div class="post-content">
                                    <h2><a href="blog-detail.html"><?php echo $title; ?><a></h2>
                                                <p><?php echo get_the_content();?></p>
                                </div> <!-- /.post-content -->

                                 <div class="post-meta clearfix">
                                       <div class="post-meta-author">By <a href="blog-detail.html">Eric Yorick</a></div> <!-- /.post-meta-author -->
                                       <div class="post-meta-date">08/24/2015</div> <!-- /.post-meta-date -->
                                       <div class="post-meta-categories"><i class="fa fa-tags"></i> <a href="blog-detail.html">Restaurant</a></div> <!-- /.post-meta-categories -->
                                       <div class="post-meta-comments"><i class="fa fa-comments"></i> <a href="blog-detail.html">3 comments</a></div> <!-- /.post-meta-comments -->
                                       <div class="post-meta-more"><a href="blog-detail.html">Read More <i class="fa fa-chevron-right"></i></a></div> <!-- /.post-meta-more -->
                                 </div> <!-- /.post-meta -->
                            </div> <!-- /.post -->
                        </div> <!-- /.posts -->

                        <?php endwhile; ?> 

                                                <div class="pager">
                                                    <ul>
                                                        <li><a href="#">Prev</a></li>
                                                        <li><a href="#">5</a></li>
                                                        <li class="active"><a>6</a></li>
                                                        <li><a href="#">7</a></li>
                                                        <li><a href="#">Next</a></li>
                                                    </ul>
                                                </div> <!-- /.pagination -->


                   </div> <!-- /.content -->
                </div> <!-- /.col-* -->


    
       
         </div> <!-- class="row" -->  
                
        </div> <!--  class="container" -->  
    </div> <!-- class="main-inner" -->         
</div>    <!-- class="main" -->        
                
                
<?php get_footer() ?>