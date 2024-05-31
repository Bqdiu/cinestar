<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Showinfor;
use App\Models\Movie;
use App\Models\Cinema;
use App\Models\CinemaHall;
use App\Models\Booking;
use Illuminate\Http\Request;

class ShowInforController extends Controller
{
    public function ShowInforIndex()
    {
        $show_infor = Showinfor::select('*')->get();
        return view('admin.showinfor.index',compact('show_infor'));
    }

    public function searchShow($searchText)
    {
        $show_infor = Showinfor::select('showinfor.ShowID','ShowDate','StartTime','EndTime','cinema_hall.Name as hall_name','movie.Title', 'cinema.Name as CinemaName')
        ->where('ShowID','like','%'.$searchText .'%')
            ->join('movie', 'movie.MovieID', '=', 'showinfor.MovieID')
            ->join('cinema_hall', 'cinema_hall.CinemaHallID', '=', 'showinfor.CinemaHallID')
            ->join('cinema', 'cinema.CinemaID', '=', 'cinema_hall.CinemaID')
            ->orWhere('cinema.Name','like','%'.$searchText.'%')
            ->orWhere('movie.Title','like','%'.$searchText.'%')
            ->orWhere('cinema_hall.Name','like','%'.$searchText.'%')
            ->get();
        if ($show_infor->isEmpty()) {
            $show_infor = Showinfor::select('showinfor.ShowID','ShowDate','StartTime','EndTime','cinema_hall.Name as hall_name','movie.Title', 'cinema.Name as CinemaName')
                    ->join('movie', 'movie.MovieID', '=', 'showinfor.MovieID')
                    ->join('cinema_hall', 'cinema_hall.CinemaHallID', '=', 'showinfor.CinemaHallID')
                    ->join('cinema', 'cinema.CinemaID', '=', 'cinema_hall.CinemaID')
                    ->get();
            return response()->json($show_infor);
        }
        return response()->json($show_infor);
    }

    public function getShowInfor($ShowID)
    {
        $show_infor = Showinfor::select('showinfor.ShowID','ShowDate','StartTime','EndTime','cinema_hall.CinemaHallID','cinema_hall.Name as hall_name','cinema.CinemaID' ,'cinema.Name as CinemaName','movie.Title', 'movie.MovieID')
            ->where('ShowID','=',$ShowID)
            ->join('movie', 'movie.MovieID', '=', 'showinfor.MovieID')
            ->join('cinema_hall', 'cinema_hall.CinemaHallID', '=', 'showinfor.CinemaHallID')
            ->join('cinema', 'cinema.CinemaID', '=', 'cinema_hall.CinemaID')
            ->first();
        $movies = Movie::all();
        $cinemas = Cinema::all();
        return response()->json([$show_infor, $movies,$cinemas]);
    }

    public function getCinemaHallByCinema($CinemaID)
    {
        $cinema_halls = CinemaHall::where('CinemaID','=',$CinemaID)->get();
        return response()->json($cinema_halls);
    }

    public function editShow(Request $request)
    {
        $request->validate([
            'editShowDate' => 'required',
            'editStartTime' => 'required',
            'editEndTime' => 'required',
        ],
        [
            'editShowDate.required' => 'Hãy nhập ngày chiếu',
            'editEndTime.required' => 'Hãy nhập giờ kết thúc',
            'editStartTime.required' => 'Hãy nhập giờ bắt đầu',
        ]
        );
        try {
            $show_infor = Showinfor::find($request->editShowInforID);
            if (!$show_infor)
                return redirect()->back()->withErorrs('Không tìm thấy suất chiếu muốn sửa');
            $show_infor->ShowDate = $request->editShowDate;
            $show_infor->StartTime = $request->editStartTime;
            $show_infor->EndTime = $request->editEndTime;
            $show_infor->CinemaHallID = $request->edit_cinemahall_id;
            $show_infor->MovieID = $request->edit_movie_id;
            $show_infor->save();
            return redirect()->back()->with('mess', 'Sửa thành công ');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withErrors('Sửa không thành công: ' . $e->getMessage());
        }
    }

    public function getDataOption()
    {
        $cinemas = Cinema::all();
        $movies = Movie::all();
        return response()->json([$cinemas,$movies]);
    }

    public function addShow(Request $request)
    {
        $request->validate([
            'addShowDate' => 'required',
            'addStartTime' => 'required',
            'addEndTime' => 'required',
            'add_cinema_id' => 'required',
            'add_cinemahall_id' => 'required',
            'add_movie_id' => 'required',
        ],
        [
            'addShowDate.required' => 'Hãy nhập ngày chiếu',
            'addEndTime.required' => 'Hãy nhập giờ kết thúc',
            'addStartTime.required' => 'Hãy nhập giờ bắt đầu',
            'add_cinema_id.required' => 'Hãy chọn rạp chiếu phim',
            'add_cinemahall_id.required' => 'Hãy chọn phòng chiếu phim',
            'add_movie_id.required' => 'Hãy chọn phim',
        ]);

        try{
            $show = new Showinfor();
            $show->ShowDate = $request->addShowDate;
            $show->StartTime = $request->addStartTime;
            $show->EndTime = $request->addEndTime;
            $show->CinemaHallID = $request->add_cinemahall_id;
            $show->MovieID = $request->add_movie_id;
            $show->save();
            return redirect()->back()->with('mess','Thêm thành công');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withErrors('Thêm không thành công ');
        }
    }

    public function deleteShow(Request $request)
    {
        $checkBooking = Booking::where('ShowID','=',$request->deleteShowID)->first();
        if($checkBooking != null)
            return redirect()->back()->withErrors('Không thể xóa xuất chiếu này đã có người đặt vé');
        try{
            $show = Showinfor::find($request->deleteShowID);
            if (!$show)
                return redirect()->back()->withErorrs('Không tìm thấy xuất chiếu');
            $show->delete();
            return redirect()->back()->with('mess', 'Xóa thành công');
        } catch (\Exception $e) {
            $mess = "Xóa không thành công " . $e->getMessage();
            return redirect()->back()->withErrors($mess);
        }
    }
}
