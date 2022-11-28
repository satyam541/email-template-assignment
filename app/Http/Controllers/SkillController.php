<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['skills']      =   Skill::orderBy("percentage","desc")->get();
        $data['url']        =   route("skill.store");
        $data['method']     =   "POST";
        return view("admin.skill.form",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $skillCount     =   count($request->skill);
        for($i=0;$i<$skillCount;$i++)
        {
            if(!empty($request->id[$i]))
            {
                $skill  = Skill::findOrFail($request->id[$i]);
            }
            else
            {
                $skill                    =   Skill::updateOrCreate(["name"=>$request->skill[$i]]);
            }
            $skill->name                =   $request->skill[$i];
            $skill->percentage          =   $request->skill_percent[$i];
            $skill->is_active           =   $request->active_input[$i];
            $skill->save();
        }
        return redirect()->back()->with("success","Skill Submitted");
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
    public function destroy($id, Request $request)
    {
        Skill::find($request->skill)->delete();
        return "done";
    }
}
