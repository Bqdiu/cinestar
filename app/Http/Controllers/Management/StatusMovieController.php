<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StatusMovie;
class StatusMovieController extends Controller
{
    public function StatusMovieIndex()
    {
        $movie_status = StatusMovie::all();
        return view('admin.moviestatus.index',compact('movie_status'));
    }

    public function deleteMovieStatus(Request $request)
    {
        try{
            $movie_status = StatusMovie::find($request->deleteStatusID);
            if(!$movie_status)
                throw new \Exception('Không tìm thấy trạng thái phim '.$request->deleteStatusID);
            $movie_status->delete();
            return redirect()->back()->with('mess','Xóa thành công');
        }catch(\Exception $e)
        {
            $message = "Xóa không thành công: " . $e->getMessage();
            return redirect()->back()->with('mess',$message);
        }
    }

    //get data for ajax request
    public function getMovieStatus($IDStatus)
    {
        $movie_status = StatusMovie::find($IDStatus);
        if($movie_status)
            return response()->json($movie_status);
        return response()->json('Cannt find movie status have value is '.$movie_status);
    }

    public function editMovieStatus(Request $request)
    {
        $request->validate([
            'status_name' => 'required',
        ],[
            'status_name.required' => 'Hãy nhập trạng thái phim',
        ]);
        try{
            $movie_status = StatusMovie::find($request->editStatusID);
            $movie_status->StatusName = $request->status_name;
            $movie_status->save();
            return redirect()->back()->with('mess','Sửa thành công');
        }catch(\Illuminate\Database\QueryException $e)
        {
            return redirect()->back()->withErrors('Sửa không thành công: '.$e->getMessage());
        }
    }
    public function searchMovieStatus($term)
    {
        $movie_status = StatusMovie::where('IDStatus', 'like', '%' . $term . '%')->orWhere('StatusName', 'like', '%' . $term . '%')->get();
        if ($movie_status->isEmpty()) {
            $movie_status = StatusMovie::all();
            return response()->json($movie_status);
        }
        return response()->json($movie_status);
    }

}
