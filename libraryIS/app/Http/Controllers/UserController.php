<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!\Illuminate\Support\Facades\Gate::allows('isSupervisor', Auth::user())){
            abort(403);
        }

        $users = User::all();

        return view('user.index', ['users' => $users]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(!\Illuminate\Support\Facades\Gate::allows('isSupervisor', Auth::user())){
            abort(403);
        }

        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(!\Illuminate\Support\Facades\Gate::allows('isSupervisor', Auth::user())){
            abort(403);
        }

        $data = [
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt('Uni10fy'),
            'role' => $request['role'],
        ];

        User::create($data);

        return redirect(route('user.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        if(!\Illuminate\Support\Facades\Gate::allows('isSupervisor', Auth::user())){
            abort(403);
        }

        return view('user.show', ['user' => $user ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        if(!\Illuminate\Support\Facades\Gate::allows('isSupervisor', Auth::user())){
            abort(403);
        }

        return view('user.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        if(!\Illuminate\Support\Facades\Gate::allows('isSupervisor', Auth::user())){
            abort(403);
        }

        $data = [
            'name' => $request['name'],
            'email' => $request['email'],
        ];

        $user->update($data);

        return redirect(route('user.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if(!\Illuminate\Support\Facades\Gate::allows('isSupervisor', Auth::user())){
            abort(403);
        }

        $user->delete();

        return redirect(route('user.index'));
    }

    public function password(Request $request,User $user){

        $user->update(['password' => bcrypt($request['password'])]);

        return redirect(route('profile.show'));

    }
}
