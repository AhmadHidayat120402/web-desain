<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Natural Restaurant</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script>
    $(document).ready(function() {
      $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
          $('i').css({
            "opacity": "1",
            "pointer-events": "auto"
          });
        } else {
          $('i').css({
            "opacity": "0",
            "pointer-events": "none"
          });
        }
      });
      $('i').click(function() {
        $('html').animate({
          scrollTop: 0
        }, 500);
      });
    });
  </script>

  <!-- AOS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- my css -->
  <link rel="stylesheet" href="style.css">

  <!-- boostrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

  <!-- librari font awesome -->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>

<body id="home">
  <!-- Navbar-->
  <div>
    <i class="fas fa-chevron-up"></i>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm fixed-top">
    <div class="container">
      <a class="navbar-brand" href="resto.html"> Natural Restaurant</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="resto.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="About.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Menu.html">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--Akhir Navbar-->

  <!--Jumbotron  -->
  <section class="jumbotron text-center">
    <img src="image/IMG_2852.JPG" alt="makanan indo" width="200" class="rounded-circle img-thumbnail">
    <h1 class="display-4">Contact</h1>
    <p class="lead"></p>
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item"><a href="resto.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Contact</li>
      </ol>
    </nav>
    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1440 320">
      <path fill="#ffff" fill-opacity="1" d="M0,128L48,133.3C96,139,192,149,288,133.3C384,117,480,75,576,74.7C672,75,768,117,864,154.7C960,192,1056,224,1152,197.3C1248,171,1344,85,1392,42.7L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- Akhir Jumbotron -->

  <!-- contact -->
  <section id="contact">
    <div class="container" data-aos="fade-in" data-aos-duration="2000">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Contact Us</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <form action="insert.php" method="post">
            <div class="mb-3">
              <label for="Name" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="Name" name="Name">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
              <label for="kritikdansaran" class="form-label">Kritik dan Saran</label>
              <textarea class="form-control" id="kritik dan saran" rows="3" name="kritikdansaran"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Kirim</button>
          </form>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1440 320">
      <path fill="#198754" fill-opacity="1" d="M0,160L40,165.3C80,171,160,181,240,202.7C320,224,400,256,480,240C560,224,640,160,720,154.7C800,149,880,203,960,224C1040,245,1120,235,1200,213.3C1280,192,1360,160,1400,144L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
      </path>
    </svg>
  </section>

  <!-- akhir contact -->

  <!-- footer -->
  <footer class="bg-success text-white text-center pb-5">
    <nav>
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link text-bg-secondary" href="resto.html">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="resto.html">1</a></li>
        <li class="page-item active" aria-current="page">
          <a class="page-link text-bg-success" href="About.html">2</a>
        </li>
        <li class="page-item "><a class="page-link" href="Contact.html">3</a></li>
        <li class="page-item">
          <a class="page-link text-bg-secondary" href="resto.html">Next</a>
        </li>
      </ul>
    </nav>
    <p>Created with <i class="bi bi-heart-fill text-danger"></i> by <a href="About.html" class="text-white fw-bold">Team A2</a>
    </p>
  </footer>

  <!-- akhir footer -->

  <!-- library aos -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- Gsap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/TextPlugin.min.js"></script>

  <script>
    gsap.registerPlugin(TextPlugin);
    gsap.to('.lead', {
      duration: 7,
      delay: 1.5,
      text: 'Restaurant tradisional Indonesia yang menyajikan menu makanan berasal dari rempah asli Nusantara'
    });
    gsap.from('.jumbotron img', {
      duration: 1.5,
      rotateY: 360,
      opacity: 0
    });
    gsap.from('.navbar', {
      duration: 1.5,
      y: '-100%',
      opacity: 0,
      ease: 'bounce'
    });
    gsap.from('.display-4', {
      duration: 1.5,
      x: -50,
      opacity: 0,
      delay: 0.5,
      ease: 'back'
    });
  </script>

  <!-- my javascrip -->
  <script src="Script.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>