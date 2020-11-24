@extends('store.layout.default')

@section('content')
<div class="text-center">
   
   <button type="button" class="btn btn-primary"><a class="text-light" href=" {{ URL::to('store/purchase') }} "> Purchase </a></button>
<button type="button" class="btn btn-secondary"><a class="text-light" href="{{ URL::to('store/sales') }}">sales</a></button>
<button type="button" class="btn btn-success"><a class="text-light" href="{{ URL::to('store/inventory') }}">inventory</a></button>
<button type="button" class="btn btn-danger"><a class="text-light" href="{{ URL::to('store/supplier') }}">supplier</a></button>
<button type="button" class="btn btn-warning"><a class="text-light" href="{{ URL::to('store/customer') }}" >customer</a></button>

</div>
<!------ Include the above in your HEAD tag ---------->

<section class="get-in-touch">
   <h1 class="title">Purchase</h1>
   <p class="text-center">STOCK IN</p>
   <form class="contact-form row" action="index" method="POST">
     {{ csrf_field() }}
      <div class="form-field col-lg-6">
         <input  class="input-text js-input" type="text" autocomplete="off" required>
         <label class="label" for="name">Suppliers</label>
      </div>
      <div class="form-field col-lg-6 ">
          <input  class="input-text js-input" type="text" autocomplete="off" required>
         <label class="label" for="email">invoice No</label>
      </div>
      <div class="form-field col-lg-6 ">
          <input  class="input-text js-input" type="text" autocomplete="off" required>
         <label class="label" for="company">Product_code</label>
      </div>
       <div class="form-field col-lg-6 ">
         <input  class="input-text js-input" type="text" autocomplete="off" required>
         <label class="label" for="phone">Product_description</label>
      </div>
      <div class="form-field col-lg-12">
          <input  class="input-text js-input" type="text" autocomplete="off" required>
         <label class="label" for="message">Quantity</label>
      </div>
      <div class="form-field col-lg-6">
         <input  class="input-text js-input" type="text" autocomplete="off" required>
         <label class="label" for="message">Rate</label>
      </div>
      <div class="form-field col-lg-6">
          <input  class="input-text js-input" type="text" autocomplete="off" required>
         <label class="label" for="message">Amount</label>
      </div>
      <div class="form-field col-lg-6">
          <input  class="input-text js-input" type="text" autocomplete="off" required>
         <label class="label" for="message">Payment</label>
      </div>
      <div class="form-field col-lg-12">
         <input class="submit-btn" type="submit" value="Submit">
      </div>
   </form>
</section>



@stop