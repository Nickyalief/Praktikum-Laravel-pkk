@extends('layout.forms')
@section('isi')
<div class="container mx-auto mt-[80px] mb-[80px] p-[20px] text-center rounded-md outline outline-[0.5px]  w-[90%]">
<div id="cart-container" class="mt-2">
  <h2 class="text-2xl font-bold">Cart</h2>
  <div class="flex justify-center">
      <table class="table mt-4 justify-items-center table-hover">
          <thead>
              <tr class="">
                  <th class="py-2">Id</th>
                  <th class="py-2">Image</th>
                  <th class="py-2">Product</th>
                  <th class="py-2">Price</th>
                  {{-- <th class="py-2">Quantity</th>
                  <th class="py-2">Action</th> --}}
              </tr>
          </thead>
          <tbody id="cart-items">
              @foreach($cart as $id => $item)
                  <tr>
                      <td class="py-2">{{$loop->iteration}}</td>
                      <td class="py-2"><img src="{{ asset('puding/' . $item['image']) }}" alt="" class="max-w-150 max-h-80"></td>
                      <td class="py-2">{{ $item['title'] }}</td>
                      <td class="py-2">${{ $item['price'] }}</td>         
                  </tr>
              @endforeach
          </tbody>
      </table>
    </div>
      <a href="{{ route('checkout') }}" class="block py-2 mt-2 text-center text-white bg-blue-500 rounded-md cursor-pointer hover:bg-blue-600">Checkout</a>

  @if(session('success'))
          <div class="p-2 mt-2 text-green-800 bg-green-200">
              {{ session('success') }}
          </div>
      @endif
</div>
</div>

@endsection
