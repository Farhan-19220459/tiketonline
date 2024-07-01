<div class="container-fluid bg-white mt-5">
  <div class="row">
    <div class="col-lg-4 p-4">
      <h3 class="h-font fw-bold fs-3 mb-2">Tix Online</h3>
      <p>
        Tix online adalah program yang kami buat untuk membantu masyarakat dalam 
        pemesanan tiket kereta secara online, kami bekerja-sama dengan armada terkenal terkenal s.
      </p>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Links</h5>
      <a href="index.php" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
      <a href="class.php" class="d-inline-block mb-2 text-dark text-decoration-none">Kelas</a><br>
      <a href="fasilitas.php" class="d-inline-block mb-2 text-dark text-decoration-none">Fasilitas</a><br>
      <a href="contact.php" class="d-inline-block mb-2 text-dark text-decoration-none">Hubungi Kami</a><br>
      <a href="about.php" class="d-inline-block mb-2 text-dark text-decoration-none">Tentang Kami</a><br>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Follow Us</h5>
      <?php 
        if($contact_r['twitter']!=''){
          echo<<<data
          <a href="$contact_r[twitter]" class="d-inline-block text-dark text-decoration-none mb-2">
            <i class="bi bi-twitter-x"></i> Twitter
          </a><br>
          data;
        }
      ?>
      
      <a href="<?php echo $contact_r['instagram'] ?>" class="d-inline-block text-dark text-decoration-none mb-2">
        <i class="bi bi-instagram"></i> Instagram
      </a><br>
      <a href="<?php echo $contact_r['facebook'] ?>" class="d-inline-block text-dark text-decoration-none">
        <i class="bi bi-facebook"></i> Facebook
      </a><br>
    </div>
  </div>
</div>

<h6 class="text-center bg-dark text-white p-3 m-0">Designed and Developed by Farhan</h6>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>
  function setActivate()
  {
    let navbar = document.getElementById('nav-bar');
    let a_tags = navbar.getElementById('a');

    for(i=0; i<a_tags.lenght; i++)
    {
      let file = a_tags[i].href.split('/').pop();
      let file_name = file.split('.')[0];

      if(document.location.href.indexOf(file_name) >=0){
        a_tags[i].classicList.add('activate');
      }

    }
  }
  setActivate();

</script>