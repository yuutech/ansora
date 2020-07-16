<?php

function getCategoryNameBySlug($slug)
{
    $ci = get_instance();
    $ci->db->select('nama_cat');
    $ci->db->where('slug_cat', $slug);
    $result = $ci->db->get('kategori')->row();
    return $result->nama_cat;
}
// function menu_active($slug){
//     $ci=get_instance();
//     $ci->
// }
function tgl_indo($tanggal)
{
    $bulan = array(
        1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    );
    $pecah = explode('-', $tanggal);
    return $pecah[2] . ' ' . $bulan[(int) $pecah[1]] . ' ' . $pecah[0];
}
function hari_tgl_indo($tgl)
{
    $tanggal = date('Y-m-d-D', strtotime($tgl));
    $pecah = explode('-', $tanggal);
    $day = $pecah[3];
    switch ($day) {
        case 'Sun':
            $hari = "Minggu";
            break;

        case 'Mon':
            $hari = "Senin";
            break;

        case 'Tue':
            $hari = "Selasa";
            break;

        case 'Wed':
            $hari = "Rabu";
            break;

        case 'Thu':
            $hari = "Kamis";
            break;

        case 'Fri':
            $hari = "Jumat";
            break;

        case 'Sat':
            $hari = "Sabtu";
            break;

        default:
            $hari = "Tidak diketahui";
            break;
    }
    $bulan = array(
        1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    );
    return $hari . ', ' . $pecah[2] . ' ' . $bulan[(int) $pecah[1]] . ' ' . $pecah[0];
}
function currLink($slug)
{
    $ci = get_instance();
    $ci->uri->segment(2);
}
