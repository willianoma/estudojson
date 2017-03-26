@extends('auth.templates.index')

@section('form') {{--ver aula de blade--}}



<form class="form-padrao" method="POST" action="{{ url('/resetar-senha') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    {{--   <input type="hidden" name="token" value="{{ $token }}">--}}

    <div class="form-group">
        <input type="text" class="form-control" name="email" placeholder="Usuário">
    </div>

    <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Senha">
    </div>

    <div class="form-group">
        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Senha">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            Atualizar senha
        </button>
    </div>

</form>
@endsection