<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Video;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\video\VideoCreateRequest;
use App\Http\Requests\Admin\video\VideoUpdateRequest;
use Storage;

class VideoController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $video = Video::where('title', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('keterangan', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $video = Video::latest()->paginate($perPage);
        }

        return view('admin.video.index', compact('video'));
    }

    public function create()
    {
        return view('admin.video.create');
    }

    public function store(VideoCreateRequest $request)
    {
        Video::create($request->getValidRequest());

        return redirect('admin/video')->with('flash_message', 'Video added!');
    }

    public function show($id)
    {
        $data['video'] = Video::findOrFail($id);

        return view('admin.video.show', $data);
    }

    public function edit($id)
    {
        $data['video'] = Video::findOrFail($id);

        return view('admin.video.edit', $data);
    }

    public function update(VideoUpdateRequest $request, $id)
    {
        $video = Video::findOrFail($id);
        if($request->hasFile('image')){
            Storage::delete('/public/upload/video/'.$video->image);
        }
        $video->update($request->getValidRequest());

        return redirect('admin/video')->with('flash_message', 'Video updated!');
    }

    public function destroy($id)
    {
        $data = Video::find($id);
        Storage::delete('/public/upload/video/'.$data->image);
        Video::destroy($id);

        return redirect('admin/video')->with('flash_message', 'Video deleted!');
    }
}
