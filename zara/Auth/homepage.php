
<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Zara Apparel</title>
    <link rel="icon" href="../Images/Pre-Z.jpg" type="image/jpg">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
</head>
<body>
  <nav class="navbar">
    <div class="content">
      <div class="logo">
        <a href="#">Zara</a>
      </div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <!-- <li><a href="#">About</a></li>
        <li><a href="login.php">Login</a></li> -->
        <li><a href="../user_views/womensproducts.php">Women</a></li>
        <li><a href="../user_views/cart.php">Cart</a></li>
        <li><a href="../user_views/about.php">About</a></li>
        
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
  <div class="banner"></div>
  <div class="about">
    <div class="content">
      <div class="title">Zara Clothing</div>
      <Section class="img-slider">
  <div class="slider-container">
    
    <div class="slide">
      <img src="../Images/reg-back(1).jpeg">
    </div>
    
    <div class="slide">
      <img src="../Images/reg-back(2).jpeg">
    </div>

    <div class="slide">
      <img src="../Images/reg-back(4).jpeg">
    </div>
    
  </div>
  
</Section>

  </div>
  

  <script>
    const body = document.querySelector("body");
    const navbar = document.querySelector(".navbar");
    const menuBtn = document.querySelector(".menu-btn");
    const cancelBtn = document.querySelector(".cancel-btn");
    menuBtn.onclick = ()=>{
      navbar.classList.add("show");
      menuBtn.classList.add("hide");
      body.classList.add("disabled");
    }
    cancelBtn.onclick = ()=>{
      body.classList.remove("disabled");
      navbar.classList.remove("show");
      menuBtn.classList.remove("hide");
    }
    window.onscroll = ()=>{
      this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
    }
  </script>
  
  
</body>
</html>