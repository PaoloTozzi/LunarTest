<x-layout>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1>Benvenuti sul Test di Lunar php</h1>
            </div>
            <a href="{{route('hub.index')}}"></a>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">

            @foreach ($products as $product)
                <div class="col-12 col-md-4">
                    <div class="card card-custom" style="width: 18rem;">
                        <img src="{{ $product->media->first()->getUrl() }}" class="img-card-custom card-img-top"
                            alt="...">
                        <div class="card-body d-flex flex-column justify-content-around">
                            <h5 class="card-title">{{ $product->translateAttribute('name') }}</h5>
                            <p class="card-text">{!! $product->translateAttribute('description') !!}</p>
                            <a href="{{ route('productDetail', compact('product')) }}"
                                class="btn btn-primary">Dettaglio</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</x-layout>
