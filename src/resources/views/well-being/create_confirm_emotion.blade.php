@extends('layouts.layout')

@section('title', '感情詳細情報')

@section('content')

<div class="container">

    <h2>Today Emotion</h2>
    <table class="table table-bordered table-show">
        <tr>
            <th class="text-center table-show-th">ユーザー名</th>
            <td class="table-show-td">{{ $emotion['name'] }}</td>
        </tr>
        <tr>
            <th class="text-center table-show-th">共有先</th>
            <td class="table-show-td">{{ $emotion['share_account'] }}</td>
        </tr>
        <tr>
            <th class="text-center table-show-th">感情レベル</th>
            <td class="table-show-td">{{ $emotion['emotion'] }}</td>
        </tr>
        <tr>
            <th class="text-center table-show-th">感背景</th>
            <td class="table-show-td">{{ $emotion['background'] }}</td>
        </tr>
        <tr>
            <th class="text-center table-show-th">出来事</th>
            <td class="table-show-td">{{ $emotion['event'] }}</td>
        </tr>

    </table>

    <div class="text-center btn-div">
        <p>保存してもよろしいですか？</p>
        <!-- Button trigger modal -->
        <form method="post" action="/emotion">
            {{  csrf_field()  }}
            <input type="hidden" name="name" value="{{ $emotion['name'] }}" >
            <input type="hidden" name="share-account" value="{{ $emotion['share_account'] }}">
            <input type="hidden" name="emotion" value="$emotion['emotion']">
            <input type="hidden" name="background" value="$emotion['background']" >
            <input type="hidden" name="event" value="{{ $emotion['event'] }}">

            <button type="submit" class="btn btn-lg btn-success btn-edit">はい</button>
        </form>

        <form method="get" action="/emotion/create">
            {{  csrf_field()  }}
            <button type="button" class="btn btn-lg btn-danger btn-delete">いいえ</button>
        </form>
    </div>
</div>

@endsection
