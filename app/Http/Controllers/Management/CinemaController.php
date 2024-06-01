<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cinema;
use App\Models\City;
use Illuminate\Support\Facades\Auth;

class CinemaController extends Controller
{
    public function CinemaIndex()
    {
        $cinemas = Cinema::select('*')->leftJoin('city', 'cinema.CityID', '=', 'city.CityID')->paginate(3);
        return view('admin.cinema.index', compact('cinemas'));
    }

    public function getDataOption()
    {
        $citys = City::all();
        return response()->json($citys);
    }

    public function addCinema(Request $request)
    {
        $request->validate([
            'add_name' => 'required',
            'add_address' => 'required',
            'add_toltalcinemahalls' => 'required',
            'add_thumbnail' => 'mimes:jpeg,jpg,png|required|max:10000',
        ], [
            'add_name.required' => 'Chưa nhập tên rạp',
            'add_address.required' => 'Chưa nhập địa chỉ',
            'add_toltalcinemahalls.required' => 'Chưa nhập đạo diễn phim',
            'add_thumbnail.mimes' => 'Hãy chọn file ảnh đúng định dạng jpeg,jpg,png',
            'add_thumbnail.required' => 'Hãy chọn file ảnh',
            'add_thumbnail.max' => 'File ảnh quá lớn',
        ]);
        $originalFileName = $request->file('add_thumbnail')->getClientOriginalName();
        $user_id = Auth::id();
        $img = 'image' . $user_id . '-' . time() . '-' . $originalFileName;
        $request->file('add_thumbnail')->move(public_path('/imgCinema'), $img);
        try {
            $cinema = new Cinema();
            $cinema->CinemaID = $request->addCinemaID;
            $cinema->Name = $request->add_name;
            $cinema->Thumbnail = $img;
            $cinema->Address = $request->add_address;
            $cinema->TotalCinemaHalls = $request->add_toltalcinemahalls;
            $cinema->CityID = $request->add_city_id;
            $cinema->save();
            return redirect()->back()->with('mess', 'Thêm thành công');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withErrors('Thêm không thành công: ' . $e->getMessage());
        }
    }
    public function deleteCinema(Request $request)
    {
        try {
            $cinema = Cinema::find($request->deleteCinemaID);
            if (!$cinema)
                return redirect()->back()->withErorrs('Không tìm thấy rạp muốn xóa');
            //delete old image
            $oldImagePath = public_path('/imgCinema/' . $cinema->Thumbnail);
            if (file_exists($oldImagePath))
                unlink($oldImagePath);
            $cinema->delete();
            return redirect()->back()->with('mess', 'Xóa thành công');
        } catch (\Exception $e) {
            $mess = "Xóa không thành công " . $e->getMessage();
            return redirect()->back()->withErrors($mess);
        }
    }

    public function getCinema($CinemaID)
    {
        $cinemas = Cinema::select('*')->leftJoin('city', 'city.CityID', '=', 'cinema.CityID')
            ->where('cinema.CinemaID', '=', $CinemaID)->first();
        $citys = City::all();
        return response()->json([$cinemas, $citys]);
    }
    public function editCinema(Request $request)
    {
        $request->validate([
            'CinemaName' => 'required',
            'address' => 'required',
            'toltalcinemahalls' => 'required',
            'thumbnail' => 'mimes:jpeg,jpg,png|required|max:10000',
        ], [
            'CinemaName.required' => 'Chưa nhập tên rạp',
            'address.required' => 'Chưa nhập địa chỉ',
            'toltalcinemahalls.required' => 'Chưa nhập đạo diễn phim',
            'thumbnail.mimes' => 'Hãy chọn file ảnh đúng định dạng jpeg,jpg,png',
            'thumbnail.required' => 'Hãy chọn file ảnh',
            'thumbnail.max' => 'File ảnh quá lớn',
        ]);

        $cinemaDeleteThumbnail = Cinema::find($request->CinemaID);
        $oldImagePath = public_path('/imgCinema/' . $cinemaDeleteThumbnail->Thumbnail);
        if (file_exists($oldImagePath))
            unlink($oldImagePath);

        $originalFileName = $request->file('thumbnail')->getClientOriginalName();
        $user_id = Auth::id();
        $img = 'image' . $user_id . '-' . time() . '-' . $originalFileName;
        $request->file('thumbnail')->move(public_path('/imgCinema'), $img);
        try {
            $cinema = Cinema::find($request->CinemaID);
            $cinema->Name = $request->CinemaName;
            $cinema->Thumbnail = $img;
            $cinema->Address = $request->address;
            $cinema->TotalCinemaHalls = $request->toltalcinemahalls;
            $cinema->CityID = $request->city_id;
            $cinema->save();
            return redirect()->back()->with('mess', 'Sửa thành công ');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withErrors('Sửa không thành công: ' . $e->getMessage());
        }
    }

    public function searchCinema($searchText)
    {
        $cinema = Cinema::where('CinemaID','like','%'.$searchText .'%')
            ->join('city', 'cinema.CityID', '=', 'city.CityID')
            ->orWhere('Name','like','%'.$searchText.'%')
            ->orWhere('Address','like', '%' . $searchText . '%')
            ->get();
        if ($cinema->isEmpty()) {
            $cinema = Cinema::select('*')->join('city', 'cinema.CityID', '=', 'city.CityID')->get();
            return response()->json($cinema);
        }
        return response()->json($cinema);
    }
}
