<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Property;
use App\Architecture;
use App\ExteriorFeature;

class PropertiesController extends Controller
{
    /**
     * Display all properties
     *
     * @return Response
     */
    public function index()
    {
        return 'Here are the properties';
    }

    /**
     * Show the form for creating a new property
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $property = Property::findOrFail($id);

        return view('properties.show', compact('property'));
    }

    /**
     * Show the form for editing the property
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function search()
    {
        $architectures = Architecture::all()->sortBy('name');
        $exteriorFeatures = ExteriorFeature::all()->sortBy('name');
        return view('properties.search', compact('architectures', 'exteriorFeatures'));
    }

    public function searchResults(Request $request)
    {
        $result = null;

        // OR search
        if ($request->architectures) {
            $result = Property::whereHas('architectures', function ($query) use($request) {
                $query->whereIn('id', array_keys($request->architectures));
            });
        }

        // AND search (from http://laravel.io/forum/04-07-2014-search-post-by-many-tags)
        if ($request->exteriorFeatures) {
            if (!$result) {
                $result = Property::where('id', '>', 1);
            }

            $result = $result->whereHas('exteriorFeatures', function($query) use($request) {
                $query->whereIn('id', array_keys($request->exteriorFeatures));
            }, count(array_keys($request->exteriorFeatures)));
        }

        if ($result) {
            $properties = $result->get();
        }

        return view('properties.searchResults', compact('properties'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
