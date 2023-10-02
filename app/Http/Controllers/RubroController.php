<?php

namespace App\Http\Controllers;

use App\Models\Rubro;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use App\Http\Resources\RubroResource;
use App\Http\Requests\StoreRubroRequest;

class RubroController extends Controller
{
    use HttpResponses;

    public function index()
    {
        return RubroResource::collection(Rubro::all());
    }

    public function store(StoreRubroRequest $request)
    {
        $request->validated($request->all());

        $rubro = Rubro::create([
            'nombre' => $request->nombre,
            'notas' => $request->notas
        ]);

        return new RubroResource($rubro);

    }

    public function show(Rubro $rubro)
    {
        return new RubroResource($rubro);
    }

    public function update(Request $request, Rubro $rubro)
    {
        $rubro->update($request->all());

        return new RubroResource($rubro);

    }

    public function destroy(Rubro $rubro)
    {
        $rubro->delete();
        return response(null, 204);
    }
}
