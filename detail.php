<?php
require 'asset/php/array.php';
require 'asset/php/database.php';
require 'asset/php/_header.php';
update();
$views = query("SELECT * FROM server WHERE svr_id = 1")[0];
?>
<audio src="asset/audio/Demokrat.mp3" autoplay></audio>

<section class="h-screen text-center text-white bg-[url('../img/bg-main.png')] bg-cover bg-top" id="main">
  <div class="flex justify-between p-2">
    <img class="w-[30%]" src="asset/img/s14p.png" loading="lazy" alt="s14p" />
    <div class="flex justify-end">
      <p class="text-4xl me-2">14</p>
      <img class="w-[30%]" src="asset/img/Logo_of_the_Democratic_Party_(Indonesia).svg" loading="lazy" alt="demokrat" />
    </div>
  </div>
  <div class="absolute inset-x-0 bottom-10">
    <img class="m-auto w-[80%]" src="asset/img/profile2.png" loading="lazy" alt="profile2" />
    <h3>Ayo Kenal Lebih Dekat Dengan</h3>
    <h1 class="text-4xl font-bold">DENNY RUDIANA</h1>
    <h2 class="text-lg font-semibold">CALON ANGGOTA DPRD</h2>
    <h5 class="font-semibold">KOTA BANDUNG DAPIL 5</h5>
    <p class="text-xs">( Astanaanyar, Bojongloa Kaler, Regol)</p>
  </div>
</section>

<section class="py-6 text-center" id="timecountdown">
  <h4 class="font-semibold">
    Mari Songsong Pemilu Serentak 14 Februari 2024
  </h4>
  <!-- <div id="countdown"></div> -->
  <div class="flex justify-evenly text-white mt-3">
    <div class="bg-blue w-[100px] rounded-lg" id="days">
      0 <br />
      Hari
    </div>
    <div class="bg-blue w-[100px] rounded-lg" id="hours">
      0 <br />
      Jam
    </div>
    <div class="bg-blue w-[100px] rounded-lg" id="minutes">
      0 <br />
      Menit
    </div>
  </div>
</section>

<section class="bg-blue py-6 px-10" id="why">
  <h3 class="text-white text-lg font-bold text-center">
    "Mengapa harus memilih DENNY RUDIANA ?"
  </h3>
  <p class="text-white text-center my-10">
    Denny Rudiana selain mempunyai ilmu yang cukup karena pernah menjadi
    anggota DPRD Kota Bandung periode 2009-2014 juga memiliki visi dan
    misi yang besar dalam rangka mengoptimalkan Pelayanan Pemerintah
    khususnya di Kota Bandung kepada masyarakat baik secara Pengawasan.
  </p>
  <iframe class="m-auto w-[80%] aspect-video" src="https://www.youtube.com/embed/1qwlW_nV3Hs?si=-oXlm4UuuethHTpO" title="YouTube video player" frameborder="0" allow="accelerometer;
  autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
  </iframe>

</section>

<section class="text-center p-10" id="who">
  <img class="m-auto" src="asset/img/profile.png" loading="lazy" alt="profile" />

  <h3 class="text-xl font-bold mt-3">Siapa Denny Rudiana ?</h3>
  <?php foreach ($siapaDenny as $s) : ?>
    <p class="text-xs">
      <?= $s; ?>
    </p>
  <?php endforeach; ?>

  <h4 class="text-base mt-6 font-bold">Data Diri Caleg Pilihan Kita</h4>
  <p class="text-xs">
    <b>Denny Rudiana</b> lahir di kota Bandung, 17 Oktober 1975
  </p>

  <!-- Riwayat -->
  <?php foreach ($tableRiwayat as $table) : ?>
    <div class="rounded-md bg-gray mt-2">
      <h2 class="bg-blue text-white text-2xl font-bold rounded-t-md">
        Riwayat <?= $table; ?>
      </h2>
      <?php foreach ($rinciRiwayat as $riwayat) :
        if ($riwayat['tipeRiwayat'] === $table) : ?>
          <div class="p-3 text-start mx-3">
            <div class="flex">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-record-circle me-[8px] mt-[10px]" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
              </svg>
              <div>
                <p><?= $riwayat['desc1']; ?></p>
                <?php if (isset($riwayat['desc2'])) : ?>
                  <p><?= $riwayat['desc2']; ?></p>
                <?php endif ?>
              </div>
            </div>
          </div>
      <?php endif;
      endforeach; ?>
    </div>
  <?php endforeach; ?>
  <!-- end riwayat -->

  <h3 class="font-bold mt-6">
    Ayo Cari Tahu Alasan Caleg Pilihan <br />
    Kita Maju dalam Pemilihan Legislatif
  </h3>
  <p class="text-xs">
    Setiap Calon Anggota Legislatif pasti punya alasan<br />kenapa harus
    mengikuti kontestasi politik lewat<br />pencalonan anggota Legislatif.
    Begitupun halnya<br />dengan Caleg Pilihan Kita, Denny Rudiana<br />Berikut
    ini adalah Visi dan Misi dari Calon Pilihan Kita
  </p>

  <!-- visi -->
  <div class="bg-light-gray py-3 px-6 my-5 rounded-3xl">
    <h2 class="flex bg-blue text-white px-2 mb-6 font-bold rounded-full">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye me-[8px] mt-[3px]" viewBox="0 0 16 16">
        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
      </svg>
      VISI
    </h2>
    <p class="text-xs font-bold mb-2">
      Menjadi Anggota DPRD yang dekat dengan masyarakat, memperjuangkan
      hak-hak dasar masyarakat. Menjadikan (DAPIL 5 Kota Bandung)
      mendapatkan pendidikan layak & berkualitas, mendapatkan layanan
      kesehatan yang prima, mendapatkan kesempatan kerja yang luas dan
      meningkatkan kesejahtraan ekonomi keluarga.
    </p>
  </div>

  <!-- misi -->
  <div class="bg-light-gray py-3 px-6 my-5 rounded-3xl text-start">
    <h2 class="flex bg-blue text-white px-2 mb-6 font-bold rounded-full">
      <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" fill="currentColor" class="me-[8px] mt-[3px]">
        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
        <path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V64c0-17.7-14.3-32-32-32s-32 14.3-32 32V336c0 1.5 0 3.1 .1 4.6L67.6 283c-16-15.2-41.3-14.6-56.6 1.4s-14.6 41.3 1.4 56.6L124.8 448c43.1 41.1 100.4 64 160 64H304c97.2 0 176-78.8 176-176V128c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V64c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V32z" />
      </svg>
      MISI
    </h2>
    <ol class="list-decimal text-xs font-bold">
      <?php foreach ($misi as $m) : ?>
        <li class="mb-2">
          <?= $m; ?>
        </li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>

<section class="bg-blue text-center text-white p-10" id="gabung">
  <h3 class="text-sm">Dukungan Anda Adalah Semangat Kami</h3>
  <h2 class="text-lg font-bold my-3">
    "Mohon Dukung dan Doa Restu Untuk Pencalonan Denny Rudiana sebagai
    Anggota DPRD Kota Bandung"
  </h2>
  <p class="text-xs mx-6">
    Bergabunglah dalam grup WhatsApp, grup Facebook, Instagram kami dan
    dukung <b>Denny Rudiana</b> sebagai Calon Anggota
    <b>DPRD Kota Bandung</b>. Ayo, bergabung sekarang!
  </p>

  <!-- sosmed -->
  <?php foreach ($sosmed as $s) : ?>
    <div class="bg-light-blue rounded-full py-2 px-6 w-[90%] m-auto mt-6">
      <a href="<?= $s['link']; ?>" target="_blank" class="flex items-center justify-center mx-3">
        <img class="rounded-full me-6" src="asset/img/<?= $s['img']; ?>" loading="lazy" alt="<?= $s['img']; ?>" width="50" height="50" />
        <p class="mt-1">GABUNG SEKARANG</p>
      </a>
    </div>
  <?php endforeach; ?>
  <!-- end sosmed -->

</section>

<section class="text-center py-10" id="surat-suara">
  <h2 class="font-bold">
    Buka surat suara warna <span class="text-[green]">HIJAU</span>
    <br />
    Pilih <span class="text-[blue]">PARTAI DEMOKRAT</span> Nomor Urut 14
    Kemudian
    <br />
    COBLOS CALEG Nomor Urut 4 ( Empat )
  </h2>
  <img class="m-auto mt-3 w-[95%]" src="asset/img/Conlos1.jpg" loading="lazy" alt="conlos1" />

  <!-- corosel -->
  <div id="carouselExampleCaptions" class="relative" data-te-carousel-init data-te-ride="carousel">
    <!--Carousel indicators-->
    <div class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0" data-te-carousel-indicators>
      <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="0" data-te-carousel-active class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="1" class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none" aria-label="Slide 2"></button>
      <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="2" class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none" aria-label="Slide 3"></button>
    </div>

    <!--Carousel items-->
    <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
      <!--First item-->
      <div class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-active data-te-carousel-item style="backface-visibility: hidden">
        <img src="asset/img/Poster-01.jpg" class="block w-1/2 float-left" loading="lazy" alt="poster1" />
        <img src="asset/img/Poster-02.jpg" class="block w-1/2 float-left" loading="lazy" alt="poster2" />
      </div>
      <!--Second item-->
      <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item style="backface-visibility: hidden">
        <img src="asset/img/Poster-03.jpg" class="block w-1/2 float-left" loading="lazy" alt="poster3" />
        <img src="asset/img/Poster-04.jpg" class="block w-1/2 float-left" loading="lazy" alt="poster4" />
      </div>
      <!--Third item-->
      <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item style="backface-visibility: hidden">
        <img src="asset/img/Poster-05.jpg" class="block w-1/2 float-left" loading="lazy" alt="poster5" />
        <img src="asset/img/Poster-06.jpg" class="block w-1/2 float-left" loading="lazy" alt="poster6" />
      </div>
    </div>

    <!--Carousel controls - prev item-->
    <button class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button" data-te-target="#carouselExampleCaptions" data-te-slide="prev">
      <span class="inline-block h-8 w-8">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
        </svg>
      </span>
      <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
    </button>
    <!--Carousel controls - next item-->
    <button class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button" data-te-target="#carouselExampleCaptions" data-te-slide="next">
      <span class="inline-block h-8 w-8">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
      </span>
      <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
    </button>
  </div>
</section>

<section class="bg-blue text-center text-white p-10" id="comment">
  <h2 class="text-2xl font-bold">Berikan Dukungan</h2>
  <p class="text-xs">
    Sebagai bentuk dukungan kepada <b>Denny Rudiana</b> sebagai <br />
    <b>Calon Anggota DPRD (Kota Bandung)</b> <br />
    berkenan untuk memberikan komentar dukungan
  </p>
  <form action="" class="m-auto mt-6 text-start w-[90%]">
    <label>Nama <br />
      <input class="w-full rounded-lg" type="text" /></label>
    <br />
    <label>Komentar <br />
      <textarea class="w-full rounded-lg" cols="30" rows="10"></textarea>
    </label>
    <div class="flex justify-center">
      <button class="bg-light-blue rounded-lg p-3 mt-2">
        Kirimkan Komentar
      </button>
    </div>
  </form>

  <div class="flex justify-between mt-10">
    <div class="flex">
      <svg class="mt-1" xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
        <path fill="white" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM164.1 325.5C182 346.2 212.6 368 256 368s74-21.8 91.9-42.5c5.8-6.7 15.9-7.4 22.6-1.6s7.4 15.9 1.6 22.6C349.8 372.1 311.1 400 256 400s-93.8-27.9-116.1-53.5c-5.8-6.7-5.1-16.8 1.6-22.6s16.8-5.1 22.6 1.6zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
      </svg>
      <div class="text-left ms-2">
        <p>5000</p>
        <p class="text-xs">Dukungan</p>
      </div>
    </div>
    <div class="flex">
      <svg class="mt-1" xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
        <path fill="white" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM164.1 325.5C182 346.2 212.6 368 256 368s74-21.8 91.9-42.5c5.8-6.7 15.9-7.4 22.6-1.6s7.4 15.9 1.6 22.6C349.8 372.1 311.1 400 256 400s-93.8-27.9-116.1-53.5c-5.8-6.7-5.1-16.8 1.6-22.6s16.8-5.1 22.6 1.6zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
      </svg>
      <div class="text-left ms-2">
        <p>5000</p>
        <p class="text-xs">Relawan</p>
      </div>
    </div>
  </div>

</section>

<div class="m-2 text-[#4082BF] font-bold text-xs flex justify-between">
  <p>
    Copyright ©️ 2023 KADER
  </p>
  <p>
    dilihat <?= $views['svr_count']; ?>
  </p>
</div>

<script>
  // Set the date we're counting down to
  const countDownDate = new Date("2024-02-14T00:00:00").getTime();

  // Update the countdown every 1 second
  const x = setInterval(function() {
    const now = new Date().getTime();
    const distance = countDownDate - now;

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor(
      (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

    // Update the HTML elements with the countdown values
    document.getElementById("days").innerHTML = days + "<br>Hari";
    document.getElementById("hours").innerHTML = hours + "<br>Jam";
    document.getElementById("minutes").innerHTML = minutes + "<br>Menit";

    // If the countdown is over, display a message
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("days").innerHTML = "EXPIRED";
      document.getElementById("hours").innerHTML = "";
      document.getElementById("minutes").innerHTML = "";
    }
  }, 1000);
</script>

<?php require 'asset/php/_footer.php' ?>