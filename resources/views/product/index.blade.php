<x-layout>
    <div class="container">
        <div class="row">
            @forelse ($products as $product)
                <div class="col-12 col-md-8">
                    <img src="{{ $product->media->first()->getUrl()}}" alt="">
                </div>
                <div class="col-12 col-md-3">
                    <h1>{{ $product->translateAttribute('name') }}</h1>
                </div>
            @empty
                <h1>Amico cerca meglio</h1>
            @endforelse
        </div>
    </div>
</x-layout>