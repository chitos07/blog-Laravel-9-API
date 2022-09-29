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

           $data =   $model->update($request->validated());
           if($data){
            return response()->json('Record Updated');
         }


    }

    public function destroy(Model $model)
    {
      if($model->deleteOrFail()){

            return response()->json('',204);

      };


    }


}
