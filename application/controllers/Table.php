<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_table');
		$this->load->library('form_validation');
	}

	public function index()
	{
		 $data['konten']='v_table';
        
        $this->load->model('model_table');
        $data['data_data']=$this->model_table->getAll();
		$this->load->view('V_dashboard',$data, false);
	}
//ddddddddddddddddmnmnm
	public function tambah_table()
	{
		$data = $this->model_table;
		$validation= $this->form_validation;
		$validation->set_rules($data->rules());

		if($validation->run()){
			$data->tambah_table();
			$this->session->set_flashdata('success', 'berhasil');
			redirect(base_url('index.php/table'),'refresh');
		}
		$this->load->view("new_form");
}
public function edit($id = null)
    {
        if (!isset($id)) redirect('table');
        
        $table= $this->model_table;
        $validation = $this->form_validation;
        $validation->set_rules($table->rules());
        
        if ($validation->run()) {
            $table->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
   
        }

        $data["data"] = $table->getById($id);
        if (!$data["data"]) show_404();

        $this->load->view("edit_form", $data);
    }

	public function hapus($project_id)
    {
        $this->load->model('model_table');
        $prosesHapus = $this->model_table->hapus($project_id);
        if ($prosesHapus == TRUE) {
            $this->session->set_flashdata('pesan', 'sukses lur');
        }
        else{
            $this->session->set_flashdata('pesan', 'gagal lur');
        }
        redirect(base_url('index.php/table'),'refresh');
    }
     public function export(){
         include APPPATH.'third_party/PHPExcel/PHPExcel.php';
    
    // Panggil class PHPExcel nya
    $excel = new PHPExcel();
    // Settingan awal fil excel
    $excel->getProperties()->setCreator('My Notes Code')
                 ->setLastModifiedBy('My Notes Code')
                 ->setTitle("Data Mitratel")
                 ->setSubject("Data")
                 ->setDescription("Laporan Semua Data")
                 ->setKeywords("Data");
    // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
    $style_col = array(
      'font' => array('bold' => true), // Set font nya jadi bold
      'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );
    // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
    $style_row = array(
      'alignment' => array(
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );
    $excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA TABLE");
    $excel->getActiveSheet()->mergeCells('A1:DI1');
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE);
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15);
    $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); 
    $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); 
    $excel->setActiveSheetIndex(0)->setCellValue('B3', "PROJECT ID");
    $excel->setActiveSheetIndex(0)->setCellValue('C3', "Site ID DMT");
    $excel->setActiveSheetIndex(0)->setCellValue('D3', "SOW");
    $excel->setActiveSheetIndex(0)->setCellValue('E3', "Tenant");
    $excel->setActiveSheetIndex(0)->setCellValue('F3', "Site ID Actual");
    $excel->setActiveSheetIndex(0)->setCellValue('G3', "Site Name Actual");
    $excel->setActiveSheetIndex(0)->setCellValue('H3', "Status");
    $excel->setActiveSheetIndex(0)->setCellValue('I3', "Site ID Owner");
    $excel->setActiveSheetIndex(0)->setCellValue('J3', "Site Name Owner");
    $excel->setActiveSheetIndex(0)->setCellValue('K3', "Tower Owner");
    $excel->setActiveSheetIndex(0)->setCellValue('L3', "Pabrikan Tower");
    $excel->setActiveSheetIndex(0)->setCellValue('M3', "Type Tower1");
    $excel->setActiveSheetIndex(0)->setCellValue('N3', "Type Tower2");
    $excel->setActiveSheetIndex(0)->setCellValue('O3', "Type Tower3");
    $excel->setActiveSheetIndex(0)->setCellValue('P3', "Height Tower");
    $excel->setActiveSheetIndex(0)->setCellValue('Q3', "Load Tower");
    $excel->setActiveSheetIndex(0)->setCellValue('R3', "Longitude");
    $excel->setActiveSheetIndex(0)->setCellValue('S3', "Latitude");
    $excel->setActiveSheetIndex(0)->setCellValue('T3', "Adress");
    $excel->setActiveSheetIndex(0)->setCellValue('U3', "Mitra Konsultan");
    $excel->setActiveSheetIndex(0)->setCellValue('V3', "Mitra Sitac");
    $excel->setActiveSheetIndex(0)->setCellValue('W3', "Mitra IMB");
    $excel->setActiveSheetIndex(0)->setCellValue('X3', "Mitra CME");
    $excel->setActiveSheetIndex(0)->setCellValue('Y3', "Mitra SACME");
    $excel->setActiveSheetIndex(0)->setCellValue('Z3', "Mitra Power");
    $excel->setActiveSheetIndex(0)->setCellValue('AA3', "Mitra Panel");
    $excel->setActiveSheetIndex(0)->setCellValue('AB3', "Mitra Tower");
    $excel->setActiveSheetIndex(0)->setCellValue('AC3', "ID PLN");
    $excel->setActiveSheetIndex(0)->setCellValue('AD3', "DAYA PLN");
    $excel->setActiveSheetIndex(0)->setCellValue('AE3', "RFI");
    $excel->setActiveSheetIndex(0)->setCellValue('AF3', "ON AIR");
    $excel->setActiveSheetIndex(0)->setCellValue('AG3', "APD (dokumen)");
    $excel->setActiveSheetIndex(0)->setCellValue('AH3', "ABD (dokumen)");
    $excel->setActiveSheetIndex(0)->setCellValue('AI3', "BAST (Dokumen)");
    $excel->setActiveSheetIndex(0)->setCellValue('AJ3', "PKS (dokumen)");
    $excel->setActiveSheetIndex(0)->setCellValue('AK3', "IMB (dokumen)");
    $excel->setActiveSheetIndex(0)->setCellValue('AL3', "TYPE MOUNTING (1)");
    $excel->setActiveSheetIndex(0)->setCellValue('AM3', "ANTENNA RF/INSTALLAED (1)");
    $excel->setActiveSheetIndex(0)->setCellValue('AN3', "ELEVASI ANTENNA RF (1)");
    $excel->setActiveSheetIndex(0)->setCellValue('AO3', "HEIGHT ANTENNA RF (1)");
    $excel->setActiveSheetIndex(0)->setCellValue('AP3', "DIMENSI ANTENNA RF (1)");
    $excel->setActiveSheetIndex(0)->setCellValue('AQ3', "WEIGHT ANTENNA RF (1)");
    $excel->setActiveSheetIndex(0)->setCellValue('AR3', "AZIMUT ANTENNA (1)");
    $excel->setActiveSheetIndex(0)->setCellValue('AS3', "TYPE MOUNTING (2)");
    $excel->setActiveSheetIndex(0)->setCellValue('AT3', "ANTENNA RF/INSTALLAED (2)");
    $excel->setActiveSheetIndex(0)->setCellValue('AU3', "ELEVASI ANTENNA RF (2)");
    $excel->setActiveSheetIndex(0)->setCellValue('AV3', "HEIGHT ANTENNA RF (2)");
    $excel->setActiveSheetIndex(0)->setCellValue('AW3', "DIMENSI ANTENNA RF (2)");
    $excel->setActiveSheetIndex(0)->setCellValue('AX3', "WEIGHT ANTENNA RF (2)");
    $excel->setActiveSheetIndex(0)->setCellValue('AY3', "AZIMUT ANTENNA (2)");
    $excel->setActiveSheetIndex(0)->setCellValue('AZ3', "TYPE MOUNTING (3)");
    $excel->setActiveSheetIndex(0)->setCellValue('BA3', "ANTENNA RF/INSTALLAED (3)");
    $excel->setActiveSheetIndex(0)->setCellValue('BB3', "ELEVASI ANTENNA RF (3)");
    $excel->setActiveSheetIndex(0)->setCellValue('BC3', "HEIGHT ANTENNA RF (3)");
    $excel->setActiveSheetIndex(0)->setCellValue('BD3', "DIMENSI ANTENNA RF (3)");
    $excel->setActiveSheetIndex(0)->setCellValue('BE3', "WEIGHT ANTENNA RF (3)");
    $excel->setActiveSheetIndex(0)->setCellValue('BF3', "AZIMUT ANTENNA (3)");
    $excel->setActiveSheetIndex(0)->setCellValue('BG3', "TYPE MOUNTING (1)");
    $excel->setActiveSheetIndex(0)->setCellValue('BH3', "MW/INSTALLAED (1)");
    $excel->setActiveSheetIndex(0)->setCellValue('BI3', "ELEVASI MW (1)");
    $excel->setActiveSheetIndex(0)->setCellValue('BJ3', "HEIGHT MW (1)");
    $excel->setActiveSheetIndex(0)->setCellValue('BK3', "DIMENSI MW (1)");
    $excel->setActiveSheetIndex(0)->setCellValue('BL3', "WEIGHT MW (1)");
    $excel->setActiveSheetIndex(0)->setCellValue('BM3', "AZIMUT MW (1)");
    $excel->setActiveSheetIndex(0)->setCellValue('BN3', "TYPE MOUNTING (2)");
    $excel->setActiveSheetIndex(0)->setCellValue('BO3', "MW/INSTALLAED (2)");
    $excel->setActiveSheetIndex(0)->setCellValue('BP3', "ELEVASI MW (2)");
    $excel->setActiveSheetIndex(0)->setCellValue('BQ3', "HEIGHT MW (2)");
    $excel->setActiveSheetIndex(0)->setCellValue('BR3', "DIMENSI MW (2)");
    $excel->setActiveSheetIndex(0)->setCellValue('BS3', "WEIGHT MW (2)");
    $excel->setActiveSheetIndex(0)->setCellValue('BT3', "AZIMUT MW (2)");
    $excel->setActiveSheetIndex(0)->setCellValue('BU3', "TYPE MOUNTING (3)");
    $excel->setActiveSheetIndex(0)->setCellValue('BV3', "MW/INSTALLAED (3)");
    $excel->setActiveSheetIndex(0)->setCellValue('BW3', "ELEVASI MW (3)");
    $excel->setActiveSheetIndex(0)->setCellValue('BX3', "HEIGHT MW (3)");
    $excel->setActiveSheetIndex(0)->setCellValue('BY3', "DIMENSI MW (3)");
    $excel->setActiveSheetIndex(0)->setCellValue('BZ3', "WEIGHT MW (3)");
    $excel->setActiveSheetIndex(0)->setCellValue('CA3', "AZIMUT MW (3)");
    $excel->setActiveSheetIndex(0)->setCellValue('CB3', "TYPE MOUNTING (1)");
    $excel->setActiveSheetIndex(0)->setCellValue('CC3', "RRU/INSTALLAED (1)");
    $excel->setActiveSheetIndex(0)->setCellValue('CD3', "ELEVASI RRU (1)");
    $excel->setActiveSheetIndex(0)->setCellValue('CE3', "HEIGHT RRU (1)");
    $excel->setActiveSheetIndex(0)->setCellValue('CF3', "DIMENSI RRU (1)");
    $excel->setActiveSheetIndex(0)->setCellValue('CG3', "WEIGHT RRU (1)");
    $excel->setActiveSheetIndex(0)->setCellValue('CH3', "TYPE MOUNTING (2)");
    $excel->setActiveSheetIndex(0)->setCellValue('CI3', "RRU/INSTALLAED (2)");
    $excel->setActiveSheetIndex(0)->setCellValue('CJ3', "ELEVASI RRU (2)");
    $excel->setActiveSheetIndex(0)->setCellValue('CK3', "HEIGHT RRU (2)");
    $excel->setActiveSheetIndex(0)->setCellValue('CL3', "DIMENSI RRU (2)");
    $excel->setActiveSheetIndex(0)->setCellValue('CM3', "WEIGHT RRU (2)");
    $excel->setActiveSheetIndex(0)->setCellValue('CN3', "TYPE MOUNTING (3)");
    $excel->setActiveSheetIndex(0)->setCellValue('CO3', "RRU/INSTALLAED (3)");
    $excel->setActiveSheetIndex(0)->setCellValue('CP3', "ELEVASI RRU (3)");
    $excel->setActiveSheetIndex(0)->setCellValue('CQ3', "HEIGHT RRU (3)");
    $excel->setActiveSheetIndex(0)->setCellValue('CR3', "DIMENSI RRU (3)");
    $excel->setActiveSheetIndex(0)->setCellValue('CS3', "WEIGHT RRU (3)");
    $excel->setActiveSheetIndex(0)->setCellValue('CT3', "CAF 1");
    $excel->setActiveSheetIndex(0)->setCellValue('CU3', "CAF 2");
    $excel->setActiveSheetIndex(0)->setCellValue('CV3', "CAF 3");
    $excel->setActiveSheetIndex(0)->setCellValue('CW3', "OA RF (1)");
    $excel->setActiveSheetIndex(0)->setCellValue('CX3', "OA RF (2)");
    $excel->setActiveSheetIndex(0)->setCellValue('CY3', "OA RF (3)");
    $excel->setActiveSheetIndex(0)->setCellValue('CZ3', "PID PERKUATAN");
    $excel->setActiveSheetIndex(0)->setCellValue('DA3', "SOW PERKUATAN");
    $excel->setActiveSheetIndex(0)->setCellValue('DB3', "TONASE PERKUATAN");
    $excel->setActiveSheetIndex(0)->setCellValue('DC3', "MITRA PERKUATAN");
    $excel->setActiveSheetIndex(0)->setCellValue('DD3', "PABRIKASI PERKUATAN");
    $excel->setActiveSheetIndex(0)->setCellValue('DE3', "APD PERKUATAN");
    $excel->setActiveSheetIndex(0)->setCellValue('DF3', "NOD PERKUATAN");
    $excel->setActiveSheetIndex(0)->setCellValue('DG3', "RFI PERKUATAN");
    $excel->setActiveSheetIndex(0)->setCellValue('DH3', "BAST PERKUATAN");
    $excel->setActiveSheetIndex(0)->setCellValue('DI3', "FOTO PERKUATAN");


    $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('K3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('L3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('M3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('N3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('O3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('P3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('Q3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('R3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('S3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('T3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('U3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('V3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('W3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('X3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('Y3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('Z3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AA3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AB3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AC3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AD3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AE3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AF3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AG3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AH3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AI3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AJ3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AK3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AL3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AM3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AN3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AO3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AP3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AQ3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AR3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AS3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AT3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AU3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AV3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AW3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AX3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AY3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AZ3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('BA3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('BB3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('BC3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('BD3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('BE3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('BF3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('BG3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('BH3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('BI3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('BJ3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('BK3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('BL3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('BM3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('BN3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('BO3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('BP3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('BQ3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('BR3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('BS3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('BT3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('BU3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('BV3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('BW3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('BX3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('BY3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('BZ3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('CA3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('CB3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('CC3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('CD3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('CE3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('CF3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('CG3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('CH3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('CI3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('CJ3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('CK3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('CL3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('CM3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('CN3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('CO3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('CP3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('CQ3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('CR3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('CS3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('CT3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('CU3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('CV3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('CW3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('CX3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('CY3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('CZ3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('DA3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('DB3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('DC3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('DD3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('DE3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('DF3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('DG3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('DH3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('DI3')->applyFromArray($style_col);

    $data = $this->model_table->view();
    $no = 1; 
    $numrow = 4; 
    foreach($data as $dt){
      $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
      $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $dt->project_id);
      $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $dt->id_dmt);
      $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $dt->sow);
      $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $dt->tenant);
      $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $dt->id_actual);
      $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $dt->name_actual);
      $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $dt->status);
      $excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $dt->id_owner);
      $excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $dt->name_owner);
      $excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $dt->tower_owner);
      $excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $dt->pabrikan_tower);
      $excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $dt->type_tower1);
      $excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $dt->type_tower2);
      $excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, $dt->type_tower3);
      $excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $dt->height_tower);
      $excel->setActiveSheetIndex(0)->setCellValue('Q'.$numrow, $dt->load_tower);
      $excel->setActiveSheetIndex(0)->setCellValue('R'.$numrow, $dt->longtitude);
      $excel->setActiveSheetIndex(0)->setCellValue('S'.$numrow, $dt->latitude);
      $excel->setActiveSheetIndex(0)->setCellValue('T'.$numrow, $dt->adress);
      $excel->setActiveSheetIndex(0)->setCellValue('U'.$numrow, $dt->konsultan);
      $excel->setActiveSheetIndex(0)->setCellValue('V'.$numrow, $dt->sitac);
      $excel->setActiveSheetIndex(0)->setCellValue('W'.$numrow, $dt->imb);
      $excel->setActiveSheetIndex(0)->setCellValue('X'.$numrow, $dt->cme);
      $excel->setActiveSheetIndex(0)->setCellValue('Y'.$numrow, $dt->sacme);
      $excel->setActiveSheetIndex(0)->setCellValue('Z'.$numrow, $dt->power);
      $excel->setActiveSheetIndex(0)->setCellValue('AA'.$numrow, $dt->panel);
      $excel->setActiveSheetIndex(0)->setCellValue('AB'.$numrow, $dt->tower);
      $excel->setActiveSheetIndex(0)->setCellValue('AC'.$numrow, $dt->id_pln);
      $excel->setActiveSheetIndex(0)->setCellValue('AD'.$numrow, $dt->daya_pln);
      $excel->setActiveSheetIndex(0)->setCellValue('AE'.$numrow, $dt->rfi);
      $excel->setActiveSheetIndex(0)->setCellValue('AF'.$numrow, $dt->on_air);
      $excel->setActiveSheetIndex(0)->setCellValue('AG'.$numrow, $dt->apd);
      $excel->setActiveSheetIndex(0)->setCellValue('AH'.$numrow, $dt->abd);
      $excel->setActiveSheetIndex(0)->setCellValue('AI'.$numrow, $dt->bast);
      $excel->setActiveSheetIndex(0)->setCellValue('AJ'.$numrow, $dt->pks);
      $excel->setActiveSheetIndex(0)->setCellValue('AK'.$numrow, $dt->imb_doc);
      $excel->setActiveSheetIndex(0)->setCellValue('AL'.$numrow, $dt->type_mount1);
      $excel->setActiveSheetIndex(0)->setCellValue('AM'.$numrow, $dt->antenna_rf1);
      $excel->setActiveSheetIndex(0)->setCellValue('AN'.$numrow, $dt->elevasi_antenna1);
      $excel->setActiveSheetIndex(0)->setCellValue('AO'.$numrow, $dt->height_antenna1);
      $excel->setActiveSheetIndex(0)->setCellValue('AP'.$numrow, $dt->dimensi_antenna1);
      $excel->setActiveSheetIndex(0)->setCellValue('AQ'.$numrow, $dt->weight_antenna1);
      $excel->setActiveSheetIndex(0)->setCellValue('AR'.$numrow, $dt->azimut_antenna1);
      $excel->setActiveSheetIndex(0)->setCellValue('AS'.$numrow, $dt->type_mount2);
      $excel->setActiveSheetIndex(0)->setCellValue('AT'.$numrow, $dt->antenna_rf2);
      $excel->setActiveSheetIndex(0)->setCellValue('AU'.$numrow, $dt->elevasi_antenna2);
      $excel->setActiveSheetIndex(0)->setCellValue('AV'.$numrow, $dt->height_antenna2);
      $excel->setActiveSheetIndex(0)->setCellValue('AW'.$numrow, $dt->dimensi_antenna2);
      $excel->setActiveSheetIndex(0)->setCellValue('AX'.$numrow, $dt->weight_antenna2);
      $excel->setActiveSheetIndex(0)->setCellValue('AY'.$numrow, $dt->azimut_antenna2);
      $excel->setActiveSheetIndex(0)->setCellValue('AZ'.$numrow, $dt->type_mount3);
      $excel->setActiveSheetIndex(0)->setCellValue('BA'.$numrow, $dt->antenna_rf3);
      $excel->setActiveSheetIndex(0)->setCellValue('BB'.$numrow, $dt->elevasi_antenna3);
      $excel->setActiveSheetIndex(0)->setCellValue('BC'.$numrow, $dt->height_antenna3);
      $excel->setActiveSheetIndex(0)->setCellValue('BD'.$numrow, $dt->dimensi_antenna3);
      $excel->setActiveSheetIndex(0)->setCellValue('BE'.$numrow, $dt->weight_antenna3);
      $excel->setActiveSheetIndex(0)->setCellValue('BF'.$numrow, $dt->azimut_antenna3);
      $excel->setActiveSheetIndex(0)->setCellValue('BG'.$numrow, $dt->type_mounti1);
      $excel->setActiveSheetIndex(0)->setCellValue('BH'.$numrow, $dt->mw1);
      $excel->setActiveSheetIndex(0)->setCellValue('BI'.$numrow, $dt->elevasi_mw1);
      $excel->setActiveSheetIndex(0)->setCellValue('BJ'.$numrow, $dt->height_mw1);
      $excel->setActiveSheetIndex(0)->setCellValue('BK'.$numrow, $dt->dimensi_mw1);
      $excel->setActiveSheetIndex(0)->setCellValue('BL'.$numrow, $dt->weight_mw1);
      $excel->setActiveSheetIndex(0)->setCellValue('BM'.$numrow, $dt->azimut_mw1);
      $excel->setActiveSheetIndex(0)->setCellValue('BN'.$numrow, $dt->type_mounti2);
      $excel->setActiveSheetIndex(0)->setCellValue('BO'.$numrow, $dt->mw2);
      $excel->setActiveSheetIndex(0)->setCellValue('BP'.$numrow, $dt->elevasi_mw2);
      $excel->setActiveSheetIndex(0)->setCellValue('BQ'.$numrow, $dt->height_mw2);
      $excel->setActiveSheetIndex(0)->setCellValue('BR'.$numrow, $dt->dimensi_mw2);
      $excel->setActiveSheetIndex(0)->setCellValue('BS'.$numrow, $dt->weight_mw2);
      $excel->setActiveSheetIndex(0)->setCellValue('BT'.$numrow, $dt->azimut_mw2);
      $excel->setActiveSheetIndex(0)->setCellValue('BU'.$numrow, $dt->type_mounti3);
      $excel->setActiveSheetIndex(0)->setCellValue('BV'.$numrow, $dt->mw3);
      $excel->setActiveSheetIndex(0)->setCellValue('BW'.$numrow, $dt->elevasi_mw3);
      $excel->setActiveSheetIndex(0)->setCellValue('BX'.$numrow, $dt->height_mw3);
      $excel->setActiveSheetIndex(0)->setCellValue('BY'.$numrow, $dt->dimensi_mw3);
      $excel->setActiveSheetIndex(0)->setCellValue('BZ'.$numrow, $dt->weight_mw3);
      $excel->setActiveSheetIndex(0)->setCellValue('CA'.$numrow, $dt->azimut_mw3);
      $excel->setActiveSheetIndex(0)->setCellValue('CB'.$numrow, $dt->type_mountn1);
      $excel->setActiveSheetIndex(0)->setCellValue('CC'.$numrow, $dt->rru1);
      $excel->setActiveSheetIndex(0)->setCellValue('CD'.$numrow, $dt->elevasi_rru1);
      $excel->setActiveSheetIndex(0)->setCellValue('CE'.$numrow, $dt->height_rru1);
      $excel->setActiveSheetIndex(0)->setCellValue('CF'.$numrow, $dt->dimensi_rru1);
      $excel->setActiveSheetIndex(0)->setCellValue('CG'.$numrow, $dt->weight_rru1);
      $excel->setActiveSheetIndex(0)->setCellValue('CH'.$numrow, $dt->type_mountn2);
      $excel->setActiveSheetIndex(0)->setCellValue('CI'.$numrow, $dt->rru2);
      $excel->setActiveSheetIndex(0)->setCellValue('CJ'.$numrow, $dt->elevasi_rru2);
      $excel->setActiveSheetIndex(0)->setCellValue('CK'.$numrow, $dt->height_rru2);
      $excel->setActiveSheetIndex(0)->setCellValue('CL'.$numrow, $dt->dimensi_rru2);
      $excel->setActiveSheetIndex(0)->setCellValue('CM'.$numrow, $dt->weight_rru2);
      $excel->setActiveSheetIndex(0)->setCellValue('CN'.$numrow, $dt->type_mountn3);
      $excel->setActiveSheetIndex(0)->setCellValue('CO'.$numrow, $dt->rru3);
      $excel->setActiveSheetIndex(0)->setCellValue('CP'.$numrow, $dt->elevasi_rru3);
      $excel->setActiveSheetIndex(0)->setCellValue('CQ'.$numrow, $dt->height_rru3);
      $excel->setActiveSheetIndex(0)->setCellValue('CR'.$numrow, $dt->dimensi_rru3);
      $excel->setActiveSheetIndex(0)->setCellValue('CS'.$numrow, $dt->weight_rru3);
      $excel->setActiveSheetIndex(0)->setCellValue('CT'.$numrow, $dt->caf1);
      $excel->setActiveSheetIndex(0)->setCellValue('CU'.$numrow, $dt->caf2);
      $excel->setActiveSheetIndex(0)->setCellValue('CV'.$numrow, $dt->caf3);
      $excel->setActiveSheetIndex(0)->setCellValue('CW'.$numrow, $dt->oarf1);
      $excel->setActiveSheetIndex(0)->setCellValue('CX'.$numrow, $dt->oarf2);
      $excel->setActiveSheetIndex(0)->setCellValue('CY'.$numrow, $dt->oarf3);
      $excel->setActiveSheetIndex(0)->setCellValue('CZ'.$numrow, $dt->pid_perk);
      $excel->setActiveSheetIndex(0)->setCellValue('DA'.$numrow, $dt->sow_perk);
      $excel->setActiveSheetIndex(0)->setCellValue('DB'.$numrow, $dt->tonase_perk);
      $excel->setActiveSheetIndex(0)->setCellValue('DC'.$numrow, $dt->mitra_perk);
      $excel->setActiveSheetIndex(0)->setCellValue('DD'.$numrow, $dt->pabrikasi_perk);
      $excel->setActiveSheetIndex(0)->setCellValue('DE'.$numrow, $dt->apd_perkuatan);
      $excel->setActiveSheetIndex(0)->setCellValue('DF'.$numrow, $dt->nod_perkuatan);
      $excel->setActiveSheetIndex(0)->setCellValue('DG'.$numrow, $dt->rfi_perkuatan);
      $excel->setActiveSheetIndex(0)->setCellValue('DH'.$numrow, $dt->bast_perkuatan);
      $excel->setActiveSheetIndex(0)->setCellValue('DI'.$numrow, $dt->foto_perkuatan);
      


    $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('P'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('Q'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('R'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('S'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('T'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('U'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('V'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('W'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('X'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('Y'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('Z'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('AA'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('AB'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('AC'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('AD'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('AE'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('AF'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('AG'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('AH'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('AI'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('AJ'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('AK'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('AL'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('AM'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('AN'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('AO'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('AP'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('AQ'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('AR'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('AS'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('AT'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('AU'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('AV'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('AW'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('AX'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('AY'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('AZ'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('BA'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('BB'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('BC'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('BD'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('BE'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('BF'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('BG'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('BH'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('BI'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('BJ'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('BK'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('BL'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('BM'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('BN'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('BO'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('BP'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('BQ'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('BR'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('BS'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('BT'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('BU'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('BV'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('BW'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('BX'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('BY'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('BZ'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('CA'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('CB'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('CC'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('CD'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('CE'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('CF'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('CG'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('CH'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('CI'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('CJ'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('CK'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('CL'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('CM'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('CN'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('CO'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('CP'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('CQ'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('CR'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('CS'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('CT'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('CU'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('CV'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('CW'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('CX'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('CY'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('CZ'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('DA'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('DB'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('DC'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('DD'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('DE'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('DF'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('DG'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('DH'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('DI'.$numrow)->applyFromArray($style_row);

    $no++; // Tambah 1 setiap kali looping
      $numrow++; // Tambah 1 setiap kali looping
    }
                $excel->getActiveSheet()->getColumnDimension('A')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('B')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('C')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('D')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('E')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('F')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('G')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('H')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('I')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('J')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('K')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('L')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('M')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('N')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('O')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('P')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('Q')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('R')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('S')->setWidth(50); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('T')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('U')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('V')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('W')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('X')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('Y')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('Z')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('AA')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('AB')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('AC')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('AD')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('AE')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('AF')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('AG')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('AH')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('AI')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('AJ')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('AK')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('AL')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('AM')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('AN')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('AO')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('AP')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('AQ')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('AR')->setWidth(50);
                 $excel->getActiveSheet()->getColumnDimension('AS')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('AT')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('AU')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('AV')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('AW')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('AX')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('AY')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('AZ')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('BA')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('BB')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('BC')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('BD')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('BE')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('BF')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('BG')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('BH')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('BI')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('BJ')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('BK')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('BL')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('BM')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('BN')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('BO')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('BP')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('BQ')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('BR')->setWidth(50);
                 $excel->getActiveSheet()->getColumnDimension('BS')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('BT')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('BU')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('BV')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('BW')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('BX')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('BY')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('BZ')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('CA')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('CB')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('CC')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('CD')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('CE')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('CF')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('CG')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('CH')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('CI')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('CJ')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('CK')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('CL')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('CM')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('CN')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('CO')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('CP')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('CQ')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('CR')->setWidth(50);
                 $excel->getActiveSheet()->getColumnDimension('CS')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('CT')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('CU')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('CV')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('CW')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('CX')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('CY')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('CZ')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('DA')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('DB')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('DC')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('DD')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('DE')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('DF')->setWidth(25);
                 $excel->getActiveSheet()->getColumnDimension('DG')->setWidth(25); // NAMA
                 $excel->getActiveSheet()->getColumnDimension('DH')->setWidth(25); // ALAMAT
                 $excel->getActiveSheet()->getColumnDimension('DI')->setWidth(25);
    $excel->getActiveSheet()->getDefaultColumnDimension('')->setWidth(50);
    $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
    $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
    $excel->getActiveSheet(0)->setTitle("Laporan Data");
    $excel->setActiveSheetIndex(0);

    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="Data.xlsx"');

    header('Cache-Control: max-age=0');
    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
    $write->save('php://output');       
             
             
         }
     }
    

 


