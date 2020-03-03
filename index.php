<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Training Academy</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, 
              shrink-to-fit=no">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="jquery/jquery.slim.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script> 
            $(function(){
                $("#header").load("header.php");
                $("#footer").load("footer.php");
            });
        </script> 
    </head>
    <body>
        <div id="header"></div>
        <?php
        session_start();
        ?>
        <main id="main">

        <div class="site-section site-portfolio">
          <div class="container">
            <div class="row mb-5 align-items-center">
              <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
                <h2>Welcome, to Training Academy</h2>
              </div>
              <div class="col-md-12 col-lg-6 text-left text-lg-right" data-aos="fade-up" data-aos-delay="100">
                <div id="filters" class="filters">
                    <a href="python.php">Python</a>
                    <a href="c++.php">C++</a>
                    <a href="c.php">C#</a>
                    <a href="php.php">PHP</a>
                    <a href="java.php">JAVA</a>
                </div>
              </div>
            </div>
            <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
              <div class="item col-sm-6 col-md-4 col-lg-4 mb-4">
                  <a href="python.php" class="item-wrap fancybox">
                  <div class="work-info">
                    <h3>Python</h3>
                    <span>Python tutorial</span>
                  </div>
                  <img class="img-fluid" src="img/python.jpg">
                </a>
              </div>
              <div class="item col-sm-6 col-md-4 col-lg-4 mb-4">
                  <a href="c++.php" class="item-wrap fancybox">
                  <div class="work-info">
                    <h3>C++</h3>
                    <span>C++ tutorial</span>
                  </div>
                    <img class="img-fluid" src="img/c++.png">
                </a>
              </div>
              <div class="item col-sm-6 col-md-4 col-lg-4 mb-4">
                  <a href="c.php" class="item-wrap fancybox">
                  <div class="work-info">
                    <h3>C#</h3>
                    <span>C# tutorial</span>
                  </div>
                    <img class="img-fluid" src="img/c.png">
                </a>
              </div>
              <div class="item col-sm-6 col-md-4 col-lg-4 mb-4">
                  <a href="php.php" class="item-wrap fancybox">
                  <div class="work-info">
                    <h3>PHP</h3>
                    <span>PHP tutorial</span>
                  </div>
                    <img class="img-fluid" src="img/php.png">
                </a>
              </div>
              <div class="item col-sm-6 col-md-4 col-lg-4 mb-4">
                  <a href="java.php" class="item-wrap fancybox">
                  <div class="work-info">
                    <h3>JAVA</h3>
                    <span>Java tutorial</span>
                  </div>
                    <img class="img-fluid" src="img/java.png">
                </a>
              </div>
            </div>
          </div>
        </div>
        </main>
        <div id="footer"></div>
    </body>
</html>
