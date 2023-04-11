<?php

namespace App\Models;

use CodeIgniter\Model;

class MData extends Model
{
    public function getData()
    {
        $query = $this->db->query("select * from tablezakat");
        return $query->getResult();
    }
    public function saveDataFitrah($data)
    {
        $query = $this->db->table('tablezakat')->insert($data);
        return $query;
    }
    public function getSelectData($nik)
    {
        $query = $this->db->query("select * from tablezakat where nik = $nik");
        return $query->getResult();
    }
    public function saveEditDataFitrah($data,$nik)
    {
        $query = $this->db->table('tablezakat')
        ->where('nik',$nik)
        ->update($data);
        return $query;
    }
    public function hapusDataFitrah($nik)
    {
        $query = $this->db->table('tablezakat')
        ->where('nik',$nik)
        ->delete();
        return $query;
    }
}