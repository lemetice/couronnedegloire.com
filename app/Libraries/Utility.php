<?php namespace App\Libraries;


use Session;
use DB;
use Carbon\Carbon;
/**
 * Class to handle some useful utility
 */
 class Utility
 {
 	
 	public static function handleImages($file, $urlRedirection, $objectId, $tableName, $updateMode)
 	{
        if($updateMode == 0){
            
     		$imageName = $urlRedirection.$objectId.'.'.$file->getClientOriginalExtension();
    	    $file->move(base_path().'/public/uploads/'.$urlRedirection, $imageName);
            /*Resize the image
            //list($width, $height) = getimagesize('uploads/'.$urlRedirection.'/'.$imageName);
            //creation
            if($width >= 120 && $height >= 136){
                $image = new ImageResize('uploads/'.$urlRedirection.'/'.$imageName);
                $image->resize(120, 136);
                $image->save('uploads/'.$urlRedirection.'/'.$imageName);*/
                return $imageName;
            /*} else {
                DB::table($tableName)->where('id', $objectId)->delete();
                if (unlink('uploads/'.$urlRedirection.'/'.$imageName)) {
                	return 'failed';
                }*/
            }
        else{
            //Update
            $imageName = $urlRedirection.'-'.$objectId.'.'.$file->getClientOriginalExtension();
    	    $file->move(base_path().'/public/uploads/'.$urlRedirection, $imageName);
            /*Resize the image
            //list($width, $height) = getimagesize('uploads/'.$urlRedirection.'/'.$imageName);
        
             //if($width >= 120 && $height >= 136){
                $image = new ImageResize('uploads/'.$urlRedirection.'/'.$imageName);
                //$image->resize(120, 136);
                $image->save('uploads/'.$urlRedirection.'/'.$imageName);*/
                return $imageName;
            /*} else {
                //unlink('uploads/'.$urlRedirection.'/'.$imageName);
                $objet =DB::table($tableName)->where('id', $objectId)->get();
                
                	return $objet[0]->media_url;
                
            }*/
        }
        
 	}

    
}  
