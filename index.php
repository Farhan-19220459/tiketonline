<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tix Online</title>
    <?php require('views/links.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <style>
        .booking-form{
          margin-top: -50px;
          z-index: 2;
          position: relative;
        }

        @media screen and (max-width: 575px) {
          .booking-form{
            margin-top: 25px;
            padding: 0 35px;
          }
        }

    </style>
</head>
<body class="bg-light">
  
<?php require('views/header.php'); ?>

<!------------------ Carousel ------------------>

<div class="class-container-fluid px-lg-4 mt-4">
  <div id="slider" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" >
          <div class="carousel-item active">
            <img src="images/carousel/kereta_1.png" class="w-100 d-block">
          </div>
          <div class="carousel-item ">
          <img src="images/carousel/kereta_2.png" class="w-100 d-block">
          </div>
          <div class="carousel-item ">
          <img src="images/carousel/kereta_3.png" class="w-100 d-block">
          </div>
          <div class="carousel-item ">
          <img src="images/carousel/kereta_4.png" class="w-100 d-block">
          </div>
          <div class="carousel-item ">
          <img src="images/carousel/kereta_5.png" class="w-100 d-block">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>

<!------------------ Pesan ------------------>

<div class="container pesan-form">
  <div class="row">
    <div class="col-lg-12 bg-white shadow p-4 rounded">
      <h5 class="mb-4">Pesan Tiket</h5>
      <form>
        <div class="row align-items-end">
          <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Dari</label>
              <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Ke</label>
              <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight: 500;">Dewasa</label>
            <select class="form-select" aria-label="Default select example">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
          <div class="col-lg-2 mb-3">
            <label class="form-label" style="font-weight: 500;">Anak-anak</label>
            <select class="form-select" aria-label="Default select example">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
        </div>
        <div class="col-lg-1 mb-lg-3 mt-2">
          <button type="submit" class="btn btn-dark shadow-none custom-bg">Cari</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!------------------ Kelas ------------------>

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Kelas</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/class/ekonomi1.jpeg" class="card-img-top">
          <div class="card-body">
            <h5>Ekonomi</h5>
            <h6 class="mb-4">Rp70k - Rp135k</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Toilet
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Televisi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2-4 Seat
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Reclining seat
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilites</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Stop kontak
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Meja makan
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-half text-warning"></i>
              <i class="bi bi-star text warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Pesan Sekarang</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Info lebih lanjut</a>
            </div>
          </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/class/bisnis.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Bisnis</h5>
            <h6 class="mb-4">Rp150k - Rp230k</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Toilet
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Televisi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Seat
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Reclining seat
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilites</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Stop kontak
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Meja makan
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Pesan Sekarang</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Info lebih lanjut</a>
            </div>
          </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/class/eksekutif.png" class="card-img-top">
          <div class="card-body">
            <h5>Eksekutif</h5>
            <h6 class="mb-4">Rp235k - Rp300k</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Toilet
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Televisi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Seat
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Wifi
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilites</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Stop kontak
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Meja makan
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Selimut
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Bantal
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-half text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Pesan Sekarang</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Info lebih lanjut</a>
            </div>
          </div>
        </div>
    </div>
    <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Class</a>
    </div>
  </div>
</div>

  <!------------------ Fasilitas ------------------>

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Fasilitas</h2>

<div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-mg-2 col-lg-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/wifi.svg" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-mg-2 col-lg-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/kantin.svg" width="80px">
      <h5 class="mt-3">Kantin</h5>
    </div>
    <div class="col-mg-2 col-lg-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/Stopkontak.svg" width="80px">
      <h5 class="mt-3">Stopkontak</h5>
    </div>
    <div class="col-mg-2 col-lg-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/AC.svg" width="80px">
      <h5 class="mt-3">AC</h5>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities</a>
    </div>
  </div>
</div>

  <!------------------ Testimoni ------------------>

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimoni</h2>

<div class="container mt-5">
  <div class="swiper swiper-testimoni">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/icons/star.svg" width="30px">
          <h6 class="m-0 ms-2">Random User</h6>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Quas mollitia, inventore beatae quibusdam explicabo, officia omnis illo rerum, quod culpa harum.
          Nam molestiae dolorem eius suscipit eligendi deserunt recusandae? Voluptatem.
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/icons/star.svg" width="30px">
          <h6 class="m-0 ms-2">Random User</h6>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Quas mollitia, inventore beatae quibusdam explicabo, officia omnis illo rerum, quod culpa harum.
          Nam molestiae dolorem eius suscipit eligendi deserunt recusandae? Voluptatem.
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/icons/star.svg" width="30px">
          <h6 class="m-0 ms-2">Random User</h6>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Quas mollitia, inventore beatae quibusdam explicabo, officia omnis illo rerum, quod culpa harum.
          Nam molestiae dolorem eius suscipit eligendi deserunt recusandae? Voluptatem.
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/icons/star.svg" width="30px">
          <h6 class="m-0 ms-2">Random User</h6>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Quas mollitia, inventore beatae quibusdam explicabo, officia omnis illo rerum, quod culpa harum.
          Nam molestiae dolorem eius suscipit eligendi deserunt recusandae? Voluptatem.
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/icons/star.svg" width="30px">
          <h6 class="m-0 ms-2">Random User</h6>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Quas mollitia, inventore beatae quibusdam explicabo, officia omnis illo rerum, quod culpa harum.
          Nam molestiae dolorem eius suscipit eligendi deserunt recusandae? Voluptatem.
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>

    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>

  <!------------------ Alamat ------------------>

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Alamat</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
      <iframe class="w-100 rounded" height="320px" src="<?php echo $contact_r['iframe'] ?>" loading="lazy"></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded">
        <h5>Hubungi Kami</h5>
        <a href="Wa: <?php echo $contact_r['iframe'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-whatsapp"></i> <?php echo $contact_r['telp1'] ?>
        </a>
        <br>
        <?php 
          if($contact_r['telp2']!=''){
            echo<<<data
              <a href="Wa: $contact_r[telp2]" class="d-inline-block mb-2 text-decoration-none text-dark">
                <i class="bi bi-whatsapp"></i> $contact_r[telp2]
              </a>
            data;
          }
        ?>
      </div>
      <div class="bg-white p-4 rounded">
        <h5>Follow Us</h5>
        <?php 
          if($contact_r['twitter']!=''){
            echo<<<data
              <a href="$contact_r[twitter]" class="d-inline-block mb-3">
                <span class="badge bg-light text-dark fs-6 p-2"> 
                  <i class="bi bi-twitter-x"></i> twitter
                </span>
              </a>
            data;
          }
        ?>
        <br>
        <a href="<?php echo $contact_r['instagram'] ?>" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2"> 
            <i class="bi bi-instagram"></i> Instagram
          </span>
        </a>
        <br>
        <a href="<?php echo $contact_r['facebook'] ?>" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2"> 
            <i class="bi bi-facebook"></i> Facebook
          </span>
        </a>
      </div>
    </div>
  </div>
</div>

<?php require('views/footer.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>


<script>
    var swiper = new Swiper(".swipper-container", {
    spaceBetween: 30,
    effect: "fade",
    loop: true,
    autoplay: {
    delay: 3500,
    disableOnInteraction: false
    }
    });

    var swiper = new Swiper(".swiper-testimoni", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    slidesPerView: "3",
    loop: true,
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
    pagination: {
       el: ".swiper-pagination",
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      640: {
        slidesPerView: 1,
      },
      728: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    }
    });
</script>

</body>
</html>