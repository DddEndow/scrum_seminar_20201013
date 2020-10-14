{{-- テンプレートbladeファイルを継承 --}}
@extends('layouts.layout')

{{-- 追加で必要なCSS, Javascriptの読み込み --}}
@section('head_option')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-datetimepicker/2.7.1/css/bootstrap-material-datetimepicker.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
@endsection

{{-- bodyタグ内 --}}
@section('content')

<div class="container">

    {{-- <h3 class="text-left form-title">感情入力</h3> --}}

    <div class="mx-auto form-container">
        <h2 class="text-left form-title">Input Emotion</h2>

        <form method="@yield('form-method')" action="@yield('form-action')">
            {{  csrf_field()  }}

            ユーザー名:<br>
            <input name="name" id="input_name">
            <br>
            共有先（カンマで区切ってください）:<br>
            <textarea name="share-account" rows="4" cols="40" id="input_share-account"></textarea>
            <br>
            感情レベル:<br>
            <input type="radio" name="emotion" value="U+1F604" id="input_emotion"/> &#128516;
            <input type="radio" name="emotion" value="U+1F642" id="input_emotion"/> &#128578;
            <input type="radio" name="emotion" value="U+1F636" id="input_emotion"/> &#128566;
            <input type="radio" name="emotion" value="U+1F614" id="input_emotion"/> &#128532;
            <input type="radio" name="emotion" value="U+1F922" id="input_emotion"/> &#129314;

            <br>
            背景:<br>
            <input type="radio" name="background" value="A" id="input_background"/> A
            <input type="radio" name="background" value="B" id="input_background"/> B
            <input type="radio" name="background" value="C" id="input_background"/> C
            <br>
            出来事:<br>
            <textarea name="event" rows="4" cols="40" id="input_event"></textarea>
            <br>
            {{ csrf_field() }}

            {{-- 送信ボタン --}}
            @section('form-submit')
            @show
        </form>
    </div>
</div>

{{-- javascriptの実行 --}}
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-datetimepicker/2.7.1/js/bootstrap-material-datetimepicker.min.js"></script>
<!-- moment.jsを使って日本語対応 -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/locale/ja.js"></script>
<script>
    $(function(){
        $(".picker_datetime").bootstrapMaterialDatePicker({
            weekStart:0,
            lang:"ja",
            minDate:moment(),
            minTime:moment(),
            switchOnClick:true,
            format:"YYYY/MM/DD HH:mm"
        });
    });
</script>

@endsection

