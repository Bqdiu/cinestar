<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\StatusMovie;
use App\Models\Regulation;
use Auth;
class MovieController extends Controller
{
    public function MovieIndex()
    {
        $movie = Movie::all();
        return view('admin.movie.index',compact('movie'));
    }

    public function getMovie($MovieID)
    {
        $movie = Movie::select('*')->leftJoin('status_movie','status_movie.IDStatus','=','movie.IDStatus')
                                    ->leftJoin('age_regulation','age_regulation.RegulationID','=','movie.RegulationID')
                                    ->where('movie.MovieID','=',$MovieID)->first();
        $movie_status = StatusMovie::all();
        $age_regulation = Regulation::all();
        return response()->json([$movie, $age_regulation, $movie_status]);
    }

    public function editMovie(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'descripton' => 'required',
            'duration' => 'required',
            'director' => 'required',
            'actor' => 'required',
            'thumbnail' => 'mimes:jpeg,jpg,png|required|max:10000',
        ],[
            'title.required' => 'Hãy nhập tên phim',
            'descripton.required' => 'Hãy nhập mô tả phim',
            'duration.required' => 'Hãy nhập thời lượng phim',
            'director.required' => 'Hãy nhập đạo diễn phim',
            'actor.required' => 'Hãy nhập diễn viên phim',
            'thumbnail.mimes' => 'Hãy chọn file ảnh đúng định dạng jpeg,jpg,png',
            'thumbnail.required' => 'Hãy chọn file ảnh',
            'thumbnail.max' => 'File ảnh quá lớn',
        ]);
        $originalFileName = $request->file('thumbnail')->getClientOriginalName();
        $user_id = Auth::id();
        $img = 'image'.$user_id.'-'.time().'-'.$originalFileName;
        $request->file('thumbnail')->move(public_path('/imgMovie'),$img);
        try{
            $movie = Movie::find($request->editMovieID);
            $movie->Title = $request->title;
            $movie->Description = $request->descripton;
            $movie->Duration = $request->duration;
            $movie->Language = $request->language;
            $movie->ReleaseDate = $request->release_date;
            $movie->Country = $request->country;
            $movie->Genre = $request->genre;
            $movie->trailer_url = $request->trailer_url;
            $movie->Director = $request->director;
            $movie->Actor = $request->actor;
            $movie->IDStatus = $request->movie_status_id;
            $movie->RegulationID = $request->regulation_id;
            $movie->Thumbnail = $img;
            $movie->save();
            return redirect()->back()->with('mess','Sửa thành công ');
        }catch(\Illuminate\Database\QueryException $e)
        {
            return redirect()->back()->withErrors('Sửa không thành công: '.$e->getMessage());
        }
    }

    public function deleteMovie(Request $request)
    {
        try{
            $movie = Movie::find($request->deleteMovieID);
            if(!$movie)
                return redirect()->back()->withErorrs('Không tìm thấy phim muốn xóa');
            $movie->delete();
            return redirect()->back()->with('mess','Xóa thành công');    
        }catch(\Exception $e)
        {
            $mess = "Xóa không thành công ".$e->getMessage();
            return redirect()->back()->withErrors($mess);
        }
    }

    public function searchMovie($term)
    {
        $movie = Movie::where('MovieID','like','%'.$term.'%')
                ->orWhere('Title','like','%'.$term.'%')
                ->orWhere('Thumbnail','like','%'.$term.'%')
                ->orWhere('Description','like','%'.$term.'%')
                ->orWhere('Duration','like','%'.$term.'%')
                ->orWhere('Language','like','%'.$term.'%')
                ->orWhere('ReleaseDate','like','%'.$term.'%')
                ->orWhere('Country','like','%'.$term.'%')
                ->orWhere('Genre','like','%'.$term.'%')
                ->orWhere('trailer_url','like','%'.$term.'%')
                ->orWhere('Director','like','%'.$term.'%')
                ->orWhere('Actor','like','%'.$term.'%')
                ->get();
        if($movie->isEmpty())
        {
            $movie = Movie::all();
            return response()->json($movie);
        }
        return response()->json($movie);
    }
}
