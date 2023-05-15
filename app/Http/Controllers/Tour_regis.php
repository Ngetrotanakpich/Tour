<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\User;
class Tour_regis extends Controller
{
    public function insert(Request $r){
        $tour= new Tour();
        $tour->First_name = $r->F_name;
        $tour->Last_name = $r->L_name;
        $tour->email = $r->email;
        $tour->Phone_number = $r->Phone;
        $tour->People = $r->num_ppl;
        $tour->Event = 'None';
        $tour->Contact = 'Phone';
        $tour->Time = $r->flexRadioDefault;
        $tour->Info = $r->Info;
        $tour->Info_2 = $r->Info_2;
        $tour->save();
      
        return redirect()->route('view');
    }
    public function delete($id)
    {
        Tour::where('id', $id)->delete();
        return redirect()->route('view');
    }
    public function view()
    {
        $query = Tour::all();
        return view('result', ['tour' => $query]);
    }
    public function edit($id)
    {
        $tour = Tour::where('id', $id)->get();
        return view('form', ['tour' => $tour]);
    }
    public function edit_value(Request $r)
    {
        $tour = Tour::find($r->id);
        $tour->First_name = $r->F_name;
        $tour->Last_name = $r->L_name;
        $tour->email = $r->email;
        $tour->Phone_number = $r->Phone;
        $tour->People = $r->num_ppl;
        $tour->Event = 'None';
        $tour->Contact = 'Phone';
        $tour->Time = $r->flexRadioDefault;
        $tour->Info = $r->Info;
        $tour->Info_2 = $r->Info_2;
        $tour->update();
        return redirect()->route('view');
    }
    //
}
