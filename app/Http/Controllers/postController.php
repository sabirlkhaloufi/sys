<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;


class postController extends Controller

{

    public function vu()
    {
        $post = post::all();
        return view('welcome', compact('post'));
    }
    public function index(): view
    {
        $post = post::all();
        return view('post.index', compact('post'));
    }

    public function create(): view
    {
        return view('post.create');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'titre' => 'required|string|max:255',
            'description' => 'required| string',
            'email' => 'required| string|max:255', // Validation du champ email
            'localisation' => 'required| string',


        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/post_images', $imageName);
            $validatedData['image'] = 'post_images/' . $imageName;
        }

        post::create($validatedData);

        return redirect()->route('post.index')->with('success', 'post added successfully');

    }


    public function show($id)
    {
        $post = post::findOrFail($id);
        return view('post.show', compact('post'));
    }


    public function edit($id)
    {
        $post = post::find($id);
        return view('post.edit', compact('post'));
    }


    public function update(Request $request, $id)
    {

        $post = post::find($id);


        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'titre' => 'required|string|max:255',
            'description' => 'required| string',
            'email' => 'required| string|max:255', // Validation du champ email
            'localisation' => 'required| string',

        ]);


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/post_images', $imageName);
            $validatedData['image'] = 'post_images/' . $imageName;
        }


        $post->update($validatedData);

        return redirect()->route('post.show', $post->id)->with('success', 'post updated successfully');
    }


    public function destroy($id)
    {
        $post = post::findOrFail($id);
        $post->delete();

        return redirect()->route('post.index')->with('success', 'postdeleted successfully');

    }
}





