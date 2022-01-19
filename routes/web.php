<?php

use App\Http\Controllers\PdfController;

use Illuminate\Support\Facades\Route;

 

/*

|--------------------------------------------------------------------------

| Web Routes

|--------------------------------------------------------------------------

*/

 

Route::get('download-pdf', [PdfController::class, 'downloadPDF']); 

 