@extends('layouts.layout-dashboard')

@section('content')
   @if (!empty($errors -> all()))
      <div class="alert alert-danger">{{ $errors -> first() }}</div>
   @elseif (Session::has('flashmsg'))
      <div class="alert alert-success">{{ Session::get('flashmsg') }}</div>
   @endif

   <div class="col-md-12">
      <h2>LISTA DE Usuários</h2>

      <div class="panel-body">

         <table class="table">
            <th>ID</th>
            <th>Data Cadastro</th>
            <th>Nome</th>
            <th>Ações</th>
            <tbody>
               @foreach($users as $user)
                  <tr>
                     <td>{{$user -> id }}</td>
                     <td>{{ date_format($user -> created_at, 'd/m/Y' ) }}</td>
                     <td>{{$user -> name }}</td>
                     <td>
                        <form method="POST" action="{{ route('other.excluirusuarios', $user -> id) }}">
                           {{csrf_field()}}
                           <input name="_method" type="hidden" value="DELETE">
                           <button type="submit" class="btn btn-danger" value="excluir">Excluir</button>
                        </form>
                     </td>
                  </tr>

               @endforeach
            </tbody>
         </table>
         {{ $users -> appends(Request::Input())->links() }}
      </div>
   </div>

@endsection
