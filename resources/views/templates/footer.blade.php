<div class="col-md-12 d-flex">
    <div class="col-md-6 d-flex justify-content-center">
        <div class="logo__header align-content-center m-3">
            <a href="{{route('index')}}"><img class="logo__header__img" src="{{asset('img/logo/306277.svg')}}"
                                              alt="DogFriend
                    .ru logo"></a>
        </div>
        <div class="brand__name m-3">
            <div class="d-flex flex-column bd-highlight mb-2">
                <a href="{{route('index')}}"><span class="brand__name__text p-1 bd-highlight">DogFriend.ru</span></a>
                <span class="brand__name__sub-text p-1 bd-highlight ">Продажа собак</span>
            </div>
        </div>
    </div>
    <div class="col-md-6 d-flex justify-content-center">
        <div class="question-block align-content-center m-3">
            <div class="question-block-input d-flex flex-column">
                <span class="h5 p-1 bd-highlight">Возникли вопросы?</span>
                <span class="h6 p-1 bd-highlight">Оставьте свою почту и мы напишем Вам!</span>
                <form class="send__email__form" action="">
                    @csrf
                    <div class="submit__block__form">
                        <label class="email__input__label d-flex flex-row">
                            <input class="email__input" type="email" placeholder="Введите ваш E-Mail"/>
                            <button type="submit" class="submit__form">
                                <i class="fa fa-arrow-right m-0 p-0" aria-hidden="true"></i>
                            </button>
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
