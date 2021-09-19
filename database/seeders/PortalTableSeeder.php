<?php

namespace Database\Seeders;

use App\Models\Portal\Category;
use App\Models\Portal\Galery;
use App\Models\Portal\Management;
use App\Models\Portal\Post;
use App\Models\Portal\Testimonial;
use App\Models\Portal\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = [
            ['app_name', 'PORTAL RESMI'],
            ['app_desc', 'Website MTs Darul Hikmah Menganti Merupakan Media Informasi dan Komunikasi Guna Pelayanan yang Lebih Optimal.'],
            ['app_favicon', 'storage/portal/images/favicon.png'],
            ['app_logo', 'storage/portal/images/logo.png'],
            ['app_logo_retina', 'storage/portal/images/logo@2x.png'],
            ['app_address', 'Jl. Bugel - Jepara KM 7'],
            ['app_village', 'Krapyak'],
            ['app_subdistric', 'Tahunan'],
            ['app_distric', 'Jepara'],
            ['app_province', 'Jawa Tengah'],
            ['app_phone', '(0291) 6664-7867'],
            ['app_email', 'info@kkmts02jepara.org'],
        ];

        for ($i=0;$i<count($setting);$i++){
            DB::table('portal_entity__settings')->insert([
                'setting_name' => $setting[$i][0],
                'setting_value' => $setting[$i][1]
            ]);
        }

        $menu = [
            ['', 'Beranda', 'http://localhost:8080'],
            ['', 'Profil Organisasi', '#'],
            ['2', 'Sejarah', '#'],
            ['2', 'Struktur Pengurus', '#'],
            ['2', 'Data Pengurus', '#'],
            ['2', 'Data Anggota', '#'],
            ['', 'Galeri Kegiatan', '#'],
            ['', 'Pengumuman', '#'],
            ['', 'Artikel', 'http://localhost:8080/artikel'],
            ['', 'Unduhan', '#']
        ];

        for ($i=0;$i<count($menu);$i++){
            DB::table('portal_entity__menus')->insert([
                'menu_parent' => $menu[$i][0],
                'menu_name' => $menu[$i][1],
                'menu_link' => $menu[$i][2]
            ]);
        }

        $section = [
            ['home_section_1_title', 'WHAT WE DO?'],
            ['home_section_1_subtitle', 'The service we offer is specifically designed to meet your needs.'],
            ['home_section_1_1_icon', 'uil uil-phone-volume'],
            ['home_section_1_1_title', '24/7 Support'],
            ['home_section_1_1_content', 'Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla.'],
            ['home_section_1_1_link', '#'],
            ['home_section_1_2_icon', 'uil uil-shield-exclamation'],
            ['home_section_1_2_title', 'Secure Payments'],
            ['home_section_1_2_content', 'Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla.'],
            ['home_section_1_2_link', '#'],
            ['home_section_1_3_icon', 'uil uil-laptop-cloud'],
            ['home_section_1_3_title', 'Daily Updates'],
            ['home_section_1_3_content', 'Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla.'],
            ['home_section_1_3_link', '#'],
            ['home_section_1_4_icon', 'uil uil-chart-line'],
            ['home_section_1_4_title', 'Market Research'],
            ['home_section_1_4_content', 'Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla.'],
            ['home_section_1_4_link', '#'],
            ['home_section_2_yotube', 'https://www.youtube.com/watch?v=WwRRVwh2A2k'],
            ['home_section_2_image', 'storage/portal/images/photos/about12.jpg'],
            ['home_section_2_image_retina', 'storage/portal/images/photos/about12@2x.jpg'],
            ['home_section_2_title', 'Sambutan'],
            ['home_section_2_subtitle', 'Ketua KKMTs.02 Jepara'],
            ['home_section_2_content', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.'],
            ['home_section_3_title', 'MENEJEMEN/PENGURUS'],
            ['home_section_3_subtitle', 'KKMTs.02 Jepara'],
            ['home_section_3_content', 'Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros tempus porttitor.'],
        ];

        for ($i=0;$i<count($section);$i++){
            DB::table('portal_entity__sections')->insert([
                'section_name' => $section[$i][0],
                'section_content' => $section[$i][1]
            ]);
        }

        $roles = [
            ['Administrator', 'Hak Akses Administrator'],
            ['Penulis & Editor', 'Hak Akses Penulis & Editor'],
            ['Operator Madrasah', 'Hak Akses Administrator Madrasah']
        ];

        for ($i=0;$i<count($roles);$i++){
            DB::table('portal_entity__roles')->insert([
                'role_name' => $roles[$i][0],
                'role_desc' => $roles[$i][1]
            ]);
        }

        Post::factory(20)->create();
        Galery::factory(5)->create();
        Management::factory(7)->create();
        Testimonial::factory(5)->create();
        Category::factory(10)->create();
        User::factory(5)->create();
    }
}
