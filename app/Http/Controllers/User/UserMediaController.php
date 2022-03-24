<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMediaController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $medias = $user->media()->orderBy('id', 'desc')->paginate(12);
        // return $medias;
        return view('user.media.index', compact('medias'));
    }

    public function create()
    {
        return 'create';
    }
    public function store(Request $request)
    {
        $user = Auth::user();


        $user->addMedia($request->media)->toMediaCollection('media');

        return redirect()->back();
    }

    /**
     * Get All User Media File
     */
    public function getAllMedia(Request $request)
    {
        $user = Auth::user();
        if ($request->ajax()) {

            // return response()->json(['message' => 'working']);

            $medias = collect($user->getMedia('media'))->reverse();

            $data = view('user.inc.medias', compact('medias'))->render();

            return response()->json($data);
        }
    }

    public function ajaxStore(Request $request)
    {
        // return $request->all();

        if ($request->ajax()) {

            $user = Auth::user();
            $user->addMedia($request->media)->toMediaCollection('media');

            return response()->json(['message' => 'done']);
        }

        // $user = Auth::user();
        // $user->addMedia($request->media)->toMediaCollection('media');

        // return redirect()->back();
    }
}
