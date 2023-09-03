@extends('layouts.main')

@section('container')
<div class="h-[500px] relative">
  <img src="hero-1.png" alt="hero" class="w-full">
  <div class="container mx-auto border-red-600">
    <div class="absolute h-auto top-24">
      <h1 class="font-sans text-5xl font-bold text-white">Mengendarai dengan Percaya Diri</h1>
      <p class="font-sans text-white mt-7">Temukan keahlian berkendara Anda bersama kami</p>
      <a href="#" class="cursor-pointer">
        <div class="h-8 w-fit mt-7">
          <div class="font-bold bg-[#ffa826] p-2 rounded-lg"><a href="#">Daftar sekarang</a></div>
        </div>
      </a>
    </div>
    <div class="flex mt-16">
      <h1 class="mx-auto font-sans text-3xl font-bold">Paket</h1>
    </div>
    <div class="flex justify-center pb-8 mt-16 space-x-28">
      <div class="w-64 h-64 bg-white rounded-lg border-[#001038] border-2">
        <div class="flex w-full h-20 bg-[#001038]">
          <h3 class="mx-auto my-auto font-sans text-2xl font-bold text-white w-fit h-fit">Starter</h3>
        </div>
          <ul class="flex flex-col mt-10 ml-10 space-y-2 w-fit">
            <li class="list-disc w-fit">10 jam pelatihan praktik</li>
            <li class="list-disc w-fit">Buku panduan berkendara</li>
            <li class="list-disc w-fit">Ujian simulasi</li>
          </ul>
      </div>
      <div class="w-64 h-64 bg-white rounded-lg border-[#001038] border-2">
        <div class="flex w-full h-20 bg-[#001038]">
          <h3 class="mx-auto my-auto font-sans text-2xl font-bold text-white w-fit h-fit">Mastery</h3>
        </div>
          <ul class="flex flex-col mt-10 ml-10 space-y-2 w-fit">
            <li class="list-disc w-fit">20 jam pelatihan praktik</li>
            <li class="list-disc w-fit">Buku panduan lanjutan</li>
            <li class="list-disc w-fit">Ujian praktik nyata</li>
          </ul>
      </div>
      <div class="w-64 h-64 bg-white rounded-lg border-[#001038] border-2">
        <div class="flex w-full h-20 bg-[#001038]">
          <h3 class="mx-auto my-auto font-sans text-2xl font-bold text-white w-fit h-fit">Expert</h3>
        </div>
          <ul class="flex flex-col ml-10 space-y-2 mt-7 w-fit">
            <li class="list-disc w-fit">30 jam pelatihan praktik</li>
            <li class="list-disc w-fit">Buku panduan eksklusif</li>
            <li class="list-disc w-fit">Ujian praktik nyata</li>
            <li class="list-disc w-fit">Sesi konsultasi pribadi</li>
          </ul>
      </div>
    </div>
  </div>

  
  <div class="relative w-full h-[395px] bg-[#001038] mt-16">
    <div class="flex pt-10 mx-auto top-8 left-1/2">
      <h1 class="mx-auto font-sans text-3xl font-bold text-white h-fit">Trainer </h1>
    </div>
    <div class="flex justify-center mt-10 space-x-28">
      <div class="flex relative w-48 h-48 bg-white border-[#001038] border-2 rounded-full p-1">
        <img src="trainer-1.jpg" alt="" class="rounded-full">
        <h4 class="absolute items-center font-bold text-white -bottom-10 left-[51px]">Andi Wijaya</h4>
      </div>
      <div class="flex relative w-48 h-48 bg-white border-[#001038] border-2 rounded-full p-1">
        <img src="trainer-2.jpg" alt="" class="rounded-full">
        <h4 class="absolute items-center font-bold text-white -bottom-10 left-[51px]">Siti Rahayu</h4>
      </div>
      <div class="flex relative w-48 h-48 bg-white border-[#001038] border-2 rounded-full p-1">
        <img src="trainer-3.jpg" alt="" class="rounded-full">
        <h4 class="absolute items-center font-bold text-white -bottom-10 left-[51px]">Budi Santoso</h4>
      </div>
    </div>
  </div>

  <div class="relative w-full mt-16 bg-white">
    <div class="flex justify-center mt-10 space-x-28">
      <div class="container flex flex-col h-auto">
        <div class="w-full h-fit">
          <div class="w-[40rem] flex mx-auto h-fit">
            <h3 class="font-sans text-xl font-medium text-center">"Kami bangga memiliki lebih dari 20 mobil berkualitas yang siap membantu Anda mencapai kemahiran berkendara yang Anda inginkan. Pilih kendaraan Anda dan mulailah perjalanan belajar Anda bersama kami."</h3>
          </div>
        </div>
        
        <div class="flex justify-center w-full h-full space-x-24 mt-14">
          <div class="w-[30rem] h-fit p-5 border-2 rounded-xl">
            <h5 class="font-sans text-lg font-medium text-center">Mobil manual</h5>
            <p class="mt-10 font-sans text-center font-regular">Mengendalikan kecepatan dan gigi dengan presisi. Pelajari seni berkendara manual dengan mobil-mobil pilihan kami. Rasakan kendali yang sebenarnya di ujung jari Anda.</p>
          </div>
          <div class="w-[30rem] h-fit p-5 border-2 rounded-xl">
            <h5 class="font-sans text-lg font-medium text-center">Mobil matic</h5>
            <p class="mt-10 font-sans text-center font-regular">Kemudahan berkendara tanpa repot berganti gigi. Temukan kenyamanan berkendara dengan mobil-mobil matic terbaru kami. Nikmati perjalanan yang lebih nyaman dan mudah.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="relative w-full pb-24 bg-[#001038] mt-16">
    <div class="flex pt-10 mx-auto top-10 left-1/2">
      <h1 class="mx-auto font-sans text-xl font-medium text-white h-fit">Contact us</h1>
    </div>
    <div class="flex justify-center w-full h-full space-x-10 mt-14">
      <div class="p-5 border w-fit h-fit rounded-xl">
        <p class="font-sans text-white">Alamat: Jalan Raya Ahmad Yani No. 123, Jakarta</p>
        <p class="font-sans text-white">Telepon: (021) 1234-5678</p>
        <p class="font-sans text-white">Email: info@drivewise-kursusmobil.com</p>
      </div>
      <div class="p-5 border w-fit h-fit rounded-xl">
        <p class="font-sans text-white">Alamat: Jalan Sudirman No. 45, Bandung</p>
        <p class="font-sans text-white">Telepon: (021) 9876-5432</p>
        <p class="font-sans text-white">Email: cabang1@drivewise-kursusmobil.com</p>
      </div>
      <div class="p-5 border w-fit h-fit rounded-xl">
        <p class="font-sans text-white">Alamat: Jalan Gatot Subroto No. 67, Tangerang</p>
        <p class="font-sans text-white">Telepon: (021) 4567-8901</p>
        <p class="font-sans text-white">Email: cabang2@drivewise-kursusmobil.com</p>
      </div>
    </div>
  </div>
  
@endsection