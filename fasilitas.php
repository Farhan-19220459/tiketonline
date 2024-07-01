<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fasilitas</title>
  <?php require('views/links.php'); ?>
<style>
  .pop:hover{
    border-top-color: var(--teal) !important;
    transform: scale(1.03);
    transition: all 0.3;
  }
</style>
</head>
<body class="bg-light">
  
<?php require('views/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">Facilities</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
    Fasilitas kami selalu mengedepankan kenyamanan penumpang, dari berbagai hal aspek seperti kenyamanan <br>
    kursi yang empuk, wifi yang cepat dan stabil, stopkontak disetiap kursi, dll.
  </p>
</div>



<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="images/facilities/wifi.svg" width="40px">
        <h5 class="m-0 m-3">Wifi</h5>
        </div>
        <p>
          Didukung dengan kecepatan 100Mbps, tentu membuat perjalanan anda menjadi lebih nyaman
          dengan internet yang cepat dan stabil
        </p>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="images/facilities/stopkontak.svg" width="40px">
        <h5 class="m-0 m-3">Stopkontak</h5>
        </div>
        <p>
          Dibekali dengan 2 lubang stopkontak disetipa kursinya yang diperuntukkan penumpang 
          untuk mengisi daya handphone
        </p>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="images/facilities/AC.svg" width="40px">
        <h5 class="m-0 m-3">AC</h5>
        </div>
        <p>
          menggunakan AC central dengan kedinginan mencapai 15-20 Celcius, jadi tidak usah diragukan
          tingkat kedinginannya
        </p>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="images/facilities/kantin.svg" width="40px">
        <h5 class="m-0 m-3">Kantin</h5>
        </div>
        <p>
          Dikhususkan 2 gerbong khusus untuk penjualan makanan berat, makanan ringan, dan minuman.
        </p>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="images/facilities/bantal.svg" width="40px">
        <h5 class="m-0 m-3">Bantal</h5>
        </div>
        <p>
          Bantal kami selalu bersih dan wangi, tentu saja juga empuk sangat pas untuk membantu tidur
          nyenyak anda sembari menunggu sampai di tujuan.
        </p>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="images/facilities/selimut.svg" width="40px">
        <h5 class="m-0 m-3">Selimut</h5>
        </div>
        <p>
          Dikarenakan ada penumpang yang tidak tahan dingin dengan AC Central, kami selalu mempersiapkan
          selimut baru, bersih, dan wangi ditempakan disetiap kursi penumpang.
        </p>
      </div>
    </div>
  </div>
</div>

<?php require('views/footer.php'); ?>

</body>
</html>