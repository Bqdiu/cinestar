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
}
