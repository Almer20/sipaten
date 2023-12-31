<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $searchBy = $request->input('search_by');

        $users = User::query();

        if ($search && $searchBy === 'id') {
            $users->where('id', $search);
        } elseif ($search && $searchBy === 'name') {
            $users->where('name', 'like', "%$search%");
        } elseif ($search && $searchBy === 'email') {
            $users->where('email', 'like', "%$search%");
        } elseif ($search && $searchBy === 'level') {
            $users->where('level', $search);
        }

        $user = User::paginate();


        $loggedInUser = Auth::user(); // Mendapatkan informasi user yang sedang login

        return view('users.index', compact('loggedInUser', 'user'));
        // return view('users.index', [
        //     'user' => $user
        // ]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    // public function export()
    // {
    //     return Excel::download(new UsersExport, 'users.xlsx');
    // }

    /**
     * @return \Illuminate\Support\Collection
     */
    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request, User $user)
    {
        // $data = $request->all();

        // User::create($data);

        // return redirect()->route('users.index');
        $data = $request->all();

        // Hashing kata sandi sebelum menyimpan
        $data['password'] = Hash::make($data['password']);

        User::create($data);

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit', [
            'item' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        $data = $request->all();
        $user->update($data);

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index');
    }

    public function show()
    {
        $user = Auth::user();
        return view('profile.show', compact('user'));
    }
}
