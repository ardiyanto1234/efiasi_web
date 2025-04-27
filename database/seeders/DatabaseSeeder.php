<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Cari model Service dengan ID 1
        $service = Service::find(1);

        // Periksa apakah $service ditemukan
        if ($service) {
            // Menentukan laporan yang akan disinkronkan
            $report = [1, 2]; // ID laporan yang ingin disinkronkan

            // Menambahkan hubungan antara laporan dan layanan
            $service->reports()->sync($report);

            echo "Laporan berhasil disinkronkan dengan Service ID 1!";
        } else {
            echo "Service dengan ID 1 tidak ditemukan!";
        }
    }
}


