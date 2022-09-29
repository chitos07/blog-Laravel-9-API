<?php

namespace App\Services;

use App\interfaces\Crud;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;


class CrudOpreation
{

//    /**
//     * @var Crud
//     */
//    private $crudInterface;
//
//    /**
//     * @param Crud $crudInterface
//     */
//    public function __construct(Crud $crudInterface)
//    {
//        $this->setCrudInterface($crudInterface);
//    }
//
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function index(){
//        return $this->getCrudInterface()->index();
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\JsonResponse
//     */
//    public function store(FormRequest $request){
//        $data =  $this->getCrudInterface()->store($request);
//        if(!empty($data)){
//            return response()->json('record inserted');
//        }
//    }
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \App\Models\Category  $category
//     * @return \Illuminate\Http\JsonResponse
//     */
//    public function update(FormRequest $request, Model $model){
//        $data = $this->getCrudInterface()->update($request,$model);
//        if($data){
//            return response()->json('Record Updated');
//        }
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  \App\Models\Category  $category
//     * @return \Illuminate\Http\Response
//     */
//
//    public function show(Model $model){
//        return $this->getCrudInterface()->show($model);
//    }
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  \App\Models\Category  $category
//     * @return \Illuminate\Http\JsonResponse
//     */
//    public function destroy(Model $model){
//        $data =  $this->getCrudInterface()->destroy($model);
//        if($data){
//            return response()->json('',204);
//        }
//    }
//
//
//    /**
//     * @return Crud
//     */
//    public function getCrudInterface(): Crud
//    {
//        return $this->crudInterface;
//    }
//
//    /**
//     * @param Crud $crudInterface
//     */
//    public function setCrudInterface(Crud $crudInterface): void
//    {
//        $this->crudInterface = $crudInterface;
//    }
}
