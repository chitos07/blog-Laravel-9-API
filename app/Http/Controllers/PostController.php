<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\interfaces\Crud;
use App\Models\Post;
use App\Services\CrudOpreation;
use App\Services\PostService;


class PostController extends Controller
{
    /**
     * @var Crud
     */
    private  Crud $CrudOpreation;

    /**
     * @param $CrudOpreation
     */
    public function __construct()
    {
        $this->CrudOpreation =  new PostService();
    }


    public function index(){

        return $this->getCrudOpreation()->index();
    }

    public function store(PostRequest $request){
        return $this->getCrudOpreation()->store($request);
    }

    public function show(Post $post){
        return $this->getCrudOpreation()->show($post);
    }

    public function update(PostRequest $request, Post $post){
        return $this->getCrudOpreation()->update($request,$post);
    }

    public function destroy(Post $post){
        return $this->getCrudOpreation()->destroy($post);
    }

    /**
     * @return Crud
     */
    public function getCrudOpreation(): Crud
    {
        return $this->CrudOpreation;
    }










}
