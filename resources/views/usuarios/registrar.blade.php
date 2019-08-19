@extends('share.main')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <h3 class="card-title">Cadastre-se</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('salvar') }}" method="post" class="form-horizontal">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nome" class="col-sm-2 control-label">Nome:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nome" placeholder="Digite seu nome">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="login" class="col-sm-2 control-label">Login:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="login" placeholder="Digite um login">
                    </div>
                </div>
                <div class="form-group">
                    <label for="senha" class="col-sm-2 control-label">Senha:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="senha" placeholder="Digite sua senha">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="reset" class="btn btn-default">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
