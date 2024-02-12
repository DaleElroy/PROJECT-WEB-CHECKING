<div class="container">
    <div class="border p-4">
        <h2 class="mb-4 text-center"></h2>
        <div class="row">
            <div class="card">
                <h4 class="Card-title text-center">Latest Product</h4>
                <div class="row">
                    @foreach ($latest_product as $latest => $index)
                        <div class="col-md-3 mb-4">
                            <img class="card-img-top" src="{{ asset('latest_product/' . $index->latest_product) }}">
                            <div class="card-title">
                                <h4 class="card-tile">{{ $index->name }}</h4>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>