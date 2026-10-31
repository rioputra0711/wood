<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Product;

class ProductCatalogSeeder extends Seeder
{
    public function run(): void
    {
        // Categories
        $cat1 = Category::create(['name' => 'Sawn Timber', 'description' => 'Kayu gergajian standar']);
        $cat2 = Category::create(['name' => 'Kiln Dried Wood', 'description' => 'Kayu oven kadar air rendah']);
        $cat3 = Category::create(['name' => 'Wood Panel', 'description' => 'Panel kayu lapis dan olahan']);
        $cat4 = Category::create(['name' => 'Finger Joint / Laminated', 'description' => 'Kayu sambung jari dan laminasi']);
        $cat5 = Category::create(['name' => 'Wood Components', 'description' => 'Komponen siap pakai']);
        $cat6 = Category::create(['name' => 'Custom Order', 'description' => 'Pesanan khusus sesuai spesifikasi']);

        // Suppliers
        $sup1 = Supplier::create([
            'company_name' => 'PT Mozaik Lestari Utama',
            'contact_name' => 'Budi Santoso',
            'email' => 'budi@mozaiklestari.co.id',
            'phone' => '0215551234',
            'address' => 'Jl. Industri Kayu No. 45',
            'city' => 'Semarang',
            'country' => 'Indonesia',
            'zip_code' => '50123'
        ]);

        $sup2 = Supplier::create([
            'company_name' => 'PT Borneo Timber Mandiri',
            'contact_name' => 'Siti Aminah',
            'email' => 'siti@borneotimber.co.id',
            'phone' => '0541555678',
            'address' => 'Jl. Hutan Tropis Blok C2',
            'city' => 'Samarinda',
            'country' => 'Indonesia',
            'zip_code' => '75123'
        ]);

        $sup3 = Supplier::create([
            'company_name' => 'PT Jati Anugerah Sejahtera',
            'contact_name' => 'Hendra Wijaya',
            'email' => 'hendra@jatisejahtera.co.id',
            'phone' => '0274555901',
            'address' => 'Jl. Mebel Raya No. 12',
            'city' => 'Jepara',
            'country' => 'Indonesia',
            'zip_code' => '59419'
        ]);

        $products = [
            [
                'code' => 'TW-A-25',
                'category_id' => $cat1->id,
                'supplier_id' => $sup1->id,
                'name' => 'Jati Grade A',
                'species' => 'Teak / Jati',
                'grade' => 'Grade A',
                'thickness' => 25,
                'width' => 120,
                'length' => 2.00,
                'moisture_content' => 12.0,
                'surface_type' => 'Kiln dried',
                'origin' => 'Java, Indonesia',
                'legal_wood' => true,
                'description' => 'Kayu Jati Grade A pilihan dengan serat lurus dan durabilitas tinggi untuk furniture dan konstruksi premium.',
                'price' => 18500000,
                'stock' => 24,
                'moq' => 1,
                'unit' => 'm3',
                'image_path' => 'images/foto_material.png'
            ],
            [
                'code' => 'MH-K-30',
                'category_id' => $cat2->id,
                'supplier_id' => $sup2->id,
                'name' => 'Mahoni Kiln Dried',
                'species' => 'Mahogany / Mahoni',
                'grade' => 'Grade B',
                'thickness' => 30,
                'width' => 150,
                'length' => 2.40,
                'moisture_content' => 14.0,
                'surface_type' => 'Kiln dried',
                'origin' => 'Sumatra, Indonesia',
                'legal_wood' => true,
                'description' => 'Mahoni kiln dried berkualitas tinggi, stabil dan mudah di-finishing.',
                'price' => 8500000,
                'stock' => 32,
                'moq' => 1,
                'unit' => 'm3',
                'image_path' => 'images/foto_material_1.png'
            ],
            [
                'code' => 'SK-A-25',
                'category_id' => $cat1->id,
                'supplier_id' => $sup3->id,
                'name' => 'Sungkai S4S',
                'species' => 'Sungkai',
                'grade' => 'Grade A',
                'thickness' => 25,
                'width' => 100,
                'length' => 2.00,
                'moisture_content' => 12.0,
                'surface_type' => 'S4S',
                'origin' => 'Kalimantan, Indonesia',
                'legal_wood' => true,
                'description' => 'Sungkai S4S empat sisi serut halus, warna terang cocok untuk interior modern.',
                'price' => 12000000,
                'stock' => 18,
                'moq' => 1,
                'unit' => 'm3',
                'image_path' => 'images/foto_material_2.png'
            ],
            [
                'code' => 'RW-B-30',
                'category_id' => $cat1->id,
                'supplier_id' => $sup1->id,
                'name' => 'Rubber Wood',
                'species' => 'Rubber Wood',
                'grade' => 'Grade B',
                'thickness' => 20,
                'width' => 100,
                'length' => 1.80,
                'moisture_content' => 12.0,
                'surface_type' => 'Kiln dried',
                'origin' => 'Java, Indonesia',
                'legal_wood' => true,
                'description' => 'Kayu karet solid untuk berbagai aplikasi kerajinan dan struktur ringan.',
                'price' => 6800000,
                'stock' => 40,
                'moq' => 1,
                'unit' => 'm3',
                'image_path' => 'images/foto_material_3.png'
            ],
            [
                'code' => 'WP-A-10',
                'category_id' => $cat3->id,
                'supplier_id' => $sup3->id,
                'name' => 'Wood Panel Jati',
                'species' => 'Teak / Jati',
                'grade' => 'Grade A',
                'thickness' => 18,
                'width' => 1220,
                'length' => 2.44,
                'moisture_content' => 10.0,
                'surface_type' => 'Pressed Panel',
                'origin' => 'Java, Indonesia',
                'legal_wood' => true,
                'description' => 'Panel kayu jati lembaran besar siap potong untuk dinding, lantai, dan top table.',
                'price' => 22000000,
                'stock' => 12,
                'moq' => 1,
                'unit' => 'm3',
                'image_path' => 'images/foto_material_4.png'
            ],
            [
                'code' => 'FJ-A-30',
                'category_id' => $cat4->id,
                'supplier_id' => $sup2->id,
                'name' => 'Finger Joint Mahoni',
                'species' => 'Mahogany / Mahoni',
                'grade' => 'Grade A',
                'thickness' => 30,
                'width' => 600,
                'length' => 2.40,
                'moisture_content' => 11.0,
                'surface_type' => 'Laminated',
                'origin' => 'Sumatra, Indonesia',
                'legal_wood' => true,
                'description' => 'Laminasi finger joint mahoni anti melengkung dengan kestabilan dimensi prima.',
                'price' => 20400000,
                'stock' => 9,
                'moq' => 1,
                'unit' => 'm3',
                'image_path' => 'images/foto_material_5.png'
            ]
        ];

        // Add 18 more generated products to reach 24 total
        $speciesList = ['Teak / Jati', 'Mahogany / Mahoni', 'Sungkai', 'Rubber Wood', 'Merbau', 'Kamper'];
        $grades = ['Grade A', 'Grade B', 'FAS'];
        for ($i = 7; $i <= 24; $i++) {
            $sp = $speciesList[array_rand($speciesList)];
            $gr = $grades[array_rand($grades)];
            $products[] = [
                'code' => 'PRD-' . $i . '-' . rand(10,99),
                'category_id' => rand(1, 5),
                'supplier_id' => rand(1, 3),
                'name' => $sp . ' ' . $gr,
                'species' => $sp,
                'grade' => $gr,
                'thickness' => rand(20, 50),
                'width' => rand(100, 300),
                'length' => 2.00,
                'moisture_content' => 12.0,
                'surface_type' => 'Kiln dried',
                'origin' => 'Indonesia',
                'legal_wood' => true,
                'description' => 'Material kayu industri berkualitas tinggi tersertifikasi SVLK.',
                'price' => rand(7000000, 25000000),
                'stock' => rand(10, 50),
                'moq' => 1,
                'unit' => 'm3',
                'image_path' => 'images/foto_material_' . (($i % 6)) . '.png'
            ];
        }

        foreach ($products as $p) {
            Product::create($p);
        }
    }
}
