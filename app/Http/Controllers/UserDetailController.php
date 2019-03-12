<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\UserDetail;
use PDF;
use Validator;

class UserDetailController extends Controller
{

    public function getPDF1(Request $request){
      $validator = Validator::make($request->all(), [
         'csign' => 'required|image|mimes:jpeg,png,jpg|max:1024',
      ],
      [
        'csign.required' => 'You have to upload the signature image!',
        'csign.image' => 'The type of the uploaded file should be an image.',
        'csign.mimes' => 'Vaild images extension: .png, .jpg, .jpeg',
        'csign.max' => 'Failed to upload an image. The image maximum size is 1MB.'
      ]
      );
      if ($validator->fails()) {
          return redirect('/')
                      ->withErrors($validator)
                      ->withInput($request->all());
      }

      if ($request->hasFile('csign')) {
        $image = $request->file('csign');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/pdf-uploads');
        $image->move($destinationPath, $name);
      }      

      $pdf = PDF::loadView('pdf.idd',  [
       'cname' => $request->get('cname'),
       'csign' => $name,
       'dissue' => $request->get('dissue'),
      ])
      ->setPaper('a4', 'portrait');

      return $pdf->download('IDD.pdf');
    }
}