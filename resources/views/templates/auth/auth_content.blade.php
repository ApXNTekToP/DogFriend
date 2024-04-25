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
                        <form action="{{route('login_post_form')}}" method="POST">
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
                                            <input class="form__input w-100 form-control" id="email" type="text" name="email"
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
                                            <input class="form__input w-100 form-control" id="password" type="password"
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
                                            <span id="create_new_account" class="btn-label">Создать новый
                                                аккаунт</span>
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
    <section class="section section--registration d-none">
        <div class="registration">
            <div class="container registration-block d-flex justify-content-center align-items-center">
                <div class="row registration_mobile">
                    <div class="col-md-12">
                        <form action="{{route('create_user')}}" method="POST">
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
                                        <div class="col-md-12 d-flex flex-row">
                                            <div class="form__item input-group d-flex flex-column">
                                                <input class="form__input w-100 form-control" id="reg_last_name"
                                                       type="text"
                                                       name="reg_last_name"
                                                       value="" maxlength="50">
                                                <label class="form__placeholder h5" for="reg_last_name">
                                                    Last Name *
                                                </label>
                                                <span class="text-red">{{ $errors->first('reg_last_name') }}</span>
                                            </div>
                                            <div class="form__item input-group d-flex flex-column">
                                                <input class="form__input w-100 form-control" id="reg_first_name"
                                                       type="text"
                                                       name="reg_first_name"
                                                       value="" maxlength="50">
                                                <label class="form__placeholder h5" for="reg_first_name">
                                                    First Name *
                                                </label>
                                                <span class="text-red">{{ $errors->first('reg_first_name') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 d-flex flex-row">
                                            <div class="form__item input-group d-flex">
                                                <input class="form__input w-100 form-control" id="reg_city"
                                                       type="text"
                                                       name="reg_city"
                                                       value="" maxlength="50">
                                                <label class="form__placeholder h5" for="reg_city">
                                                    City *
                                                </label>
                                                <span class="text-red">{{ $errors->first('reg_city') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 d-flex flex-row">
                                            <div class="form__item input-group d-flex">
                                                <input class="form__input w-100 form-control" id="reg_phone"
                                                       type="text"
                                                       name="reg_phone"
                                                       value="" maxlength="50">
                                                <label class="form__placeholder h5" for="reg_phone">
                                                    Phone *
                                                </label>
                                                <span class="text-red">{{ $errors->first('reg_phone') }}</span>
                                            </div>
                                            <div class="form__item input-group d-flex">
                                                <input class="form__input w-100 form-control" id="reg_email"
                                                       type="text"
                                                       name="reg_email"
                                                       value="" maxlength="50">
                                                <label class="form__placeholder h5" for="reg_email">
                                                    E-mail *
                                                </label>
                                                <span class="text-red">{{ $errors->first('reg_email') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 d-flex flex-row">
                                            <div class="form__item input-group d-flex flex-column">
                                                <input class="form__input w-100 form-control" id="reg_password" type="password"
                                                       name="reg_password" value="" maxlength="30">
                                                <label class="form__placeholder h5" for="reg_password">
                                                    Password *
                                                </label>
                                                <i class="fa fa-eye fa-none" aria-hidden="true"></i>
                                                <span class="text-red">{{ $errors->first('reg_password') }}</span>
                                            </div>
                                            <div class="form__item input-group d-flex flex-column">
                                                <input class="form__input w-100 form-control" id="reg_repeat_password"
                                                       type="password"
                                                       name="reg_repeat_password" value="" maxlength="30">
                                                <label class="form__placeholder h5" for="reg_repeat_password">
                                                    Repeat password *
                                                </label>
                                                <i class="fa fa-eye fa-none" aria-hidden="true"></i>
                                                <span class="text-red">{{ $errors->first('reg_repeat_password') }}</span>
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
                                            <span id="have_account" class="btn-label">Уже есть аккаунт?</span>
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
