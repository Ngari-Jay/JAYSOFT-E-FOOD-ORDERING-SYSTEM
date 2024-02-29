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
        <div class="container">
            
            <form action="food-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->


    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>
            <?php  
//create sql to display datafrom database
$sql2 = "SELECT * FROM tbl_food WHERE active='Yes' AND featured='No' LIMIT 6";
//4. Executing querry and save data to database
$res2 = mysqli_query($conn, $sql2);
//count rows checking whether we have data in the database or not having
$count2 = mysqli_num_rows($res2);
if($count2>0)
                {
                   //this means we have data in the database
                // lets use while loop to get the data from database

                while($row=mysqli_fetch_assoc($res2))
                       {
                     // lets use while loop to get the data from database
                      // while loop will execute only if we have data in the database
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

           

        </div>
        <div class="clearfix"></div>
    </div>

    <p class="text-center">
        <a href="#">See All Foods</a>
    </p>
</section>
<!-- fOOD Menu Section Ends Here -->

<?php
include('partials-front/footer.php') 
?>