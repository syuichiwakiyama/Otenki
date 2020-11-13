@extends('layouts.app')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">
        <!-- ユーザーのIDをクリックしたらそのユーザーの詳細に飛べるようにする
        routeを使い、user.show(Routeで決めることが出来る)  に飛び、そのuser_idを使用する第二引数に使っているんだお -->
        <a href="{{route('user.show' , $user->id)}}">{{$user->id}}</a>
      </th>
      <td>{{$user ->name}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
