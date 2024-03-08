<?php
namespace App\trait;
use App\Models\Image;

trait ImageUpload
{
    public function storeImg(object $obj , $image)
    {
        $imageName = $this->move($image);
        Image::create([
            "path" => $imageName,
            "imageable_id" => $obj->id,
            "imageable_type" => get_class($obj)
        ]);
    }
    public function updateImg(object $obj, $image)
    {
        $imageName = $this->move($image);

        Image::where('imageable_id' , $obj->id )
            ->where('imageable_type', get_class($obj))
            ->update(['path' => $imageName]);

    }
    public function move($image)
    {
        $imageName = time() . "." . $image->extension();
        $image->storeAs('public/', $imageName);
        return $imageName;
    }
}