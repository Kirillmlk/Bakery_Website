<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        $posts = PostResource::collection($posts)->resolve();
        return inertia('Post/Index', compact('posts'));
    }

    public function show(Post $post)
    {
        return inertia('Post/Show', compact('post'));
    }

    public function create()
    {
        return inertia('Post/Create');
    }

//    public function store(StoreRequest $request)
//    {
//        Post::create($request->validated());
//        return redirect()->route('post.index');
//    }
    public function store(StoreRequest $request)
    {
        // Проверяем, есть ли изображение
        if ($request->hasFile('image')) {
            // Сохраняем изображение в директорию 'images' с публичным доступом
            $imagePath = $request->file('image')->store('images', 'public');
        }

        // Создаем пост и добавляем путь к изображению в массив
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imagePath ?? null, // если изображение есть, добавляем путь
        ]);

        return redirect()->route('post.index');
    }

    public function edit(Post $post)
    {
        return inertia('Post/Edit', compact('post'));
    }

    public function update(Post $post, UpdateRequest $request)
    {
        $post->update($request->validated());
        return redirect()->route('post.index');
    }
}
