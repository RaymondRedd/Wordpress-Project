<?php get_header('home'); ?>

    
                      <h1 style="text-align: center;"><?php wp_title(); ?></h1>
                       
                        <?php if (have_posts()) :
                         while (have_posts()) : the_post(); ?>

                            <div class="page">
                         <div class="postss">
                                   <div class="images"> 
                                  
                            
                                    
                                            
                                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                                           </div>
                    
                                    
                                    <div class="eachpost">

                            
                                                
                                                        <a href=""><?php the_category('   '); ?> </a>
                     
                                        <h2><a href="<?php the_permalink(); ?>" class="category-title-link"><?php the_title(); ?></a></h2>

                                        <p><?php the_excerpt(); ?></p>
                             
                                                   <div class="date">     
                                             <p><?php the_date(get_option('date_format')); ?> </p>
                                             <p>by <a href=""><?php the_author_posts_link(); ?></a></p>

                                            <p><i class="far fa-comment"></i>
<a href="" style="color: #ff0a0a;"> <?php comments_number( '0', '1', '2', '3', '4'); ?></a>
</p>
</div>
                                                
                                            </h6>

                                        <!-- END CATEGORY POST -->


                                        <a href="<?php the_permalink(); ?>" class="btn btn-blue btn-block" style="color: black; font-weight: bold" >Read More</a>
                                       </div>
                            
                                       </div>


                               </div>



                                <!-- END EACH BLOG-->
                    
                        <?php endwhile; ?>
                        
                        <?php else : ?>

                        <article class="no-posts">

                            <h1>No posts were found.</h1>

                        </article>
                        
                        <?php endif; ?>
                        
                   
                                 

                

<?php get_footer('home'); ?>