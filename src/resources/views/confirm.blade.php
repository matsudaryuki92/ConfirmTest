@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection

@section('content')
    <div class="confirm__content">
      <div class="confirm__heading">
        <h2>Confirm</h2>
      </div>
      <form class="form" action="/thanks" method="post">
        @csrf
        <div class="confirm-table">
          <table class="confirm-table__inner">
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お名前</th>
              <td class="confirm-table__text">
                <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly/>
              </td>
              <td class="confirm-table__text">
                <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly/>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">性別</th>
              <td class="confirm-table__text">
                <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly/>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">メールアドレス</th>
              <td class="confirm-table__text">
                <input type="email" name="email" value="{{ $contact['email'] }}" readonly/>
              </td>
            </tr><tr class="confirm-table__row">
              <th class="confirm-table__header">電話番号</th>
              <td class="confirm-table__text">
                <input type="tel" name="tel1" value="{{ $contact['tel1'] }}" readonly/>
              </td>
              <td>
                <input type="tel" name="tel2" value="{{ $contact['tel2'] }}" readonly/>
              </td>
              <td>
                <input type="tel" name="tel3" value="{{ $contact['tel3'] }}" readonly/>
              </td>
            </tr><tr class="confirm-table__row">
              <th class="confirm-table__header">住所</th>
              <td class="confirm-table__text">
                <input type="text" name="address" value="{{ $contact['address'] }}" readonly/>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">建物名</th>
              <td class="confirm-table__text">
                <input type="text" name="building" value="{{ $contact['building'] }}" />
              </td>
            </tr>
            <!-- <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせの種類</th>
              <td class="confirm-table__text">
                <input type="text" name="" value="" />
              </td>
            </tr> -->
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせ内容</th>
              <td class="confirm-table__text">
                <input type="text" name="detail" value="{{ $contact['detail'] }}" />
              </td>
            </tr>
          </table>
        </div>
        <div class="form__button">
            <button type="submit">送信</button>
        </div>
      </form>
      <div class="form__button">
        <form action="/" class="form" method="get">
            <button type="submit">修正</button>
        </form>
      </div>
      </div>
    </div>
@endsection
