<?php

namespace App\Http\Controllers\admin\front;

use App\Http\Controllers\Controller;
use App\Models\Front\Slider;
use App\Repositories\Admin\Front\SliderRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $sliderRepo;

    public function __construct(SliderRepository $sliderRepository)
    {
        $this->sliderRepo = $sliderRepository;
    }
    public function index()
    {
        //
        $slide = $this->sliderRepo->getAll();
        return response()->json($slide);
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
        $data = $this->sliderRepo->getSlideById($id);
        return response()->json($data);
        // $slide = $this->sliderRepo->getSlideById($id);
        // return response()->json($slide);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = request()->validate([
            'title' => 'required',
            'subTitle' => 'required',
            'image' => 'required',
        ]);
        $success = $this->sliderRepo->updateSlider($data, $id);
        if ($success) {
            return response()->json(['message' => "Success"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $getSlider = $this->sliderRepo->getSlideById($id);
        if ($getSlider->image) {
            Storage::delete('public/cms/images/slider/' . $getSlider->image);
        }
        $success = $this->sliderRepo->deleteSlide($id);
        if ($success) {
            return response()->json(['message' => 'Dleleted']);
        }
    }
    public function storeSlide(Request $request)
    {
        $data = request()->validate([
            'title' => 'required',
            'subTitle' => 'required',
            'image' => 'required|image',
        ]);
        if ($request->hasFile('image')) {
            $uploadedImage = $request->file('image');
            // Get the original file extension
            $extension = $uploadedImage->getClientOriginalExtension();
            // Generate a unique file name with the original extension
            $imageName = 'sliderImage_' . time() . '.' . $extension;
            // Store the uploaded image with the original file extension
            $icon_path = $uploadedImage->storeAs('public/cms/images/slider', $imageName);
            $data['image'] = $imageName;
        }
        $success = $this->sliderRepo->saveSlider($data);
        if ($success) {
            return response()->json(['message' => 'Slider Saved Successfully']);
        }
    }
    public function updateImage(Request $request, $id)
    {
        $data = $request->validate([
            'image' => 'required'
        ]);
        if ($request->hasFile('image')) {
            $getOldImage = $this->sliderRepo->getSlideById($id);
            if ($getOldImage->image) {
                Storage::delete('public/cms/images/slider/' . $getOldImage->image);
                $uploadedImage = $request->file('image');
                // Get the original file extension
                $extension = $uploadedImage->getClientOriginalExtension();
                // Generate a unique file name with the original extension
                $imageName = 'sliderImage_' . time() . '.' . $extension;
                // Store the uploaded image with the original file extension
                $icon_path = $uploadedImage->storeAs('public/cms/images/slider', $imageName);
                $data['image'] = $imageName;
            }
        }
        $success = $this->sliderRepo->updateOnlyImage($data, $id);
        if ($success) {
            return response()->json(['message' => 'Image Updated Successfully']);
        }
    }
}
