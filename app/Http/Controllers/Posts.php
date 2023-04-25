<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Posts extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->name = $request->name;
        $post->pay = $request->pay;
        $post->{'work-time'} = $request->{'work-time'};
        // $post->status = $request->status;
        $post->{'company-name'} = $request->{'company-name'};
        $post->address = $request->address;
        $post->{'work-description'} = $request->{'work-description'};
        $post->{'work-duties'} = $request->{'work-duties'};
        $post->{'work-requirements'} = $request->{'work-requirements'};

        if(!$post->save()) {
            return redirect()->route('employers');
        }
        else {
            return redirect()->route('remoteWork');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
