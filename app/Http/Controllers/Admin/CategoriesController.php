<?php

namespace App\Http\Controllers\Admin;
use App\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Categories::all();

        return view('admin.categories.index', compact('countries'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $country = Categories::create($request->all());

        return redirect()->route('admin.categories.index');
    }

    public function edit($id)
    {   
        $country=Categories::find($id);
        return view('admin.categories.edit', compact('country'));
    }

    public function update(Request $request, $id)
    {
        $country=Categories::find($id);
        $country->update($request->all());

        return redirect()->route('admin.categories.index');
    }

    public function show(Categories $country)
    {
        return view('admin.categories.show', compact('country'));
    }

    public function destroy($id)
    {
        $country=Categories::find($id);
        $country->delete();
        return back();
    }

    public function massDestroy(MassDestroyCountryRequest $request)
    {
        Categories::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
