@extends('layout.forms')
@section('isi')

<section class="form-container">

   <form action="/register" method="POST">
      <h3>register now</h3>
      @csrf
      <!-- <input type="text" required maxlength="20" name="name" placeholder="enter your name" class="box" oninput="this.value = this.value.replace(/\s/g, '')"> -->
      <input type="email" required maxlength="50" name="email" placeholder="enter your email" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <!-- <input type="numner" min="0" max="9999999999" onkeypress="if(this.value.length == 10) return false;" placeholder="enter your number" required class="box" name="number"> -->
      <input type="password" required maxlength="20" name="password" placeholder="enter your password" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <!-- <input type="password" required maxlength="20" name="cpass" placeholder="confirm your password" class="box" oninput="this.value = this.value.replace(/\s/g, '')"> -->
      <button type="submit" name="register" value="register" class="btn" name="submit">Register</button>
      <p>already have an account? <a href="{{route ('login')}}">login now</a></p>
   </form>

</section>
@endsection