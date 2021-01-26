<?php

namespace App\Http\Controllers;

use Dotenv\Result\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\stud;

class stud_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $request= DB::table('stud')->get();
        return view('table' ,compact('request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blank');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // return $request->all();
        $request->validate([
            "name"=>"required",
            "enrollment_no"=>"required",
            "roll_no"=>"required",
            "mobile"=>"required|max:10",
            "email"=>"required",
            "city"=>"required"

            ]);

         $flag=   DB::table('stud')->insert([
                "name"=>$request->name,
                "enrollment_no"=>$request->enrollment_no,
                "roll_no"=>$request->roll_no,
                "mobile"=>$request->mobile,
                "email"=>$request->email,
                "city"=>$request->city

            ]);

            if($flag)
            {
                return redirect()->route('student.index');
            }
            else
            {
                return "fail";
            }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*$request= DB::table('stud')->get();
        return view('table' ,compact('request'));*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student=DB::table('stud')->where('id',$id)->first();
        return view('edit_stud',compact('student'));
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
        $flag=   DB::table('stud')->
        where('id',$id)->
        update([
            "name"=>$request->name,
            "enrollment_no"=>$request->enrollment_no,
            "roll_no"=>$request->roll_no,
            "mobile"=>$request->mobile,
            "email"=>$request->email,
            "city"=>$request->city

        ]);

        if($flag)
        {
            return redirect()->route('student.index');
        }
        else
        {
            return redirect()->back();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flag=DB::table('stud')->where('id',$id)->delete();
        if($flag)
        {
            return redirect()->route('student.index');
        }
        else
        {
            return redirect()->back();
        }

    }
}
