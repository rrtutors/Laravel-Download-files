<?php

 

namespace App\Http\Controllers;

Use PDF;

use Illuminate\Http\Request;

 

class PdfController extends Controller

{

    public function downloadPDF(){

        $data = [

           "full_name"=> "john do",

           "email"=> "john@example.com",

           "age"=>"23",

           "phone"=>"998877XXXX",

        ];

        $pdf = PDF::loadView('Sample_pdf',$data);

        return $pdf->download('teknowize.pdf');

    }

}  



