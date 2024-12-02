@extends('layouts.app')

@section('content')
    <h2>Admin</h2>
    <form action="/search" method="post">
        @csrf
        <div>
            名前
            <input type="text" name="input" placeholder="名前を検索">
            <input type="submit" value="検索">
        </div>
    </form>
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
                <td>{{$contact['last_name']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$contacts->links()}}
@endsection
