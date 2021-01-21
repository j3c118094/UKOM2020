<?php namespace App\Controllers;

use App\Models\Kecamatan_Model;
use App\Models\Kelurahan_Model;
use App\Models\Hospital_Model;
use App\Models\Dokter_Model;
use App\Models\Pasien_Model;

class Main extends BaseController
{

	public function __construct() {
		$this->kecModel = new Kecamatan_Model();
		$this->kelModel = new Kelurahan_Model();
		$this->rsModel = new Hospital_Model();
		$this->dokModel = new Dokter_Model();
		$this->pasModel = new Pasien_Model();
    }



	public function index()
	{
        $db = \Config\Database::connect();
		$query = $db->query("SELECT KELURAHAN.NAMAKEL AS KEL, KECAMATAN.NAMAKEC AS KEC FROM ((PASIEN INNER JOIN KELURAHAN ON PASIEN.KODEKEL=KELURAHAN.KODEKEL) INNER JOIN KECAMATAN ON KELURAHAN.KODEKEC=KECAMATAN.KODEKEC)");
        $data['dataPPKel'] = $query->getResult();

        $KelJumlah = [];
        foreach ($data['dataPPKel'] as $KelPas ) {
            if (array_key_exists($KelPas->KEL, $KelJumlah)) {
                $KelJumlah[$KelPas->KEL] += 1;
            } else {
                $KelJumlah[$KelPas->KEL] = 1;
            }
        }
        
        $KelKec = [];
        foreach ($data['dataPPKel'] as $Kel) {
            $KelKec[$Kel->KEL] = $Kel->KEC;
        }

        $data['KelKec'] = $KelKec;
        $data['KelJumlah'] = $KelJumlah;

        $data['dataPasien'] = $this->pasModel->findAll();



        $listBulan = [];
        $sortedBulan = [];
        $sortBulan = array("MARET-20", "APRIL-20", "MEI-20", "JUNI-20", "JULI-20", "AGUSTUS-20", "SEPTEMBER-20", "OKTOBER-20", "NOVEMBER-20", "DESEMBER-20", "JANUARI-21" );
        foreach ($data['dataPasien'] as $pasien ) {
            if (array_key_exists($pasien->MASUK, $listBulan)) {
                $listBulan[$pasien->MASUK] += 1;
            } else {
                $listBulan[$pasien->MASUK] = 1;
            }
        }

        foreach ($sortBulan as $key) {
            $sortedBulan[$key] = $listBulan[$key];
        }

        $data['listBulan'] = $listBulan;
        $data["bulan"] = $sortedBulan;

        $query = $db->query("SELECT COUNT(SEX) AS JUMLAH FROM PASIEN WHERE SEX = 'P'");
        $data['Female'] = $query->getResult();

        $query = $db->query("SELECT COUNT(SEX) AS JUMLAH FROM PASIEN WHERE SEX = 'L'");
        $data['Male'] = $query->getResult();
        echo view('header.php', $data);
		echo view('main.php');
	    echo view('footer.php');
	}

	//--------------------------------------------------------------------

}
