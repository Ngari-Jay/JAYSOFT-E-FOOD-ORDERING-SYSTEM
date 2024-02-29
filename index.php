<?php
include('partials-front/menu.php') 
?>
<style>

/* styles for the message*/
.success{
    color: green;
    padding: 2%;
}
.error{
    color: red;
    padding: 2%;
}
</style>
<!-----------/*Welcome to JAYSOFT ONLINE FOOD ORDERING SYSTEM
Designed by JACKSON NGARI YAA an ICT Expert From Malindi 
alSO dOUBLED to be ManAGING Director Of Jaysoft Systems
which is a Technology Company owned by HIm*/
/* Rich him through Email: jacksonngari93@gmail.com
Company Email: jaysoftsystems93@gmail.com
Secondary Email: systemsjaysoft@gmail.com
Call or Whatsapp: +254702134979 AVAILABLE AT ALL TIMES*/----->

<!-- fOOD SEARCH Section Starts Here -->
<section class="food-search text-center">
    <div class="container">
        
        <form action="<?php echo SITEURL; ?>food-search.php" method="POST">
            <input type="search" name="search" placeholder="Search for Food.." required>
            <input type="submit" name="submit" value="Search" class="btn btn-primary">
        </form>
    </div>
</section>
<!-- fOOD SEARCH Section Ends Here -->

<!-----------/*Welcome to JAYSOFT ONLINE FOOD ORDERING SYSTEM
Designed by JACKSON NGARI YAA an ICT Expert From Malindi 
alSO dOUBLED to be ManAGING Director Of Jaysoft Systems
which is a Technology Company owned by HIm*/
/* Rich him through Email: jacksonngari93@gmail.com
Company Email: jaysoftsystems93@gmail.com
Secondary Email: systemsjaysoft@gmail.com
Call or Whatsapp: +254702134979 AVAILABLE AT ALL TIMES*/----->

<!-- Display order message  after place an order -->
<?php
            if(isset($_SESSION['Add-order']))
            {
                echo $_SESSION['Add-order'];
                // lets remove the message
                unset($_SESSION['Add-order']);
            }
?>
<!-- CAtegories Section Starts Here -->
<section class="categories">
    <div class="container">
        <h2 class="text-center">Explore Foods</h2>
        <?php 
            //create sql to display datafrom database
            $sql = "SELECT * FROM tbl_category WHERE active='Yes' AND featured='No'";
                //4. Executing querry and save data to database
            $res = mysqli_query($conn, $sql);
             //count rows checking whether we have data in the database or not having
             $count = mysqli_num_rows($res);
             if($count>0)
                {
                   //this means we have data in the database
                // lets use while loop to get the data from database

                while($row=mysqli_fetch_assoc($res))
                       {
                     // lets use while loop to get the data from database
                      // while loop will execute only if we have data in the database
                      // Lets Get Individual data from the database
                      $id=$row['id'];
                      $title=$row['title'];
                      $image_name=$row['image_name'];
                      ?>
            <a href="#">
            <div class="box-3 float-container">
            <?php 
                                                //check whether image name is available or not
              if($image_name!="")
                  {
                    //Display the image
            ?>
             <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" width="250px" height="300px">

                 <?php 
                      }
                       else
                       {
                        //Display the message
                           echo "<div class='error'>Image Not Added</div>";
                     }
                                                ?>
                <h3 class="float-text text-white"><?php echo $title; ?></h3>
            </div>
            </a>
                      <?php
                       }
                }
                else
                {
                    //categories not available
                   echo "<div class='error'>Category Not Added</div>";
                }            
            ?>
            <div class="clearfix"></div>
        </div>
    </section>
<!-- Categories Section Ends Here -->


<!-----------/*Welcome to JAYSOFT ONLINE FOOD ORDERING SYSTEM
Designed by JACKSON NGARI YAA an ICT Expert From Malindi 
alSO dOUBLED to be ManAGING Director Of Jaysoft Systems
which is a Technology Company owned by HIm*/
/* Rich him through Email: jacksonngari93@gmail.com
Company Email: jaysoftsystems93@gmail.com
Secondary Email: systemsjaysoft@gmail.com
Call or Whatsapp: +254702134979 AVAILABLE AT ALL TIMES*/----->
<!-- fOOD MEnu Section Starts Here -->
<section class="food-menu">
    <div class="container">
        <h2 class="text-center">Food Menu</h2>
        <?php  
//create sql to display datafrom database
$sql2 = "SELECT * FROM tbl_food WHERE active='Yes' AND featured='Yes' LIMIT 6";
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
                <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Order Now</a>
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














