<?php

namespace App\interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;


interface Crud
{
    public function index();
    public function store(FormRequest $request);
    public function show( Model $model);
    public function update(FormRequest $request, Model $model);
    public function destroy(Model $model);
}
