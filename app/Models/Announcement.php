<?php

namespace App\Models;

use App\Core\FileCreator\FileCreator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function getFileUrl(FileCreator $file_creator) {
        $announcements = $this->getAllAnnouncements();
        $file_url = $file_creator->generateFile($announcements);
        return $file_url;
    }

    private function getAllAnnouncements() {
        return $this->all()->toArray();
    }

}
