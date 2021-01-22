<?php

namespace App\Http\Controllers\Admin;

use App\Offers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Offers::all();
        return view('admin.offers.index', compact('countries'));
    }

    public function create()
    {
        return view('admin.offers.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $country = Offers::create($request->all());
        return redirect()->route('admin.offers.index');
    }

    public function edit($id)
    {   
        $post=Offers::find($id);
        return view('admin.offers.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $country=Offers::find($id);
        $country->update($request->all());

        return redirect()->route('admin.offers.index');
    }

    public function destroy($id)
    {
        $country=Offers::find($id);
        $country->delete();
        return back();
    }

    public function massDestroy(MassDestroyCountryRequest $request)
    {
        Posts::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
