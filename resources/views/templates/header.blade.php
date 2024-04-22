<div class="col-md-12 d-flex">
    <div class="col-md-6 d-flex justify-content-center">
        <div class="logo__header align-content-center m-3">
            <a href="{{route('index')}}"><img class="logo__header__img" src="{{asset('img/logo/306277.svg')}}"
                                              alt="DogFriend.ru logo"></a>
        </div>
        <div class="brand__name m-3">
            <div class="d-flex flex-column bd-highlight mb-2">
                <a href="{{route('index')}}"><span class="brand__name__text p-1 bd-highlight">DogFriend.ru</span></a>
                <span class="brand__name__sub-text p-1 bd-highlight ">Продажа собак</span>
            </div>
        </div>
    </div>
    <div class="col-md-6 d-flex justify-content-center align-items-center">
        <div class="personal-account flex-row">
            @if(!Auth::check())
                <a href="{{route('auth')}}"><i class="fa fa-user" aria-hidden="true"></i></a>
            @else
                <a class="m-3" href="{{route('personal')}}">Личиный кабинет</a>
                <a class="m-3" href="{{route('logout')}}">Выйти</a>
            @endif
        </div>
    </div>
</div>
