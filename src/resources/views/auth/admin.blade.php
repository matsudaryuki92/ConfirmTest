@extends('layouts.app')

@section('content')
    <h2>Admin</h2>
    <form action="/search" method="post">
        @csrf
        <div>
            名前
            <input type="text" name="input">
            <!-- <input type="text" name="first_name"> -->
            <!-- <label for="gender">性別</label>
            <select name="gender" id="gender">
                <option value="0" disabled selected>性別を選択</option>
                <option value="1" name="1">男性</option>
                <option value="2" name="2">女性</option>
                <option value="3" name="3">その他</option>
            </select> -->
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
                <td>{{$contact['last_name']}}{{$contact['first_name']}}</td>
                <td>{{$contact['gender']}}</td>
                <td>{{$contact['email']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$contacts->links()}}
@endsection
