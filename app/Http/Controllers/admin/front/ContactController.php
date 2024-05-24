<?php

namespace App\Http\Controllers\admin\front;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\Front\ContactRepository;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $contactRepo;
    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepo = $contactRepository;
    }
    public function index()
    {
        //
        $contact = $this->contactRepo->getContact();
        return response()->json($contact);
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
        $contact = $this->contactRepo->getContactById($id);
        return response()->json($contact);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = request()->validate([
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'link' => 'required'
        ]);
        $success = $this->contactRepo->updateContact($data, $id);

        if ($success) {
            return response()->json(['message' => 'Contact Updated Successfully']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
