@extends('layouts.layout-global')
@section('content')
<section class="seccion2">
  <!-- Contenido responsive -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <p class="populares"><strong>NUESTROS POSTRES MAS POPULARES</strong></p>
        <hr class="hr-rosada"></hr>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="box1"></div>
        <div>
          <p class="texto-titulo-s2"><strong>ANTOJOS SIN GLUTEN</strong></p>
          <p class="texto-s2">Cupcake is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. This Cupcake is simply dummy text of the printing and typesetting industry.</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="box2"></div>
        <div>
          <p class="texto-titulo-s2"><strong>DELICIA VAINILLA</strong></p>
          <p class="texto-s2">Cupcake is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. This Cupcake is simply dummy text of the printing and typesetting industry.</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="box3"></div>
        <div>
          <p class="texto-titulo-s2"><strong>AMAMOS EL CHOCOLATE</strong></p>
          <p class="texto-s2">Cupcake is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. This Cupcake is simply dummy text of the printing and typesetting industry.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="box7"></div>
        <div>
          <p class="texto-titulo-s2"><strong>TORTA DE FRUTAS</strong></p>
          <p class="texto-s2">Cupcake is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. This Cupcake is simply dummy text of the printing and typesetting industry.</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="box8"></div>
        <div>
          <p class="texto-titulo-s2"><strong>PORCION DE CHOCOLATE</strong></p>
          <p class="texto-s2">Cupcake is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. This Cupcake is simply dummy text of the printing and typesetting industry.</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="box9"></div>
        <div>
          <p class="texto-titulo-s2"><strong>PEDIDOS ESPECIALES</strong></p>
          <p class="texto-s2">Cupcake is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. This Cupcake is simply dummy text of the printing and typesetting industry.</p>
        </div>
      </div> 
    </div>
  </div>
  <!-- End Contenido responsive -->
  
</section>
<section class="seccion3">
  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
      <p class="parrafos3-izq">SUSCRIBETE A YOYOCAKE!</p>
      <input type="email" class="form-control form-control-pink input-group-lg" placeholder="your@email.com">
    </div>
    
    <div class="col-xs-6 col-sm-6 col-md-6">
      <p class="parrafos3-der">COMPARTELO CON EL MUNDO!</p>      
      <div class="twitter"></div>
      <div class="pinterest"></div>
      <div class="facebook"></div>
      <div class="googleplus"></div>
      <div class="correo"></div>
    </div>
  </div>
</section>
<section class="seccion4">
 <div class="row">
  <div class="col-xs-12 col-sm-6 col-md-6">
    <p class="ubicacion"><strong>ESTAMOS UBICADOS EN</strong></p>
    <hr class="hr-ubicacion"></hr>
  </div>
</div>

<div class="row">
  <div class="container-fluid">
    <div class="col-xs-12 col-sm-6 col-md-6">
      <div class="media">
       <a href="#" class="pull-left">
        <img src="img/local1.jpg" class="media-object local1">
      </a>
      <div class="media-body">
       <p class="media-heading texto-local-titulo">Terraza CCCT</p>
       <p class="texto-local">Av. Rio Janeiro<br> Distrito Capital <br> Tlf: 0212-9086543</p>
     </div>
   </div>
 </div>
 <div class="col-xs-12 col-sm-6 col-md-6">
  <div class="media">
   <a href="#" class="pull-left">
    <img src="img/local2.jpg" class="media-object local1">
  </a>
  <div class="media-body">
   <p class="media-heading texto-local-titulo">CC Los Palos Grandes</p>
   <p class="texto-local">Av. Principal Los Palos Grandes<br> Distrito Capital <br> Tlf: 0212-9086543</p>
 </div>
</div>
</div>

</div> 
</div>
</section>

@stop