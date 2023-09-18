<?php

namespace App\Http\Controllers;

use App\Models\Promotor;
use Illuminate\Http\Request;
use App\Http\Resources\PromotorResource;
use App\Http\Requests\StorePromotorRequest;

class PromotorController extends Controller
{

    public function index()
    {
        return PromotorResource::collection(Promotor::all());
    }


    public function store(StorePromotorRequest $request)
    {
        $request->validated($request->all());

        $promotor = Promotor::create([
            'nombre' => $request->nombre,
            'sucursal_id' => $request->sucursal_id
        ]);

        return new PromotorResource($promotor);

    }


    public function show(Promotor $promotor)
    {
        return new PromotorResource($promotor);
    }


    public function update(Request $request, Promotor $promotor)
    {
        $promotor->update($request->all());

        return new PromotorResource($promotor);

    }



    public function destroy(Promotor $promotor)
    {
        $promotor->delete();
        return response(null, 204);
    }
}
