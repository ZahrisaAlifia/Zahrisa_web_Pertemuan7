<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class belajar extends CI_Controller
{
    public function index()
    {
        $nilai1=4;
        $nilai2=6;

        $tambah = $nilai1 + $nilai2;
        
        echo "OPERATOR <br>";
        echo "hasil dari $nilai1 + $nilai2 = " ,$tambah;
    }
    public function biodata()
    {
        $NIM = 19220800 ;
        $Nama ="ZAHRISA ALIFIA SYAHRA";
        $Kelas = "19.3A.04" ;
        $PRODI = "SISTEM INFORMASI";
        echo " NIM = $NIM <br>";
        echo "NAMA = $Nama <br>";
        echo "kelas = $Kelas <br>" ;
        echo "Prodi = $PRODI<br>" ;
    }
    public function biodataa()
    {
        $data=array(
            'No_Barang' => "2223456778",
            'Nama_Barang' => "Penghapus",
            'qty' => 90
        );

        $this->load->view('view_belajar' ,$data);
    }
}
