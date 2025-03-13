<?php

namespace App\Http\Controllers;

use App\Constants\ResponseMessages;
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
            $search = $request->search;
            $query->where('title', 'like', '%' . $search . '%')->orWhereHas('tags', function($query) use ($search) {
                $query->where('name' , 'like','%'. $search . '%');
            });;
        }

        // Apply price range filter
        if ($request->filled('price_min')) {
            $query->where('price', '>=', $request->price_min);
        }

        if ($request->filled('price_max')) {
            $query->where('price', '<=', $request->price_max);
        }

        if($request->filled('tag')){
            $tagName = $request->tag;
            $query->whereHas('tags', function($query) use ($tagName) {
                $query->where('name', $tagName);
            });
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
        $slugs = explode(",", $slug);
        if(count($slugs) > 1){
            $bootcamps = [];
            foreach($slugs as $s){
                $bootcamp = Bootcamp::where('slug', $s)->firstOrFail();
                array_push($bootcamps , $bootcamp);
            }

            return Response::success(BootcampResource::collection($bootcamps));
        }
        $bootcamp = Bootcamp::where('slug', $slug)->firstOrFail();

        // Return the bootcamp resource
        return Response::success(new BootcampResource($bootcamp,["hasSeasons" => true]));
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
            return Response::notfound(ResponseMessages::REGISTER_BOOTCAMP_NOT_FOUND);
        }

        return Response::success($licesne);
    }
    

}
