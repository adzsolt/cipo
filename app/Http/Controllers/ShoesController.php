<?php

namespace App\Http\Controllers;

use Illuminate\Session;
use DB;
use App\Shoe;
use Illuminate\Http\Request;

class ShoesController extends Controller
{
    /**
     * @param Shoe $shoe
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Shoe $shoe)
    {
        $shoe->load('user');
        return view('shoes.show', compact('shoe'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $shoes = Shoe::all();
        return view('shoes.index', compact('shoes'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * nextId biggest id in table
     */
    public function add(Request $request)
    {
        $destinationPath = 'images';
        $file = $request->file('filename');
        $this->validate($request, [
            'size' => 'required'
        ]);

        $data = Shoe::create([
            'size' => $request['size'],
            'color' => $request['color'],
            'type' => $request['type'],
            'price' => $request['price'],
            'filename' => ''

        ]);
        $name = '/' . $destinationPath . '/' . $data->id . '.' . $file->getClientOriginalExtension();
        $data->filename = $name;
        $data->save();
        $file->move($destinationPath, $name);
        $request->session()->flash('message', 'A cipő bekerult az aruhazba');
        return back();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Shoe $shoe)
    {
        $shoe->delete();
        return redirect('/index');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function querySize(Request $request)
    {

        if ($request->meret <> 'All') {
            $shoes = Shoe::size($request->meret)->get();
            /*return view('shoes.index', compact('shoes'));*/
            return($shoes);
        } else {
            /*return redirect('/shoes');*/
            return Shoe::all();
        }
    }

    public function edit(Shoe $shoe)
    {
        return view('shoes.edit', compact('shoe'));
    }

    public function update(Request $request, Shoe $shoe)
    {
        $shoe->update($request->all());
        return redirect("/$shoe->id");
    }

    public function adding()
    {
        return view('shoes.add');
    }

}

