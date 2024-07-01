<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <?php require('views/links.php'); ?>
</head>
<body class="bg-light">
  
<?php require('views/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">Contact Us</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
    Kami selalu siap membantu dan siap menerima segala macam laporan dari pengguna aplikasi kami,<br>
    jika pengguna kurang informasi terkait hal rute, tiket, jadwal, dan lain-lain, kalian bisa menghubungi kami <br>
    dengan cara memberitahu kami lewat link yang telah kami sediakan dibawah ini.
  </p>
</div>


<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 mb-5 px-4">

      <div class="bg-white rounded shadow p-4">
        <iframe class="w-100 rounded mb-4" height="320px" src="<?php echo $contact_r['iframe'] ?>"loading="lazy"></iframe>
        
        <h5>Alamat</h5>
        <a href="<?php echo $contact_r['gmaps'] ?>" target:"_blank" class="d-inline-block text-decoration-none text-dark mb-2">
          <i class="bi bi-geo-alt-fill"></i><?php echo $contact_r['address'] ?>
        </a>

        <h5 class="mt-4">Hubungi Kami</h5>
        <a href="Wa: +<?php echo $contact_r['telp1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-whatsapp"></i> +<?php echo $contact_r['telp2'] ?>
        </a>
        <br>
        <?php
          if($contact_r['telp2']!=''){
            echo<<<data
            <a href="Wa: +$contact_r[telp2]" class="d-inline-block mb-2 text-decoration-none text-dark">
              <i class="bi bi-whatsapp"></i> +$contact_r[telp2]
            </a>
            data;
          } 
        ?>
        
        <h5 class="mt-4">Email</h5>
        <a href="mailto: <?php echo $contact_r['email'] ?>" class="d-inline-block text-decoration-none text-dark">
          <i class="bi bi-envelope"></i> <?php echo $contact_r['email'] ?>
        </a>

        <h5 class="mt-4">Follow Us</h5>
        <?php 
          if($contact_r['twitter']!=''){
            echo<<<data
            <a href="$contact_r[twitter]" class="d-inline-block text-dark fs-5 me-2">
              <i class="bi bi-twitter-x"></i>
            </a>
            data;
          }
        ?>
        
        <a href="<?php echo $contact_r['instagram'] ?>" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-instagram"></i>
        </a>
        <a href="<?php echo $contact_r['facebook'] ?>" class="d-inline-block text-dark fs-5">
            <i class="bi bi-facebook"></i>
        </a>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
        <form method="POST">
          <h5>Need help ?</h5>
          <div class="mb-3">
            <label class="form-tabel" style="font-weight: 500;">Name</label>
            <input name="name" type="text" class="form-control shadow-none">
          </div>
          <div class="mb-3">
            <label class="form-tabel" style="font-weight: 500;">Email</label>
            <input name="email" type="email" class="form-control shadow-none">
          </div>
          <div class="mb-3">
            <label class="form-tabel" style="font-weight: 500;">Subject</label>
            <input name="subject" type="text" class="form-control shadow-none">
          </div>
          <div class="mb-3">
            <label class="form-tabel" style="font-weight: 500;">Message</label>
            <textarea name="message" class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
          </div>
          <button type="submit" name="send" class="btn btn-dark custom-bg mt-3">Send</button>
        </form>
     </div>
    </div>
  </div>
</div>

<?php 
  if(isset($_POST['send']))
  {
    $frm_data = filteration($_POST);

    $q = "INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
    $values = [$frm_data['name'],$frm_data['email'],$frm_data['subject'],$frm_data['message']];

    $res = insert($q,$values,'ssss');
    if($res==1){
      alert('success','Email terkirim!');
    }
    else{
      alert('error','Server Down! Try again later.');
    }
  }
?>


<?php require('views/footer.php'); ?>

</body>
</html>