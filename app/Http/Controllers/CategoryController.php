<?php

namespace App\Http\Controllers;

use App\Http\Requests\CatgeroyRequest;
use App\Models\Category;
use App\Services\CategoryServie;
use App\Services\CrudOpreation;

class CategoryController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crudOpreation = new CrudOpreation(new CategoryServie());
        return  $crudOpreation->index();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CatgeroyRequest $request)
    {

        $crudOpreation = new CrudOpreation(new CategoryServie());
        return  $crudOpreation->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $crudOpreation = new CrudOpreation(new CategoryServie());
        return  $crudOpreation->show($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CatgeroyRequest $request, Category $category)
    {
        $crudOpreation = new CrudOpreation(new CategoryServie());
        return  $crudOpreation->update($request,$category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $crudOpreation = new CrudOpreation(new CategoryServie());
        return  $crudOpreation->destroy($category);
    }
}
