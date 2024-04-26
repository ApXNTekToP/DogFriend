<style>
    ::-webkit-scrollbar {
        display: none;
    }
    body{
        overflow: hidden;
    }
    .login-block{
        height: 100vh
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
    .fa-envelope{
        margin: 0 2% 0 0 !important;
    }
    .fa-eye{
        z-index: 99999;
        margin: 0 2% 0 0 !important;
    }
    .fa-unlock-alt{
        margin: 0 2.75% 0 0 !important;
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
    <section class="section section--login">
        <div class="login">
            <div class="container login-block d-flex justify-content-center align-items-center">
                <div class="row login_mobile">
                    <div class="col-md-12">
                        <form id="login_form" action="{{route('login_post_form')}}" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-title d-flex justify-content-center">
                                        <a href="{{route('index')}}">
                                            <label class="display-3 text-normal">Dog<span
                                                    class="text-bold">Friend</span></label>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form__main flex-column">
                                        <div class="form__item input-group d-flex flex-column">
                                            <input class="form__input w-100 form-control" id="email" type="text"
                                                   name="email"
                                                   value="" maxlength="50">
                                            <label class="form__placeholder h5" for="email">
                                                E-mail *
                                            </label>
                                            <label class="form__placeholder h5 w-100" for="email">
                                                <i class="icon_forms fa fa-envelope" aria-hidden="true"></i>
                                            </label>
                                            <span class="text-red">{{ $errors->first('email') }}</span>
                                        </div>
                                        <div class="form__item input-group d-flex flex-column">
                                            <input class="form__input w-100 form-control" id="password"
                                                   type="password"
                                                   name="password" value="" maxlength="30">
                                            <label class="form__placeholder h5" for="password">
                                                Password *
                                            </label>
                                            <label class="form__placeholder h5 w-100" for="password">
                                                <i class="icon_forms fa fa-unlock-alt" aria-hidden="true"></i>
                                            </label>
                                            <i class="fa fa-eye fa-none" aria-hidden="true"></i>
                                            <span class="text-red">{{ $errors->first('password') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form__footer">
                                        @csrf
                                        <div class="form__button d-flex align-items-center justify-content-center
                                        flex-column">
                                            <button class="btn btn--medium w-75 m-3" type="submit">
                                                <span class="btn-label">Войти</span>
                                            </button>
                                            <a href="{{route('register')}}">
                                                <span id="create_new_account" class="btn-label">Создать новый
                                                аккаунт</span>
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
