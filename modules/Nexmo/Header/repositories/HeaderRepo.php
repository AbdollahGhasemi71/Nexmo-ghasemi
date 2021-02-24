<?php


namespace Nexmo\Header\repositories;


use Nexmo\Header\Models\Header;

class HeaderRepo
{

    public function headerIndex()
    {
        return Header::all();

    }

    public function headerStore($value)
    {
        $file = $value->file('image');
        if (!empty($file)) {
            $image = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/header/', $image);
        }

        Header::create([
            'title' => $value->title,
            'image' => $image,
            'instagram' => $value->instagram,
            'linkedin' => $value->linkedin,
            'telegram' => $value->telegram,
        ]);
    }

    public function headerEdit($id)
    {
        return Header::findOrFail($id);
    }

    public function headerUpdate($value, $id)
    {
        $file = $value->file('image');
        $header = Header::findOrFail($id);
        if (!empty($file)) {
            if (file_exists('images/header/' . $header->image)) {
                unlink('images/header/' . $header->image);
            }
            $image = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/header', $image);
        } else {
            $image = $header->image;
        }
        $header->update([
            'image' => $image,
            'title' => $value->title,
            'linkedin' => $value->linkedin,
            'instagram' => $value->instagram,
            'telegram' => $value->telegram
        ]);
    }

    public function headerDelete($id)
    {
        $header = Header::findOrFail($id);
        $deleteImage = $header->image;
        if (file_exists('images/header/' . $deleteImage)) {
            unlink('images/header/' . $deleteImage);
        }
        $header->delete();
    }
}
