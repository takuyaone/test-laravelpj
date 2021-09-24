<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ClientRequest;

class HomeController extends Controller
{
    private $formItems=['name','gender','email','postcode','address','building_name','opition'];

    public function index()
    {
        return view('contact');
    }

    public function create(ClientRequest $request)
    {
        $input=$request->only($this->formItems);
        $request->session()->put('form_input',$input);
        return redirect('/confirm');
    }

    public function confirm(Request $request)
    {
        $input=$request->session()->get('form_input');
        if(!$input){
            return redirect('/');
        }
        return view('confirm',['input'=>$input]);
    }

    public function send(Request $request)
    {
        $input=$request->session()->get('form_input');

        if($request->has('back')){
            return redirect('/')->withInput($input);
        }
        if (!$input) {
            return redirect('/');
        }

        $Contact = new Contact;
        unset($input['_token_']);
        $Contact->fill($input)->save();

        $request->session()->forget('form_input');
        return view('complete');

    }

    public function show()
    {
        // $items=Contact::simplePaginate(4);
        $items=Contact::paginate(4);
        return view('management',['items'=>$items,'input'=>'']);
    }

    public function search(Request $request)
    {
        $items=Contact::where([
            ['name','LIKE',"%{$request->name}%"],
            ['gender',"{$request->gender}"],
            ['email','LIKE',"%{$request->email}%"],

        ])->get();
            // dd($items);
        if(!empty($request['gender'])){
            $gender=Contact::where('gender',"{$request->gender}")->get();
        }else{
            $gender=Contact::get();
        }
        // if (!empty($request['from']) && !empty($request['until'])
        // ) {
        //     $date = Contact::getDate($request['from'], $request['until']);
        // } else {
        //     $date = Contact::get();
        // }
        // dd($date);

        $param=[
            'items'=>$items,
            // 'items'=>$date
        ];
        // dd($param);
        // $items = Contact::paginate(4);
        // return view('find', ['items'=>$param]);

        return view('find',$param);
    }

    public function delete(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('/show');
    }

}
