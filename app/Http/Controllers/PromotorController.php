<?php

namespace App\Http\Controllers;

use App\Models\Promotor;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use App\Http\Resources\PromotorResource;
use App\Http\Requests\StorePromotorRequest;

class PromotorController extends Controller
{
    use HttpResponses;

    public function index()
    {
        return PromotorResource::collection(Promotor::all());
    }

    public function store(StorePromotorRequest $request)
    {
        $request->validated($request->all());

        $promotore = Promotor::create([
            'nombre' => $request->nombre,
            'sucursal_id' => $request->sucursal_id
        ]);

        return new PromotorResource($promotore);
    }

    public function show(Promotor $promotore)
    {
        return new PromotorResource($promotore);
    }

    public function update(Request $request, Promotor $promotore)
    {
        $promotore->update($request->all());

        return new PromotorResource($promotore);
    }

    public function destroy(Promotor $promotore)
    {
        $promotore->delete();
        return response(null, 204);
    }
}
