<?php

namespace App\Http\Controllers;

use App\Http\Requests\BootcampFilterRequest;
use App\Models\Bootcamp;
use App\Http\Resources\BootcampResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class BootcampController extends Controller
{
    /**
     * Display a listing of the bootcamps with search, pagination, and price filter.
     */
    public function index(BootcampFilterRequest $request)
    {
        $query = Bootcamp::query();

        // Apply search filter
        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        // Apply price range filter
        if ($request->filled('price_min')) {
            $query->where('price', '>=', $request->price_min);
        }

        if ($request->filled('price_max')) {
            $query->where('price', '<=', $request->price_max);
        }

        // Paginate the results
        $bootcamps = $query->paginate($request->input('per_page', 10));

        // Return the response as a paginated resource collection
        return Response::success(BootcampResource::collection($bootcamps));
    }

    /**
     * Display the specified bootcamp by slug.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\BootcampResource
     */
    public function show($slug)
    {
        // Find the bootcamp by slug
        $bootcamp = Bootcamp::where('slug', $slug)->firstOrFail();

        // Return the bootcamp resource
        return Response::success(new BootcampResource($bootcamp));
    }


    /**
     * Get student bootcamps.
     *
    //  * @return \Illuminate\Http\BootcampResource
     */
    public function get_student_bootcamps(Request $request)
    {
        return Response::success(BootcampResource::collection($request->user()->bootcamps()->get()));
    }


    public function get_bootcamp_license(Request $request , $bootcampId){
        $licesne = $request->user()->getLicenseForBootcamp($bootcampId);

        if($licesne == null){
            return Response::error('you do not register for this bootcamp');
        }

        return Response::success($licesne);
    }
    

}
