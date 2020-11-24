<!DOCTYPE html>
<html lang="en">
@include('store.include.head')
<body>

<!-- @include('website.include.navbar') -->
  <!-- Start your project here-->
  <div class="container text-center">
  	
<h1>Inventory system</h1>

  </div>
  <div class="text-center pt-5">
   
   <button type="button" class="btn btn-primary"><a class="text-light" href=" {{ URL::to('/users') }} "> User </a></button>
<button type="button" class="btn btn-secondary"><a class="text-light" href="{{ URL::to('/admin') }}"></a>Admin</button>

</div>
  <!-- End your project here-->

  <!-- jQuery -->
 @include('store.include.script')

</body>
</html>
