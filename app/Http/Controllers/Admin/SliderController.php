<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\slider\SliderCreateRequest;
use App\Http\Requests\Admin\slider\SliderUpdateRequest;

class SliderController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $slider = Slider::where('title', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('message', 'LIKE', "%$keyword%")
                ->orWhere('content', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $slider = Slider::latest()->paginate($perPage);
        }

        return view('admin.slider.index', compact('slider'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(SliderCreateRequest $request)
    {
        Slider::create($request->getValidRequest());

        return redirect('admin/slider')->with('flash_message', 'Slider added!');
    }

    public function show($id)
    {
        $data['slider'] = Slider::findOrFail($id);

        return view('admin.slider.show', $data);
    }

    public function edit($id)
    {
        $data['slider'] = Slider::findOrFail($id);

        return view('admin.slider.edit', $data);
    }

    public function update(SliderUpdateRequest $request, $id)
    {
        $slider = Slider::findOrFail($id);
        if($request->hasFile('image')){
            Storage::delete('path to folder'.$slider->image);
        }
        $slider->update($request->getValidRequest());

        return redirect('admin/slider')->with('flash_message', 'Slider updated!');
    }

    public function destroy($id)
    {
        // $data = Slider::find($id);
        // Storage::delete('path to folder'.$data->image);
        Slider::destroy($id);

        return redirect('admin/slider')->with('flash_message', 'Slider deleted!');
    }
}
