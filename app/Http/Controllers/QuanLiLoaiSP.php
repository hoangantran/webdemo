<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiSanPham;
use DB;
use Illuminate\Support\Facades\Redirect;

class QuanLiLoaiSP extends Controller
{
    public function getLoai() {
    	$loaisp = LoaiSanPham::all();
    	return view('welcome',['loaisp'=>$loaisp]);
    }

    public function showLoai() {
        $loaisp = LoaiSanPham::all();
        return view('admin.loaisanpham.showLoai',['loaisp'=>$loaisp]);
    }

    public function formInsert() {
    	return view('admin.loaisanpham.insertLoai');
    }

    public function insertLoai(Request $request) {
    	$loai = new LoaiSanPham();
    	$loai->tenloaisp = $request->nameloai;

    	$loai->save();
    	return Redirect::to('admin/loaisanpham/quanliloai');
    }

    public function deleteLoai($id) {
        $loai = LoaiSanPham::find($id);
        $loai->delete();

        return Redirect::to('admin/loaisanpham/quanliloai');
    }

     public function getUpdate($id) {
    	$loai = LoaiSanPham::find($id);
        return view('admin.loaisanpham.updateLoai',['loai'=>$loai]);
    }

    public function postUpdate(Request $request, $id) {
        $loai = LoaiSanPham::find($id);
        $loai->tenloaisp = $request->nameloai;

        $loai->save();
    	return Redirect::to('admin/loaisanpham/quanliloai');
    }
}
