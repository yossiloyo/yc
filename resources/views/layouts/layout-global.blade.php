<!DOCTYPE html>
<html>
@include('layouts.header')
<body>
 <div class="contenedor-global">
  <!--<div class="container-fluid">-->
  <div class="row">
    
    @if(route('principal.index') == url()->full())
    @include('layouts.img-principal')
    @endif

    @include('layouts.menu')

    @yield('content')

    @include('layouts.footer')
</div>
<!-- </div>div container-fluid -->
</div><!--div global-->
</body>
</html>
