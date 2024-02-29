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

        <center><h1>Contact Us</h1></center>
    </section>
    <!----------------------------------------------Contact us Page Content---------------------------------------->
    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127471.48385252402!2d40.0197565703555!3d-3.229036844928188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18158fa8aba15693%3A0xcbebf1008265d79d!2sMalindi!5e0!3m2!1sen!2ske!4v1671098594644!5m2!1sen!2ske"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </section>
    <!----------------------------------------------Contact us---------------------------------------->
    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <!-----------------
                   <h5>MALINDI Road, Jaysoft Towers </h5>
                    <br>
                    <h5>Malindi,Kilifi-Kenya</h5>
                </div>
                <div>
                   
                    <span><h5>+254 702134979</h5></span> <br>
                    <p>Monday to Saturday, 10Am to 6Pm</p>
                </div>
                <div>
                   
                    <span><h5>jacksonngari93@gmail.com</h5></span>
                    <p>Email Us Your Query...</p>------->
                    <h1>Email Us Your Querry........</h1>
                </div>
            </div>
            <div class="contact-col">
                <form action="mail.php" method="POST">
                    <input type="text" name="name" placeholder="Enter Your Name..." required>
                    <input type="email" name="email" placeholder="Email address" required>
                    <input type="text" name="subject" placeholder="Enter Your Subject" required>
                    <textarea rows="8" name="Message" placeholder="Message" required></textarea>
                    <button type="submit" class="hero-btn red-btn">Send Message</button>
                </form>
            </div>
        </div>

    </section>

    <?php
include('partials-front/footer.php') 
?>