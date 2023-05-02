<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_table extends CI_Model
{
      public function view(){
    return $this->db->get('data')->result(); 
  
}

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
      public $apd = "default.jpg";
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
    public function tambah_table()
    {
      $post=$this->input->post();
      $this->project_id = $post["project_id"];
      $this->id_dmt = $post["id_dmt"];
      $this->sow = $post["sow"];
      $this->tenant = $post["tenant"];
      $this->id_actual = $post["id_actual"];
      $this->name_actual = $post["name_actual"];
      $this->status = $post["status"];
      $this->id_owner = $post["id_owner"];
      $this->name_owner = $post["name_owner"];
      $this->pabrikan_tower = $post["pabrikan_tower"];
      $this->type_tower1 = $post["type_tower1"];
      $this->type_tower2 = $post["type_tower2"];
      $this->type_tower3 = $post["type_tower3"];
      $this->height_tower = $post["height_tower"];
      $this->load_tower = $post["load_tower"];
      $this->longtitude = $post["longtitude"];
      $this->latitude = $post["latitude"];
      $this->adress = $post["adress"];
      $this->konsultan = $post["konsultan"];
      $this->sitac = $post["sitac"];
      $this->imb = $post["imb"];
      $this->cme = $post["cme"];
      $this->sacme = $post["sacme"];
      $this->power = $post["power"];
      $this->panel = $post["panel"];
      $this->tower = $post["tower"];
      $this->id_pln = $post["id_pln"];
      $this->daya_pln = $post["daya_pln"];
      $this->rfi = $post["rfi"];
      $this->on_air = $post["on_air"];
      $this->apd = $this->_uploadImage();
      $this->abd = $this->_uploadImage();
      $this->bast = $post["bast"];
      $this->pks = $post["pks"];
      $this->imb_doc = $post["imb_doc"];
      $this->type_mount1 = $post["type_mount1"];
      $this->antenna_rf1 = $post["antenna_rf1"];
      $this->elevasi_antenna1 = $post["elevasi_antenna1"];
      $this->height_antenna1 = $post["height_antenna1"];
      $this->dimensi_antenna1= $post["dimensi_antenna1"];
      $this->weight_antenna1 = $post["weight_antenna1"];
      $this->azimut_antenna1 = $post["azimut_antenna1"];
      $this->type_mount2 = $post["type_mount2"];
      $this->antenna_rf2 = $post["antenna_rf2"];
      $this->elevasi_antenna2 = $post["elevasi_antenna2"];
      $this->height_antenna2 = $post["height_antenna2"];
      $this->dimensi_antenna2 = $post["dimensi_antenna2"];
      $this->weight_antenna2 = $post["weight_antenna2"];
      $this->azimut_antenna2 = $post["azimut_antenna2"];
      $this->type_mount3 = $post["type_mount3"];
      $this->antenna_rf3 = $post["antenna_rf3"];
      $this->elevasi_antenna3 = $post["elevasi_antenna3"];
      $this->height_antenna3 = $post["height_antenna3"];
      $this->dimensi_antenna3 = $post["dimensi_antenna3"];
      $this->weight_antenna3 = $post["weight_antenna3"];
      $this->azimut_antenna3 = $post["azimut_antenna3"];
      $this->type_mounti1 = $post["type_mounti1"];
      $this->mw1 = $post["mw1"];
      $this->elevasi_mw1 = $post["elevasi_mw1"];
      $this->height_mw1 = $post["height_mw1"];
      $this->dimensi_mw1 = $post["dimensi_mw1"];
      $this->weight_mw1 = $post["weight_mw1"];
      $this->azimut_mw1 = $post["azimut_mw1"];
      $this->type_mounti2 = $post["type_mounti2"];
      $this->mw2 = $post["mw2"];
      $this->elevasi_mw2 = $post["elevasi_mw2"];
      $this->height_mw2 = $post["height_mw2"];
      $this->dimensi_mw2 = $post["dimensi_mw2"];
      $this->weight_mw2 = $post["weight_mw2"];
      $this->azimut_mw2 = $post["azimut_mw2"];
      $this->type_mounti3 = $post["type_mounti3"];
      $this->mw3 = $post["mw3"];
      $this->elevasi_mw3 = $post["elevasi_mw3"];
      $this->height_mw3 = $post["height_mw3"];
      $this->dimensi_mw3 = $post["dimensi_mw3"];
      $this->weight_mw3 = $post["weight_mw3"];
      $this->azimut_mw3 = $post["azimut_mw3"];
      $this->type_mountn1 = $post["type_mountn1"];
      $this->rru1 = $post["rru1"];
      $this->elevasi_rru1 = $post["elevasi_rru1"];
      $this->height_rru1 = $post["height_rru1"];
      $this->dimensi_rru1 = $post["dimensi_rru1"];
      $this->weight_rru1 = $post["weight_rru1"];
      $this->type_mountn2 = $post["type_mountn2"];
      $this->rru2 = $post["rru2"];
      $this->elevasi_rru2 = $post["elevasi_rru2"];
      $this->height_rru2 = $post["height_rru2"];
      $this->dimensi_rru2 = $post["dimensi_rru2"];
      $this->weight_rru2 = $post["weight_rru2"];
      $this->type_mountn3 = $post["type_mountn3"];
      $this->rru3 = $post["rru3"];
      $this->elevasi_rru3 = $post["elevasi_rru3"];
      $this->height_rru3 = $post["height_rru3"];
      $this->dimensi_rru3 = $post["dimensi_rru3"];
      $this->weight_rru3 = $post["weight_rru3"];
      $this->caf1 = $post["caf1"];
      $this->caf2 = $post["caf2"];
      $this->caf3 = $post["caf3"];
      $this->oarf1 = $post["oarf1"];
      $this->oarf2 = $post["oarf2"];
      $this->oarf3 = $post["oarf3"];
      $this->pid_perk = $post["pid_perk"];
      $this->sow_perk = $post["sow_perk"];
      $this->tonase_perk = $post["tonase_perk"];
      $this->mitra_perk = $post["mitra_perk"];
      $this->pabrikasi_perk = $post["pabrikasi_perk"];
      $this->apd_perkuatan = $post["apd_perkuatan"];
      $this->nod_perkuatan = $post["nod_perkuatan"];
      $this->rfi_perkuatan = $post["rfi_perkuatan"];
      $this->bast_perkuatan = $post["bast_perkuatan"];
      $this->foto_perkuatan = $post["foto_perkuatan"];
      $this->db->insert($this->_table,$this);
}
public function update()
    {
        $post = $this->input->post();
        $this->project_id = $post["id"];
        $this->id_dmt = $post["id_dmt"];
        $this->sow = $post["sow"];
        $this->tenant = $post["tenant"];
        $this->id_actual = $post["id_actual"];
        $this->name_actual= $post["name_actual"];
        $this->status = $post["status"];
        $this->id_owner = $post["id_owner"];
        $this->name_owner= $post["name_owner"];
        $this->tower_owner= $post["tower_owner"];
        $this->pabrikan_tower = $post["pabrikan_tower"];
        $this->type_tower1= $post["type_tower1"];
        $this->type_tower2 = $post["type_tower2"];
        $this->type_tower3 = $post["type_tower3"];
        $this->height_tower = $post["height_tower"];
        $this->load_tower = $post["load_tower"];
        $this->longtitude = $post["longtitude"];
        $this->latitude= $post["latitude"];
        $this->adress = $post["adress"];
        $this->konsultan = $post["konsultan"];
        $this->sitac = $post["sitac"];
        $this->imb= $post["imb"];
        $this->cme = $post["cme"];
        $this->sacme= $post["sacme"];
        $this->power = $post["power"];
        $this->panel = $post["panel"];
        $this->tower= $post["tower"];
        $this->id_pln = $post["id_pln"];
        $this->daya_pln = $post["daya_pln"];
        $this->rfi= $post["rfi"];
        $this->on_air = $post["on_air"];
        // $this->apd = $post["apd"];
        if(!empty($_FILES["apd"]["name"])){
            $this->apd = $this->_uploadImage();
        }else{
            $this->apd=$post["old_image"];
        }
        $this->abd= $post["abd"];
        $this->bast= $post["bast"];
        $this->pks = $post["pks"];
        $this->imb_doc= $post["imb_doc"];
        $this->type_mount1 = $post["type_mount1"];
        $this->antenna_rf1 = $post["antenna_rf1"];
        $this->elevasi_antenna1 = $post["elevasi_antenna1"];
        $this->height_antenna1= $post["height_antenna1"];
        $this->dimensi_antenna1 = $post["dimensi_antenna1"];
        $this->weight_antenna1= $post["weight_antenna1"];
        $this->azimut_antenna1 = $post["azimut_antenna1"];
        $this->type_mount2 = $post["type_mount2"];
        $this->antenna_rf2 = $post["antenna_rf2"];
        $this->elevasi_antenna2 = $post["elevasi_antenna2"];
        $this->height_antenna2 = $post["height_antenna2"];
        $this->dimensi_antenna2= $post["dimensi_antenna2"];
        $this->weight_antenna2 = $post["weight_antenna2"];
        $this->azimut_antenna2 = $post["azimut_antenna2"];
        $this->type_mount3 = $post["type_mount3"];
        $this->antenna_rf3 = $post["antenna_rf3"];
        $this->elevasi_antenna3 = $post["elevasi_antenna3"];
        $this->height_antenna3= $post["height_antenna3"];
        $this->dimensi_antenna3 = $post["dimensi_antenna3"];
        $this->weight_antenna3 = $post["weight_antenna3"];
        $this->azimut_antenna3 = $post["azimut_antenna3"];
        $this->type_mounti1 = $post["type_mounti1"];
        $this->mw1 = $post["mw1"];
        $this->elevasi_mw1= $post["elevasi_mw1"];
        $this->height_mw1 = $post["height_mw1"];
        $this->dimensi_mw1 = $post["dimensi_mw1"];
        $this->weight_mw1 = $post["weight_mw1"];
        $this->azimut_mw1 = $post["azimut_mw1"];
        $this->type_mounti2= $post["type_mounti2"];
        $this->mw2= $post["mw2"];
        $this->elevasi_mw2= $post["elevasi_mw2"];
        $this->height_mw2 = $post["height_mw2"];
        $this->dimensi_mw2= $post["dimensi_mw2"];
        $this->weight_mw2= $post["weight_mw2"];
        $this->azimut_mw2 = $post["azimut_mw2"];
        $this->type_mounti3= $post["type_mounti3"];
        $this->mw3= $post["mw3"];
        $this->elevasi_mw3 = $post["elevasi_mw3"];
        $this->height_mw3 = $post["height_mw3"];
        $this->dimensi_mw3 = $post["dimensi_mw3"];
        $this->weight_mw3 = $post["weight_mw3"];
        $this->azimut_mw3= $post["azimut_mw3"]; 
        $this->type_mountn1 = $post["type_mountn1"];
        $this->rru1 = $post["rru1"];
        $this->elevsai_rru1 = $post["elevsai_rru1"];
        $this->height_rru1= $post["height_rru1"];
        $this->dimensi_rru1 = $post["dimensi_rru1"];
        $this->weight_rru1= $post["weight_rru1"];
        $this->type_mountn2 = $post["type_mountn2"];
        $this->rru2 = $post["rru2"];
        $this->elevsai_rru2= $post["elevsai_rru2"];
        $this->height_rru2 = $post["height_rru2"];
        $this->dimensi_rru2 = $post["dimensi_rru2"];
        $this->weight_rru2 =$post ["weight_rru2"];
        $this->type_mountn3= $post["type_mountn3"];
        $this->rru3 = $post["rru3"];
        $this->elevasi_rru3= $post["elevasi_rru3"];
        $this->height_rru3 = $post["height_rru3"];
        $this->dimensi_rru3 = $post["dimensi_rru3"];
        $this->weight_rru3= $post["weight_rru3"];
        $this->caf1 = $post["caf1"];
        $this->caf2 = $post["caf2"];
        $this->caf3 = $post["caf3"];
        $this->oarf1 = $post["oarf1"];
        $this->oarf2 = $post["oarf2"];
        $this->oarf3= $post["oarf3"];
        $this->pid_perk = $post["pid_perk"];
        $this->sow_perk = $post["sow_perk"];
        $this->tonase_perk= $post["tonase_perk"];
        $this->mitra_perk = $post["mitra_perk"];
        $this->pabrikasi_perk = $post["pabrikasi_perk"];
        $this->apd_perkuatan= $post["apd_perkuatan"];
        $this->nod_perkuatan= $post["nod_perkuatan"];
        $this->rfi_perkuatan = $post["rfi_perkuatan"];
        $this->bast_perkuatan= $post["bast_perkuatan"];
        $this->foto_perkuatan = $post["foto_perkuatan"];
       
        $this->db->update($this->_table, $this, array('project_id' => $post['id']));
    }
      
      private function _uploadImage()
{
      $data = array();
    $config['upload_path']          = './upload/';
    $config['allowed_types']        = 'pdf';
    $config['encrypt_name']            = true;
    $config['overwrite']                  = true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('apd')) {
         $error = array('error' => $this->upload->display_errors());
  } else {
    $fileData = $this->upload->data();
    $data['apd'] = $fileData['file_name'];
  }
  if (!$this->upload->do_upload('abd')) {
    $error = array('error' => $this->upload->display_errors()); 
  } else {
    $fileData = $this->upload->data();
    $data['abd'] = $fileData['file_name'];
  }
    
}



     
public function hapus($project_id)
    {
        $delete=$this->db->where('project_id', $project_id)->delete('data');
        return $delete;
    }
      public function upload_file($filename){
    $this->load->library('upload');
    
    $config['upload_path'] = './excel/';
    $config['allowed_types'] = 'xlsx';
    $config['max_size']  = '2048';
    $config['overwrite'] = true;
    $config['file_name'] = $filename;
  
    $this->upload->initialize($config); // Load konfigurasi uploadnya
    if($this->upload->do_upload('file')){ // Lakukan upload dan Cek jika proses upload berhasil
      // Jika berhasil :
      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      return $return;
    }else{
      // Jika gagal :
      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      return $return;
    }
  }
           
}
// public function detail_data($project_id){
//     return $this->db->where('project_id', $project_id)->get('data')->row();
// }
