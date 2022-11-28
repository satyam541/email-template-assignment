<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmailTemplate;
use Illuminate\Support\Facades\Session;

class EmailTemplateController extends Controller
{

    public function index()
    {

        $data['emailTemplates']     =   EmailTemplate::all();

        return view("admin.emailTemplate.index",$data);


    }

    public function create()
    {
        $data['emailTemplate']    =   new EmailTemplate();
        $data['url']        =   route("email.store");
        $data['method']     =   "POST";
        return view("admin.emailTemplate.form", $data);
    }

    public function store(Request $request)
    {
        EmailTemplate::updateOrCreate(["name"=>$request->name],[$request->email,$request->description]);
        Session::flash('success','email template Added');
        return redirect(route("email.index"));
    }


    public function edit($id)
    {
        $data['socialMedia']    =   EmailTemplate::findOrFail($id);
        $data['url']        =   route("email.update", ['email' => $id]);
        $data['method']     =   "PUT";
        return view("admin.emailTemplate.form", $data);
    }

    public function update(Request $request, $id)
    {
        EmailTemplate::findOrFail($id)->update($request->all());
        Session::flash('success','Email Template Updated');
        return redirect(route("email.index"));

    }

}
