@extends('layout.forms')
@section('isi')


<div class="heading">
   <h3>our menu</h3>
   <p><a href="home.html">home </a> <span> / menu</span></p>
</div>

<section class="products">

   <h1 class="title">latest dishes</h1>

   <div class="box-container">

      <!-- resources/views/page/ship.blade.php -->

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

<form accept="" method="post" class="box" action="{{ route('place.order') }}">
   @csrf
   <a href="quick_view.html" class="fas fa-eye"></a>
   <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
   <img src="uploaded_img/instan.png" alt="">
         <a href="category.html" class="cat">fast food</a>
         <div class="name">Seblak Instan</div>
         <div class="flex">
            <div class="price"><span>$</span>3<span>/-</span></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
         </div>
</form>

<form accept="" method="post" class="box" action="{{ route('place.order') }}">
   @csrf
   <a href="quick_view.html" class="fas fa-eye"></a>
   <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
   <img src="uploaded_img/home seblak 1.png" alt="">
         <a href="category.html" class="cat">fast food</a>
         <div class="name">Seblak Original 02</div>
         <div class="flex">
            <div class="price"><span>$</span>3<span>/-</span></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
         </div>
</form>

<form accept="" method="post" class="box" action="{{ route('place.order') }}">
   @csrf
   <a href="quick_view.html" class="fas fa-eye"></a>
   <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
   <img src="uploaded_img/dessert-6.png" alt="">
         <a href="category.html" class="cat">dessert</a>
         <div class="name">Roti Bakar</div  >
         <div class="flex">
            <div class="price"><span>$</span>3<span>/-</span></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
         </div>
</form>


   </div>

</section>



@endsection

