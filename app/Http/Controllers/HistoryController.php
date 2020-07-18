<?php

namespace Bulkly\Http\Controllers;

use Bulkly\BufferPosting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = User::find(Auth::id());
        // $profiles = SocialAccounts::where('user_id', Auth::id())->get();
        // return view('pages.social-accounts')->with('profiles', $profiles)->with('user', $user);

        $bufferPosts = BufferPosting::where('user_id', Auth::id())->get();
        // dd($bufferPosts);

        // return $bufferPosts;

        return view('pages.history')->with('bufferPosts', $bufferPosts);
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

    public function showList(){
        $bufferPosts = BufferPosting::get();
        // dd($bufferPosts);accountInfo
        foreach ($bufferPosts as $bufferPost) {
            $bufferPosts->groupInfo = $bufferPost->groupInfo;
            $bufferPosts->accountInfo = $bufferPost->accountInfo;
        }

        return $bufferPosts;
    }
}
