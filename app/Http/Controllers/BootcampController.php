<?php

namespace App\Http\Controllers;

use App\Http\Requests\BootcampFilterRequest;
use App\Models\Bootcamp;
use App\Http\Resources\BootcampResource; // Assuming you have a resource to format the response
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
}
