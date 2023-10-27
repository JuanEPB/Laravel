@extends('layouts.layout');
@section('content')
        <div class="container">
                {{Form::open(['route'=>'products.store','method' =>'POST']) }}
                <div class="form-group">
                        {{ Form::label('name_product','nombre del producto') }}
                        {{ Form::text('name',null , ['class '=>'form-control']) }}
                        @error('name')
                        <span class="text-danger">{{$message}}</span>></span>
                        @enderror
                </div>
                <div class="form-group">
                        {{ Form::label('description_product','Descripcion del producto') }}
                        {{ Form::textarea('description',null , ['class '=>'form-control']) }}
                        @error('description')
                        <span class="text-danger">{{$message}}</span>></span>
                        @enderror
                </div>
                <div class="form-group">
                    {{ Form::label('price', 'Precio del producto') }}
                    {{ Form::number('price', null, ['class' => 'form-control']) }}
                    @error('price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                        {{ Form::label('stock','Producto disponible') }}
                        {{ Form::number('stock', null, ['class '=>'form-control']) }}
                        @error('stock')
                        <span class="text-danger">{{$message}}</span>></span>
                        @enderror
                </div>
                <div class="form-group">
                        {{ Form::submit('Guardar', ['class '=>'btn btn-primary']) }}
                </div>

                {{!! Form::close() }}


        </div>
@endsection


