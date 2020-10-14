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
        <form method="get" action="/emotion/">
            <button class="btn btn-lg btn-success btn-edit">
                はい
                <button type="submit" class="btn btn-primary btn-form-submit">保存する</button>
            </button>

            <button type="button" class="btn btn-lg btn-danger btn-delete" data-toggle="modal" data-target="#exampleModalCenter">
                いいえ
            </button>
        </form>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">削除の確認</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>以下の登録情報を削除してもよろしいですか？</p>
                        <p><strong>{{ $emotion['name'] }}</strong></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <form action="/workshop" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
