<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class biodata extends CI_Controller
{
    public function index()
    {
        $NIM = 19220800 ;
        $Nama ="ZAHRISA ALIFIA SYAHRA";
        $Kelas = "19.3A.04" ;
        $PRODI = "SISTEM INFORMASI";
        echo " NIM = $NIM <br>";
        echo "NAMA = $Nama <br>";
        echo "kelas = $Kelas <br>" ;
        echo "kelas = $PRODI<br>";
         }
}
