<!-- resources/views/page/order_confirmation.blade.php -->

@extends('layout.forms')
@section('isi')
<div class="container mx-auto mt-[80px] mb-[80px] p-[20px] text-center rounded-md outline outline-[0.5px]  w-[90%]">
    <div class="heading">
        <h3>order confirmation</h3>
        <p><a href="{{ route('home') }}">home </a> <span> / order confirmation</span></p>
    </div>

    <div class="order-summary">
        <h1 class="title">order summary</h1>
        <p>Thank you for your order!</p>
        <p>Total Amount: ${{ $cartTotal }}</p>
        <!-- You can display additional order details here -->
    </div>
</div>
@endsection
