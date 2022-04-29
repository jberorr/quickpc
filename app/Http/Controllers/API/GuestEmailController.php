<?php

namespace Arvice\Http\Controllers\API;

use Illuminate\Http\Request;
use Arvice\Http\Controllers\Controller;
use Arvice\GuestEmail;

class GuestEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth('api')->id();
        return GuestEmail::latest()->where('user_id',$id)->paginate(10);
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
        $this->validate($request,[
            'email' => 'required|string|max:191'
        ]);

        return GuestEmail::create([
            'email' => $request['email'],
            'name' => $request['name'],
            'relation' => $request['relation'],
            'user_id' =>auth('api')->id(),
        ]);
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
        $user = GuestEmail::findOrFail($id);
        $this->validate($request,[
            'email' => 'required|string|max:191',
        ]);
        $user->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = GuestEmail::findOrFail($id);
        $user->delete();
    }
}
