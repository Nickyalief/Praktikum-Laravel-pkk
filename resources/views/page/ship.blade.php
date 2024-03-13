@extends('layout.forms')
@section('isi')

<div class="container mx-auto mt-[80px] mb-[80px] p-[20px] text-center rounded-md outline outline-[0.5px]  w-[90%]">
    <div id="cart-container" class="mt-2">
        <div class="heading">
            <h3>shopping cart</h3>
            <p><a href="{{ route('home') }}">home </a> <span> / cart</span></p>
        </div>

        <section class="products">
            <h1 class="title">your cart</h1>

            <div class="cart-total">
                <p>grand total : <span>${{ $cartTotal }}</span></p>
                <a href="{{ route('place.order') }}" class="btn">place order</a>
            </div>

            <div class="box-container">
                @foreach($cart as $id => $item)
                <div class="box">
                    <a href="quick_view.html" class="fas fa-eye"></a>
                    <form action="{{ route('delete.carts.product') }}" method="post">
                        @csrf
                        <button class="fas fa-times" type="submit" name="delete" onclick="return confirm('delete this item?')"></button>
                        <img src="{{ asset('puding/' . $item['image']) }}" alt="" class="max-w-150 max-h-80">
                        <div class="name">{{ $item['title'] }}</div>
                        <div class="flex">
                            <div class="price"><span>$</span>{{ $item['price'] }}</div>
                        </div>
                        <div class="sub-total">sub total : <span>${{ $item['price'] }}</span></div>
                    </form>
                </div>
                @endforeach
            </div>

            <div class="more-btn">
                <form action="{{ route('delete.carts.product') }}" method="post">
                    @csrf
                    <button type="submit" class="delete-btn" onclick="return confirm('delete all from cart?')">delete all</button>
                </form>
            </div>
        </section>
    </div>

    @if(session('success'))
    <div class="p-2 mt-2 text-green-800 bg-green-200">
        {{ session('success') }}
    </div>
    @endif

    <div class="heading">
        <h3>our menu</h3>
        <p><a href="home.html">home </a> <span> / menu</span></p>
    </div>

    <section class="products">
        <!-- Rest of your menu content goes here -->
    </section>
</div>

@endsection
