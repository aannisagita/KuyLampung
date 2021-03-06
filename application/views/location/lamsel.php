<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
@import url('https://fonts.googleapis.com/css?family=Expletus+Sans');

* {
    box-sizing: border-box;
}

body {
    background-color: #f1f1f1;
    font-family: Arial;
}

/* Center website */
.main {
    max-width: 1000px;
    margin: auto;
    font-family: 'Expletus Sans', cursive;
}

h1 {
    font-size: 50px;
    word-break: break-all;
}

.row {
    margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
    padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
}

/* Clear floats after rows */ 
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    text-align: center;
    background-color: white;
    margin-right: -15px;
    margin-left: -15px;
    padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
    .column {
        width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        width: 100%;
    }
}
</style>
</head>
<body>

<!-- MAIN (Center website) -->
<div class="main">
<img src="<?=base_url()?>assets/img/caropagebaru/logolamsel.png" class="img-thumbnail" alt="Bandar Lampung" height="200px" width="200px" style='background-color: #f2f3f4; border: none;'>
<h2 style="color: black; background-color: #f2f3f4; border: none; margin-top: -200px; margin-right: 0px; margin-left: 220px; font-style: bold;"> Kabupaten Lampung Selatan</h2>
<hr>
<h5 style="margin-right: 100px; margin-left: 220px; font-style: italic;">"Lampung Selatan adalah salah satu kabupaten dari provinsi Lampung yang terletak di sepanjang pesisir Teluk Lampung. Di kabupaten ini pula terdapat pelabuhan Bakauheni yang menjadi gerbang masuk menuju pulau Sumatera dari pulau Jawa dan sebaliknya. Karena posisinya yang berada di pesisir pantai maka kabupaten Lampung Selatan ini mendapatkan julukan Sydney van Andalas." </h5>
<h2 style="margin-top: 50px;">Destinasi Wisata</h2>
<p style="font-style: italic;">"Kuy Lampung! Jelajahi Kekayaan Yang Di Miliki Indonesia, Cintai Alam & Negerimu!"</p>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <img src="<?=base_url()?>assets/img/lamsel/pasirputih.jpg" style="width:100%; height: 23%;">
      <h3 style="margin-top: 10px;">Pantai Pasir Putih</h3>
      <p>Salah satu obyek wisata yang terkenal di Lampung adalah Pantai Pasir Putih yang terletak di Jalan Trans Sumatera.
      <a href="<?php echo site_url('lamsel/lamsel1'); ?>">
                Baca Selengkapnya >>>>>
                </a>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="<?=base_url()?>assets/img/lamsel/embe.jpg" alt="Lights" style="width:100%; height: 23%;">
      <h3 style="margin-top: 10px;">Pantai Embe (Embe Beach)</h3>
      <p>Pantai Embe Kalianda. Siapa sih yang gak suka bermain di Pantai Pasir Putih yang lembut nan indah? Apalagi ditemani cahaya matahari sore yang keemasan.
   
      </p>
      <a href="<?php echo site_url('lamsel/lamsel2'); ?>">
                Baca Selengkapnya >>>>>
                </a>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="<?=base_url()?>assets/img/lamsel/batugranit.jpg" alt="Nature" style="width:100%; height: 23%;">
      <h3 style="margin-top: 10px;">Taman Batu Granit</h3>
      <p>
      Sebagai salah satu provinsi dengan garis pantai terpanjang sumatera, Provinsi Lampung juga mengandung beragam potensi geologi yang juga menjanjikan
      </p>
      <a href="<?php echo site_url('lamsel/lamsel3'); ?>">
                Baca Selengkapnya >>>>>
                </a>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="<?=base_url()?>assets/img/lamsel/Sebesi.jpg" alt="Mountains" style="width:100%; height: 23%;">
      <h3 style="margin-top: 10px;">Pulau Sebesi</h3>
      <p>Pulau Sebesi menjadi salah satu pulau yang sedang dikembangkan menjadi daerah tujuan wisata andalan Lampung Selatan selain Pulau Krakatau.
      </p>
      <a href="<?php echo site_url('lamsel/lamsel4'); ?>">
                Baca Selengkapnya >>>>>
                </a>
    </div>
  </div>
<!-- END GRID -->
</div>

<div class="content">
  <img src="<?=base_url()?>assets/img/lamsel/karet.jpg" alt="Bear" style="width:100%">
  <h3 style="margin-top: 10px;">Kebun Karet Trikora PTPN 7</h3>
  <p>Jika kamu sedang pergi ke Lampung dan ditanya tempat mana yang sedang ngetrend untuk pengambilan foto? Jawabannya pastilah Kebun Karet Trikora. 
  </p>
    <a href="<?php echo site_url('lamsel/lamsel5'); ?>">
                Baca Selengkapnya >>>>>
                </a>
</div>


<div class="row">
  <div class="column">
    <div class="content">
      <img src="<?=base_url()?>assets/img/lamsel/mengkudu.jpg" style="width:100%; height: 23%;">
      <h3 style="margin-top: 10px;">Pulau Mengkudu</h3>
      <p>Pulau Mengkudu merupakan objek wisata kekinian yang belakangan naik daun melalui media sosial. sebuah tempat indah yang kerap mendapat julukan sebagai Tanah Lot-nya Lampung.
      </p>

      <a href="<?php echo site_url('lamsel/lamsel6'); ?>">
                Baca Selengkapnya >>>>>
                </a>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="<?=base_url()?>assets/img/lamsel/guci.jpg" alt="Lights" style="width:100%; height: 23%;">
      <h3 style="margin-top: 10px;">Pantai Guci Batu Kapal</h3>
      <p>Pantai Guci Batu Kapal menjadi salah satu hal penting yang perlu anda kunjungi,masih ada banyak hal lainnya yang tentunya akan membuat liburan anda semakin menyenangkan.
      
      </p>
      <a href="<?php echo site_url('lamsel/lamsel7'); ?>">
                Baca Selengkapnya >>>>>
                </a>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="<?=base_url()?>assets/img/lamsel/sembalang.jpg" alt="Nature" style="width:100%; height: 23%;">
      <h3 style="margin-top: 10px;">Pantai Sebalang</h3>
      <p>
      Pantai adalah salah satu destinasi yang bagus untuk berlibur dan refreshing. Pemandangannya bagus disertai dengan pasir hitam maupun pasir putih yang turut menghiasi tepi pantai.      

      </p>
      <a href="<?php echo site_url('lamsel/lamsel8'); ?>">
                Baca Selengkapnya >>>>>
                </a>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="<?=base_url()?>assets/img/lamsel/Marina.jpg" alt="Mountains" style="width:100%; height: 23%;">
      <h3 style="margin-top: 10px;">Pantai Marina</h3>
      <p>Lokasinya tak jauh dari kota, jadi jangan ngaku anak travelling ya kalo belum tahu pantai ini, karena pantai ini tersembunyi lokasinya Selain karena lokasinya yang tersembunyi dan terpencil.
  
</p>
      <a href="<?php echo site_url('lamsel/lamsel9'); ?>">
                Baca Selengkapnya >>>>>
                </a>
    </div>
  </div>
<!-- END GRID -->
</div>

<div class="content">
  <img src="<?=base_url()?>assets/img/lamsel/Siger.jpeg" alt="Bear" style="width:100%">
  <h3 style="margin-top: 10px;">Menara Siger</h3>
  <p>Obyek Wisata Menara Siger di Lampung Selatan Lampung adalah salah satu tempat wisata yang berada di Bukit Gamping, Kecamatan Bakauheni, Kabupaten Lampung Selatan, Indonesia.

</p>
    <a href="<?php echo site_url('lamsel/lamsel10'); ?>">
                Baca Selengkapnya >>>>>
                </a>
</div>

<!-- END MAIN -->
</div>

</body>
</html>
