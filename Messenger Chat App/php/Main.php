<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
    <div class="hero">
        <nav>
            <img src="images/logop.png" class="logo">
            <ul>
                <li><a href="portfolio.html">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">PORTFOLIO</a></li>
                <li><a href="login.php">SERVICES</a></li>
                <li><a href="index.php">HIRE ME</a></li>
            </ul>
        </nav>
        <div class="detel">
            <h1>I'M Atiqur <span>Rahman</span></h1>
            <p>This is my official Portfolio website to showcase my 
                all works related to <br> web development and designs </p>
            <a href="CV.pdf" download>Downdload CV</a>
        </div>
        <div class="images">
            <img src="images/shapep.png" class="shape">
            <img src="images/Output.png" class="girl">
        </div>

        <div class="social">
           <a href="https://www.facebook.com/athin.arp/"><i class="fab fa-facebook"></i></a>
           <a href="https://www.instagram.com/ar_prangon/"><i class="fab fa-instagram"></i></a>
           <a href="https://www.linkedin.com/in/a-k-m-atiqur-rahman-24b0781ba/"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
</body>
</html>