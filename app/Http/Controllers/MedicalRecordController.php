<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MedicalRecord;

class MedicalRecordController extends Controller
{
    public function index() {
        return MedicalRecord::with('user', 'pet_type', 'pet_size')->get();
    }

    public function show(MedicalRecord $medicalRecord) {
        return $medicalRecord;
    }

    public function save(Request $request){
        $medicalRecord = MedicalRecord::create($request->all());
        return response()->json($medicalRecord, 201);
    }

    public function update(Request $request, MedicalRecord $medicalRecord) {        

        $medicalRecord->update($request->all());
        return response()->json($article, 200);        
    }

    public function delete(MedicalRecord $medicalRecord) {        
        $medicalRecord->delete();
        return response()->json(null, 204);
    }
}
