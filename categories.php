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


<!-- fOOD SEARCH Section Starts Here -->
<section class="food-search text-center">
    <div class="container">
        
        <form action="food-search.html" method="POST">
            <input type="search" name="search" placeholder="Search for Food.." required>
            <input type="submit" name="submit" value="Search" class="btn btn-primary">
        </form>

    </div>
</section>
    <!-- Navbar Section Ends Here -->

      <!-----------/*Welcome to JAYSOFT ONLINE FOOD ORDERING SYSTEM
Designed by JACKSON NGARI YAA an ICT Expert From Malindi 
alSO dOUBLED to be ManAGING Director Of Jaysoft Systems
which is a Technology Company owned by HIm*/
/* Rich him through Email: jacksonngari93@gmail.com
Company Email: jaysoftsystems93@gmail.com
Secondary Email: systemsjaysoft@gmail.com
Call or Whatsapp: +254702134979 AVAILABLE AT ALL TIMES*/----->

    <!-- CAtegories Section Starts Here -->
 <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>
            <?php 
            //create sql to display datafrom database
            $sql = "SELECT * FROM tbl_category WHERE active='Yes' AND featured='Yes'";
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
            <a href="fruit.php">
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
<?php
include('partials-front/footer.php') 
?>