<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<!-- menu or nav bar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand" href="index.php">
      <img src="image/LT.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Home
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="login.php">Login</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="re.php">Registrater</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- slide show -->
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style="margin-top:55px">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/banner1.avif" class="d-block w-100" alt="..." height="400px">
    </div>
    <div class="carousel-item">
      <img src="image/banner5.avif" class="d-block w-100" alt="..." height="400px">
    </div>
    <div class="carousel-item">
      <img src="image/banner4.png" class="d-block w-100 " alt="..." height="400px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- product session -->

<div class="card-group">
  <div class="card">
    <img src="image/img1.webp" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Apple iPhone 13 (Starlight, 128 GB)</h5>
      <p class="card-text">₹52,999</p>
      <p class="card-text">iPhone 13. boasts an advanced dual-camera system that allows you to click mesmerising pictures with immaculate clarity. Furthermore, the lightning-fast A15 Bionic chip allows for seamless multitasking, elevating your performance to a new dimension. A big leap in battery life, a durable design, and a bright Super Retina XDR display facilitate boosting your user experience.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="image/img2.webp" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">realme C33 2023 (Night Sea, 64 GB)  (4 GB RAM)</h5>
      <p class="card-text">₹29,999</p>
      <p class="card-text">Realme C33 is powered by an octa-core Unisoc T612 processor. It comes with 3GB, 4GB of RAM. The Realme C33 runs Android 12 and is powered by a 5000mAh battery. As far as the cameras are concerned, the Realme C33 on the rear packs a dual camera setup featuring a 50-megapixel primary camera, and a 0.3-megapixel camera.</p>

      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="image/img3.webp" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">realme 12 Pro+ 5G (Submarine Blue, 128 GB)  (8 GB RAM)</h5>
      <p class="card-text">₹ 25,999</p>
      <p class="card-text">In a world where innovation reigns supreme, the realme 12 Pro+ 5G stands tall as a beacon of superior technology and design. Elevate your mobile experience, capture moments with unprecedented clarity, and stay connected with seamless performance. Behold this realme smartphone – where every feature is a testament to a commitment to pushing the boundaries of what's possible in a smartphone.</p>

      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="image/img5.webp" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">realme C35 (Glowing Black, 128 GB)  (4 GB RAM)</h5>
      <p class="card-text">₹10,999</p>
      <p class="card-text">For the first time, realme C35 features a right-angle bezel made of 2D material, and the dynamic glowing design makes it look futuristic and trendy to show your personality. 5000mAh large capacity battery keeps your phone fully powered up all day long. And the battery usage can be minimized by App Quick Freeze.</p>

      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="image/img6.webp" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">realme 11x 5G (Midnight Black, 128 GB)  (8 GB RAM)</h5>
      <p class="card-text">₹15,999</p>
      <p class="card-text">The phone comes with a 60 Hz refresh rate 6.72-inch touchscreen display offering a resolution of 1080x2400 pixels (FHD+). Realme 11X 5G is powered by an octa-core MediaTek Dimensity 6100+ processor. It comes with 6GB, 8GB of RAM. The Realme 11X 5G runs Android Android 13 and is powered by a 5000mAh battery.</p>

      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>


<div class="card-group">
  <div class="card">
    <img src="image/img7.webp" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Apple iPhone 13 (Starlight, 128 GB)</h5>
      <p class="card-text">₹52,999</p>
      <p class="card-text">The iPhone 13 features a 6.1-inch (155 mm) display with Super Retina XDR OLED technology at a resolution of 2532×1170 pixels and a pixel density of about 460 PPI with a refresh rate of 60 Hz.</p>

      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="image/img8.webp" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Samsung A53  5G</h5>

      <p class="card-text">Galaxy A53 5G Phone's price is $449 for a 128 GB model. The size of the screen is 6.5-inch which runs on Samsung's Exynos 1280 processor. Galaxy A53 has quad-camera system featuring 64 MP main camera with 32 MP front camera. Galaxy A53 is the first Samsung's A series device to get 5 years so software update.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="image/img9.webp" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">OnePlus 10T 5G</h5>
      <p class="card-text">₹ 49,999</p>
      <p class="card-text">Built for speed, the OnePlus 10T 5G features a 50MP triple camera system, HyperBoost gaming engine, 120W SUPERVOOC charging and a smooth 6.7-inch 120 HZ FHD+ Fluid Display. Front and back, the OnePlus 10T 5G is designed with tough, drop-resistant Corning® Gorilla® Glass 5.</p>

      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="image/immg10.webp" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">redmi 12 pro 5G</h5>
      <p class="card-text">₹20,399</p>
      <p class="card-text">Redmi Note 12 Pro 5G comes with a 120Hz Pro AMOLED Display with Dolby Atmos & Vision support. This combination along with HDR10+, a 1 billion color display, dual stereo speakers, and hi-res audio (wired & wireless) certification transforms your device into a wholesome multimedia package.</p>

      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="image/img4.webp" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">realme 11x 5G (Midnight Black, 128 GB)  (8 GB RAM)</h5>
      <p class="card-text">₹15,999</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>