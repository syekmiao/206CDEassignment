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
            <h2>PHP Tutorial</h2><br>
            <div class="row">
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/pWG7ajC_OVo"
                          allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                      <span class="mr-4">PHP #1</span>
                      <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
                <a><img class="img-fluid z-depth-1" src="img/php1.JPG" alt="video"
                  data-toggle="modal" data-target="#modal1"></a>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/3B-CnezwEeo"
                          allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                      <span class="mr-4">PHP #2</span>
                      <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <a><img class="img-fluid z-depth-1" src="img/php2.JPG" alt="video"
                  data-toggle="modal" data-target="#modal2"></a>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ABcXbZLm5G8"
                          allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                      <span class="mr-4">PHP #3</span>
                      <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <a><img class="img-fluid z-depth-1" src="img/php3.JPG" alt="video"
                  data-toggle="modal" data-target="#modal3"></a>
            </div>
            
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2CXme275t9k"
                          allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                      <span class="mr-4">PHP #4</span>
                      <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <a><img class="img-fluid z-depth-1" src="img/php4.JPG" alt="video"
                  data-toggle="modal" data-target="#modal4"></a>
            </div>
            
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/U2EliFC9NrQ"
                          allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                      <span class="mr-4">PHP #5</span>
                      <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <a><img class="img-fluid z-depth-1" src="img/php5.JPG" alt="video"
                  data-toggle="modal" data-target="#modal5"></a>
            </div>
            
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/lT2AvQ17F_w"
                          allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                      <span class="mr-4">PHP #6</span>
                      <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <a><img class="img-fluid z-depth-1" src="img/php6.JPG" alt="video"
                  data-toggle="modal" data-target="#modal6"></a>
            </div>
            
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/bWygRxrlD44"
                          allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                      <span class="mr-4">PHP #7</span>
                      <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <a><img class="img-fluid z-depth-1" src="img/php7.JPG" alt="video"
                  data-toggle="modal" data-target="#modal7"></a>
            </div>
            
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/G1iDSoAXyvM"
                          allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                      <span class="mr-4">PHP #8</span>
                      <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <a><img class="img-fluid z-depth-1" src="img/php8.JPG" alt="video"
                  data-toggle="modal" data-target="#modal8"></a>
            </div>
            
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="modal fade" id="modal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/TBUgZ84tTgU"
                          allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                      <span class="mr-4">PHP #9</span>
                      <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <a><img class="img-fluid z-depth-1" src="img/php9.JPG" alt="video"
                  data-toggle="modal" data-target="#modal9"></a>
            </div>
            
          </div>
        </div>
        </div>
        <div id="footer"></div>
    </body>
</html>
