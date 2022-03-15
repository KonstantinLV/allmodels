<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model3d;
use App\Models\ModelPrice;
use App\Models\ModelImage;
use App\Models\License;
use App\Http\Requests\AddModelRequest;
use Illuminate\Support\Facades\Auth;
class ModelController extends Controller
{
    public function index($value='')
    {
        $data['licenses'] =License::all();
        return view('admin', $data);
    }

     public function getAddModel($value='')
    {
        $data['licenses'] =License::all();
        return view('add-model', $data);
    }
    

    public function addModel(AddModelRequest $request)
    {
        $requestData =$request->all();
        $authId =Auth::id();
        $newModelData = [
            'name'=>$requestData['name'],
            'description'=>$requestData['description'],
            'details'=>$requestData['details'],
            'license_id'=>$requestData['license_id'],
            'tags'=>$requestData['tags'],
            'user_id'=> $authId,
        ];
        $newModel =Model3d::create( $newModelData);
        $file =$requestData['model_file'];
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $path="/public/models/".$authId."-".$newModel->id;
        $path =$file->storeAs($path, $fileName);
        $newModel->file_path =$path;
        $newModel->save();
        $modelPriceData =[
            'user_id'=>$authId,
            'model_id'=>$newModel->id,
            'price'=>$requestData['price']
        ];
        ModelPrice::create($modelPriceData);
        foreach ($requestData['images'] as $key=> $image) {
            $modelImageData =null;
            $fileName =$key.time() . '.' . $image->getClientOriginalExtension();
            $imagePath="/public/models/".$authId."-".$newModel->id;
            $imagePath =$image->storeAs($imagePath, $fileName);
            $modelImageData =[
                'user_id'=>$authId,
                'model_id'=>$newModel->id,
                'path'=>$imagePath
            ];
            ModelImage::create($modelImageData);

        }
        return back()->with('success','Модель успешно добавлена ');
    }
}
