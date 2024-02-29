<?php  
                   
                   
                   if($count>0)
                   { 
                       // food available
                       // lets use while loop Display the foods available
                       while($row=mysqli_fetch_assoc($res))
                       {
                           // Lets Get Individual data from the database
                               $id=$row['id'];
                               $title=$row['title'];
                               $price=$row['price'];
                               $description=$row['description'];
                               $image_name=$row['image_name'];
                               ?>
                                       <div class="food-menu-box">
                               <div class="food-menu-img">
                               <?php 
                              //check whether image name is available or not
                               if($image_name!="")
                                   {
                                       //Display the image
                               ?>
                               <img src="<?php echo SITEURL; ?>images/foods/<?php echo $image_name; ?>" width="110px" height="110px">

                               <?php 
                     }
                      else
                      {
                       //Display the message
                          echo "<div class='error'>Image Not Added</div>";
                    }
           ?>
           </div>
           <div class="food-menu-desc">

               <h4><?php echo $title; ?></h4>
               <p class="food-price">Kshs.<?php echo $price; ?></p>
               <p class="food-detail">
               <?php echo $description; 
               ?>
               <br/><br/>
               <a href="<?php echo SITEURL; ?>order.php?food_id= <?php echo $id; ?>" class="btn btn-primary">Order Now</a>
           </div>
       </div>
       <?php
                      }
                   }
                   else
                   {
                       //categories not available
                      echo "<div class='error'>Food Was Not Added</div>";
                   }   
                   ?>