<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Validator;

class PDFController extends Controller
{
    public function generatePDF(Request $request)
    {
        $validationMessages = [
            'images.required' => 'Please select the bill type.',
            'images.*.required' => 'Please upload an image.',
            'images.*.image' => 'Uploaded file must be an image.',
            'images.*.mimes' => 'Allowed image formats: jpeg, png, jpg, gif.',
            'images.*' => 'Maximum image size is 2 MB.',
        ];
    
        $validator = Validator::make($request->all(), [
            'images' => 'required|array',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], $validationMessages);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $imagePaths = [];
    
        foreach ($request->file('images') as $image) {
            $imagePath = $image->store('images', 'public');
            $imagePaths[] = storage_path('app/public/' . $imagePath);
        }
    
        $firstImageName = pathinfo($request->file('images')[0]->getClientOriginalName(), PATHINFO_FILENAME);
        $pdfFilename = $firstImageName . '.pdf';
    
        $pdf = PDF::loadView('pdf', ['imagePaths' => $imagePaths]);
        $pdf->save(public_path('storage/' . $pdfFilename));
    
        foreach ($imagePaths as $imagePath) {
            unlink($imagePath);
        }
    
        return response()->download(public_path('storage/' . $pdfFilename))->deleteFileAfterSend(true);
    }
    

}