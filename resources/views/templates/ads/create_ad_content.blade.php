<style>
    .form__input:disabled {
        background-color:white !important;
        opacity: 1 !important;
    }
</style>
<div class="col-md-12">
    <form id="create_ad_form" action="{{route('create_ad')}}" enctype="multipart/form-data" method="POST">
        <div class="row">
            <div class="col-md-12">
                <div class="form__main flex-column">
                    <div class="col-md-12 d-flex flex-row">
                        <div class="form__item input-group d-flex flex-column">
                            <input class="form__input w-100 form-control" id="title"
                                   type="text"
                                   name="title"
                                   value="" maxlength="100">
                            <label class="form__placeholder h5 noselect" for="title">
                                Title *
                            </label>
                            <span class="text-red">{{ $errors->first('title') }}</span>
                        </div>
                        <div class="form__item input-group d-flex flex-column">
                            <input class="form__input w-100 form-control" id="description"
                                   type="text"
                                   name="description"
                                   value="" maxlength="500">
                            <label class="form__placeholder h5 noselect" for="description">
                                Description *
                            </label>
                            <span class="text-red">{{ $errors->first('description')}}</span>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex flex-row">
                        <div class="form__item input-group d-flex flex-column w-100">
                            <input class="form__input form-control" id="price"
                                   type="number"
                                   name="price"
                                   value="" maxlength="10" style="width: 100% !important;">
                            <label class="form__placeholder h5 noselect" for="price">
                                Price *
                            </label>
                            <span class="text-red">{{ $errors->first('price') }}</span>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex flex-row">
                        <div class="form__item input-group d-flex flex-column">
                            <input class="form__input w-100 form-control" id="address"
                                   type="text"
                                   name="address"
                                   maxlength="255">
                            <label class="form__placeholder h5 noselect" for="address">
                                Address *
                            </label>
                            <span class="text-red">{{ $errors->first('address') }}</span>
                        </div>
                        <div class="form__item input-group d-flex flex-column">
                            <input class="form__input w-100 form-control disabled" id="phone"
                                   type="text"
                                   name="phone"
                                   value="{{$user->phone}}" maxlength="50" data-tel-input disabled>
                            <label class="form__placeholder h5 noselect" for="phone">
                                Phone *
                            </label>
                            <span class="text-red">{{ $errors->first('phone') }}</span>
                        </div>
                        <div class="form__item input-group d-flex flex-column">
                            <input class="form__input w-100 form-control disabled" id="email"
                                   type="text"
                                   name="email"
                                   value="{{$user->email}}" maxlength="50" disabled>
                            <label class="form__placeholder h5 noselect" for="email">
                                E-mail *
                            </label>
                            <span class="text-red">{{ $errors->first('email') }}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form__item input-group d-flex flex-column">
                            <input type="file" class="form__input w-100 form-control" name="images[]"
                                   placeholder="address" multiple>
                            <span class="text-red">{{ $errors->first('images') }}</span>
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
                            <span class="btn-label">Создать объявление</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script src="{{asset('js/scripts.js')}}" defer></script>
