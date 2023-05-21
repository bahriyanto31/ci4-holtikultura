<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ModelWilayah;

class Wilayah extends BaseController
{
    public function index()
    {
        $db = new ModelWilayah();
        $data['title'] = "Wilayah";
        $data['datatable'] = $db->findAll();
        return view('admin/v_wilayah', $data);
    }
    public function create()
    {
        $db = new ModelWilayah();
        $data['nama_wilayah'] = request()->getVar('nama_wilayah');
        $cek = $db->where($data)->first();
        if (!$cek) {
            if ($db->insert($data)) {
                return redirect()->to('admin/wilayah')->with('notif_toast', [
                    'sts' => 1,
                    'titl' => "Berhasil Menambahkan Data",
                    'msg' => "Data Wilayah berhasil ditambahkan",
                ]);
            }
        }
        return redirect()->to('admin/wilayah')->with('notif_toast', [
            'sts' => 3,
            'titl' => "Data sudah ada",
            'msg' => "Gagal menambahkan data karena data sudah ada",
        ]);
    }
    public function update($id)
    {
        $db = new ModelWilayah();
        $data['nama_wilayah'] = request()->getVar('nama_wilayah');
        $cek1 = $db->find($id);
        if ($cek1) {
            $cek2 = $db->where($data)->first();
            if (!$cek2) {
                if ($db->update($id, $data)) {
                    return redirect()->to('admin/wilayah')->with('notif_toast', [
                        'sts' => 1,
                        'titl' => "Berhasil Mengubah Data",
                        'msg' => "Data Wilayah berhasil diubah",
                    ]);
                }
            }
            return redirect()->to('admin/wilayah')->with('notif_toast', [
                'sts' => 3,
                'titl' => "Data sudah ada",
                'msg' => "Gagal mengubah data karena data sudah ada",
            ]);
        }
        return redirect()->to('admin/wilayah')->with('notif_toast', [
            'sts' => 0,
            'titl' => "Data tidak ditemukan",
            'msg' => "Gagal mengubah data",
        ]);
    }
    public function delete($id)
    {
        $db = new ModelWilayah();
        $cek1 = $db->find($id);
        if ($cek1) {
            if ($db->delete($id)) {
                return redirect()->to('admin/wilayah')->with('notif_toast', [
                    'sts' => 1,
                    'titl' => "Berhasil Menghapus Data",
                    'msg' => "Data Wilayah berhasil dihapus",
                ]);
            }
        }
        return redirect()->to('admin/wilayah')->with('notif_toast', [
            'sts' => 0,
            'titl' => "Data tidak ditemukan",
            'msg' => "Gagal mengubah data",
        ]);
    }
}
