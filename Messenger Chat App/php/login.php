<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
    <header><span id="boot-icon" class="bi bi-chat" style="  font-size: 15px; -webkit-text-stroke-width: 6.2px;
                     border: 5px double rgb(0, 128, 55); border-radius: 34%; padding: 6px; opacity: 1;
                    background-clip: text; color: transparent; background-image: -webkit-linear-gradient(rgb(31, 224, 224),
                    rgb(65, 49, 206));"></span>   Messenger Chat App</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="index.php" style="color: red" onMouseOver="this.style.color='green'"
        onMouseOut="this.style.color='red'">Signup now</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
