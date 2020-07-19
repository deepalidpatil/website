<?php

namespace App\Http\Controllers;

use App\Model\UserForm;
use Illuminate\Http\Request;
use App\Mail\UserMail;

class UserFormController extends Controller
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
        $info = $this->validate($request, [
            'name'      =>  'required',
            'email'     =>  'required|email',
            'phone'     =>  'required|numeric',
            'message'   =>  'required'
           ]);
      
        $data = array(
            'name'      =>  $request->name,
            'email'      =>  $request->email,
            'phone'      =>  $request->phone,
            'message'   =>   $request->message
        );
        try{
            \DB::transaction(function () use($info,$data) {
                UserForm::create( $info );
                \Mail::to('deepalikolhe4@gmail.com')
                ->cc('dipali.kolhe51@gmail.com')
                ->send(new UserMail($data));
            });
        }
        catch( \Exception $e ){
            \Log::info('UserFormController store() : ' . $e );
        }
        
        return back()->with('success', 'Thanks for contacting us!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\UserForm  $userForm
     * @return \Illuminate\Http\Response
     */
    public function show(UserForm $userForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\UserForm  $userForm
     * @return \Illuminate\Http\Response
     */
    public function edit(UserForm $userForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\UserForm  $userForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserForm $userForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\UserForm  $userForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserForm $userForm)
    {
        //
    }
}
