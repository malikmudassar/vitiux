<?php

namespace App\Http\Controllers\Admin;

use App\Posts;
use App\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Posts::all();

        return view('admin.posts.index', compact('countries'));
    }

    public function create()
    {
        $categories=Categories::all();
        return view('admin.posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $country = Posts::create($request->all());

        return redirect()->route('admin.posts.index');
    }

    public function edit($id)
    {   
        $post=Posts::find($id);
        $categories=Categories::all();
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $country=Posts::find($id);
        $country->update($request->all());

        return redirect()->route('admin.posts.index');
    }

    public function show(Categories $country)
    {
        return view('admin.posts.show', compact('country'));
    }

    public function destroy($id)
    {
        $country=Posts::find($id);
        $country->delete();
        return back();
    }

    public function massDestroy(MassDestroyCountryRequest $request)
    {
        Posts::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
