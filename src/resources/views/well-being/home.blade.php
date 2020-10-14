{{-- テンプレートbladeファイルを継承 --}}
@extends('layouts.layout')

{{-- 追加で必要なCSS, Javascriptの読み込み --}}
@section('head_option')
    <script src="https://unpkg.com/frappe-charts@0.0.5/dist/frappe-charts.min.iife.js"></script>
    <script src="{{ asset('/js/chart.js') }}"></script>
@endsection

@section('title', '勉強会の編集ページ')


@section('content')
<p>hoge</p>

<div id="chart"></div>
@endsection
