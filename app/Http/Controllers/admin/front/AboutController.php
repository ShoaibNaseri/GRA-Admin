<?php

namespace App\Http\Controllers\admin\front;

use App\Http\Controllers\Controller;
use App\Models\Front\About;
use App\Repositories\Admin\Front\AboutRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $aboutRepo;
    public function __construct(AboutRepository $aboutRepository)
    {
        $this->aboutRepo = $aboutRepository;
    }
    public function index()
    {
        //
        $about = $this->aboutRepo->getAbout();
        $about['imageUrl'] = asset('storage/cms/images/aboutImage/' . $about['image']);
        return response()->json($about);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $about = $this->aboutRepo->getAboutById($id);
        return response()->json($about);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function updateAbout(Request $request, $id)
    {
        $about = $this->aboutRepo->getAboutById($id);
        $data = [
            'title' => $request->title,
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {
            // Delete the old image only if a new image is uploaded
            if ($about->image) {
                Storage::delete('public/cms/images/aboutImage/' . $about->image);
            }

            $uploadedImage = $request->file('image');

            // Get the original file extension
            $extension = $uploadedImage->getClientOriginalExtension();

            // Generate a unique file name with the original extension
            $imageName = 'aboutImage_' . time() . '.' . $extension;

            // Store the uploaded image with the original file extension
            $icon_path = $uploadedImage->storeAs('public/cms/images/aboutImage', $imageName);

            $data['image'] = $imageName;
        }

        // Update the about data with the new image or existing image
        $success = $this->aboutRepo->updateAbout($data);

        if ($success) {
            return response()->json($data);
        }
    }
}
