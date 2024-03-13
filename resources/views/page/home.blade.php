@extends('layout.forms')
@section('isi')
<section class="home">

<div class="swiper home-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="content">
            <span>order online</span>
            <h3>Seblak Ceker Ayam</h3>
            <a href="{{ route('menu') }}" class="btn">All Menu</a>
         </div>
         <div class="image">
            <img src="images/menu-3.png" alt="">
         </div>
      </div>


      <div class="swiper-slide slide">
         <div class="content">
            <span>order online</span>
            <h3>Seblak Seafood</h3>
            <a href="{{ route('menu') }}" class="btn">All Menu</a>
         </div>
         <div class="image">
            <img src="images/seblak.png" alt="">
         </div>
      </div>

   </div>

   <div class="swiper-pagination"></div>

</div>

</section>

<section class="category">

<h1 class="title">food category</h1>

<div class="box-container">

   <a href="category.html" class="box">
      <img src="images/cat-1.png" alt="">
      <h3>fast food</h3>
   </a>

   <a href="category.html" class="box">
      <img src="images/cat-2.png" alt="">
      <h3>main dishes</h3>
   </a>

   <a href="category.html" class="box">
      <img src="images/cat-3.png" alt="">
      <h3>drinks</h3>
   </a>

</div>

</section>

<section class="products">

<h1 class="title">latest dishes</h1>

<div class="box-container">
<form accept="" method="post" class="box" action="{{ route('place.order') }}">
   @csrf
   <a href="quick_view.html" class="fas fa-eye"></a>
   <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
   <img src="uploaded_img/seblak.png" alt="">
   <a href="category.html" class="cat">fast food</a>
   <div class="name">Seblak Seafood</div>
   <div class="flex">
      <div class="price"><span>$</span>3<span>/-</span></div>
      <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
   </div>
</form>

<form accept="" method="post" class="box" action="{{ route('place.order') }}">
   @csrf
   <a href="quick_view.html" class="fas fa-eye"></a>
   <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
   <img src="uploaded_img/dish-3.png" alt="">
         <a href="category.html" class="cat">fast food</a>
         <div class="name">Seblak Original</div>
         <div class="flex">
            <div class="price"><span>$</span>3<span>/-</span></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
         </div>
</form>

<form accept="" method="post" class="box" action="{{ route('place.order') }}">
   @csrf
   <a href="quick_view.html" class="fas fa-eye"></a>
   <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
   <img src="uploaded_img/menu-3.png" alt="">
         <a href="category.html" class="cat">fast food</a>
         <div class="name">Seblak Ceker Ayam</div>
         <div class="flex">
            <div class="price"><span>$</span>3<span>/-</span></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
         </div>
</form>

<form accept="" method="post" class="box" action="{{ route('place.order') }}">
   @csrf
   <a href="quick_view.html" class="fas fa-eye"></a>
   <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
   <img src="uploaded_img/dessert-1.png" alt="">
         <a href="category.html" class="cat">drinks</a>
         <div class="name">Jus Stoberi</div>
         <div class="flex">
            <div class="price"><span>$</span>3<span>/-</span></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
         </div>
</form>
<form accept="" method="post" class="box" action="{{ route('place.order') }}">
   @csrf
   <a href="quick_view.html" class="fas fa-eye"></a>
   <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
   <img src="uploaded_img/drink-1.png" alt="">
         <a href="category.html" class="cat">drinks</a>
         <div class="name">Es Jeruk</div>
         <div class="flex">
            <div class="price"><span>$</span>3<span>/-</span></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
         </div>
</form>

<form accept="" method="post" class="box" action="{{ route('place.order') }}">
   @csrf
   <a href="quick_view.html" class="fas fa-eye"></a>
   <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
   <img src="uploaded_img/drink-2.png" alt="">
         <a href="category.html" class="cat">drinks</a>
         <div class="name">Kopi Hitam</div>
         <div class="flex">
            <div class="price"><span>$</span>3<span>/-</span></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
         </div>
</form>

</div>

<div class="more-btn">     
   <a href="{{ route('menu') }}" class="btn">veiw all</a>
</div>

</section>

@endsection