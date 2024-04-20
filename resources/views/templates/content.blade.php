<div class="col-md-12 ads__block">
    @foreach($groups as $group)
        <div class="col-md-12 d-flex flex-row">
            @foreach($group as $key => $el)
                <div class="col-md-4 d-flex justify-content-center">
                    <a href="{{ route('ad', [$el->user->city, $el->id]) }}">
                        <div class="ads__block d-flex flex-column">
                            <img class="ads__block__img" src="{{ asset($el->photo->first()
                            ->path ??
                            'img/dummy-image-white.jpg') }}"
                                 alt="">
                            <div class="ads__block_info">
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
                </div>
            @endforeach
        </div>
    @endforeach
</div>
