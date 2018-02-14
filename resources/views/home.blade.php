@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <table class="table">
                        <th>ID</th>
                        <th>Data Cadastro</th>
                        <th>Nome</th>
                        <th>Setor</th>
                        <th>Ativo</th>
                        <th>Ações</th>
                        <tbody>
                            @foreach($locale_pt as $locale)
                                <tr>
                                    <td>{{$locale_pt -> id }}</td>
                                    <td>{{ date_format($locale_pt -> created_at, 'd/m/Y' ) }}</td>
                                    <td>{{$locale_pt -> name }}</td>
                                    <td>{{$locale_pt -> setor }}</td>
                                    <td>{{$locale_pt -> is_active }}</td>
                                    <td>
                                        <a href="{{$locale_pt->id }}/admin_editar" class="btn btn-primary">Editar</a>

                                        <button type="submit" href="{{$locale_pt->id }}/excluir" class="btn btn-danger" value="excluir">Excluir</button>

                                    </td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                    @foreach ($locale_pt)

                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
