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
            {{ $products->links()}}
        </div>
    </div>
</div>
</@section>
