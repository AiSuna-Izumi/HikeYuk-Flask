<?php
  include('session.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  
  <title>HikeYuk</title>  
  <link href="static/img/logoHike.png" rel="icon">
  <link href="static/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="static/login/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="static/login/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="static/login/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="static/login/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="static/login/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="static/login/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="static/login/assets/css/style.css" rel="stylesheet">


  <!-- =======================================================
  * Template Name: iPortfolio - v3.1.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">
    
    {% for row in rows %}
        <div class='profile'>
          <img src='static/pic/{{row[7]}}' alt='' class='img-fluid rounded-circle' style="height:100px; width:100px;">
          <h1 class='text-light'>{{row[0]}}</h1>
          <h1 class='text-light'>{{row[5]}}</h1>
          <div class='social-links mt-3 text-center'>
            <a href='{{row[10]}}' target='_blank' class='twitter'><i class='bx bxl-twitter'></i></a>
            <a href='{{row[9]}}' target='_blank' class='facebook'><i class='bx bxl-facebook'></i></a>
            <a href='{{row[8]}}' target='_blank' class='instagram'><i class='bx bxl-instagram'></i></a>
          </div>
        </div>
  
    
        

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#about" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Maklumat Guider</span></a></li>
          <li><a href="#bestPhoto" class="nav-link scrollto "><i class="bx bx-user"></i> <span>Best View</span></a></li>
          <li><a href="#programList" class="nav-link scrollto"><i class="bx bx-file-blank"></i><span>Program List Pending</span></a></li>
          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Program List History</span></a></li>
          <li><a href="#guider" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Guider Yang Berdaftar</span></a></li>
          <li><a href="#setupAcc" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Account Setup</span></a></li>
          <li><center><a href="/logout" class="nav-link scrollto"><i class="bx"></i> <span>LogOut</span></a></center></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Bio Guider</h2>
          {% for q in guiderBio %}
        
        <p>{{q[5]}}</p>
    </div>

    <div class='row'>
    <div class='col-lg-4' data-aos='fade-right'>
  <img style='height: 500px;'src='static/pic/{{q[4]}}' class='img-fluid' alt=''>
</div>
<div class='col-lg-8 pt-4 pt-lg-0 content' data-aos='fade-left'>
  <div class='row'>
    <div class='col-lg-6'>
      <ul>
        <li><i class='bi bi-chevron-right'></i> <strong>Price Rate:</strong> <span>{{q[1]}}</span></li>
        <li><i class='bi bi-chevron-right'></i> <strong>Phone Number:</strong> <span>{{q[3]}}</span></li>
        <li><i class='bi bi-chevron-right'></i> <strong>Gender:</strong> <span>{{row[6]}}</span></li>
      </ul>
    </div>
    <div class='col-lg-6'>
      <ul>
        <li><i class='bi bi-chevron-right'></i> <strong>Facebook:</strong><a  href='".$row["fb"]."' > <span>{{row[9]}}</span></a></li>
        <li><i class='bi bi-chevron-right'></i> <strong>Twitter:</strong><a href='".$row["twitter"]."'><span>{{row[10]}}</span></a></li>
        <li><i class='bi bi-chevron-right'></i> <strong>Instagram:</strong><a href='".$row["ig"]."'> <span>{{row[8]}}</span></a></li>
      </ul>
    </div>
    <label for='' class='form-label'>Location Cover</label>
    <div class='col-lg-6'>
            <div class='form-check form-switch'>
              <label class='form-check-label' for='flexSwitchCheckChecked' >Menderu</label>
              <input class='form-check-input' type='checkbox' name='menderu'value='ON' {{q[11]}} disabled>
            </div>
            <div class='form-check form-switch'>
              <label class='form-check-label' for='flexSwitchCheckChecked' >Mak Dayang</label>
              <input class='form-check-input' type='checkbox' name='md'value='ON' {{q[6]}} disabled>
            </div>
            <div class='form-check form-switch'>
              <label class='form-check-label' for='flexSwitchCheckChecked' >Bukit Bendera</label>
              <input class='form-check-input' type='checkbox' name='bb'value='ON' {{q[7]}} disabled>
            </div>
    </div> 
    <div class='col-lg-6'>
            <div class='form-check form-switch'>
              <label class='form-check-label' for='flexSwitchCheckChecked' >Telaga Simpul</label>
              <input class='form-check-input' type='checkbox' name='ts'value='ON' {{q[9]}} disabled>
            </div>
            <div class='form-check form-switch'>
              <label class='form-check-label' for='flexSwitchCheckChecked' >Janda Mandi</label>
              <input class='form-check-input' type='checkbox' name='jm'value='ON' {{q[8]}} disabled>
            </div>
            <div class='form-check form-switch'>
              <label class='form-check-label' for='flexSwitchCheckChecked' >Harimau Menangis</label>
              <input class='form-check-input' type='checkbox' name='hm'value='ON' {{q[10]}} disabled>
            </div>
    </div>
  </div>
  <p>
  </p>
</div>
</div>
   </div>
    </section>
    
  <section id="bestPhoto" class="portfolio ">
      <div class="container" style="width:'300px;'">
      <div class="section-title">
          <h2>GAMBAR MENARIK</h2>
          <p>KOLEKSI GAMBAR</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-end" data-aos="fade-up">
          <li data-filter="*" class="filter-active">Semua</li>
          <li data-filter=".filter-BM">Bukit Bendera</li>
          <li data-filter=".filter-HM">Harimau Menangis</li>
          <li data-filter=".filter-JM">Janda Mandi</li>
          <li data-filter=".filter-MD">Mak Dayang</li>
          <li data-filter=".filter-ME">Menderu</li>
          <li data-filter=".filter-TS">Telaga Simpul</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up">

<div class="col-lg-4 col-md-6 portfolio-item filter-BM">
  <div class="portfolio-img"><img src="static/img/BukitBendera/DSC_2815.jpg" class="img-fluid" alt=""></div>
  <div class="portfolio-info">
    <h4>Bukit Bendera</h4>
    <p>Pantai Teluk Mak Nik</p>
  </div>
</div>
<div class="col-lg-4 col-md-6 portfolio-item filter-BM">
  <div class="portfolio-img"><img src="static/img/BukitBendera/21e5df25-50d6-48e8-8698-47037c5cf376.jpg" class="img-fluid" alt=""></div>
  <div class="portfolio-info">
    <h4>Bukit Bendera</h4>
    <p>Pantai Teluk Mak Nik</p>
  </div>
</div>
<div class="col-lg-4 col-md-6 portfolio-item filter-BM">
  <div class="portfolio-img"><img src="static/img/BukitBendera/c3a1d2e3-647a-4d5e-b2ae-fcd260ea22d4.jpg" class="img-fluid" alt=""></div>
  <div class="portfolio-info">
    <h4>Bukit Bendera</h4>
    <p>Pantai Teluk Mak Nik</p>
  </div>
</div>
<div class="col-lg-4 col-md-6 portfolio-item filter-BM">
  <div class="portfolio-img"><img src="static/img/BukitBendera/photo_2021-05-25_01-40-20.jpg" class="img-fluid" alt=""></div>
  <div class="portfolio-info">
    <h4>Bukit Bendera</h4>
    <p>Pantai Teluk Mak Nik</p>
  </div>
</div>
<div class="col-lg-4 col-md-6 portfolio-item filter-BM">
  <div class="portfolio-img"><img src="static/img/BukitBendera/photo_2021-05-25_01-40-08.jpg" class="img-fluid" alt=""></div>
  <div class="portfolio-info">
    <h4>Bukit Harimau Menangis</h4>
    <p>Kemasik, Kemaman</p>
  </div>
</div>

<div class="col-lg-4 col-md-6 portfolio-item filter-HM">
  <div class="portfolio-img"><img src="static/img/HarimauMenangis/25348149.jpg" class="img-fluid" alt=""></div>
  <div class="portfolio-info">
    <h4>Bukit Harimau Menangis</h4>
    <p>Kemasik, Kemaman</p>
  </div>
</div>
<div class="col-lg-4 col-md-6 portfolio-item filter-HM">
  <div class="portfolio-img"><img src="static/img/HarimauMenangis/27293435.jpg" class="img-fluid" alt=""></div>
  <div class="portfolio-info">
    <h4>Bukit Harimau Menangis</h4>
    <p>Kemasik, Kemaman</p>
  </div>
</div>

<div class="col-lg-4 col-md-6 portfolio-item filter-HM">
  <div class="portfolio-img"><img src="static/img/HarimauMenangis/eb3729dd-93c7-494b-85b3-0a133bb47c61.jpg" class="img-fluid" alt=""></div>
  <div class="portfolio-info">
    <h4>Bukit Harimau Menangis</h4>
    <p>Kemasik, Kemaman</p>
  </div>
</div>
<div class="col-lg-4 col-md-6 portfolio-item filter-HM">
  <div class="portfolio-img"><img src="static/img/HarimauMenangis/9ed4a844-ffe5-4ffc-aa2b-096b9234b84a.jpg" class="img-fluid" alt=""></div>
  <div class="portfolio-info">
    <h4>Bukit Harimau Menangis</h4>
    <p>Kemasik, Kemaman</p>
  </div>
</div>

<div class="col-lg-4 col-md-6 portfolio-item filter-JM">
  <div class="portfolio-img"><img src="static/img/JandaMandi/photo_2021-05-29_00-51-42.jpg" class="img-fluid" alt=""></div>
  <div class="portfolio-info">
    <h4>Janda Mandi</h4>
    <p>Bukit Gemok</p>
  </div>
</div>
<div class="col-lg-4 col-md-6 portfolio-item filter-JM">
  <div class="portfolio-img"><img src="static/img/JandaMandi/photo_2021-05-29_00-51-49.jpg" class="img-fluid" alt=""></div>
  <div class="portfolio-info">
    <h4>Janda Mandi</h4>
    <p>Bukit Gemok</p>
  </div>
</div>
<div class="col-lg-4 col-md-6 portfolio-item filter-JM">
  <div class="portfolio-img"><img src="static/img/JandaMandi/photo_2021-05-29_00-52-03.jpg" class="img-fluid" alt=""></div>
  <div class="portfolio-info">
    <h4>Janda Mandi</h4>
    <p>Bukit Gemok</p>
  </div>
</div>
<div class="col-lg-4 col-md-6 portfolio-item filter-JM">
  <div class="portfolio-img"><img src="static/img/JandaMandi/photo_2021-05-29_00-52-13.jpg" class="img-fluid" alt=""></div>
  <div class="portfolio-info">
    <h4>Janda Mandi</h4>
    <p>Bukit Gemok</p>
  </div>
</div>
<div class="col-lg-4 col-md-6 portfolio-item filter-JM">
  <div class="portfolio-img"><img src="static/img/JandaMandi/photo_2021-05-29_00-52-29.jpg" class="img-fluid" alt=""></div>
  <div class="portfolio-info">
    <h4>Janda Mandi</h4>
    <p>Bukit Gemok</p>
  </div>
</div><div class="col-lg-4 col-md-6 portfolio-item filter-JM">
  <div class="portfolio-img"><img src="static/img/JandaMandi/photo_2021-05-29_00-52-36.jpg" class="img-fluid" alt=""></div>
  <div class="portfolio-info">
    <h4>Janda Mandi</h4>
    <p>Bukit Gemok</p>
  </div>
</div>

<div class="col-lg-4 col-md-6 portfolio-item filter-MD">
  <div class="portfolio-img"><img src="static/img/MakDayang/89803973_00L27A0A5hvr2_QSBq1iVw7NaRVW6RMLaBYNspm-ly8.jpg" class="img-fluid" alt=""></div>
  <div class="portfolio-info">
    <h4>Bukit Mak Dayang</h4>
    <p>Chukai, Kemaman</p>
  </div>
</div>
<div class="col-lg-4 col-md-6 portfolio-item filter-MD">
  <div class="portfolio-img"><img src="static/img/MakDayang/download (1).jpg" class="img-fluid" alt=""></div>
  <div class="portfolio-info">
    <h4>Bukit Mak Dayang</h4>
    <p>Chukai Kemaman</p>
  </div>
</div>
<div class="col-lg-4 col-md-6 portfolio-item filter-MD">
  <div class="portfolio-img"><img src="static/img/MakDayang/extra_large_0887bbad37516082bf8c6e2e2f2d58f0.jpg" class="img-fluid" alt=""></div>
  <div class="portfolio-info">
    <h4>Bukti Mak Dayang</h4>
    <p>Chukai Kemaman</p>
  </div>
</div>
<div class="col-lg-4 col-md-6 portfolio-item filter-MD">
  <div class="portfolio-img"><img src="static/img/MakDayang/21088669.jpg" class="img-fluid" alt=""></div>
  <div class="portfolio-info">
    <h4>Bukit Mak Dayang</h4>
    <p>Chukai, Kemaman</p>
  </div>
</div>

<div class="col-lg-4 col-md-6 portfolio-item filter-TS">
  <div class="portfolio-img"><img src="static/img/TelagaSimpul/5cd1cc0d-46d1-4aeb-a99e-b0891534d4f8.jpg" class="img-fluid" alt=""></div>
  <div class="portfolio-info">
    <h4>Telaga Simpul</h4>
    <p>Pantai Marina</p>
  </div>
</div>
<div class="col-lg-4 col-md-6 portfolio-item filter-TS">
  <div class="portfolio-img"><img src="static/img/TelagaSimpul/75da3153-7d65-4df4-bd4e-25444d1a56fc.jpg" class="img-fluid" alt=""></div>
  <div class="portfolio-info">
    <h4>Telaga Simpul</h4>
    <p>Pantai Marina</p>
  </div>
</div>
<div class="col-lg-4 col-md-6 portfolio-item filter-TS">
  <div class="portfolio-img"><img src="static/img/TelagaSimpul/7e05403d-05c4-4c30-8280-3457691b7f72.jpg" class="img-fluid" alt=""></div>
  <div class="portfolio-info">
    <h4>Telaga Simpul</h4>
    <p>Pantai Marina</p>
  </div>
</div>
<div class="col-lg-4 col-md-6 portfolio-item filter-TS">
  <div class="portfolio-img"><img src="static/img/TelagaSimpul/d77c08f8-0a82-4fb1-bc12-7f66044ef5a4.jpg" class="img-fluid" alt=""></div>
  <div class="portfolio-info">
    <h4>Telaga Simpul</h4>
    <p>Pantai Marina</p>
  </div>
</div>
<div class="col-lg-4 col-md-6 portfolio-item filter-TS">
  <div class="portfolio-img"><img src="static/img/TelagaSimpul/dc1ad605-cc07-469d-aa4f-ebb0ecb7f334.jpg" class="img-fluid" alt=""></div>
  <div class="portfolio-info">
    <h4>Telaga Simpul</h4>
    <p>Pantai Marina</p>
  </div>
</div>

<div class="col-lg-4 col-md-6 portfolio-item filter-ME">
  <div class="portfolio-img"><img src="static/img/Menderu/2020-08-26.jpg" class="img-fluid" alt=""></div>
  <div class="portfolio-info">
    <h4>Menderu</h4>
    <p>Hutan Simpan Rasau</p>
  </div>
</div>
<div class="col-lg-4 col-md-6 portfolio-item filter-ME">
  <div class="portfolio-img"><img src="static/img/Menderu/air-terjun-menderu.jpg" class="img-fluid" alt=""></div>
  <div class="portfolio-info">
    <h4>Menderu</h4>
    <p>Hutan Simpan Rasau</p>
  </div>
</div>
<div class="col-lg-4 col-md-6 portfolio-item filter-ME">
  <div class="portfolio-img"><img src="static/img/Menderu/photo_2021-05-29_00-49-44.jpg" class="img-fluid" alt=""></div>
  <div class="portfolio-info">
    <h4>Menderu</h4>
    <p>Hutan Simpan Rasau</p>
  </div>
</div>
<div class="col-lg-4 col-md-6 portfolio-item filter-ME">
  <div class="portfolio-img"><img src="static/img/Menderu/Hutan Lipur Menderu.jpg" class="img-fluid" alt=""></div>
  <div class="portfolio-info">
    <h4>Menderu</h4>
    <p>Hutan Simpan Rasau</p>
  </div>
</div>
<div class="col-lg-4 col-md-6 portfolio-item filter-ME">
  <div class="portfolio-img"><img src="static/img/Menderu/photo_2021-05-29_00-50-35.jpg" class="img-fluid" alt=""></div>
  <div class="portfolio-info">
    <h4>Menderu</h4>
    <p>Hutan Simpan Rasau</p>
  </div>
</div>

</div>
      </div>
    </section>
    
   
    <section id="programList" class="ProgramList">
      <div class="container">

        <div class="section-title">
          <h2>Program On List</h2>
           </div>

        <div class="row">
        <table class="table">
        <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">No Phone</th>
      <th scope="col">Location</th>
      <th scope="col">Time</th>
      <th scope="col">Date</th>
      <th scope="col">Total Member</th>
      <th scope="col">Comment</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  {% for a in vgp %}
      <form action='acceptProgram.php' method='post'>
      <tr>
        <th scope='row'><input type='hidden' name='id' value={{a[0]}}>{{a[0]}}</th>
        <td><input type='hidden' name='hiker' value={{a[2]}}>{{a[2]}}</td>
        <td><input type='hidden' name='phone' value={{a[3]}}>{{a[3]}}</td>
        <td><input type='hidden' name='location' value={{a[4]}}>{{a[4]}}</td>
        <td><input type='hidden' name='time' value={{a[5]}}>{{a[5]}}</td>
        <td><input type='hidden' name='date' value={{a[6]}}>{{a[6]}}</td>
        <td><input type='hidden' name='member' value={{a[7]}}>{{a[7]}}</td>
        <td><input type='text' name='comment' value=''></td>
        <input type='hidden' name='userEmail' value={{a[1]}}>
        <td><input type='hidden' name='status' value='accept'><input style='background-color: rgb(175, 231, 128,1);'class='btn btn-succes' value='ACCEPT' type='submit'/></td>
      </tr> </form>
  {% endfor %}
      </tbody>
    </table>
  
        </div>

      </div>
    </section>

  

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Sejarah Pendakian</h2>
         </div>

        <div class="row">
        <table class="table">
        <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Location</th>
      <th scope="col">Time</th>
      <th scope="col">Date</th>
      <th scope="col">Total Member</th>
      <th scope="col">Guider Name</th>
      <th scope="col">Guider Phone</th>
      <th scope="col">Comment</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    
  {% for t in guiderProg %}
  <tr>
        <th scope='row'><input type='hidden' name='id' value={{t[0]}}>{{t[0]}}</th>
        <td><input type='hidden' name='hiker' value={{t[5]}}>{{t[5]}}</td>
        <td><input type='hidden' name='location' value={{t[3]}}>{{t[3]}}</td>
        <td><input type='hidden' name='time' value={{t[6]}}>{{t[6]}}</td>
        <td><input type='hidden' name='date' value={{t[7]}}>{{t[7]}}</td>
        <td><input type='hidden' name='member' value={{t[8]}}>{{t[8]}}</td>
        <td><input type='hidden' name='guiderName' value={{t[4]}}>{{t[4]}}</td>
        <td><input type='hidden' name='guiderPhone' value={{t[12]}}>{{t[12]}}</td>
        <td><input type='hidden' name='comment' value={{t[10]}}>{{t[10]}}</td>
        <td><input type='hidden' name='comment' value={{t[9]}}>{{t[9]}}</td>
        <input type='hidden' name='phone' value={{t[12]}}>
        </tr> 
  {% endfor %} 
  <tbody>
    </table>

      </div>
    </section><!-- End Services Section -->

    <section id="guider" class="guider">
      <div class="container">

        <div class="section-title">
          <h2>Guider Yang Berdaftar</h2>
        </div>

     
        {% for g in guider %}
       <div class='testimonials-slider swiper-container' data-aos='fade-up' data-aos-delay='100'>
       <div class='swiper-wrapper'>

       <div class='card' style='width: 18rem; margin-left:5%;'>
             <img src='static/pic/{{g[4]}}'style='height:250px;' class='card-img-top' >
         <div class='card-body'>
             <h5 class='card-title'>{{g[0]}}</h5>
             <i class='bx bxs-quote-alt-left quote-icon-left'></i>
            {{g[8]}}
             <i class='bx bxs-quote-alt-right quote-icon-right'></i>
             <p class='card-text' style='height:;'>{{g[1]}}</p>
             <div class='social-links mt-3 text-center'>
             <a href='{{g[7]}}' target="_blank" class='twitter'><i class='bx bxl-twitter'></i></a>
             <a href='{{g[6]}}' target="_blank" class='facebook'><i class='bx bxl-facebook'></i></a>
             <a href='{{g[5]}}' target="_blank" class='instagram'><i class='bx bxl-instagram'></i></a>
           </div>
         </div>
     </div>
          </div> 
        </div>
        {% endfor %}
      </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="setupAcc" class="setupAcc">
      <div class="container">
        <div class="section-title">
          <h2>Setup Your Account</h2>
          <p></p>
        </div>
        <div class="row" data-aos="fade-in">

        <div class='col-lg-5 d-flex align-items-stretch'>
            <div class='info'>
              <div class='address'>
              <i class='bi bi-geo-alt'></i>
           
           <h4>Username:</h4>
           <p>{{row[0]}}</p>
         </div>

         <div class='email'>
           <i class='bi bi-envelope'></i>
           <h4>Email:</h4>
           <p>{{row[3]}}</p>
         </div>

         <div class='phone'>
           <i class='bi bi-phone'></i>
           <h4>No Phone:</h4>
           <p>{{row[4]}}</p>
         </div>
       

            <form action='/picUpdate1' method='post'enctype='multipart/form-data'>
              <div class='mb-3'>
                <label for='formFile' class='form-label'>Change Pic</label>
                <input class='form-control' name='picture' type='file' id='picture'>
              </div>
              <center class='fieldset'>
              <input type='submit' style='background-color: rgb(175, 231, 128,1);'class='btn btn-succes' value='Upload Picture'/>
              </center>
            </form>
            
            
            
            <form action='/guiderPic' method='post'enctype='multipart/form-data'>
              <div class='mb-3'>
                <label for='formFile' class='form-label'>Bio Pic Guider</label>
                <input class='form-control' name='picture' type='file' id='picture'>
              </div>
              <center class='fieldset'>
              <input type='submit' style='background-color: rgb(175, 231, 128,1);'class='btn btn-succes' value='Upload Picture'/>
              </center>
            </form>
            </div>
          </div>

     <div class='col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch'>
         <form action='/updateGuider' method='POST'>
          <div class='row'> 
          <fieldset disabled>
             <div class='form-group' style='width:'>
               <label for='disabledTextInput' class='form-label'>Email</label>
               <input type='text' id=''name='email' class='form-control' placeholder={{row[3]}}>
             </div>
           </fieldset disabled>
             <div class='form-group' style='width:'>
               <label for='' class='form-label'>Username</label>
               <input type='text' id='' class='form-control'name='username' value={{row[0]}} placeholder={{row[0]}}>
             </div>
             <div class='form-group' style='width:'>
               <label for='' class='form-label'>No Phone</label>
               <input type='text' id='' class='form-control'name='phone'value={{row[4]}} placeholder={{row[4]}}>
             </div>
             <div class='form-group' style='width:'>
               <label for='' class='form-label'>Age</label>
               <input  class='form-control' type='number' id='age' name='age' min='15' max='90' value={{row[2]}} placeholder={{row[2]}}>
             </div>
             <div class='form-group' style='width:'>
               <label for='' class='form-label'>Price Rate/ Hour (RM)</label>
               <input  class='form-control' type='number' name='price' min='10' max='90' value={{q[1]}} placeholder={{q[1]}}>
             </div>
            <br>
            <label for='' class='form-label'></label>
            <label for='' class='form-label'></label>
            <label for='' class='form-label'>Location Cover</label>

            <div class='form-check form-switch'>
              <label class='form-check-label' for='flexSwitchCheckChecked' >Menderu</label>
              <input class='form-check-input' type='checkbox' name='menderu' value='ON' {{q[11]}}>
            </div>
            <div class='form-check form-switch'>
              <label class='form-check-label' for='flexSwitchCheckChecked' >Mak Dayang</label>
              <input class='form-check-input' type='checkbox' name='md' value='ON'{{q[6]}}>
            </div>
            <div class='form-check form-switch'>
              <label class='form-check-label' for='flexSwitchCheckChecked' >Bukit Bendera</label>
              <input class='form-check-input' type='checkbox' name='bb' value='ON' {{q[7]}}>
            </div>
            <div class='form-check form-switch'>
              <label class='form-check-label' for='flexSwitchCheckChecked' >Telaga Simpul</label>
              <input class='form-check-input' type='checkbox' name='ts' value='ON' {{q[9]}}>
            </div>
            <div class='form-check form-switch'>
              <label class='form-check-label' for='flexSwitchCheckChecked' >Janda Mandi</label>
              <input class='form-check-input' type='checkbox' name='jm' value='ON' {{q[8]}}>
            </div>
            <div class='form-check form-switch'>
              <label class='form-check-label' for='flexSwitchCheckChecked' >Harimau Menangis</label>
              <input class='form-check-input' type='checkbox' name='hm' value='ON' {{q[10]}}>
            </div>
            

            <label for='' class='form-label'></label>
            <label for='' class='form-label'></label>
            <div class='form-check form-switch'>
                <input class='form-check-input' type='checkbox' name='status'value='ON' {{q[2]}}>
                <label class='form-check-label' for='flexSwitchCheckChecked' >Status ON/OFF</label>
            </div>
            <div class='form-group' >
               <label for='' class='form-label'>Comment</label>
               <input type='text' id='' class='form-control'name='comment'value='{{q[5]}}' placeholder='Your Motivate'>
            </div>
            <label for='' class='form-label'></label> 
            <label for='' class='form-label'></label>
            <label for='' class='form-label'></label>
         
            <div class='form-group' style='width:'>
               <label for='' class='form-label'>Facebook</label>
               <input type='text' id='' class='form-control' name='facebook' value={{row[9]}}>
             </div>
             <div class='form-group' style='width:'>
               <label for='' class='form-label'>Instagram</label>
               <input type='text' id='' class='form-control'name='instagram' value={{row[8]}}>
             </div>
             <div class='form-group' style='width:'>
               <label for='' class='form-label'>Twitter</label>
               <input type='text' id='' class='form-control'name='twitter' value={{row[10]}}>
             </div><br></br>
            
             <center class='fieldset'><br>
             <button style='background-color: rgb(175, 231, 128,1);'class='btn btn-succes' type='submit' value='Change Detail'>UPDATE DETAIL</button>
          </center>
           </div>       
           

         </form>
         
             
       </div> 

    {%endfor%}
    {%endfor%}
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>HikeYuk</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Design</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- Vendor JS Files -->
<script src="static/login/assets/vendor/aos/aos.js"></script>
  <script src="static/login/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="static/login/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="static/login/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="static/login/assets/vendor/php-email-form/validate.js"></script>
  <script src="static/login/assets/vendor/purecounter/purecounter.js"></script>
  <script src="static/login/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="static/login/assets/vendor/typed.js/typed.min.js"></script>
  <script src="static/login/assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="static/login/assets/js/main.js"></script>

</body>

</html>