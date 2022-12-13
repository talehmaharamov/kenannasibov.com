<?php

use App\Models\SiteLanguage;

if (!function_exists('upload')) {
    function upload($path,$file)
    {
        try {
            $img = $file;
            $extension = $img->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $img->move('images/'.$path, $filename);
            $data['photo'] = 'images/'.$path.'/' . $filename;
            return $data['photo'];
        }
        catch (Exception $e){
            return redirect()->back()->with('messages',__('messages.error'));
        }
    }
}

if (!function_exists('active_langs')) {
    function active_langs()
    {
        return SiteLanguage::where('status',1)->get();
    }
}
