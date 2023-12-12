@extends('layout.forms')
@section('isi')
<div class="flex mx-auto mt-[80px] mb-[80px] p-[20px] rounded-md items-center justify-center outline outline-[0.5px] max-h-screen-md w-[90%]">
    <div class="w-full rounded-md mt-[3px]">
        <div class="text-lg text-center">
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            <div class="">
                <p class="text-[60px] end-2 left-[20px] m-3 font-robotocd">PRODUCT <span class="text-[#FFAD84]">
                        GALLERY</span>
                </p>
            </div>
            &nbsp;
            &nbsp;
        </div>
    </div>
</div>
    <div class=" mx-auto mt-[80px] mb-[80px] p-[20px] rounded-md  outline outline-[0.5px] w-[90%]">
        <form>
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search"
                    class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-[#FFC47E] focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search Product" required>
                <button type="submit"
                    class="text-white absolute end-2.5 bottom-2.5 bg-[#FFE382] hover:bg-[#FFC47E] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>
    </div>
    <div
        class="grid grid-cols-2 gap-4 mx-auto mt-[80px] mb-[80px] p-[20px] justify-items-center rounded-md items-center outline outline-[0.5px] max-h-screen-md w-[90%]">
        <div class="items-center h-auto max-w-full text-2xl text-center rounded-lg mr-28 font-robotocd ">
        <img src="{{ asset('puding/pudmanga.jpeg') }}" class="w-[250px]">
            <h1 class="mt-5">Mango - Breeze</h1>
            <a href="{{route('product1')}}">
            <button
                class="mt-5 middle none center rounded-lg bg-[#FFE382] hover:bg-[#FFC47E] py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                data-ripple-light="false">
            Pesan</button></a>
        </div>
        <div class="items-center h-auto max-w-full text-2xl text-center rounded-lg mr-28 font-robotocd ">
            <img src="{{ asset('puding/pudstraw.jpeg') }}" class="w-[250px]">
            <h1 class="mt-5">Strawberry - Cracked</h1>
            <button
                class="mt-5 middle none center rounded-lg bg-[#FFE382] hover:bg-[#FFC47E] py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                data-ripple-light="false">
            Pesan</button>
        </div>
    </div>
@endsection
