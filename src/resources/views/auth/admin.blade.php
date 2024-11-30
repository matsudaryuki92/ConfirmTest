@extends('layouts.app')

@section('content')
    <h2>Admin</h2>
    <table>
        <thead>
            <tr>
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td>{{$contact['last_name']}}{{$contact['first_name']}}</td>
                <td>{{$contact['gender']}}</td>
                <td>{{$contact['email']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
