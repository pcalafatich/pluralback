<?php

namespace App\Http\Controllers;

use App\Models\Imagen;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use App\Http\Resources\ImagenResource;
use App\Http\Requests\StoreImagenRequest;

class ImagenController extends Controller
{
    use HttpResponses;

    public function index()
    {
        return ImagenResource::collection(Imagen::all());
    }

    public function store(StoreImagenRequest $request)
    {
        $request->validated($request->all());

        $imagene= Imagen::create([
            'nombre' => $request->file('nombre')->store('public/logos'),
            'info' => $request->info,
            'comercio_id' => $request->comercio_id
        ]);

        return new ImagenResource($imagene);
    }

    public function show(Imagen $imagene)
    {
        return new ImagenResource($imagene);
    }

    public function update(Request $request, Imagen $imagene)
    {
        $imagene->update($request->all());

        return new ImagenResource($imagene);
    }

    public function destroy(Imagen $imagene)
    {
        $imagene->delete();
        return response(null, 204);
    }

    public function getImagenesAdicionales(Request $request)
    {
        return ImagenResource::collection(Imagen::where('id', $request->id));
    }



}
