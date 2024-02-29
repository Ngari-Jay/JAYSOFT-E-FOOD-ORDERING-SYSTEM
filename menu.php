<!-----------/*Welcome to JAYSOFT ONLINE FOOD ORDERING SYSTEM
Designed by JACKSON NGARI YAA an ICT Expert From Malindi 
alSO dOUBLED to be ManAGING Director Of Jaysoft Systems
which is a Technology Company owned by HIm*/
/* Rich him through Email: jacksonngari93@gmail.com
Company Email: jaysoftsystems93@gmail.com
Secondary Email: systemsjaysoft@gmail.com
Call or Whatsapp: +254702134979 AVAILABLE AT ALL TIMES*/----->
<?php include('config/constants.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jaysoft E-Food Ordering System | HomePage</title>

    <!-- lets Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
 <!-- Navigation bar Section Starts Here -->
 <section class="navbar">
    <div class="container">
        <div class="logo">
            <a href="index.php" title="Logo">
                 <!-- logo insertion here -->
                <img src="images/JAYSOFT C LOGO.png" alt="Restaurant Logo" class="img-responsive">
            </a>
        </div>
         <!-- menu bar section-->
         <div class="menu text-right">
            <ul>
                <li>
                    <a href="<?php echo SITEURL; ?>">Home</a>
                </li>
                <li>
                    <a href="<?php echo SITEURL; ?>categories.php">Categories</a>
                </li>
                <li>
                    <a href="<?php echo SITEURL; ?>foods.php">Foods</a>
                </li>
                <li>
                    <a href="#">About Us</a>
                </li>
                <li>
                    <a href="<?php echo SITEURL; ?>contact.php">Contact_Us</a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</section>
<!-- Navbar Section Ends Here -->