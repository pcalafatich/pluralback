<?php

namespace App\Http\Controllers;

use App\Models\Provincia;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use App\Http\Resources\ProvinciaResource;
use App\Http\Requests\StoreProvinciaRequest;

class ProvinciaController extends Controller
{

    use HttpResponses;

    public function index()
    {
        return ProvinciaResource::collection(Provincia::all());
    }

    public function store(StoreProvinciaRequest $request)
    {
        $request->validated($request->all());

        $provincia = Provincia::create([
            'nombre' => $request->nombre
        ]);

        return new ProvinciaResource($provincia);

    }

    public function show(Provincia $provincia)
    {
        return new ProvinciaResource($provincia);
    }

    public function update(Request $request, Provincia $provincia)
    {
        $provincia->update($request->all());

        return new ProvinciaResource($provincia);

    }

    public function destroy(Provincia $provincia)
    {

        $provincia->delete();
        return response(null, 204);
    }
}
