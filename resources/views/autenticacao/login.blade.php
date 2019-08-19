@extends('share.main')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <h4 class="card-title">
                Entrar no sistema
            </h4>
        </div>
        <div class="card-body">
            <form action="{{ route('logar') }}" method="post" class="form-horizontal">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="login" class="col-sm-2">Login</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="login" placeholder="Digite seu login">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="senha" class="col-sm-2">Senha</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="senha" placeholder="Digite sua senha">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-10">
                        <button type="reset" class="btn btn-light">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
