<div class="top_footer_area">
   <div class="container">
       <div class="row">
          <?php dynamic_sidebar('footer_widget'); ?>
       </div>
    </div>
</div>


<div class="button_footer">
    <div class="container">
        <div class="row">

             <div class="col-md-6">
                <div class="social_link">



                        <ul>
                           <li>

                         
                                <a href="<?php global $pretzel_plate; echo $pretzel_plate['social_icon_link'] ['1']; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
              
                                <a href="<?php global $pretzel_plate; echo $pretzel_plate['social_icon_link'] ['2']; ?>" target="_blank"><i class="fa fa-twitter"></i></a>

                                <a href="<?php global $pretzel_plate; echo $pretzel_plate['social_icon_link'] ['3']; ?>" target="_blank"><i class="fa fa-youtube"></i></a>

                                <a href="<?php global $pretzel_plate; echo $pretzel_plate['social_icon_link'] ['4']; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
  
                                <a href="<?php global $pretzel_plate; echo $pretzel_plate['social_icon_link'] ['5']; ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
            

                                  </li>

   
                           
                        </ul> 
                   </div>
            </div>

            <div class="col-md-6">
                <div class="copyright_text">
                    <p><?php echo $pretzel_plate['copy_right_text']; ?></p>
                </div>
            </div>
           
        </div>
    </div>
</div>














<!-- ===================================
        End Here
========================================-->        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

        <?php wp_footer(); ?>
    </body>
</html>
