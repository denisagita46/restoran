@extends('auth.layouts.auth')

@section('body_class','register')

@section('content')
    <div>
        <div class="login_wrapper">
            <div class="animate form">
                <section class="login_content">
                    {{ Form::open(['route' => 'register']) }}
                        <h1>Form Registrasi</h1>
                        <div>
                            <input type="text" name="name" class="form-control"
                                   placeholder="{{ __('views.auth.register.input_0') }}"
                                   value="{{ old('name') }}" required autofocus/>
                        </div>
                        <div>
                            <input type="email" name="email" class="form-control"
                                   placeholder="{{ __('views.auth.register.input_1') }}"
                                   required/>
                        </div>
						 
                        <div>
                            <input type="password" name="password" class="form-control"
                                   placeholder="{{ __('views.auth.register.input_2') }}"
                                   required=""/>
                        </div>
                        
						<div>
                            <input type="password" name="password_confirmation" class="form-control"
                                   placeholder="{{ __('views.auth.register.input_3') }}"
                                   required/>
                        </div>
						
						 <div>
                            <input type="telepon" name="telepon" class="form-control"
                                   placeholder="Telepon"
                                   required/>
                        </div>
						
						<br>
						<div>
                            <input type="alamat" name="alamat" class="form-control"
                                   placeholder="Alamat"
                                   required/>
                        </div>
						</br>
						
						<br>
						<select name="flag" class="form-control" id="flag">
							<option>--choose--</option>
							<option value="0">tidak aktif</option>
							<option value="1">aktif</option>
						</select>
						</br>

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (!$errors->isEmpty())
                            <div class="alert alert-danger" role="alert">
                                {!! $errors->first() !!}
                            </div>
                        @endif

                        @if(config('auth.captcha.registration'))
                            @captcha()
                        @endif

                        <div>
                            <button type="submit"
                                    class="btn btn-default submit">{{ __('views.auth.register.action_1') }}</button>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">{{ __('views.auth.register.message') }}
                                <a href="{{ route('login') }}" class="to_register"> {{ __('views.auth.register.action_2') }} </a>
                            </p>

                            <div class="clearfix"></div>
                            <br/>

                            <div>
                                
                            </div>
                        </div>
                    {{ Form::close() }}
                </section>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    @parent

    {{ Html::style(mix('assets/auth/css/register.css')) }}
@endsection
