@extends('layouts.dataTable')

@section('Title', 'Data User')

@section('headerTable')
    <th scope="col">id</th>
    <th scope="col">name</th>
    <th scope="col">email</th>
    <th scope="col">password</th>
    <th scope="col">created_at</th>
    <th scope="col">updated_at</th>
@endsection

@section('bodyTable')
    @foreach ($allUserData as $usr)
        <tr>
            <th scope="row">{{ $usr->id }}</th>
            <td>{{ $usr->name }}</td>
            <td>{{ $usr->email }}</td>
            <td>{{ $usr->password }}</td>
            <td>{{ $usr->created_at }}</td>
            <td>{{ $usr->updated_at }}</td>
        </tr>
    @endforeach
@endsection
