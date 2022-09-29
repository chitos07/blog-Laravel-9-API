<?php

namespace App\Http\Controllers;

use App\Http\Requests\CatgeroyRequest;
use App\interfaces\Crud;
use App\Models\Category;
use App\Services\CategoryServie;
use App\Services\CrudOpreation;
use Illuminate\Database\Eloquent\Collection;

class CategoryController extends Controller
{


    private Crud $crudOpreation;

    /**
     * @param Crud $crudOpreation
     */
    public function __construct()
    {
        $this->crudOpreation = new CategoryServie();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index(): Collection
    {

        return   $this->crudOpreation->index();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CatgeroyRequest $request)
    {


        return   $this->crudOpreation->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Category $category)
    {

        return   $this->crudOpreation->show($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(CatgeroyRequest $request, Category $category)
    {
        return   $this->crudOpreation->update($request,$category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Category $category)
    {
        return   $this->crudOpreation->destroy($category);
    }
}
