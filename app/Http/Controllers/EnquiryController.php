<?php

namespace Arvice\Http\Controllers;

use Arvice\Enquiry;
use Illuminate\Http\Request;
use Notification;
use Illuminate\Support\Facades\Mail;
use Arvice\Mail\SendMail;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|min:6',
            'phone' => 'required|min:10',
         ]); 
            

         $post = Enquiry::create([ 
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'profession' => $request->profession,
         ]);
         $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'profession' => $request->profession
         );
         Mail::to('praveen82524@gmail.com')->send(new SendMail($data));
        // $watchers = 'praveen82524@gmail.com';    
        // Notification::route('mail', $watchers)->notify(new \Arvice\Notifications\NewEnquiry($watchers));
        // Notification::send($watchers, new \App\Notifications\NewPostAdded());
         return view('thanks');
    }

    /** 
     * Display the specified resource.
     *
     * @param  \Arvice\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function show(Enquiry $enquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Arvice\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function edit(Enquiry $enquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Arvice\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enquiry $enquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Arvice\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enquiry $enquiry)
    {
        //
    }
}
