<?php

namespace App\Exports;

use App\Models\Feedback;
use App\Http\Controllers\FeedbackController;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FeedbackExport implements FromCollection
{
    public function headings():array{
            return [
                "Id",
                "Name",
                "Email",
                "Subject",
                "Message",
                "CreatedAt"
            ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $idi=$_SERVER['REQUEST_URI'];
        $idj=explode('/excel/',$idi);
       return Feedback::select('id','name','email','subject','msg','created_at')->where('id','=',$idj[1])->get();
    }
}
