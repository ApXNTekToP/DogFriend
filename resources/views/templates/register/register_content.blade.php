<style>
    ::-webkit-scrollbar {
        display: none;
    }
    body{
        overflow: hidden;
    }
    .registration-block{
        height: 100vh
    }
    .text-red {
        color: red;
        margin-bottom: 10px;
    }
    .form__input{
        width: calc(50vw * 0.65) !important;
    }
    .fa{
        position: absolute !important;
        right: 0 !important;
        top: 0;
        z-index: 999999;
        color: #3b3b3b;
        font-size: calc(1rem + (2 + 2 * 0.7) * ((100vw - 320px) / 3840)) !important;
        transition: 0.5s;
    }
    .fa-none{
        opacity: 0;
        transition: 0.5s;
    }
    .fa-eye{
        z-index: 99999;
        margin: 0 2% 0 0 !important;
    }
    .noselect {
        -webkit-touch-callout: none; /* iOS Safari */
        -webkit-user-select: none; /* Safari */
        -khtml-user-select: none; /* Konqueror HTML */
        -moz-user-select: none; /* Old versions of Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
        user-select: none; /* Non-prefixed version, currently
                                  supported by Chrome, Edge, Opera and Firefox */
    }
    @media screen and (min-width: 2539px) {
        .form__input{
            width: 850px !important;
        }
    }

    @media screen and (min-width: 1920px) {
        .form__input{
            width: 450px !important;
        }
    }

    @media (max-width: 768px) {
        .form__input{
            width: 100% !important;
        }
    }
</style>
<main class="main__block">
    <section class="section section--registration">
        <div class="registration">
            <div class="container registration-block d-flex justify-content-center align-items-center">
                <div class="row registration_mobile">
                    <div class="col-md-12">
                        <form id="register_form" action="{{route('create_user')}}" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-title d-flex justify-content-center">
                                        <a href="{{route('index')}}">
                                            <label class="display-3 text-normal noselect">Dog<span
                                                    class="text-bold">Friend</span></label>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form__main flex-column">
                                        <div class="col-md-12 d-flex flex-row">
                                            <div class="form__item input-group d-flex flex-column">
                                                <input class="form__input w-100 form-control" id="last_name"
                                                       type="text"
                                                       name="last_name"
                                                       value="" maxlength="50">
                                                <label class="form__placeholder h5 noselect" for="last_name">
                                                    Last Name *
                                                </label>
                                                <span class="text-red">{{ $errors->first('last_name') }}</span>
                                            </div>
                                            <div class="form__item input-group d-flex flex-column">
                                                <input class="form__input w-100 form-control" id="first_name"
                                                       type="text"
                                                       name="first_name"
                                                       value="" maxlength="50">
                                                <label class="form__placeholder h5 noselect" for="first_name">
                                                    First Name *
                                                </label>
                                                <span class="text-red">{{ $errors->first('first_name')
                                                }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 d-flex flex-row">
                                            <div class="form__item input-group d-flex flex-column w-100">
                                                <input class="form__input form-control" id="city"
                                                       type="text"
                                                       name="city"
                                                       value="" maxlength="50" style="width: 100% !important;">
                                                <label class="form__placeholder h5 noselect" for="city">
                                                    City *
                                                </label>
                                                <span class="text-red">{{ $errors->first('city') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 d-flex flex-row">
                                            <div class="form__item input-group d-flex flex-column">
                                                <input class="form__input w-100 form-control" id="phone"
                                                       type="text"
                                                       name="phone"
                                                       value="" maxlength="50" data-tel-input>
                                                <label class="form__placeholder h5 noselect" for="phone">
                                                    Phone *
                                                </label>
                                                <span class="text-red">{{ $errors->first('phone') }}</span>
                                            </div>
                                            <div class="form__item input-group d-flex flex-column">
                                                <input class="form__input w-100 form-control" id="email"
                                                       type="text"
                                                       name="email"
                                                       value="" maxlength="50">
                                                <label class="form__placeholder h5 noselect" for="email">
                                                    E-mail *
                                                </label>
                                                <span class="text-red">{{ $errors->first('email') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 d-flex flex-row">
                                            <div class="form__item input-group d-flex flex-column">
                                                <input class="form__input w-100 form-control" id="password"
                                                       type="password"
                                                       name="password" value="" maxlength="30">
                                                <label class="form__placeholder h5 noselect" for="password">
                                                    Password *
                                                </label>
                                                <i class="fa fa-eye fa-none" aria-hidden="true"></i>
                                                <span class="text-red">{{ $errors->first('password') }}</span>
                                            </div>
                                            <div class="form__item input-group d-flex flex-column">
                                                <input class="form__input w-100 form-control"
                                                       id="password_confirmation"
                                                       type="password"
                                                       name="password_confirmation" value="" maxlength="30">
                                                <label class="form__placeholder h5 noselect" for="password_confirmation">
                                                    Repeat password *
                                                </label>
                                                <i class="fa fa-eye fa-none" aria-hidden="true"></i>
                                                <span class="text-red">{{ $errors->first('password_confirmation')
                                                }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form__footer">
                                        @csrf
                                        <div class="form__button d-flex align-items-center justify-content-center flex-column">
                                            <button class="btn btn--medium w-75 m-3" type="submit">
                                                <span class="btn-label">Зарегестрироваться</span>
                                            </button>
                                            <a href="{{route('auth')}}">
                                                <span id="have_account" class="btn-label">Уже есть аккаунт?</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="{{asset('js/scripts.js')}}" defer></script>
