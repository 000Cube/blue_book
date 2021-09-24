<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    public function index(Request $request){

        $hasItems = Person::with('boards')->has('boards')->get();
        $noItems = Person::doesntHave('boards')->get();
        $param = [
            'hasItems' => $hasItems,
            'noItems' => $noItems
        ];
        return view('person.index',$param);
    }

    public function find(Request $request){

        return view('person.find',['input' => '']);
    }

    public function search(Request $request){

        $min = $request->input * 1;
        $max = $min + 10;
        $item = Person::ageGreaterThan($min)->ageLessThan($max)->first();
        $param = ['input' => $request->input, 'item' => $item];

        return view('person.find',$param);
    }

    public function add(Request $request){
        return view('person.add');
    }

    public function create(Request $request, Person $person){
        //モデルに記述したルールでバリデーションをかける
        $this->validate($request, Person::$rules);
        //リクエストで送られてきた値を取得
        $form = $request->all();
        //csrftokenはテーブルにないフィールドなので削除する
        unset($form['_token']);
        //インスタンスを保存
        $person->fill($form)->save();
        return redirect('/person');
    }

    public function edit(Request $request){
        $person = Person::find($request->id);
        return view('person.edit',['form' => $person]);
    }

    public function update(Request $request){
        //モデルに記述したルールでバリデーションをかける
        $this->validate($request, Person::$rules);
        //リクエストで送られてきたidを持つレコードを取得
        $person = Person::find($request->id);
        //リクエストで送られてきた値を全て取得
        $form = $request->all();
        //csrftokenはテーブルにないフィールドなので削除する
        unset($form['_token']);
        //インスタンスを保存
        $person->fill($form)->save();
        return redirect('/person');
    }

    public function delete(Request $request){
        $person = Person::find($request->id);
        return view('person.del',['form' => $person]);
    }

    public function remove(Request $request){
        Person::find($request->id)->delete();
        return redirect('/person');
    }
}
