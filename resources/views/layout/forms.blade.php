<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <link href="{{ mix('css/app.css') }}" rel="stylesheet"> -->
    <link rel = "icon" href = "images/logo.png" type = "image/png" sizes = "16x16">
    <!-- <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}"> -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Seblak Racing</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @include('layout.navbar')
    @yield('isi')


    <footer class="footer">

      <section class="box-container">

         <div class="box">
            <img src="images/email-icon.png" alt="">
            <h3>our email</h3>
            <a href="mailto:nickyalief7@gmail.com">nickyalief7@gmail.com</a>
            <a href="mailto:nicky.alief.24@gmail.com">nicky.alief.24@gmail.com</a>
         </div>

         <div class="box">
            <img src="images/clock-icon.png" alt="">
            <h3>opening hours</h3>
            <p>05:00am to 21:00pm </p>
         </div>

         <div class="box">
            <img src="images/map-icon.png" alt="">
            <h3>our address</h3>
            <a href="https://maps.app.goo.gl/LvdXgCMYWRW4xodg7">Purwodadi, Pasuruan - 67163</a>
         </div>

         <div class="box">
            <img src="images/phone-icon.png" alt="">
            <h3>our number</h3>
            <a href="tel:085739226484">085739226484</a>
            <a href="tel:1112223333">085628912781</a>
         </div>

      </section>

      <div class="credit">&copy; copyright @ 2024 by <span>Nicky Alief</span> | all rights reserved!</div>

   </footer>
   <div class="loader">
      <img src="images/loader.gif" alt="">
   </div>

   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="{{ asset('js/script.js') }}"></script>
</body>
</body>

</html>
