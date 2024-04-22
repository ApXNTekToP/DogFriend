<div class="col-md-12">
    <div class="personal__cabinet__title">
        <p class="h3 m-3">Мои объявления</p>
        <div class="personal__cabinet__ads d-flex flex-column">
            @foreach($groups as $group)
                <div class="col-md-12 d-flex flex-row">
                    @foreach($group as $key => $el)
                        <div class="col-md-4 d-flex justify-content-center align-items-start flex-column">
                            <a href="{{ route('ad', [$el->user->city, $el->id]) }}" class="h-100">
                                <div class="ads__block d-flex flex-column">
                                    <img class="ads__block__img" src="{{ asset($el->photo->first()
                            ->path ??
                            'img/dummy-image-white.jpg') }}"
                                         alt="">
                                    <div class="ads__block_info d-flex flex-column">
                                        <div class="ads__block__title">
                                            <p class="h6">{{ $el->title }}</p>
                                        </div>
                                        <div class="ads__block__price">
                                            <span>{{ $el->price }} RUB</span>
                                        </div>
                                        <span class="h6" style="color: gray">{{ $el->user->city }},</span>
                                        <span class="h6" style="color: darkgray">{{ $el->user->address }}</span>
                                        <span class="h6" style="color: darkgray">{{ $el->created_at }}</span>
                                    </div>
                                </div>
                            </a>
                            <a href="{{route('delete_ad', [$el->id])}}" class="btn btn-danger w-50">Удалить
                                объявление</a>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</div>
