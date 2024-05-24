<?php

namespace App\Http\Controllers\admin\front;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\Front\GalleryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $galleryRepo;
    public function __construct(GalleryRepository $galleryRepository)
    {
        $this->galleryRepo = $galleryRepository;
    }
    public function index()
    {
        //
        $data = $this->galleryRepo->getAllGallery();
        return response()->json($data);
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
        $data = request()->validate([
            'image' => 'required|image'
        ]);
        $uploadedImage = $request->file('image');
        // Get the original file extension
        $extension = $uploadedImage->getClientOriginalExtension();
        // Generate a unique file name with the original extension
        $imageName = 'galleryImage_' . time() . '.' . $extension;
        // Store the uploaded image with the original file extension
        $icon_path = $uploadedImage->storeAs('public/cms/images/gallery', $imageName);
        $data['image'] = $imageName;

        $success = $this->galleryRepo->storeGalleryImage($data);
        if ($success) {
            return response()->json(['message' => 'Image Saved Successfully']);
        }
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $getImage = $this->galleryRepo->getGalleryById($id);
        Storage::delete('public/cms/images/gallery/' . $getImage->image);
        $success = $this->galleryRepo->deleteGalleryImage($id);
        if ($success) {
            return response()->json(['message' => 'Image Deleted Successfully']);
        }
    }
}
