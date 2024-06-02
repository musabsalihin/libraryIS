<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $members = Member::all();

        return view('member.index', ['members' => $members]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request['name'],
            'ic' => $request['ic'],
            'address' => $request['address'],
            'contact' => $request['contact'],
        ];

        Member::create($data);

        return  redirect(route('member.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        return view('member.show', ['member'=>$member]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        return view('member.edit', ['member'=>$member]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        $data = [
            'name' => $request['name'],
            'ic' => $request['ic'],
            'address' => $request['address'],
            'contact' => $request['contact'],
        ];

        $member->update($data);

        return  redirect(route('member.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        $member->delete();

        return  redirect(route('member.index'));
    }
}
