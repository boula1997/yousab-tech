<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\ComplainRequest;
use App\Http\Resources\ComplainResource;
use App\Models\Complain;
use Exception;
use Illuminate\Http\Request;

class ComplainController extends Controller
{
    private $complain ;

    public function __construct(Complain $complain)
    {
        $this->complain = $complain ;
    }

    public function index() {
        try {
           $data['complains'] = ComplainResource::collection($this->complain->get());
           return successResponse($data);
        } catch(Exception $e) {
            return failedResponse($e->getMessage());
        }
    }

    public function show($id) {
        try{
            $data['complain'] = new ComplainResource($this->complain->findorfail($id));
            return successResponse($data);
        } catch(Exception $e) {
            return failedResponse(($e->getmessage()));
        }
    }
}
