{{-- テンプレートbladeファイルを継承 --}}
@extends('layouts.layout-form')

@section('title', '感情入力ページ')

{{-- メソッド・アクションの設定 --}}
@section('form-method', 'post')
@section('form-action', '/emotion/create/confirm')

{{-- 勉強会ステータス入力部 --}}
@section('form-status')
<div class="form-group">
    <input type="hidden" class="form-control" name="emotion[status]" value="0">
</div>
@endsection

{{-- 送信ボタン --}}
@section('form-submit')
<button type="submit" class="btn btn-primary btn-form-submit">保存する</button>
@endsection
