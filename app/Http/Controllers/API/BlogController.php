<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\BlogResource;
use App\Models\Blog;
use Exception;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blog;
    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function index()
    {
        try {
            $data['blogs'] = BlogResource::collection($this->blog->get());
            return successResponse($data,trans('general.sent_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['blog'] = new BlogResource($this->blog->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {
            dd($e->getMessage());
            return failedResponse($e->getMessage());
        }
    }
}
