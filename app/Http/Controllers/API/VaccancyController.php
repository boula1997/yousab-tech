<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\VaccancyResource;
use App\Models\Vaccancy;
use Exception;
use Illuminate\Http\Request;
use Mockery\Expectation;

class VaccancyController extends Controller
{
    private $vaccancy;

    public function __construct(Vaccancy $vaccancy)
    {
        $this->vaccancy = $vaccancy ;
    }

    public function index() {
        try {

            $data['vaccancies'] = VaccancyResource::collection($this->vaccancy->get());
            return successResponse($data);
        } catch (Exception $e) {
            return failedResponse($e->getMessage());
        }
    }
    public function show($id) {
        try {
            $data['vaccancy'] = new VaccancyResource($this->vaccancy->findorFail($id));
            return successResponse($data);
        } catch (Exception $e) {
            return failedResponse($e->getmessage());
        }
    }
}
