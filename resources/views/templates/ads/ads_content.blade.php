<div class="col-md-12">
    <div class="ad__block d-flex justify-content-center flex-column">
        <div class="ad__title col-md-12">{{$ad->title}}</div>
        <div id="carouselExampleRide" class="carousel slide col-md-6" data-bs-ride="true">
            <div class="carousel-inner">
                @foreach($photo as $key => $el)
                    @if($photo->first()->id === $el->id)
                        <div class="carousel-item active">
                            <img src="{{asset($el->path)}}" class="d-block w-100" alt="">
                        </div>
                    @else
                        <div class="carousel-item">
                            <img src="{{asset($el->path)}}" class="d-block w-100" alt="">
                        </div>
                    @endif
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Предыдущий элемент</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Следующий элемент</span>
            </button>
        </div>
        <div class="ad__info col-md-6">
            <p>Test</p>
        </div>
    </div>
</div>
