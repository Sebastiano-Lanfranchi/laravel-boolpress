@extends('author.base')

@section('title', 'Index Author')

@section('content')

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Surname</th>
        <th scope="col">Email</th>
        <th scope="col">Bio</th>
        <th scope="col">Website</th>
        <th scope="col">Pic</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($authors as $author)
        <tr>
            <th scope="row">{{$author->id}}</th>
            <td>{{$author->name}}</td>
            <td>{{$author->surname}}</td>
            <td>{{$author->email}}</td>
            <td>{{$author->detail->bio}}</td>
            <td>{{$author->detail->website}}</td>
            <td><img src="{{$author->detail->pic}}" with="250px"></td>
          </tr>
        @endforeach
    </tbody>
  </table>

  @endsection




