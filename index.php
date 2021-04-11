<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div id="wave" class="container-fluid">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="0.9" d="M0,128L7.1,154.7C14.1,181,28,235,42,261.3C56.5,288,71,288,85,266.7C98.8,245,113,203,127,197.3C141.2,192,155,224,169,224C183.5,224,198,192,212,154.7C225.9,117,240,75,254,101.3C268.2,128,282,224,296,250.7C310.6,277,325,235,339,218.7C352.9,203,367,213,381,186.7C395.3,160,409,96,424,64C437.6,32,452,32,466,64C480,96,494,160,508,160C522.4,160,536,96,551,74.7C564.7,53,579,75,593,69.3C607.1,64,621,32,635,69.3C649.4,107,664,213,678,224C691.8,235,706,149,720,122.7C734.1,96,748,128,762,128C776.5,128,791,96,805,90.7C818.8,85,833,107,847,117.3C861.2,128,875,128,889,122.7C903.5,117,918,107,932,90.7C945.9,75,960,53,974,48C988.2,43,1002,53,1016,85.3C1030.6,117,1045,171,1059,165.3C1072.9,160,1087,96,1101,80C1115.3,64,1129,96,1144,128C1157.6,160,1172,192,1186,176C1200,160,1214,96,1228,64C1242.4,32,1256,32,1271,26.7C1284.7,21,1299,11,1313,42.7C1327.1,75,1341,149,1355,197.3C1369.4,245,1384,267,1398,256C1411.8,245,1426,203,1433,181.3L1440,160L1440,0L1432.9,0C1425.9,0,1412,0,1398,0C1383.5,0,1369,0,1355,0C1341.2,0,1327,0,1313,0C1298.8,0,1285,0,1271,0C1256.5,0,1242,0,1228,0C1214.1,0,1200,0,1186,0C1171.8,0,1158,0,1144,0C1129.4,0,1115,0,1101,0C1087.1,0,1073,0,1059,0C1044.7,0,1031,0,1016,0C1002.4,0,988,0,974,0C960,0,946,0,932,0C917.6,0,904,0,889,0C875.3,0,861,0,847,0C832.9,0,819,0,805,0C790.6,0,776,0,762,0C748.2,0,734,0,720,0C705.9,0,692,0,678,0C663.5,0,649,0,635,0C621.2,0,607,0,593,0C578.8,0,565,0,551,0C536.5,0,522,0,508,0C494.1,0,480,0,466,0C451.8,0,438,0,424,0C409.4,0,395,0,381,0C367.1,0,353,0,339,0C324.7,0,311,0,296,0C282.4,0,268,0,254,0C240,0,226,0,212,0C197.6,0,184,0,169,0C155.3,0,141,0,127,0C112.9,0,99,0,85,0C70.6,0,56,0,42,0C28.2,0,14,0,7,0L0,0Z"></path></svg>
</div>
<main class="container">

<nav class="navbar navbar-expand-lg navbar-light bg-dark rounded navs">
  <div class="container-fluid">
    <a class="navbar-brand" href="#title">Barre de navigation</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button id="search-button" class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div id="bloc-title">
<h1 class="neon" id= "title">SANDBOX</h1>
<div class="flux" id="title2"><h2>Bac à sable 2021</h2></div></div>





<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Corgi.png" class="d-block" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Redfish.png" class="d-block" alt="...">
    </div>
    <div class="carousel-item">
      <img src="CorgiBW.png" class="d-block" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="card-group">
  <div class="card">
    <img src="fa71b1034307f86fa5fd90c01e44f11e.png" class="card-img-vh" alt="...">
    <div class="card-body">
      <h5 class="card-title">ONE</h5>
      <p class="card-text">Sans vouloir la ramener la seule différence concrète avec les briques c’est que vous appelez ça des tartes. Je suis chef de guerre moi, je suis pas là pour secouer des drapeaux et jouer de la trompette.</p>
    </div>
    <div class="card-footer">
    <button id="jb-button" type="button" class="btn btn-outline-primary">Primary</button>
    </div>
  </div> 
  <div class="card">
    <img src="unnamed.jpg" class="card-img-vh" alt="...">
    <div class="card-body">
      <h5 class="card-title">TWO</h5>
      <p class="card-text">Lorem ipsum dolor sit amet. Aut veritatis culpa ut nulla corporis qui laboriosam exercitationem. Ut aperiam dolorem qui nihil illo aut rerum debitis. Non blanditiis excepturi est sunt veniam eos adipisci placeat ut amet quasi.</p>
    </div>
    <div class="card-footer">
      <button id="jb-button" type="button" class="btn btn-outline-primary">Primary</button>
    </div>
  </div>
  <div class="card">
    <img src="flat-girl-in-fall-season-character-vector-illustration.jpg" class="card-img-vh" alt="...">
    <div class="card-body">
      <h5 class="card-title">THREE</h5>
      <p class="card-text">Lorem ipsum dolor sit amet. Aut veritatis culpa ut nulla corporis qui laboriosam exercitationem. Ut aperiam dolorem qui nihil illo aut rerum debitis. Non blanditiis excepturi est sunt veniam eos adipisci placeat ut amet quasi</p>
    </div>
    <div class="card-footer">
   <button id="jb-button" type="button" class="btn btn-outline-primary">Primary</button>
    </div>
  </div>
</div>



<h1>testtocommit</h1>




</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>







</body>
</html>