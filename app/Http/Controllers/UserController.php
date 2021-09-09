<?php

namespace App\Http\Controllers;

use App\Models\NewData;
use App\Models\OldData;
use Illuminate\Http\Request;

class UserController extends Controller
{
        public function index()
        {
             $new_data=NewData::all();
             return view('index',get_defined_vars());
        }

    public function edit($id)
    {
     $new_data=NewData::where('id',$id)->first();
     return view('edit',get_defined_vars());


    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'token'=>'required',
         ]);

        if($request->token=='123')
        {
            if(NewData::where(['token'=>$request->token,'id'=>$id])->exists())
            {
                $new_data=NewData::where('id',$id)->first();
                $old_data=new OldData();
                $old_data->new_data_id=$new_data->id;
                $old_data->name=$request->name;
                $old_data->token=$request->token;
                $old_data->save();
                return back()->with('msg','rcord is updated succfully');

            }
        }
        else{
            return back()->with('error','token is not exists');
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
        $bank=NewData::where('id',$id);
        $bank->delete();
        return redirect()->route('index')->with('msg','reocrd is deleted');
    }
}
