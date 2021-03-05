<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'portfoliodb';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
    if($conn) {
        $sql = 'SELECT * FROM mediadb';
        $result = mysqli_query($conn, $sql);
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Deep Patel</title>
        <link rel="stylesheet" href="css/master.css" media="screen">
        <link rel="icon" type="image/png" href="images/favicon.png" sizes="120x120">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" />
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    </head>
    <body class="workBody">
        <!-- Navigation Bar -->
        <nav class="navbar">
            <div class="max-width">
                <div class="logo"><a href="index.html"><img src="./images/black_Logo.svg" alt=""></a></div>
                <ul class="menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="work.html" class="active">Portfolio</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="burgerMenu activeBurger">
                <div class="line line1"></div>
                <div class="line line2"></div>
                <div class="line line3"></div>
            </div>
        </nav>

        <main id="app">
            <section class="container">
                <div class="portfolio">
                    <div class="gallery">
                        <?php
                            if (isset($result) && mysqli_num_rows($result) > 0) {
                                $i = 0;
                                while($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <img data-model-target=".popupclass<?php echo $i; ?>" src="./images/Thumbnails/<?php echo $row['thumbnail']; ?>" alt="">
                        <?php $i++; } } ?>
                    </div>
                    <div class="show-reel">
                        <p>MOTION GRAPHICS <span class="reel">SHOWREEL</span></p>
                        <video controls>
                            <source src="video/demoreel.webm" type="video/webm">
                        </video>
                    </div>
                </div>
            </section>
            <?php
                if($conn) {
                    $sql = 'SELECT * FROM mediadb';
                    $result = mysqli_query($conn, $sql);
                }
                if (isset($result) && mysqli_num_rows($result) > 0) {
                    $i = 0;
                    while($row = mysqli_fetch_assoc($result)) {
            ?>
            <section class="first-eight-pop popupclass<?php echo $i; ?>">
                <div data-close-button class="cross-button">&#xd7;</div>
                <div class="product-section">
                    <div class="title-pop">
                        <?php echo $row['title'];?>
                    </div>
                    <img src="./images/<?php echo $row['images']; ?>" alt="">
                    <div class="product-about">
                        <p>About</p>
                        <p><?php echo $row['about']; ?><p>
                    </div>
                    <div class="product-about software-section">
                        <p>Software Used:</p> 
                        <p><?php echo $row['tools']; ?><p>
                        <span><strong>Link :</strong><a href="<?php echo $row['link']; ?>">  Click Here</a></span>
                    </div>
                </div>
            </section>
            <?php $i++; } } ?>
        </main>
        <!-- <footer class="work-footer">
            <div class="footerContainer">

                <div class="logoF"><a href="portfolio.html"><img src="./images/White_Logo.svg" alt=""></a></div>
                <div class="tagLine">Living, learning, & leveling up<br> one day at a time.</div>
                <div class="media-link">
                    <i class="fab fa-github"></i>
                    <i class="fab fa-artstation"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-facebook"></i>
                    <i class="far fa-envelope"></i>
                </div>
                <ul class="menuFooter">
                    <li><a href="index.html" class="active">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <p class="copyright">&copy; copyrights reserved 2020.</p>
                <div class="line"></div>
                
            </div>
        </footer> -->
        <script defer type="module" src="js/master.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    </body>
</html>