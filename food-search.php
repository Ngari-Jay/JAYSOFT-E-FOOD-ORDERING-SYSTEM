<?php
include('partials-front/menu.php') 
?>

                    <!-----------/*Welcome to JAYSOFT ONLINE FOOD ORDERING SYSTEM
Designed by JACKSON NGARI YAA an ICT Expert From Malindi 
alSO dOUBLED to be ManAGING Director Of Jaysoft Systems
which is a Technology Company owned by HIm*/
/* Rich him through Email: jacksonngari93@gmail.com
Company Email: jaysoftsystems93@gmail.com
Secondary Email: systemsjaysoft@gmail.com
Call or Whatsapp: +254702134979 AVAILABLE AT ALL TIMES*/----->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">

    <?php
                // dealing with search
     $search=$_POST['search'];
    ?>
        <div class="container">
            
            <h2>Foods on Your Search <a href="#" class="text-white">"<?php echo $search; ?>"</a></h2>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

 <!------ Lets do the search for any keyword inserted in the search box--------->
 <?php
           // sql querry to get foods based on search
           $sql = "SELECT * FROM tbl_food WHERE title LIKE '%search%' OR description Like '%search%'";
           //4. Executing querry 
           $res = mysqli_query($conn, $sql);
           //count rows 
           $count = mysqli_num_rows($res);
           //checking whether food is available
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
                                // lets break the php here----------
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
                                <p class="food-price">Kshs. <?php echo $price; ?></p>
                                <p class="food-detail">
                                <?php echo $description; ?>
                                </p>
                                <br>
                                <a href="<?php echo SITEURL; ?>order.php?food_id= <?php echo $id; ?>" class="btn btn-primary">Order Now</a>
                            </div>
                        </div>
<?php         
                       }
                }
                else
                    {
                        // Food Not AvAIlable
                        echo "<div class='error'>Food Not Available Now</div>";
                    }
                ?>
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- fOOD Menu Section Ends Here -->
    <?php
include('partials-front/footer.php') 
?>