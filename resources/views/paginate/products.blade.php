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

<main></main>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="products-container"></div>
                <div class="pagination-container"></div>
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

        function loadProductspage(page){
            $.ajax({
                url:'/products?page='+page,
                method:'GET',
                success: function(data){
                    $('products-container').html.(data);
                },  error: function(error){
                    console.error(error);
                }
            });
        }
        loadProductsPage(1);
    });
</script>

@endsection
