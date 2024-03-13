@extends('layout.forms')

@section('isi')
<div class="mx-auto mt-[80px] mb-[80px] p-[20px] rounded-md outline outline-[0.5px] w-[90%]">
    <div class="overflow-hidden bg-white rounded-lg shadow-lg">
        <div class="p-4">
            <h3 class="mb-2 text-xl font-bold">Mango Breeze Pudding</h3>
            <p class="mb-4 text-gray-600">Made with fresh mango puree and creamy milk, our Mango Breeze Pudding is a delicious and refreshing treat. Perfect for a light dessert or a healthy snack.</p>

            @foreach ($juals as $key => $data)
                <div class="product-item">
                    <img src="{{ asset('puding/'.$data->images) }}" alt="Mango Pudding" class="object-cover w-full h-48">
                    <span class="text-lg font-bold">Rp. {{$data->price}}</span>
                    <div class="flex items-center space-x-2">
                        <button class="decrease px-2 py-1 text-sm font-bold bg-gray-200 rounded-lg hover:bg-gray-300">-</button>
                        <input class="quantity px-2 py-1 text-sm font-bold border border-gray-300 rounded-lg" type="number" value="1" min="1">
                        <button class="increase px-2 py-1 text-sm font-bold bg-gray-200 rounded-lg hover:bg-gray-300">+</button>
                    </div>
                    <form action="{{ route('checkout') }}" method="post">
                        @csrf
                        <input type="hidden" name="quantity" value="1">
                        <button type="submit" class="w-full py-2 mt-5 text-sm font-bold text-white uppercase transition-all duration-300 bg-black rounded-lg shadow-md hover:bg-black" id="addToCart">Add to Cart</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</div>

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2" crossorigin="anonymous"></script>
    <script src="{{ asset('js/product.js') }}"></script>
@endpush

@endsection
