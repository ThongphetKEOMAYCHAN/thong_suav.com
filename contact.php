<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <!-- utility css file -->
    <link rel="stylesheet" href="css/utility.css">
    <!-- style css file -->
    <link rel = "stylesheet" href = "css/style.css">
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  </head>
  <body>
    
    <!-- navbar section -->
    <nav class = "navbar">
      <div class = "container">
        <div class = "brand-and-toggler">
          <a href = "index.php" class = "navbar-brand"><img src="images/logo.png" alt=""></a>
          <button type = "button" class = "navbar-toggler" id = "navbar-toggler">
            <span>
              <i class = "fas fa-bars"></i>
            </span>
          </button>
        </div>

        <div class = "navbar-collapse">
          <ul class = "navbar-nav">
            <li class = "nav-item">
              <a href = "index.php" class = "nav-link">home</a>
            </li>
            <li class = "nav-item">
              <a href = "blog.php" class = "nav-link">blog</a>
            </li>
            <li class = "nav-item">
               <a href = "about.php" class = "nav-link">about</a>
             </li>
            <li class = "nav-item nav-active">
              <a href = "contact.php" class = "nav-link">contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end of navbar section -->

    <!-- contact page -->
    <section class = "contact container">
      <div class = "title">
        <div>
          <h2>get in touch</h2>
        </div>
      </div>

      <p class = "text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam tempore, et dolores eum voluptas iusto voluptate, dicta iure mollitia atque, exercitationem deserunt laborum libero natus!</p>

      <div class = "row">
        <div class = "col-left">
          <h2>feel free to ask us!</h2>
          <p class = "text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui soluta mollitia suscipit maxime sunt dolore deleniti quam nihil repellendus perferendis.</p>

          <div class = "contact-info">
            <span><i class = "fas fa-envelope-open"></i></span>
            <h3>
              <span class = "text">mail me</span> <br>
              thong.99485942@gmail.com
            </h3>
          </div>

          <div class = "contact-info">
            <span><i class = "fas fa-phone-square-alt"></i></span>
            <h3>
              <span class = "text">call me</span> <br>
              + 856 2077973984
            </h3>
          </div>

          <div class = "contact-social-links">
            <a href = "https://www.facebook.com/thongphet.yang/">
              <i class = "fab fa-facebook-f"></i>
            </a>
            <a href = "https://web.whatsapp.com/">
              <i class = "fab fa-whatsapp"></i>
            </a>
            <a href = "https://github.com/ThongphetKEOMAYCHAN/flutter_workshop">
              <i class = "fab fa-github"></i>
            </a>
          </div>
        </div>

        <div class = "col-right">
          <form class = "contact-form">
            <div class = "form-group">
              <input type = "text" placeholder="your name">
              <input type = "email" placeholder="your email">
              <input type = "text" placeholder="your subject">
            </div>
            <textarea rows = "5"></textarea>
            <button type = "submit" class = "btn">send message</button>
          </form>
        </div>
      </div>
    </section>
    <!-- end of contact page -->
    
    

    <!-- footer -->
    <footer class = "footer container">
      <div class = "row">
        <div class = "col">
          <h3 class = "footer-title">about</h3>
          <p class = "text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium quia, magnam et deleniti similique voluptates nulla iusto temporibus veritatis asperiores consectetur quidem doloremque id possimus!</p>
          <div class = "social-links">
               <a href = "#"><i class = "fas fa-phone"></i></a>
               <a href = "#"><i class = "fab fa-facebook"></i></a>
               <a href = "#"><i class = "fab fa-whatsapp"></i></a>
          </div>
        </div>

        <div class = "col">
          <h3 class = "footer-title">links</h3>
          <div class = "footer-links">
            <a href = "#" class = "text">
              <i class = "fas fa-long-arrow-alt-right"></i>
              home
            </a>
            <a href = "blog" class = "text">
              <i class = "fas fa-long-arrow-alt-right"></i>
              blog
            </a>
            <a href = "about.php" class = "text">
              <i class = "fas fa-long-arrow-alt-right"></i>
              about
            </a>
            <a href = "contact.php" class = "text">
              <i class = "fas fa-long-arrow-alt-right"></i>
              contact
            </a>
          </div>
        </div>

        <div class = "col">
          <h3 class = "footer-title">more</h3>
          <div class = "footer-links">
            <a href = "#" class = "text">
              <i class = "fas fa-long-arrow-alt-right"></i>
              web design
            </a>
            <a href = "#" class = "text">
              <i class = "fas fa-long-arrow-alt-right"></i>
              web development
            </a>
            <a href = "#" class = "text">
              <i class = "fas fa-long-arrow-alt-right"></i>
              business strategy
            </a>
            <a href = "#" class = "text">
              <i class = "fas fa-long-arrow-alt-right"></i>
              graphics design
            </a>
          </div>
        </div>

        <div class = "col">
          <h3 class = "footer-title">have a question?</h3>
          <div>
            <span>
              <i class = "fas fa-map-marker-alt"></i>
            </span>
            <span class = "text">110 Baker Street St. Mountain View, New York, USA</span>
          </div>

          <div>
            <span>
              <i class = "fas fa-phone"></i>
            </span>
            <span class = "text">+ 8232 883 0000</span>
          </div>

          <div>
            <span>
              <i class = "fas fa-envelope"></i>
            </span>
            <span class = "text">info@domain.com</span>
          </div>
        </div>
      </div>

      <div class = "footer-text">
        <p class = "text">Copyright &copy; 2022 All rights reserved | Awesome Template Design</p>
      </div>
    </footer>
    <!-- end of footer -->


    <!-- custom js file -->
    <script src="js/main.js"></script>
  </body>
</html>