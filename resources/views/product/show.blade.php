<x-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-5">
                <img src="{{ $product->media->first()->getUrl()}}" class="img-fluid" alt="">
            </div>
            <div class="col-12 col-md-5">
                <h5>{{ $product->translateAttribute('name') }}</h5>
                <span class="text-danger">{!! $product->translateAttribute('description') !!}</span>
                <p class="text-danger">{{ $product->prices()->first()->price }}$</p>
                <form action="{{route('checkout', compact('product'))}}" method="post">
                    @csrf
                    <button>Acquista</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">

                <a href="{{route('home')}}">Torna alla home</a>
            </div>
        </div>
    </div>
</x-layout>