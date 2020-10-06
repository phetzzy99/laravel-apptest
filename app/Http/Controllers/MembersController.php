<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Members;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$search = Request::get('search');
        // $members = Members::where('member_no','like','%'.$search.'%')->orderBy('member_no')->paginate(6);
        // return view('members.test', [
        //     'memebers' => $members
        // ]);
    }

    public function search(Request $request) {
        $search = $request->get('search');
        $members = Members::where('member_no','like','%'.$search.'%')
                            ->orWhere('name','like','%'.$search.'%')
                            ->orderBy('member_no')
                            ->paginate(50);
        return view('members.test', [
            'members' => $members
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
