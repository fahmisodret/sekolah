<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->truncate();
        DB::table('settings')->insert(['key' => 'email', 'value' => 'sekolah@sekolah.com']);
        DB::table('settings')->insert(['key' => 'telp', 'value' => '021-xxxx-xxxx']);
        DB::table('settings')->insert(['key' => 'alamat', 'value' => '-']);
        DB::table('settings')->insert(['key' => 'visi', 'value' => 'Nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc bairuka. Vulputate enim nulla aliquet porttitor. Eget duis at tellus at urna condimentum mattis. Ut tellus elementum sagittis vitae nam aliquam.']);
        DB::table('settings')->insert(['key' => 'misi', 'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris pharetras et ultrices neque ornare aenean euismod elementum nisi. Sagittis purus sit amet volutpat consequat mauris. Non arcu risus quis varius quam quisque id diam. Libero nunc consequat interdum varius sit. Nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc bairuka. Vulputate enim nulla aliquet porttitor. Eget duis at tellus at urna condimentum mattis. Ut tellus elementum sagittis vitae nam aliquam.']);
        DB::table('settings')->insert(['key' => 'about', 'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris pharetras et ultrices neque ornare aenean euismod elementum nisi. Sagittis purus sit amet volutpat consequat mauris. Non arcu risus quis varius quam quisque id diam. Libero nunc consequat interdum varius sit. Nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc bairuka. Vulputate enim nulla aliquet porttitor. Eget duis at tellus at urna condimentum mattis. Ut tellus elementum sagittis vitae nam aliquam.']);
        DB::table('settings')->insert(['key' => 'map', 'value' => '']);
        DB::table('settings')->insert(['key' => 'video', 'value' => '']);

        DB::table('settings')->insert(['key' => 'blog_meta_title', 'value' => 'SDN 1 MAGERSARI']);
        DB::table('settings')->insert(['key' => 'blog_meta_author', 'value' => '']);
        DB::table('settings')->insert(['key' => 'blog_meta_description', 'value' => 'SDN 1 MAGERSARI']);
        DB::table('settings')->insert(['key' => 'blog_meta_keywords', 'value' => 'sekolah,negeri,terbaik,sni']);
        DB::table('settings')->insert(['key' => 'blog_meta_robots', 'value' => '']);
        DB::table('settings')->insert(['key' => 'blog_disqus_shortname', 'value' => '']);
        DB::table('settings')->insert(['key' => 'blog_google_analytics_id', 'value' => '']);
    }
}
