<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Sulphur+Point&display=swap" rel="stylesheet">
<script src="https://use.fontawesome.com/83c236aefd.js"></script>
<script src="aura.js"></script> 
<link rel="stylesheet" href="aura.css">

<title>Forever Young </title>

</head>
<body>
    
    <div class="top-nav">
    <nav class="navbar sticky-top navbar-inverse navbar-expand">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Forever Young </a>
          </div>
          
          <ul class="nav navbar-nav navbar-right ">
                <li><a href="./signup_aura.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="./login_aura.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Home</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Products<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Blush</a></li>
                <li><a href="#">EyeLiner</a></li>
                <li><a href="#">Shadow</a></li>
                <li><a href="#">Lipstick</a></li>
                <li><a href="#">Camera</a></li>
                
            </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Brands<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Maybelline</a></li>
                  <li><a href="#">Lo'real</a></li>
                  <li><a href="#">Nevia</a></li>
                  <li><a href="#">butter london</a></li><li><a href="#">e.i.f</a></li><li><a href="#"></a></li><li><a href="#">Nail Polish</a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Range<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Vegan</a></li>
                  <li><a href="#">Chemical Free</a></li>
                  <li><a href="#">Dairy Free</a></li>
                </ul>
              </li>
          </ul>
          
          <form class="navbar-form navbar-right">
            <div class="form-group" id="searchForm">
              <input type="text" class="form-control" placeholder="Search" name="search" id="top-nav-search">
            </div>
            <button type="submit" class="btn btn-default" id="search-button">Search</button>
          </form>
          
        </div>
      </nav>
      </div>
      
      <div class="container-fluid">
      
        
        
            <div id="myCarousel" class="carousel slide top-slide">
            <ol class="carousel-indicators">
                <li class="item1 active"></li>
                <li class="item2"></li>
                <li class="item3"></li>
                <li class="item4"></li>
              </ol>
          
              
              <div class="carousel-inner inner-trends" role="listbox">
                <div class="item active">
                  <img src="images\bg1.jpg">
                </div>
                <div class="item">
                  <img src="images\bg3.jpg">
                </div>
                <div class="item">
                  <img src="images\bg.jpg">
                </div>
                  <div class="item">
                        <img src="images\bg4.jpg">
                </div>
              </div>
              <a class="left carousel-control" href="#myCarousel" role="button">
                <span  aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button">
                <span  aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        <br>
        <hr>
        <div class="page-headings">
            <h1>In Forever Young Trends</h1>
        </div>
        <br>
        <div class="trends">
        <div class="container">
            <div class="row">
                <div class="col-md-3  align-self-center">
                    <div class="card card-body">
                        <div class="cosmetic-picture">
                           <a href="#panel"  id="onblush"><img src="images\blush.jpg" width="250px" height="350px"></a>
                        </div>
                        <h2 class="trend-heading">Blush</h2>
                    </div>
            </div>
            <div class="col-md-3  align-self-center">
                        <div class="card card-body">
                            <div class="cosmetic-picture">
                       <a href="#panel" id="oneye"><img src="images\eye.jpg" width="250px" height="350px"></a>
                            </div>
                            <h2 class="trend-heading">EyeLiner</h2>
                        </div>
             </div>
            <div class="col-md-3  align-self-center">
                            <div class="card card-body">
                                <div class="cosmetic-picture">
                                   <a href="#panel" id="onshadow"> <img src="images\shadow.jpg" width="250px" height="350px"></a>
                                </div>
                                <h2 class="trend-heading">Shadow</h2>
                            </div>
            </div>
            <div class="col-md-3  align-self-center">
                    <div class="card card-body">
                        <div class="cosmetic-picture">
                          <a href="#panel" id="onlipstick">  <img src="images\Lipstick.jpg" width="250px" height="350px"></a>
                        </div>
                        <h2 class="trend-heading">Lipstick</h2>
                    </div>
    </div>
            </div>
        </div>
        </div>
        <!-- <div id="panel">
            <ul id="myObj" style="list-style-type:none;"></ul>
        </div> -->
<div id="panel-blush">
    <div class="container">
        <div id="myObj1" class="row">
    </div>
    <br>
</div>
<div id="panel-eye">
        <div class="container">
            <div id="myObj2" class="row">
        </div>
        <br>
</div>
<div id="panel-shadow">
        <div class="container">
            <div id="myObj3" class="row">
        </div>
        <br>
</div>
<div id="panel-lipstick">
        <div class="container">
            <div id="myObj4" class="row">
        </div>
        <br>
</div>

    
        </ul>
        <br>
        <hr>
        <div class="page-headings">
            <h1>Virtual try on</h1>
        </div>
        <a href="http://127.0.0.1:5500/virtual-try-on.html"></a>
        <img src="./images/camera-icon-39.jpg" style="width:200px;height:200px;cursor:pointer;" id="camera-button" />
        <div id="videoContainer"></div>
        <hr>
        <div class="page-headings">
                <h1>Forever Young Picks</h1>
            </div>
        <div class="picks">
        <div class="container-fluid">
                <div id="myCarousel-pick" class="carousel slide">
                <ol class="carousel-indicators">
                    <li class="item1 active"></li>
                    <li class="item2"></li>
                  </ol>
              
                
                  <div class="carousel-inner inner-picks" role="listbox">
                    <div class="item active">
                            <div class="row">
                                    <div class="col-md-3  align-self-center">
                                        <div class="card card-body">
                                            <div class="cosmetic-picture-pick">
                              <a href="https://www.nivea.in/"> <img src="images\nevea.jpg" width="300px" height="250px"></a>
                     </div>
                    <h2 class="trend-heading">Nivea</h2>
                    </div>
                                </div>
                                <div class="col-md-3  align-self-center">
                                            <div class="card card-body">
                                                <div class="cosmetic-picture-pick">
                                                 <a href="https://www.maybelline.co.in/?gclid=Cj0KCQiAw4jvBRCJARIsAHYewPOMm78Ydt--RTTlOIv4_oPLuUHfOyvEzTqCtWOju0SJgkSZ060wGS8aArXLEALw_wcB" >  <img src="images\maybelline.jpg" width="300px" height="250px"></a>
                                                </div>
                                                <h2 class="trend-heading">Maybelline</h2>
                                            </div>
                                 </div>
                                <div class="col-md-3  align-self-center">
                                                <div class="card card-body">
                                                    <div class="cosmetic-picture-pick">
                                                      <a href="https://www.lorealparis.co.in/"><img src="images\loreal.jpg" width="300px" height="250px"></a>
                                                    </div>
                                                    <h2 class="trend-heading">Loreal Paris</h2>
                                                </div>
                                </div>
                                <div class="col-md-3  align-self-center">
                                        <div class="card card-body">
                                            <div class="cosmetic-picture-pick">
                                      <a href="https://www.lotusherbals.com/"><img src="images\lotus.jpg" width="300px" height="250px"></a>
                                            </div>
                                            <h2 class="trend-heading">Lotus</h2>
                                        </div>
                        </div>
                                </div>
                    </div>
                    <div class="item">
                            <div class="row">
                                    <div class="col-md-3  align-self-center">
                                        <div class="card card-body">
                                            <div class="cosmetic-picture-pick">
                     <a href="https://www.biotique.com/?utm_source=google&utm_medium=cpc&utm_campaign=Search&utm_content=Brand&gclid=Cj0KCQiAw4jvBRCJARIsAHYewPO1HmkmQRIDDKabbEuXpb3aPxNTHDPsJrGdafD_plWvo6DeNeinkDAaArM0EALw_wcB"><img src="images\biotiqu.jpg" width="300px" height="250px"></a>
                                            </div>
                                            <h2 class="trend-heading">Biotiqui</h2>
                                        </div>
                                </div>
                                <div class="col-md-3  align-self-center">
                                            <div class="card card-body">
                                                <div class="cosmetic-picture-pick">
             <a href="https://www.colorbarcosmetics.com/?utm_source=google&utm_medium=cpc&utm_campaign=Brand&gclid=Cj0KCQiAw4jvBRCJARIsAHYewPPbal0G0ttWTgYwIIgXTcFHobDQnDAe00XqUoI4VTfTbCl-y-Cpq_AaAk_rEALw_wcB"><img src="images\colorbar.jpg" width="300px" height="250px">
                        </a>                        </div>
                                                <h2 class="trend-heading">Colorbar</h2>
                                            </div>
                                 </div>
                                <div class="col-md-3  align-self-center">
                                                <div class="card card-body">
                                                    <div class="cosmetic-picture-pick">
                                    <a href="https://www.olay.in/en-in"><img src="images\olay.jpg" width="300px" height="250px">
                                                    </a></div>
                                                    <h2 class="trend-heading">Olay</h2>
                                                </div>
                                </div>
                                <div class="col-md-3  align-self-center">
                                        <div class="card card-body">
                                            <div class="cosmetic-picture-pick">
                                              <a href="https://www.matrix.com/hair-care/shampoo"><img src="images\matrix.jpg" width="300px" height="250px">
                                            </div>
                                            <h2 class="trend-heading">Matrix</h2>
                                        </div>
                        </div>
                                </div>
                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel-pick" >
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel-pick" >
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              </div>
              <br>
              <!-- <a id="brands" class="page-headings" style="float:right;" ><h4>See More brands</h4></a>
              <br>
              <br>
              <div id="brands-list">
                  <div class="container-fluid">
                      <div class="row" id="list"></div>
                  </div>
              </div> -->
           
              <div id="panel-brand">
                    <div class="container">
                        <div id="panel-brand-list" class="row">
                    </div>
                    <br>
            </div>
        
<br>
<br>
<hr>

<div class="page-headings">
        <h1>Forever Young Range</h1>
    </div>
    <div class="range">
    <div class="container">
    <div class="header-grid">
        <div class="photo">
            <img src="images\vegan.jpg" alt="vegan" width="393px" height="263px">
        </div>
        <div class="photo photo-big">
                <img src="images\lips.png" alt="Oilfree" width="393px" height="536px">
        </div>
        <div class="photo">
                <img src="images\glutenfree.jpg" alt="glutenfree" width="393px" height="263px">
            </div>
            <div class="photo">
                    <img src="images\dairyfree.jpg" alt="dairyfree" width="393px" height="263px">
                </div>
                <div class="photo">
                        <img src="images\chemicalfree.jpg" alt="chemicalfree" width="393px" height="263px">
                </div>
                </div>
                </div>
                </div>
                <br>
                <hr>
                <div class="page-headings">
                    <h1>Contact Me</h1>
                </div>
                
                <div class="contact">
                    <div class="container">
                    <section class="my-5">
                        <div class="row">
                            <div class="col-lg-5 mb-lg-0 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="dark-grey-text">Contact me from here and know about me</p>
                                        <div class="md-form">
                                                <i class="fas fa-user prefix grey-text"></i>
                                                <input type="text" id="form-name" class="form-control">
                                                <label for="form-name">Your name</label>
                                        </div>
                                        <div class="md-form">
                                            <i class="fas fa-envelope prefix grey-text"></i>
                                            <input type="text" id="form-email" class="form-control">
                                            <label for="form-email">Your email</label>
                                        </div>
                                        <div class="md-form">
                                                <i class="fas fa-pencil-alt prefix grey-text"></i>
                                                <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
                                                <label for="form-text">Send message</label>
                                        </div>
                                        <div class="text-center">
                                                <button class="btn btn-light-blue" onclick="givealert()">Submit</button>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                        <br>
                        
                    </section>
                </div>
                </div>

                <!-- <script>
                  var cameraButton = document.getElementById('camera-button')
                  var videoContainer = document.getElementById('videoContainer')

                  cameraButton.onclick = "myFunction()" =>{
                    videoContainer.innerHTML = `
                    http://127.0.0.1:5500/forever%20young/virtual-try-on.html
                      
                    var video = document.getElementById('video');
                   
                   if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
                     navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
                         video.srcObject = stream;
                         video.play();
                     });

                    }
                  }

                  let closePreview = document.getElementById('closePreview');
                  closePreview.onclick=()=>{
                    videoContainer.innerHTML = ``;
                  }
                </script> -->
</body>
</html>
