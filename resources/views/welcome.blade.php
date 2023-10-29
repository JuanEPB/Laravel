@extends('layouts.layout')
@section('content')

    <header class="py-5 text-center">
        <h1>Bienvenido</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, vero? Laborum minima ab a obcaecati. Sint, reprehenderit voluptates ex commodi quo laborum dolores officiis excepturi impedit voluptatibus, quisquam, soluta voluptas?</p>
        <a href="#" class="btn btn-primary" id='search-toggle-btn'>
            Explorar productos
        </a>
    </header>

<section class="py-3" id="search-form" style="display: none">
    <div class="container">
        <div class="row">
            <div class="input-group">
                <input type="text" placeholder="Buscar Productos" class="form-control">
            </div>
        </div>
    </div>
</section>

<main>
    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/astronauta.png')}}" alt="" class="card-img-top">
                        <div class="card body">
                            <h5>{{$product->name}}</h5>
                            <p>{{$product->description,10}}</p>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {{ truncateText($products->links()) }}
            </div>
        </div>
    </section>
</main>



<script>
    $(document).ready(function(){

        $('#search-toggle-btn').click(function(){

            var searchForm = $('#search-form');
            if (searchForm.css('display') === 'none') {
                searchForm.css('display', 'block')
            } else {
                searchForm.css('display', 'none')
            }
            //alert('hola');
        });

    });
</script>

@endsection
