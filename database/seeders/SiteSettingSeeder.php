<?php

namespace Database\Seeders;

use App\Models\Admin\Setting\SiteSetting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteSetting::create([
            'site_title'          => 'Auction leader',
            'email'               => 'admin@gmail.com',
            'telephone_no'        => '+8802-41060363',
            'working_time'        => '9.00-7.00',
            'working_day'         => '7',
            'address'             => 'jessore',
            'mobile_no'           => '+8801752432027',
            'facebook_group_link' => 'https://www.facebook.com/?_rdc=2&_rdr',
            'facebook_page_link'  => 'https://www.facebook.com/groups/feed/',
            'facebook_link'       => 'https://www.facebook.com/pages/?category=your_pages&ref=bookmarks',
            'twitter_link'        => 'https://twitter.com/home',
            'instagram_link'      => 'https://www.instagram.com/?hl=en',
            'linkedin_link'       => 'https://www.linkedin.com/signup',
            'youtube_link'        => 'https://www.youtube.com/',
        ]);
    }
}
