<?php


namespace Nexmo\About\repositories;


use Illuminate\Http\Request;
use Nexmo\About\Models\About;
use Nexmo\Common\Session\SessionFlash;

class AboutRepo
{
    public function aboutIndex()
    {
        return About::all();
    }

    public function aboutStore($value)
    {
        $file = $value->file('image');
        if (!empty($file)) {
            $image = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/about/', $image);
        }
        About::create([
            'title' => $value->title,
            'image' => $image,
            'body' => $value->body,
            'job' => $value->job,
            'description' => $value->description,
            'age' => $value->age,
            'birthday' => $value->birthday,
            'degree' => $value->degree,
            'email' => $value->email,
            'city' => $value->city,
            'phone' => $value->phone,
            'website' => $value->website
        ]);
    }

    public function aboutEdit($id)
    {
        return About::findOrFail($id);
    }

    public function aboutUpdate($value)
    {
        $this->repo->aboutStore($value);
        SessionFlash::store();
        return back();
    }


    public function edit($id)
    {
        $about = $this->repo->aboutEdit($id);
        return view('About::about.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $file = $request->file('image');
        $about = About::findOrFail($id);
        if (!empty($file)) {
            if (file_exists('images/about/' . $about->image)) {
                unlink('images/about/' . $about->image);
            }
            $image = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/about/', $image);
        } else {
            $image = $about->image;
        }
        $about->update([
            'title' => $request->title,
            'image' => $image,
            'body' => $request->body,
            'job' => $request->job,
            'description' => $request->description,
            'age' => $request->age,
            'birthday' => $request->birthday,
            'degree' => $request->degree,
            'email' => $request->email,
            'city' => $request->city,
            'phone' => $request->phone,
            'website' => $request->website
        ]);

    }

    public function aboutDelete($id)
    {
        $about = About::findOrFail($id);
        $deleteImage = $about->image;
        if (file_exists('images/about/' . $deleteImage)) {
            unlink('images/about/' . $deleteImage);
        }
        $about->delete();
    }
}
