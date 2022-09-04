<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userM;
class userC extends Controller
{
    public function insert(Request $request)
    {
        $data=new userM;
        $data->name=$request->get('name');
        $data->age=$request->get('age');
        $img=$request->file('image')->getClientOriginalName();
        $request->image->move(public_path('image'),$img);
        $data->image=$img;
        $data->save();
        echo '<h1>Sent Successfully</h1>';
    }

    public function show()
    {
        $data=userM::all();
        return view('show',['show'=>$data]);
    }
    public function del($id)
    {
        $data=userM::find($id);
        if($data){
            $data->delete();
        }
        return redirect('show');
    }


    public function edit($id)
    {
        $data=userM::find($id);
        return view('update',['data'=>$data]);
    }

    public function update(Request $request, $id)
    {
        $data=userM::find($id);
        $data->name=$request->get('name');
        $data->age=$request->get('age');
        $data->save();
        return redirect('show');


    }

}
