<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_table_client extends CI_Model
{

      private $_table="data";

      public $project_id;
      public $id_dmt;
      public $sow;
      public $tenant;
      public $id_actual;
      public $name_actual;
      public $status;
      public $id_owner;
      public $name_owner;
      public $pabrikan_tower;
      public $type_tower1;
      public $type_tower2;
      public $type_tower3;
      public $height_tower;
      public $load_tower;
      public $longtitude;
      public $latitude;
      public $adress;
      public $konsultan;
      public $sitac;
      public $imb;
      public $cme;
      public $sacme;
      public $power;
      public $panel;
      public $tower;
      public $id_pln;
      public $daya_pln;
      public $rfi;
      public $on_air;
      public $apd;
      public $abd;
      public $bast;
      public $pks;
      public $imb_doc;
      public $type_mount1;
      public $antenna_rf1;
      public $elevasi_antenna1;
      public $height_antenna1;
      public $dimensi_antenna1;
      public $weight_antenna1;
      public $azimut_antenna1;
      public $type_mount2;
      public $antenna_rf2;
      public $elevasi_antenna2;
      public $height_antenna2;
      public $dimensi_antenna2;
      public $weight_antenna2;
      public $azimut_antenna2;
      public $type_mount3;
      public $antenna_rf3;
      public $elevasi_antenna3;
      public $height_antenna3;
      public $dimensi_antenna3;
      public $weight_antenna3;
      public $azimut_antenna3;
      public $type_mounti1;
      public $mw1;
      public $elevasi_mw1;
      public $height_mw1;
      public $dimensi_mw1;
      public $weight_mw1;
      public $azimut_mw1;
      public $type_mounti2;
      public $mw2;
      public $elevasi_mw2;
      public $height_mw2;
      public $dimensi_mw2;
      public $weight_mw2;
      public $azimut_mw2;
      public $type_mounti3;
      public $mw3;
      public $elevasi_mw3;
      public $height_mw3;
      public $dimensi_mw3;
      public $weight_mw3;
      public $azimut_mw3;
      public $type_mountn1;
      public $rru1;
      public $elevasi_rru1;
      public $height_rru1;
      public $dimensi_rru1;
      public $weight_rru1;
      public $type_mountn2;
      public $rru2;
      public $elevasi_rru2;
      public $height_rru2;
      public $dimensi_rru2;
      public $weight_rru2;
      public $type_mountn3;
      public $rru3;
      public $elevasi_rru3;
      public $height_rru3;
      public $dimensi_rru3;
      public $weight_rru3;
      public $caf1;
      public $caf2;
      public $caf3;
      public $oarf1;
      public $oarf2;
      public $oarf3;
      public $pid_perk;
      public $sow_perk;
      public $tonase_perk;
      public $mitra_perk;
      public $pabrikasi_perk;
      public $apd_perkuatan;
      public $nod_perkuatan;
      public $rfi_perkuatan;
      public $bast_perkuatan;
      public $foto_perkuatan;

      public function rules()
      {
            return[
            ['field'=>'project_id',
            'label'=>'Project ID',
            'rules'=>'required'],

            ['field'=>'id_dmt',
            'label'=>'Site ID DMT'],

            ['field'=>'sow',
            'label'=>'SOW'],

            ['field'=>'tenant',
            'label'=>'Tenant'],

            ['field'=>'id_actual',
            'label'=>'Site ID Actual'],

            ['field'=>'name_owner',
            'label'=>'Site Name Owner'],

            ['field'=>'tower_owner',
            'label'=>'Tower Owner'],

            ['field'=>'pabrikan_tower',
            'label'=>'Pabrikan Tower'],

            ['field'=>'type_tower1',
            'label'=>'Type Tower1'],

            ['field'=>'type_tower2',
            'label'=>'Type Tower2'],

            ['field'=>'type_tower3',
            'label'=>'Type Tower3'],

            ['field'=>'height_tower',
            'label'=>'Height Tower'],

            ['field'=>'load_tower',
            'label'=>'Load Tower'],

            ['field'=>'longtitude',
            'label'=>'Longitude'],

            ['field'=>'latitude',
            'label'=>'Latitude'],

            ['field'=>'adress',
            'label'=>'Adress'],

            ['field'=>'sitac',
            'label'=>'Mitra Sitac'],

            ['field'=>'imb',
            'label'=>'Mitra IMB'],

            ['field'=>'cme',
            'label'=>'Mitra CME'],

            ['field'=>'sacme',
            'label'=>'Mitra SACME'],

            ['field'=>'power',
            'label'=>'Mitra Power'],

            ['field'=>'panel',
            'label'=>'Mitra Panel'],

            ['field'=>'tower',
            'label'=>'Mitra Tower'],

            ['field'=>'id_pln',
            'label'=>'ID PLN'],

            ['field'=>'daya_pln',
            'label'=>'DAYA PLN'],

            ['field'=>'rfi',
            'label'=>'RFI'],

            ['field'=>'on_air',
            'label'=>'On Air'],

            ['field'=>'apd',
            'label'=>'APD (dokumen)'],

            ['field'=>'abd',
            'label'=>'ABD (dokumen)'],

            ['field'=>'bast',
            'label'=>'BAST (Dokumen)'],

            ['field'=>'pks',
            'label'=>'PKS (dokumen)'],

            ['field'=>'imb_doc',
            'label'=>'IMB (dokumen)'],

            ['field'=>'type_mount1',
            'label'=>'TYPE MOUNTING (1)'],

            ['field'=>'antenna_rf1',
            'label'=>'ANTENNA RF/INSTALLAED (1)'],

            ['field'=>'elevasi_antenna1',
            'label'=>'ELEVASI ANTENNA RF (1)'],

            ['field'=>'height_antenna1',
            'label'=>'HEIGHT ANTENNA RF (1)'],

            ['field'=>'dimensi_antenna1',
            'label'=>'DIMENSI ANTENNA RF (1)'],

            ['field'=>'weight_antenna1',
            'label'=>'WEIGHT ANTENNA RF (1)'],

            ['field'=>'azimut_antenna1',
            'label'=>'AZIMUT ANTENNA (1)'],

            ['field'=>'type_mount2',
            'label'=>'TYPE MOUNTING (2)'],

            ['field'=>'antenna_rf2',
            'label'=>'ANTENNA RF/INSTALLAED (2)'],

            ['field'=>'elevasi_antenna2',
            'label'=>'ELEVASI ANTENNA RF (2)'],

            ['field'=>'height_antenna2',
            'label'=>'HEIGHT ANTENNA RF (2)'],

            ['field'=>'dimensi_antenna2',
            'label'=>'DIMENSI ANTENNA RF (2)'],

            ['field'=>'weight_antenna2',
            'label'=>'WEIGHT ANTENNA RF (2)'],

            ['field'=>'azimut_antenna2',
            'label'=>'AZIMUT ANTENNA (2)'],

            ['field'=>'type_mount1',
            'label'=>'TYPE MOUNTING (3)'],

            ['field'=>'antenna_rf1',
            'label'=>'ANTENNA RF/INSTALLAED (3)'],

            ['field'=>'elevasi_antenna3',
            'label'=>'ELEVASI ANTENNA RF (3)'],

            ['field'=>'height_antenna3',
            'label'=>'HEIGHT ANTENNA RF (3)'],

            ['field'=>'dimensi_antenna3',
            'label'=>'DIMENSI ANTENNA RF (3)'],

            ['field'=>'weight_antenna3',
            'label'=>'WEIGHT ANTENNA RF (3)'],

            ['field'=>'azimut_antenna3',
            'label'=>'AZIMUT ANTENNA (3)'],

            ['field'=>'type_mounti1',
            'label'=>'TYPE MOUNTING (1)'],

            ['field'=>'mw1',
            'label'=>'MW/INSTALLAED (1)'],

            ['field'=>'elevasi_mw1',
            'label'=>'ELEVASI MW (1)'],

            ['field'=>'height_mw1',
            'label'=>'HEIGHT MW (1)'],

            ['field'=>'dimensi_mw1',
            'label'=>'DIMENSI MW (1)'],

            ['field'=>'weight_mw1',
            'label'=>'WEIGHT MW (1)'],

            ['field'=>'azimut_mw1',
            'label'=>'AZIMUT MW (1)'],

            ['field'=>'type_mounti2',
            'label'=>'TYPE MOUNTING (2)'],

            ['field'=>'mw2',
            'label'=>'MW/INSTALLAED (2)'],

            ['field'=>'elevasi_mw2',
            'label'=>'ELEVASI MW (2)'],

            ['field'=>'height_mw2',
            'label'=>'HEIGHT MW (2)'],

            ['field'=>'dimensi_mw2',
            'label'=>'DIMENSI MW (2)'],

            ['field'=>'weight_mw2',
            'label'=>'WEIGHT MW (2)'],

            ['field'=>'azimut_mw2',
            'label'=>'AZIMUT MW (2)'],

            ['field'=>'type_mounti3',
            'label'=>'TYPE MOUNTING (3)'],

            ['field'=>'mw3',
            'label'=>'MW/INSTALLAED (3)'],

            ['field'=>'elevasi_mw3',
            'label'=>'ELEVASI MW (3)'],

            ['field'=>'height_mw3',
            'label'=>'HEIGHT MW (3)'],

            ['field'=>'dimensi_mw3',
            'label'=>'DIMENSI MW (3)'],

            ['field'=>'weight_mw3',
            'label'=>'WEIGHT MW (3)'],

            ['field'=>'azimut_mw3',
            'label'=>'AZIMUT MW (3)'],

            ['field'=>'type_mountn1',
            'label'=>'TYPE MOUNTING (1)'],

            ['field'=>'rru1',
            'label'=>'RRU/INSTALLAED (1)'],

            ['field'=>'elevsai_rru1',
            'label'=>'ELEVASI RRU (1)'],

            ['field'=>'height_rru1',
            'label'=>'HEIGHT RRU (1)'],

            ['field'=>'dimensi_rru1',
            'label'=>'DIMENSI RRU (1)'],

            ['field'=>'weight_rru1',
            'label'=>'WEIGHT RRU (1)'],

            ['field'=>'type_mountn2',
            'label'=>'TYPE MOUNTING (2)'],

            ['field'=>'rru2',
            'label'=>'RRU/INSTALLAED (2)'],

            ['field'=>'elevsai_rru2',
            'label'=>'ELEVASI RRU (2)'],

            ['field'=>'height_rru2',
            'label'=>'HEIGHT RRU (2)'],

            ['field'=>'dimensi_rru2',
            'label'=>'DIMENSI RRU (2)'],

            ['field'=>'weight_rru2',
            'label'=>'WEIGHT RRU (2)'],

            ['field'=>'type_mountn3',
            'label'=>'TYPE MOUNTING (3)'],

            ['field'=>'rru3',
            'label'=>'RRU/INSTALLAED (3)'],

            ['field'=>'elevasi_rru3',
            'label'=>'ELEVASI RRU (3)'],

            ['field'=>'height_rru3',
            'label'=>'HEIGHT RRU (3)'],

            ['field'=>'dimensi_rru3',
            'label'=>'DIMENSI RRU (3)'],

            ['field'=>'weight_rru3',
            'label'=>'WEIGHT RRU (3)'],

            ['field'=>'caf1',
            'label'=>'CAF 1'],

            ['field'=>'caf2',
            'label'=>'CAF 2'],

            ['field'=>'caf3',
            'label'=>'CAF 3'],

            ['field'=>'oarf1',
            'label'=>'OA RF (1)'],

            ['field'=>'oarf2',
            'label'=>'OA RF (2)'],

            ['field'=>'oarf3',
            'label'=>'OA RF (3)'],

            ['field'=>'pid_perk',
            'label'=>'PID PERKUATAN'],

            ['field'=>'sow_perk',
            'label'=>'SOW PERKUATAN'],

            ['field'=>'tonase_perk',
            'label'=>'TONASE PERKUATAN'],

            ['field'=>'mitra_perk',
            'label'=>'MITRA PERKUATAN'],

            ['field'=>'pabrikasi_perk',
            'label'=>'Project ID'],

            ['field'=>'apd_perkuatan',
            'label'=>'APD PERKUATAN'],

            ['field'=>'nod_perkuatan',
            'label'=>'NOD PERKUATAN'],

            ['field'=>'rfi_perkuatan',
            'label'=>'RFI PERKUATAN'],

            ['field'=>'bast_perkuatan',
            'label'=>'BAST PERKUATAN'],

            ['field'=>'foto_perkuatan',
            'label'=>'FOTO PERKUATAN']

            ];
      }
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
        
    }
    public function getById($id)
    {
          return $this->db->get_where($this->_table,["project_id"=> $id])->row();
    }
    
      
           
}
// public function detail_data($project_id){
//     return $this->db->where('project_id', $project_id)->get('data')->row();
// }
