<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexRequest;
use App\Models\Index;


class IndexController extends Controller
{
    public function index(){
        return view('index');
    }

    public function confirm(IndexRequest $request){
        
        $contact = $request -> only(['family_name','first_name','sex','email','tel-1','tel-2','tel-3','address','building','kinds','oder']);

        $contact['full_name'] = $contact['family_name'].' '.$contact['first_name'];
        $contact['tel'] = $contact['tel-1'].$contact['tel-2'].$contact['tel-3'];

        return view ('confirm',compact('contact'));
    }

    public function store(IndexRequest $request){

        $contact = $request -> only(['family_name','first_name','sex','email','tel','address','building','kinds','oder']);
        Index::create($contact);
        return view('thanks');

    }

    public function admin(){

        $contacts = Inedx::all();
        $contacts = Index::simpePaginate(7);
        return view('admin',['contacts'=> $contacts]);
    }


}
