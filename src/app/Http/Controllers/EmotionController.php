<?php

namespace App\Http\Controllers;

use App\Models\Emotion;
use App\Models\User;
use Illuminate\Http\Request;

class EmotionController extends Controller
{
    // 勉強会詳細ページ
    public function show(Request $request, $id)
    {
        $emotion = Emotion::find($id);

        return view('well-being.show_emotion', ['emotion' => $emotion]);
    }


    public function create(Request $request)
    {
        return view('well-being.create_emotion');
    }

    public function createConfirm(Request $request)
    {
        // 感情入力の内容を受け取って変数に入れる
        $name = $request->input('name');
        $share_account = $request->input('share-account');
        $emotion = $request->input('emotion');
        $background = $request->input('background');
        $event = $request->input('event');

        // 変数をビューに渡す
        return view('well-being.create_confirm_emotion')->with("emotion", [
            "name" => $name,
            "share_account"  => $share_account,
            "emotion" => $emotion,
            "background" => $background,
            "event" => $event
        ]);
    }

    // 投稿された内容を表示するページ
    public function store(Request $request) {

        // 感情入力の内容を受け取って変数に入れる
        $name = $request->input('name');
        $share_account = $request->input('share-account');
        $emotion = $request->input('emotion');
        $background = $request->input('background');
        $event = $request->input('event');

        // 変数をビューに渡す
        return view('well-being.show_emotion')->with("emotion", [
            "name" => $name,
            "share_account"  => $share_account,
            "emotion" => $emotion,
            "background" => $background,
            "event" => $event
        ]);
    }
}
