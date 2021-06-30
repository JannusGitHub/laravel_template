<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\oqcVIR;
use App\Model\ProdPrelimInspection;
use App\User;

class OQCPackingInspection extends Model
{
    protected $table = "oqc_packing_inspections";

    public function employee(){
	    return $this->hasOne(User::class, 'id', 'emp_id');
	}

    public function employee_id(){
        return $this->hasOne(User::class, 'employee_id', 'emp_id');
    }

	    public function prod_prelim_details()
    {
        return $this->hasMany(ProdPrelimInspection::class, 'pack_code_no', 'pack_code_no')->orderBy('operator_judgement','ASC');
    }

    public function oqcvir_details()
    {
        return $this->hasMany(oqcVIR::class, 'packing_code', 'pack_code_no');
    }
}
