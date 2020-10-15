@extends('layouts.layout')

@section('title', '感情詳細情報')

@section('content')
<?php
    switch ($emotion['emotion']) {
        case 5:
            $emotion_icon = '😄';
            break;
        case 4:
            $emotion_icon = '🙂';
            break;
        case 3:
            $emotion_icon = '😶';
            break;
        case 2:
            $emotion_icon = '😔';
            break;
        case 1:
            $emotion_icon = '🤢';
            break;
        default:
            $emotion_icon = 'none';
            break;
    }
    $emotion_string = $emotion['emotion'] . '(' . $emotion_icon . ')'
?>

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
            <td class="table-show-td">{{ $emotion_string }}</td>
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


</div>

@endsection
