<?php

namespace App\Services;

use App\interfaces\Crud;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

class PostService implements Crud
{
    public function index()
    {
       return Post::all();
    }

    public function store(FormRequest $request)
    {
        return Post::create($request->validated());
    }

    public function show(Model $model)
    {
       return $model;
    }

    public function update(FormRequest $request, Model $model)
    {
       return $model->update($request->validated());
    }

    public function destroy(Model $model)
    {
       return $model->deleteOrFail();
    }

}
