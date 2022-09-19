<?php

namespace App\Http\Controllers;

use App\Services\CrudOpreation;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * @var CrudOpreation
     */
    private $CrudOpreation;

    /**
     * @param $CrudOpreation
     */
    public function __construct( CrudOpreation $CrudOpreation)
    {
        $this->CrudOpreation = new CrudOpreation(new PostService());
    }












































    /**
     * @return CrudOpreation
     */
    public function getCrudOpreation(): CrudOpreation
    {
        return $this->CrudOpreation;
    }

    /**
     * @param CrudOpreation $CrudOpreation
     */
    public function setCrudOpreation(CrudOpreation $CrudOpreation): void
    {
        $this->CrudOpreation = $CrudOpreation;
    }





}
