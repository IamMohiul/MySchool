<?php

/* Handle File Upload */

function handleUpload($fileName, $model=null){
    try{
        if(request()->hasFile($fileName)){
            if($model && \File::exists(public_path($model->{$fileName}))){
                \File::delete(public_path($model->{$fileName}));
            }
    
            $file = request()->file($fileName);
            $fileName = rand().$file->getClientOriginalName();
            $file->move(public_path('/uploads'), $fileName);
    
            $filePath = "/uploads/".$fileName;

            return $filePath;
        }
    }catch(\Exception $e){
        throw $e;
    }
}


/* Delete File */

function deleteFileIfExist($filePath){
    try{
        if(\File::exists(public_path($filePath))){
            \File::delete(public_path($filePath));
        }
    }catch(\Exception $e){
        throw $e;
    }
}