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
        <div class="container">
        <div class="row mb-5 align-items-center">
            <h2>C++ Tutorial</h2><br>
            <div class="row">
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1MKhigIml3E"
                          allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                      <span class="mr-4">C++ #1</span>
                      <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <a><img class="img-fluid z-depth-1" src="img/c++1.JPG" alt="video"
                  data-toggle="modal" data-target="#modal1"></a>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/O17TOOOVkgs"
                          allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                      <span class="mr-4">C++ #2</span>
                      <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <a><img class="img-fluid z-depth-1" src="img/c++2.JPG" alt="video"
                  data-toggle="modal" data-target="#modal2"></a>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HztSZsbvhRg"
                          allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                      <span class="mr-4">C++ #3</span>
                      <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <a><img class="img-fluid z-depth-1" src="img/c++3.JPG" alt="video"
                  data-toggle="modal" data-target="#modal3"></a>
            </div>
            
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1Enqpi4trl8"
                          allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                      <span class="mr-4">C++ #4</span>
                      <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <a><img class="img-fluid z-depth-1" src="img/c++4.JPG" alt="video"
                  data-toggle="modal" data-target="#modal4"></a>
            </div>
            
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Sg3Vzs0Zi3g"
                          allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                      <span class="mr-4">C++ #5</span>
                      <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <a><img class="img-fluid z-depth-1" src="img/c++5.JPG" alt="video"
                  data-toggle="modal" data-target="#modal5"></a>
            </div>
            
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/N_Uyvvsn5yQ"
                          allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                      <span class="mr-4">C++ #6</span>
                      <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <a><img class="img-fluid z-depth-1" src="img/c++6.JPG" alt="video"
                  data-toggle="modal" data-target="#modal6"></a>
            </div>
            
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2OGyDIZVXQM"
                          allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                      <span class="mr-4">C++ #7</span>
                      <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <a><img class="img-fluid z-depth-1" src="img/c++7.JPG" alt="video"
                  data-toggle="modal" data-target="#modal7"></a>
            </div>
            
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vaar9qLU1wI"
                          allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                      <span class="mr-4">C++ #8</span>
                      <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <a><img class="img-fluid z-depth-1" src="img/c++8.JPG" alt="video"
                  data-toggle="modal" data-target="#modal8"></a>
            </div>
            
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="modal fade" id="modal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/oVo0NVGUsU0"
                          allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                      <span class="mr-4">C++ #9</span>
                      <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <a><img class="img-fluid z-depth-1" src="img/c++9.JPG" alt="video"
                  data-toggle="modal" data-target="#modal9"></a>
            </div>
            
          </div>
        </div>
        </div>
        <div id="footer"></div>
    </body>
</html>