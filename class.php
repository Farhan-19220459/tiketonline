<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Class</title>
  <?php require('views/links.php'); ?>
</head>
<body class="bg-light">
  
<?php require('views/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">Class</h2>
  <div class="h-line bg-dark"></div>
</div>

<div class="container-fluid">
  <div class="row">

    <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 ps-4">
      <nav class="navbar navbar-expand navbar-light bg-light bg-white rounded shadow">
        <div class="container-fluid flex-lg-column align-items-stretch">
          <h4 class="mt-2">Filters</h4>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filtersDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
                </button>
              <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
            <div class="border bg-light p-3 rounded mb-3">
              <h5 class="mb-3" style:"font-size: 18px;">Cek Ketersediaan</h5>
              <label class="form-label">Dari</label>
              <input type="date" class="form-control shadow-none mb-3">
              <label class="form-label">Ke</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="border bg-light p-3 rounded mb-3">
              <h5 class="mb-3" style:"font-size: 18px;">Fasilitas</h5>
              <div class="mb-2">
                <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                <label class="form-check-label" for="f1">AC</label>
              </div>
              <div class="mb-2">
                <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                <label class="form-check-label" for="f2">Stopkontak</label>
              </div>
              <div class="mb-2">
                <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                <label class="form-check-label" for="f4">Wifi</label>
              </div>
              <div class="mb-2">
                <input type="checkbox" id="f4" class="form-check-input shadow-none me-1">
                <label class="form-check-label" for="f5">Selimut</label>
              </div>
              <div class="mb-2">
                <input type="checkbox" id="f6" class="form-check-input shadow-none me-1">
                <label class="form-check-label" for="f6">Bantal</label>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>

    <div class="col-lg-9 col-md-12 px-4">

    <?php
            $class_res =select("SELECT * FROM `class` WHERE `status`=? AND `removed`=?",[1,0],'ii');

           while($class_data = mysqli_fetch_assoc($class_res))
           {
                // get features of class

                $fea_q = mysqli_query($con,"SELECT f.name FROM `features` f 
                INNER JOIN `class_features` rfea ON f.id = rfea.features_id 
                WHERE rfea.class_id = '$class_data[id]'");

                $features_data = "";
                 while($fea_row = mysqli_fetch_assoc($fea_q)){
                    $features_data .= "<span class='badge rounded-pill bg-light text-dark text-wrap'>
                     $fea_row[name]
                    </span>";

                   
                 }
                // get facilities of class

                $fac_q = mysqli_query($con,"SELECT f.name FROM `facilities` f 
                INNER JOIN `class_facilities` rfac ON f.id = rfac.facilities_id 
                WHERE rfac.class_id = '$class_data[id]'");

                $facilities_data = "";
                while($fac_row = mysqli_fetch_assoc($fac_q)){
                    $facilities_data .= "<span class='badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base'>
                     $fac_row[name]
                    </span>";
                 }

                //get thumbnail of image

                $class_thumb = CLASS_IMG_PATH."thumbnail.jpg";
                $thumb_q = mysqli_query($con,"SELECT * FROM `class_images`
                 WHERE `class_id` = '$class_data[id]' 
                 AND `thumb` ='1' ");

                 if(mysqli_num_rows($thumb_q)>0){
                    $thumb_res = mysqli_fetch_assoc($thumb_q);
                    $class_thumb = CLASS_IMG_PATH.$thumb_res['image'];
                 }


                 $book_btn = "";

                 if(!$settings_r['shutdown']){
                    $login=0;
                    if(isset($_SESSION['login']) && $_SESSION['login']==true){
                      $login=1;
                    }
                    $book_btn = "<button onclick='checkLoginToBook($login,$class_data[id])' class='btn btn-sm w-100 text-white custom-bg shadow-none mb-2'>Book Now</button>";

                 }

                 // print class card

                 echo<<<data

                  <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                      <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                        <img src="images/class/ekonomi1.jpeg" class="img-fluid rounded">
                      </div>
                      <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h5 class="mb-3">Kelas Ekonomi</h5>
                          <div class="features mb-3">
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
                          <div class="facilities mb-3">
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
                      </div>
                      <div class="col-md-2 text-center">
                        <h6 class="mb-4">Rp70k - Rp135k</h6>
                        <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Pesan Sekarang</a>
                        <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">Info lebih lanjut</a>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                      <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                        <img src="images/class/bisnis.jpg" class="img-fluid rounded">
                      </div>
                      <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h5 class="mb-3">Kelas Bisnis</h5>
                          <div class="features mb-3">
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
                          <div class="facilities mb-3">
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
                      </div>
                      <div class="col-md-2 text-center">
                        <h6 class="mb-4">Rp150k - Rp230k</h6>
                        <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Pesan Sekarang</a>
                        <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">Info lebih lanjut</a>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                      <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                        <img src="images/class/eksekutif.png" class="img-fluid rounded">
                      </div>
                      <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h5 class="mb-3">Kelas Eksekutif</h5>
                          <div class="features mb-3">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                              Toilet
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                              Televisi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                              2 seat
                            </span>
                          </div>
                          <div class="facilities mb-3">
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
                      </div>
                      <div class="col-md-2 text-center">
                        <h6 class="mb-4">Rp150k - Rp230k</h6>
                        <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Pesan Sekarang</a>
                        <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">Info lebih lanjut</a>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                      <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                        <img src="images/class/Luxury.jpeg" class="img-fluid rounded">
                      </div>
                      <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h5 class="mb-3">Kelas Luxury</h5>
                          <div class="features mb-3">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                              Toilet
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                              Televisi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                              1 seat
                            </span>
                          </div>
                          <div class="facilities mb-3">
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
                      </div>
                      <div class="col-md-2 text-center">
                        <h6 class="mb-4">Rp500k - Rp1000k</h6>
                        <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Pesan Sekarang</a>
                        <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">Info lebih lanjut</a>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                      <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                        <img src="images/class/panoramic.png" class="img-fluid rounded">
                      </div>
                      <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h5 class="mb-3">Kelas Panoramic</h5>
                          <div class="features mb-3">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                              Toilet
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                              Televisi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                              Automatic Sunroof & Kaca Panoramic
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                              Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                              Sajian Makanan
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                              Sajian Minuman
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                              Dedicated Train Attendant
                            </span>
                          </div>
                          <div class="facilities mb-3">
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
                      </div>
                      <div class="col-md-2 text-center">
                        <h6 class="mb-4">Rp400k - Rp1.200k</h6>
                        <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Pesan Sekarang</a>
                        <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">Info lebih lanjut</a>
                      </div>
                    </div>
                  </div>
                            
                  data;
            }
          ?>
    </div>
  </div>
</div>

<?php require('views/footer.php'); ?>

</body>
</html>