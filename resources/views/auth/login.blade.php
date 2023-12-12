@extends('layout.forms')
@section('isi')
<div class="mx-auto mt-[80px] mb-[80px]  rounded-md justify-center outline outline-[0.5px]  w-[90%]">
    <div class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-r from-[#FFC47E] to-[#FFAD84]">
        <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
            <h1 class="text-3xl font-normal text-center font-poppins ">Login</h1>

            <form action="{{ route('doLogin') }}" method="POST" class="mt-8">
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full p-2 border border-gray-300 rounded-md form-input focus:outline-none focus:ring-1 focus:ring-[#FFE382]">
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password"
                        class="w-full p-2 border border-gray-300 rounded-md form-input focus:outline-none focus:ring-1 focus:ring-[#FFE382]">
                </div>

                <div class="flex items-center justify-between">
                    <div class="form-check">
                        <input type="checkbox"
                            class="w-4 h-4 border border-gray-300 rounded-md form-check-input text-[#FFF78A]"
                            id="rememberMe">
                        <label for="remember" name="remember" class="ml-2 text-sm font-medium text-gray-700">Remember me</label>
                    </div>

                    <a href="{{route ('register')}}" class="text-sm font-medium text-[#FFAD84]">Sign Up</a>
                </div>

                @csrf

                <button type="submit" name="login" value="Log In"
                    class="w-full p-2 font-medium text-white rounded-md bg-gradient-to-r from-[#FFC47E] to-[#FFAD84] hover:bg-[#FFAD84]">Login</button>

            </form>
        </div>
    </div>
</div>
@endsection
