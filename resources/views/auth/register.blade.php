@extends('layout.forms')
@section('isi')
<div class="mx-auto mt-[80px] mb-[80px]  rounded-md justify-center outline outline-[0.5px]  w-[90%]">
<div class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-r from-[#FFC47E] to-[#FFAD84]">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-3xl font-normal text-center font-poppins text-[#FFAD84]">Register</h1>
        <form action="/register" method="POST">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email"
                    class="w-full p-2 border border-gray-300 rounded-md form-input focus:outline-none focus:ring-1 focus:ring-[#FFE382]"
                    required>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password"
                    class="w-full p-2 border border-gray-300 rounded-md form-input focus:outline-none focus:ring-1 focus:ring-[#FFE382]"
                    required>
            </div>
            
            <button type="submit" name="register" value="register"
                class="w-full p-2 font-medium text-white rounded-md bg-gradient-to-r from-[#FFAD84] to-[#FFC47E] hover:bg-[#FFC47E]">Register</button>
            </form>
            </div>
</div>
</div>
@endsection
