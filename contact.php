<?php include('./includes/validation.php');?>

<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css" media="screen">
        <link rel="stylesheet" href="css/master.css" media="screen">
        <link rel="icon" type="image/png" href="images/favicon.png" sizes="120x120">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <title>Deep Patel</title>
    </head>
    <body>
        <!-- Navigation Bar -->
        <nav class="navbar">
            <div class="max-width">
                <div class="logo"><a href="index.html"><img src="./images/black_Logo.svg" alt=""></a></div>
                <ul class="menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="work.html">Portfolio</a></li>
                    <li><a href="contact.php" class="active">Contact</a></li>
                </ul>
            </div>
            <div class="burgerMenu activeBurger">
                <div class="line line1"></div>
                <div class="line line2"></div>
                <div class="line line3"></div>
            </div>
        </nav>
        <!-- Navigation Bar -->  

        <!-- Form -->
        <div class="contactCon">
            <div class="contactTitle">Get In Touch</div>
            <div class="contactSubText">Reach Out For Any Inquiry</div>
            <form action="<?= $_SERVER['PHP_SELF'];?>" method="POST">
                <input type="text" name="name" value="<?= $name ?>" placeholder="Enter Your Name" ><br><br>
                <span style='color:crimson; font-family:"Roboto", sans-serif'><?= $name_error ?></span>

                <input type="email" name="email" value="<?= $email ?>" placeholder="Enter Your E-mail"><br><br>
                <span style='color:crimson; font-family:"Roboto", sans-serif'><?= $email_error ?></span>

                <input type="text" name="subject" value="<?= $subject ?>" placeholder="Subject.."><br><br>
                <span style='color:crimson; font-family:"Roboto", sans-serif'><?= $subject_error ?></span>

                <textarea rows="10" cols="50" name="message" value="<?= $message ?>" placeholder="Your Message.."></textarea>
                <span style='color:crimson; font-family:"Roboto", sans-serif'><?= $message_error ?></span>

                <button class="but but1" type="submit">SEND</button>
                <span style='color:green; font-family:"Roboto", sans-serif; font-weight: bold; text-align:center;'><?php echo $success ?></span>
            </form>
        </div>
        <!-- Form -->
        <footer>
            <div class="footerContainer">

                <div class="logoF"><a href="#"><img src="./images/White_Logo.svg" alt=""></a></div>
                <div class="tagLine">Living, learning, & leveling up<br> one day at a time.</div>
                <div class="media-link">
                    <a href="https://www.artstation.com/deep_fxanim"><i class="fab fa-artstation"></i></a>
                    <a href="https://www.behance.net/deepkumarpatel1"><i class="fab fa-behance"></i></a>
                    <a href="https://github.com/Deep-dsp?tab=repositories"><i class="fab fa-github"></i></a>
                </div>
                <ul class="menuFooter">
                    <li><a href="index.html" class="active">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="work.html">Portfolio</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <p class="copyright">&copy; copyrights reserved 2020.</p>
                <div class="line"></div>
                
            </div>
        </footer>
        <script type="module" src="js/main.js"></script>
    </body>
</html>