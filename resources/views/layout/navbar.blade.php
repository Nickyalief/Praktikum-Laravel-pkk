<div x-data="{ scrolled: false }" @scroll.window="scrolled = (window.scrollY > 0)" class="pb-[100px]">
    <header x-bind:class="{ 'bg-transparent ': scrolled, 'bg-white': !scrolled }"
        class="fixed top-0 z-10 w-full transition-all duration-300 ease-in-out backdrop-blur-lg">
        <div class="sticky top-0 font-[700] text-black flex justify-center cursor-auto dark:text-white font-poppins">
            <nav
                class="flex flex-wrap items-center mb-auto justify-between w-[90%] p-4 space-x-4 bg-[#FFF78A] text-2xl font-semibold bg-opacity-50 rounded-md max-h-screen-md outline outline-[0.5px] smooth-link md:text-xl sticky-top-8 md:shrink-0">
                <div class="items-center">
                    <ul class="flex-grow ml-8 inline-flex space-x-4 px-[100px] mb-4">
                        <li> 
                            <a href="{{route('main')}}" class="relative transition duration-300 left-10 group"> HOME<span
                                    class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-black bg-[length:100%_5px] bg-no-repeat bg-bottom "></span></a>
                        </li><li class="inline-flex space-x-4 px-[100px] ml-[-50px]"><a href="">
                        <img src="{{ asset('asset/puru.png') }}" alt="puru" class="w-[100px] mx-auto left-1/2 top-[60px] transform -translate-x-1/2 transition duration-300 ease-in-out hover:scale-110 fixed"></a></li>
                        <li><a href="{{route('product')}}" class="relative transition duration-300 right-[40px] group">PRODUCT <span
                                    class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-black bg-[length:100%_5px] bg-no-repeat bg-bottom "></span></a>
                        </li>
                    </ul>
                </div>
                <div class="order-3 py-2 text-medium">
                    @csrf
                    <div class="p-3 text-black inline-flex bg-white rounded-[80px] hover:bg-slate-200 font-robotocd">
                        
                        <img width="50" height="25" src="https://img.icons8.com/ios-filled/50/shopping-cart.png" alt="shopping-cart"/>
                        <a href="{{route('ship')}}"><p class="mt-4">BASKET</p></a>
                    </div>

                </div>
            </nav>
        </div>
    </header>
</div>
