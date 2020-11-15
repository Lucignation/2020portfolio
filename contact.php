<?php

    include("includes/header.php");

?>

    <div id="contact">

        <div class="contact__info">
            <h1>Let's work together!</h1>
            <h4>Like my work and want something similar for your company? Sure, let's get to business!</h4>
        </div>
        <form action="mail.php" method="POST">
            <div class="input">
                <div>
                    <label name="fname">Your Name</label><br/>
                    <input type="text" name="fname" placeholder="Type your name" />
                </div>

                <div>
                    <label name="email">Your Email Address</label><br />
                    <input type="email" name="email" placeholder="Type your email address" />
                </div>
            </div>
                

            <label name="message">Your Message</label><br />
            <textarea name="message" placeholder="I've got this great idea I will like us to work on so please tell how soon can you get onboard with me?"></textarea>
            <h2><a class="hover-5"><span><input type="submit" value="Push" /> <i class="fas fa-angle-double-right"></i></span></a></h2>
            
        </form>

    </div>


<?php

    include("includes/footer.php");

?>