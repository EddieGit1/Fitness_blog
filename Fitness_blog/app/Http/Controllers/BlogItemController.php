<?php

namespace App\Http\Controllers;

use App\BlogItem;
use Illuminate\Http\Request;

class BlogItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogItems = BlogItem::all();
        return view('home', compact('blogItems'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname'=>'required',
            'blogtitle'=>'required',
            'categories'=>'required',
            'textarea'=>'required',
        ]);

        $blogItem = new Blogitem([
            'firstname' => $request->get('firstname'),
            'blogtitle' => $request->get('blogtitle'),
            'categories' => $request->get('categories'),
            'textarea' => $request->get('textarea')
        ]);
        $blogItem->save();
        return redirect('/home')->with('succes', 'Blog saved!');
        //
//        $blogItem = new BlogItem();
//
//        $blogItem->firstname = request('firstname');
//        $blogItem->blogtitle = request('blogtitle');
//        $blogItem->categories = request('categories');
//        $blogItem->textarea = request('textarea');
//
//        $blogItem->save();
//
//        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        //
//        $blog = \DB::table('blog_items')->where('id', $id)->first();
//
//        return view ('home', [
//            'home' => $blog
//        ]);
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
    public function destroy($id)
    {
        //
    }
}
