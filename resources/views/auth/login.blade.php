@extends('layouts.app', ['class' => 'bg-default'])

@section('content')

    <div class="container mt--8 pb-5 ">
        <div class="row justify-content-center" style=" position: relative; top: 92px;">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <small>
                                    <img src="/img/3tecnos_300x140.png" style=" width: 61%;">
                            </small>
                            <br>
                            <small>
                                Não tem usuário? Favor entre em contato com o administrador do
                                sistema.
                                pelo email <a href="mailto:3tecnos@contato.com.br">3tecnos@contato.com.br</a>
                            </small>
                        </div>
                        <form role="form" method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}" value="admin@argon.com" required autofocus>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Password') }}" type="password" value="secret" required>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
           
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">{{ __('Entrar') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
@endsection
