@extends('layouts.layout-global')
@section('content')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif
<section class="seccion11">
 

  <div class="col-xs-6 col-sm-6 col-md-6">
  {!!Form::open(['route'=>'contact.send','method'=>'POST','class'=>'texto-titulo-s11'])!!}       
   <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
      {!!Form::label('nombre','Nombre:')!!}
      {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa Nombre'])!!}
    </div>
    <div class="form-group">
      {!!Form::label('email','Correo:')!!}
      {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa Correo'])!!}
    </div>
    <div class="form-group">
      {!!Form::label('telefono','Teléfono:')!!}
      {!!Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Ingresa Teléfono'])!!}
    </div>
    <div class="form-group">
      {!!Form::label('mensaje','Mensaje:')!!}
      {!!Form::textarea('mensaje',null,['class'=>'form-control','placeholder'=>'Ingresa tu mensaje'])!!}
    </div>
    {!!Form::submit('Enviar',['class'=>'btn btn-contact btn-lg', 'data-dismiss=modal'])!!}
    
  {!!Form::close()!!}
</div>
  <div class="col-xs-6 col-sm-6 col-md-6"> 
  
  <ul class="quitar-puntos">  
  <li class="texto-s11"><i class="fa fa-building" aria-hidden="true"></i> YoyoCake</li>
  <li class="texto-s11"><i class="fa fa-home" aria-hidden="true"></i> Las Mercedes</li>
  <li class="texto-s11"><i class="fa fa-phone" aria-hidden="true"></i> +584128345678</li>
  <li class="texto-s11"><i class="fa fa-envelope" aria-hidden="true"></i> yoyocake@gmail.com</li>
   
   </ul>
  
  </div>
 
</section>
@stop
