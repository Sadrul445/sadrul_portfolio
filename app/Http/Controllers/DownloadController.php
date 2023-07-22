<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function downloadCV()
    {
        $filePath = public_path('assets/cv/M.S.Sadrul_Pasha_Chowdhury_CV_23_07_23.pdf'); // Update the file path accordingly

        return response()->download($filePath, 'M.S.Sadrul_Pasha_Chowdhury_CV_23_07_23.pdf');
    }
}
