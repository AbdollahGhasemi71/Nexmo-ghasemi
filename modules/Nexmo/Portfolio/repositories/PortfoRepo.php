<?php


namespace Nexmo\Portfolio\repositories;


use Nexmo\Portfolio\Models\Portfolio;

class PortfoRepo
{
    public function portfoIndex()
    {
        return Portfolio::all();
    }

    public function portfoStore($value)
    {
        $file = $value->file('image');
        if (!empty($file)) {
            $image = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/portfo/', $image);
        }
        Portfolio::create([
            'title' => $value->title,
            'body' => $value->body,
            'link' => $value->link,
            'image' => $image
        ]);
    }

    public function portfoEdit($id)
    {
        return Portfolio::findOrFail($id);
    }

    public function portfoUpdate($value, $id)
    {
        $file = $value->file('image');
        $portfo = Portfolio::findOrFail($id);
        if (!empty($file)) {
            if (file_exists('images/portfo/' . $portfo->image)) {
                unlink('images/portfo/' . $portfo->image);
            }
            $image = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/portfo', $image);
        } else {
            $image = $portfo->image;
        }
        $portfo->update([
            'image' => $image,
            'title' => $value->title,
            'body' => $value->body,
            'link' => $value->link
        ]);
    }

    public function portfoDelete($id)
    {
        $portfo = Portfolio::findOrFail($id);
        $deleteImage = $portfo->image;
        if (file_exists('images/portfo/' . $deleteImage)) {
            unlink('images/portfo/' . $deleteImage);
        }
        $portfo->delete();
    }

}
