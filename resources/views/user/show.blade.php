@extends('layouts.app')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">
        <a href="{{route('user.show' , $user->id)}}">{{$user->id}}</a>
      </th>
      <td>{{$user ->name}}</td>
      <td>{{$user ->email}}</td>
      <td>
        @if(Auth::user())
        <contact
          :user="{{json_encode($user)}}"
          :auth-user="{{json_encode(Auth::user())}}"
        ></contact>
        @endif
      </td>
    </tr>
  </tbody>
</table>
@endsection
