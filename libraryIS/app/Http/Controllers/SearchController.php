<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Record;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){
        return view('search.index');
    }

    public function search(Request $request){
//        $record = [];
        if($request['search'] == 'Search by Book ID'){
            $record = Record::where('book_id', $request['keyword'])->where('return_date', null)->get();
        }
        else{
            $member = Member::firstWhere('ic', $request['keyword']);
            $record = Record::where('member_id', $member->id)->where('return_date', null)->get();

        }

//        dd($record);

        return view('search.detail', ['record' => $record]);
    }
}
