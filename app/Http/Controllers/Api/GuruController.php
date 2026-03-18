<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Http\Requests\Guru\GuruStoreRequest;
use App\Http\Requests\Guru\GuruUpdateRequest;
use App\Http\Resources\GuruCollection;
use App\Http\Resources\GuruResource;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guru = Guru::with('user')->paginate(10);
        return new GuruCollection($guru);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GuruStoreRequest $request)
    {
        $guru = Guru::create($request->validated());
        return (new GuruResource($guru->load('user')))->response()->setStatusCode(201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Guru $guru)
    {
        return new GuruResource($guru->load('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GuruUpdateRequest $request, Guru $guru)
    {
        $guru->update($request->validated());
        return (new GuruResource($guru->load('user')))->additional([
            'meta' => [
                'message' => 'Data guru berhasil diperbarui!',
                'status' => 'success'
            ]
        ])->response()->setStatusCode(200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guru $guru)
    {
        $guru->delete();
        return response()->json(['message' => 'Data guru berhasil dihapus'], 200);
    }
}
