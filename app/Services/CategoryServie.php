<?php

namespace App\Services;

use App\interfaces\Crud;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

class CategoryServie implements Crud
{
    public function index()
    {
       return Category::all();
    }

    public function store(FormRequest $request)
    {
       return  Category::create($request->validated());

    }

    public function show(Model $model)
    {
       return response()->json(['data' => $model]);
    }

    public function update(FormRequest $request, Model $model)
    {


           return  $model->update($request->validated());


    }

    public function destroy(Model $model)
    {
      return $model->deleteOrFail();


    }


}
