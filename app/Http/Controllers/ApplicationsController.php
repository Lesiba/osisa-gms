<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Application;

class ApplicationsController extends Controller
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
        
        $this->validate($request,[
            'project_title'=>'required',
            'themic_issue'=>'required',
            'project_focus'=>'required',
            'amount_req'=>'required',
            'country'=>'required',
            'brief'=>'required',
            'alignment'=>'required',
            'org_nam'=>'required',
            'address'=>'required',
            'your_country'=>'required',
            'phone_number'=>'required',
            'title'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'position'=>'required',
            'email'=>'required',
            'officeNumber'=>'required',
            'cellNumber'=>'required'
         ]);

         $proj_title = $request->input('project_title');
         $the_issue = $request->input('themic_issue');
         $proj_focus = $request->input('project_focus');
         $amount_req = $request->input('amount_req');
         $country = $request->input('country');
         $brief = $request->input('brief');
         $alignment = $request->input('alignment');
         $org_name = $request->input('org_nam');
         $address = $request->input('address');
         $your_country = $request->input('your_country');
         $phone_number = $request->input('phone_number');
         $title = $request->input('title');
         $firstname = $request->input('firstname');
         $lastname = $request->input('lastname');
         $position = $request->input('position');
         $email = $request->input('email');
         $officeNumber = $request->input('officeNumber');
         $cellNumber = $request->input('cellNumber');

        //Applicaction object instation.

        $app = new Application();

        $app->project_title = $proj_title;
        $app->thematic_issue = $the_issue;
        $app->project_focus = $proj_focus;
        $app->amount_requested = $amount_req;
        $app->project_country = $country;
        $app->project_align = $alignment;
        $app->project_brief = $brief;
        $app->org_name = $org_name;
        $app->address = $address;
        $app->country = $your_country;
        $app->phone_number = $phone_number;
        $app->title = $title;
        $app->firstname = $firstname;
        $app->lastname = $lastname;
        $app->org = $position;
        $app->email = $email;
        $app->office_number = $officeNumber;
        $app->cell_number = $cellNumber;


        $app->save();

        return redirect('/home')->with('success','Application created.');

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
