<?php

namespace Phuclh\Vnd\Http\Controllers;

use Illuminate\Routing\Controller;
use Laravel\Nova\Http\Requests\NovaRequest;

class LiveUpdateController extends Controller {

    /**
     * @param NovaRequest $request
     */
    public function update(NovaRequest $request)
    {
        $model = $request->model()->find($request->id);

        $model->{$request->attribute} = $request->value;

        $model->save();
    }
}
