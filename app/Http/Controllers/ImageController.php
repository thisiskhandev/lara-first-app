<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ImageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('pages.image-all');
    }

    public function imageUpload(Request $request)
    {
        // return $request;

        $request->validate([
            'image.*' => 'required|image|mimes:png,jpg,svg,webp,gif,|max:5120',
        ]);

        if (empty($request->image)) {
            return redirect()->back()->withError('You have an error!');
        }

        // Taking image[] from name
        foreach ($request->image as $values) {
            $imageName = time() . '_' . $values->getClientOriginalName();
            // return $imageName;
            $values->move(public_path('uploads'), $imageName);
            $imageNames[] = $imageName;
        }
        return redirect()->back()->withSuccess('You have successfully upload image.')->with('image', $imageName);
    }
}
