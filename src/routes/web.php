<?php

use Yajra\DataTables\DataTables;
use Ajthinking\ModelTables\Http\Controllers\ModelTableController;
use Ajthinking\ModelTables\Model;


foreach(Model::all() as $model) {
    
    Route::get('models/' . $model->slug, function() use($model) {
        return view('modeltables::table')->with([
            'selectedModel' => $model,
            'models' => Model::all()
        ]);
    });

    Route::get('models/' . $model->slug . '/data', function() use($model) {
        return Datatables::of($model->classWithFullNamespace::query())->make(true);
    });    
}