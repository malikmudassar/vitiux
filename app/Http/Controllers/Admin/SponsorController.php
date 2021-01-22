<?php

namespace App\Http\Controllers\Admin;

use App\Sponsers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Sponsers::all();

        return view('admin.sponsors.index', compact('countries'));
    }

    public function create()
    {
        $categories=Sponsers::all();
        return view('admin.sponsors.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $image=$request->file('image');
        $imageName=time().'.'.$image->extension();
        $image->move(public_path('img'), $imageName);
        $data=array(
            'url' => $_REQUEST['url'],
            'name' => $imageName
        );
        $country = Sponsers::create($data);
        return redirect()->route('admin.sponsors.index');
    }

    public function edit($id)
    {   
        $post=Sponsers::find($id);
        $categories=Categories::all();
        return view('admin.sponsors.edit', compact('post', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $country=Sponsers::find($id);
        $country->update($request->all());

        return redirect()->route('admin.sponsors.index');
    }

    public function show(Categories $country)
    {
        return view('admin.sponsors.show', compact('country'));
    }

    public function destroy($id)
    {
        $country=Sponsers::find($id);
        $country->delete();
        return back();
    }

    public function massDestroy(MassDestroyCountryRequest $request)
    {
        Posts::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
