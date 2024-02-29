<?php
include('partials-front/menu.php') 
?>
<?
include('../config/constants.php')
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

<?php
//check whether we get the food id
    if(isset($_GET['food_id']))
    {
                //Get food id and other details
            $food_id =$_GET['food_id'];
                //creating sql to get the data
            $sql = "SELECT * FROM tbl_food WHERE id= $food_id";
               //4. Executing querry and get data from database
            $res = mysqli_query($conn, $sql);
               //count rows checking whether food id is valid or not
            $count = mysqli_num_rows($res); 
            if($count==1)
            {
                // Get all the data
                $row=mysqli_fetch_assoc($res);
                //1. we need to get the data from the form
                $title =$row['title'];
                $price =$row['price'];
                $image_name=$row['image_name'];
                //$image_name =$row['image_name'];
            }
            else
            {
                  //redirecting to manage category page
                    header("location:".SITEURL);
            }
}
else
{
 //redirecting to manage category page
header("location:".SITEURL);
}
?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill This Form To Confirm Your Order.</h2>

            <form action="" method="POST" class="order">
                <fieldset>
                    <legend>Selected Food</legend>

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
                        <h3><?php echo $title; ?></h3>
                        <input type="hidden"name="food"value="<?php echo $title; ?>">
                        <p class="food-price">Kshs. <?php echo $price; ?></p>
                        <input type="hidden"name="price"value="<?php echo $price; ?>">
                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required> 
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. jaysoft systems" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. +254702134979" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. jaysoftsystems93@gmail.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. City,Estate, House Number" class="input-responsive" required></textarea>
                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>
            </form>
            <!---------backend code to save the order---------->
            <?php  
            if(isset($_POST['submit']))
                {
                    $food = $_POST['food'];
                    $price = $_POST['price'];
                    $qty = $_POST['qty'];
                    $total= $price * $qty; // lets calculate the total amount 
                    $order_date = date("d-m-y h:i:sa"); // order date
                    $status = "ordered"; // main status ; Ordered, On Delivery, Delivered, Cancelled
                    $customer_name = $_POST['full-name'];
                    $customer_contact = $_POST['contact'];
                    $customer_email = $_POST['email'];
                    $customer_address = $_POST['address'];
                      // save order in the database
                      //create sql querry
                                $sql2 ="INSERT INTO tbl_order SET
                                        food ='$food',
                                        price =$price,
                                        qty =$qty,
                                        total ='$total',
                                        order_date ='$order_date',
                                        status='$status',
                                        customer_name='$customer_name', 
                                        customer_contact='$customer_contact',
                                        customer_email='$customer_email',
                                        customer_address='$customer_address' 
                                ";
                                //4. Executing querry and save data to database
                                    $res2 = mysqli_query($conn, $sql2);
                                    //5. check whether the (query is executed correctly) data inserted or not and display appropriate message
                                    if($res2==TRUE)
                                         {
                                                //data inserted
                                                // echo "order Added Successfully!!";
                                                // create session variable to display message
                                                 $_SESSION['Add-order'] = "<div class='success text-center'>Order Placed Successfully.</div>";
                                                // redirecting our page
                                                header("location:".SITEURL);
                                          }     
                }
                 else 
                     {
                        // create session variable to display message
                        $_SESSION['Add-order'] = "<div class='error text-center'>Failed to Order Food. Try Again Later!!</div>";
                        // redirecting our page
                        header("location:".SITEURL);

                     }
            
            ?>