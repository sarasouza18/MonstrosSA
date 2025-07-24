<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoorRequest;
use App\Http\Resources\DoorResource;
use App\Services\DoorService;
use Illuminate\Http\JsonResponse;

class DoorController extends Controller
{
    public function __construct(private DoorService $doorService)
    {
    }

    public function index()
    {
        $doors = $this->doorService->getAllDoors();
        return DoorResource::collection($doors);
    }

    public function show(int $id)
    {
        $door = $this->doorService->getDoorById($id);
        return new DoorResource($door);
    }

    public function store(DoorRequest $request): JsonResponse
    {
        $door = $this->doorService->createDoor($request->validated());
        return response()->json(new DoorResource($door), 201);
    }
}