<?php

namespace App\Http\Controllers;

use App\Core\FileCreator\XMLFileCreator;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;



class MainController extends Controller
{
    public $announcement;

    public function __construct(Announcement $announcement) {
        $this->announcement = $announcement;
    }

    public function mainAction() {
        return view('app');
    }

    public function exportAll(Request $request) {
        $request->validate([
            'type' => [
                'required',
                Rule::in(['xml']),
            ],
        ]);
        $type = $request->get('type');
        if($type === "xml") {
            $url = $this->announcement->getFileUrl(new XMLFileCreator());
            return $url;
        }
        abort(400, 'Тип експорту указаний не вірно.');
    }

}
