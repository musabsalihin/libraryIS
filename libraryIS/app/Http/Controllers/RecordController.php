<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Member;
use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $records = Record::all();

        return view('record.index',['records'=>$records]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $members = Member::all();
        $books = Book::all();
        return view('record.create' , [ 'members' => $members,'books'=>$books]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
          'member_id' => $request['member_id'],
          'book_id' => $request['book_id'],
          'borrow_date' => $request['borrow_date'],
          'return_date' => null,
          'user_id' => $request['user_id'],
        ];

//        dd($data);

        $record = Record::create($data);

        $record->book->update([
            'status' => 'Borrowed'
        ]);

        return redirect(route('record.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Record $record)
    {
        return view('record.show',['record'=>$record]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Record $record)
    {
        return view('record.edit',['record'=>$record]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Record $record)
    {
        $data = [
            'member_id' => $request['member_id'],
            'book_id' => $request['book_id'],
            'borrow_date' => $request['borrow_date'],
        ];

        $record->update($data);

        return redirect(route('record.index'));
    }

    public function return (Request $request, Record $record){

        $data = [
            'return_date' => date('Y/m/d'),
        ];

        $record->update($data);
        $record->book->update(
            [
                'status' => 'Available',
            ]
        );

        return redirect(route('record.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Record $record)
    {
        $record->delete();

        return redirect(route('record.index'));
    }
}
