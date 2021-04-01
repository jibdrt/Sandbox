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
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FFB31B" fill-opacity="0.8" d="M0,320L6.2,298.7C12.3,277,25,235,37,192C49.2,149,62,107,74,96C86.2,85,98,107,111,96C123.1,85,135,43,148,58.7C160,75,172,149,185,160C196.9,171,209,117,222,122.7C233.8,128,246,192,258,186.7C270.8,181,283,107,295,106.7C307.7,107,320,181,332,181.3C344.6,181,357,107,369,69.3C381.5,32,394,32,406,48C418.5,64,431,96,443,112C455.4,128,468,128,480,149.3C492.3,171,505,213,517,234.7C529.2,256,542,256,554,224C566.2,192,578,128,591,128C603.1,128,615,192,628,218.7C640,245,652,235,665,197.3C676.9,160,689,96,702,101.3C713.8,107,726,181,738,202.7C750.8,224,763,192,775,197.3C787.7,203,800,245,812,234.7C824.6,224,837,160,849,133.3C861.5,107,874,117,886,122.7C898.5,128,911,128,923,154.7C935.4,181,948,235,960,218.7C972.3,203,985,117,997,74.7C1009.2,32,1022,32,1034,64C1046.2,96,1058,160,1071,192C1083.1,224,1095,224,1108,240C1120,256,1132,288,1145,261.3C1156.9,235,1169,149,1182,128C1193.8,107,1206,149,1218,192C1230.8,235,1243,277,1255,282.7C1267.7,288,1280,256,1292,202.7C1304.6,149,1317,75,1329,69.3C1341.5,64,1354,128,1366,170.7C1378.5,213,1391,235,1403,256C1415.4,277,1428,299,1434,309.3L1440,320L1440,0L1433.8,0C1427.7,0,1415,0,1403,0C1390.8,0,1378,0,1366,0C1353.8,0,1342,0,1329,0C1316.9,0,1305,0,1292,0C1280,0,1268,0,1255,0C1243.1,0,1231,0,1218,0C1206.2,0,1194,0,1182,0C1169.2,0,1157,0,1145,0C1132.3,0,1120,0,1108,0C1095.4,0,1083,0,1071,0C1058.5,0,1046,0,1034,0C1021.5,0,1009,0,997,0C984.6,0,972,0,960,0C947.7,0,935,0,923,0C910.8,0,898,0,886,0C873.8,0,862,0,849,0C836.9,0,825,0,812,0C800,0,788,0,775,0C763.1,0,751,0,738,0C726.2,0,714,0,702,0C689.2,0,677,0,665,0C652.3,0,640,0,628,0C615.4,0,603,0,591,0C578.5,0,566,0,554,0C541.5,0,529,0,517,0C504.6,0,492,0,480,0C467.7,0,455,0,443,0C430.8,0,418,0,406,0C393.8,0,382,0,369,0C356.9,0,345,0,332,0C320,0,308,0,295,0C283.1,0,271,0,258,0C246.2,0,234,0,222,0C209.2,0,197,0,185,0C172.3,0,160,0,148,0C135.4,0,123,0,111,0C98.5,0,86,0,74,0C61.5,0,49,0,37,0C24.6,0,12,0,6,0L0,0Z"></path></svg>
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





</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>







</body>
</html>