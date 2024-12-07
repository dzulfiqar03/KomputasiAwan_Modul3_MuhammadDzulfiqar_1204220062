<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Members;
use RealRashid\SweetAlert\Facades\Alert;

class MembRegController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Get File
        $image = $request->file('imgFile');

        if ($image != null) {
            $originalFilename = $image->getClientOriginalName();
            $encryptedFilename = $image->hashName();
            $image->store('public/files');
            // Validate image extension for security (optional)

            $image->move('resources/images/members', $originalFilename);
        }


        $members = new Members;
        $members->fullName = $request->fullName;
        $members->userName = $request->userName;
        $members->email = $request->email;
        $members->password = $request->password;
        $members->confirm_password = $request->rePassword;
        if ($image != null) {
            $members->original_filename = $originalFilename;
            $members->encrypted_filename = $encryptedFilename;
        }

        $members->save();


        Alert::success('Register Successfully', 'Members Data Added Successfully.');

        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
