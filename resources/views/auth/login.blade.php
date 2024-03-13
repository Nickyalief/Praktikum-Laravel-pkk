@extends('layout.forms')
@section('isi')

<section class="form-container">

   <form action="{{ route('doLogin') }}" method="POST">
      <h3>login now</h3>
      <input type="email" required maxlength="50" id="email" name="email" placeholder="enter your email" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" required maxlength="20" id="password" name="password" placeholder="enter your password" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <!-- <input type="submit" value="login now" class="btn" name="submit"> -->
      @csrf

      <button type="submit" name="login" value="Log In"  class="btn" 
                    class="w-full p-2 font-medium text-white rounded-md bg-gradient-to-r from-[#FFC47E] to-[#FFAD84] hover:bg-[#FFAD84]">Login</button>
      <p>don't have an account? <a href="{{route ('register')}}">register now</a></p>
   </form>

</section>

@endsection

