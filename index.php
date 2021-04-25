<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
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
            <li class = "nav-item nav-active">
              <a href = "index.php" class = "nav-link">home</a>
            </li>
            <li class = "nav-item">
              <a href = "blog.php" class = "nav-link">blog</a>
            </li>
            <li class = "nav-item">
              <a href = "about.php" class = "nav-link">about</a>
            </li>
            <li class = "nav-item">
              <a href = "contact.php" class = "nav-link">contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end of navbar section -->



    <!-- home page -->
    <section class = "home container">
      <div class = "row">
        <div class = "row-left">
          <h3>hello!</h3>
          <h1>i'm <span>thongphet suav</span></h1>
          <h2>Personal information</h2>
          <div class = "home-pg-btn">
            <button type = "button" class = "btn">hire me</button>
            <button type = "button" class = "btn">my works</button>
          </div>
        </div>

        <div class = "row-right">
          <div class = "img-border">
            <div class = "img-container">
              <img src = "images/dsaa.png" alt = "my photo">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class = "skills container">
      <div class="content">
        <h1>i'm a development</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Aspernatur quis consectetur, iure porro nesciunt eveniet 
          perspiciatis vero nam illum reprehenderit aut debitis molestias 
          aliquid nulla nemo, minima ducimus repellendus a?</p>
          <a href="download.php?file=pdf/cv"><button type="button" class="content-cv">download CV</button></a>
          <a href="pdf/cv.pdf"><button type="button" class="content-cv">View CV</button></a>
    </div>

    

    </div>
      <div class = "title">
        <div>
          <h2>my skills</h2>
        </div>
      </div>

      <p class = "text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod ab laudantium possimus molestias sapiente, saepe facilis dolore autem repellat, quo iure tempore nisi perspiciatis. Quasi?</p>

      <div class = "row">
        <div class = "item">
          <div class = "item-text">
            <span>Photoshop</span>
            <span class = "w-90">90%</span>
          </div>
          <div class = "progress">
            <div class = "progress-bar w-90"></div>
          </div>
        </div>

        <div class = "item">
          <div class = "item-text">
            <span>jQuery</span>
            <span class = "w-75">75%</span>
          </div>
          <div class = "progress">
            <div class = "progress-bar w-75"></div>
          </div>
        </div>

        <div class = "item">
          <div class = "item-text">
            <span>HTML5</span>
            <span class = "w-85">85%</span>
          </div>
          <div class = "progress">
            <div class = "progress-bar w-85"></div>
          </div>
        </div>

        <div class = "item">
          <div class = "item-text">
            <span>CSS3</span>
            <span class = "w-80">80%</span>
          </div>
          <div class = "progress">
            <div class = "progress-bar w-80"></div>
          </div>
        </div>

        <div class = "item">
          <div class = "item-text">
            <span>PHP</span>
            <span class = "w-68">68%</span>
          </div>
          <div class = "progress">
            <div class = "progress-bar w-68"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of home page -->
    
    
    <!-- footer -->
    <footer class = "footer container">
      <div class = "row">
        <div class = "col">
          <h3 class = "footer-title">about</h3>
          <p class = "text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Accusantium quia, magnam et deleniti similique voluptates 
            nulla iusto temporibus veritatis asperiores consectetur quidem doloremque id possimus!</p>
          <div class = "social-links">
            <a href = "#"><i class = "fas fa-phone"></i></a>
            <a href = "#"><i class = "fab fa-facebook"></i></a>
            <a href = "#"><i class = "fab fa-whatsapp"></i></a>
          </div>
        </div>

        <div class = "col">
          <h3 class = "footer-title">links</h3>
          <div class = "footer-links">
            <a href = "index.php" class = "text">
              <i class = "fas fa-long-arrow-alt-right"></i>
              home
            </a>
            <a href = "blog.php" class = "text">
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
            <span class = "text">Vientiane Lao-thai street</span>
          </div>

          <div>
            <span>
              <i class = "fas fa-phone"></i>
            </span>
            <span class = "text">+ 856 2077973984</span>
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
    <script src="js//main.js"></script>
  </body>
</html>