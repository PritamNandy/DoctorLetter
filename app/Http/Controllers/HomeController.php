<?php

namespace App\Http\Controllers;

use App\Models\Dataset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function generateLetter($id) {
        $dataset = Dataset::where('patient_id', $id)->first();
        return view('generate_letter', [
            'patient_id' => $id,
            'dataset' => $dataset
        ]);
    }

    function saveLetter(Request $request) {
        $dataset = Dataset::where('patient_id', $request->input('id'))->first();

        if(isset($dataset->id)) {
            Dataset::where('id', $dataset->id)->update([
                'introduction' => $request->input('introduction'),
                'diagnosis' => $request->input('diagnosis'),
                'anamnesis' => $request->input('anamnesis'),
                'physical_examination' => $request->input('physical_examination'),
                'summary' => $request->input('summary'),
                'medication' => $request->input('medication'),
                'diagnostics' => $request->input('diagnostics'),
                'patient_id' => $request->input('id'),
                'date' => date('Y-m-d H:i:s'),
                'doctor_details' => $request->input('doctor_details')
            ]);

            $dataset = Dataset::find($dataset->id);
            return Redirect::to('generated-letter/'. $dataset->id);
        } else {
            $dataset = Dataset::create([
                'introduction' => $request->input('introduction'),
                'diagnosis' => $request->input('diagnosis'),
                'anamnesis' => $request->input('anamnesis'),
                'physical_examination' => $request->input('physical_examination'),
                'summary' => $request->input('summary'),
                'medication' => $request->input('medication'),
                'diagnostics' => $request->input('diagnostics'),
                'patient_id' => $request->input('id'),
                'date' => date('Y-m-d H:i:s'),
                'doctor_details' => $request->input('doctor_details')
            ]);

            return Redirect::to('generated-letter/'. $dataset['id']);
        }
    }

    function letter($id) {
        $dataset = Dataset::find($id);
        return view('letter', [
            'dataset' => $dataset,
            'patient_id' => $dataset->patient_id
        ]);
    }
}
