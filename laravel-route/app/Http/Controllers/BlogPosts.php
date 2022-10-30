<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPosts extends Controller
{
    private $postsInfo = [
        1 => [
            'title' => 'Intro to Laravel',
            'content' => 'This is a sshort intro to laravel',
            'is_new' => true,
            'has-comments' => true
        ],
        2 => [
            'title' => 'Intro to PHP',
            'content' => 'This is a short intro to PHP',
            'is_new' => false,
            'comments' => false
        ],
        3 => [
            'title' => 'Intro to SQL',
            'content' => 'This is a short intro to SQL',
            'is_new' => TRUE,
            'has-comments' => false
        ]
    ];

    public function index()
    {
        return view('blogPosts.index', ['post'=> $this->postsInfo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd($blog_post);
        return view('blogPosts.show', ['post'=>$this->postsInfo[$id]]);
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
