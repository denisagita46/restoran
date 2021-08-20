@extends('auth.layouts.auth')

@section('body_class','passwords_email')

@section('content')
    <div>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    {{ Form::open(['route' => 'password.email']) }}
                        <h1>{{ __('views.auth.passwords.email.header') }}</h1>

                        <div>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                                   placeholder="{{ __('views.auth.passwords.email.input') }}" required autofocus>
                        </div>

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

                        <div>
                            <button class="btn btn-default submit" type="submit">{{ __('views.auth.passwords.email.action') }}</button>
                        </div>

                        <div class="clearfix"></div>
                        
                    {{ Form::close() }}
                </section>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    @parent

    {{ Html::style(mix('assets/auth/css/passwords.css')) }}
@endsection