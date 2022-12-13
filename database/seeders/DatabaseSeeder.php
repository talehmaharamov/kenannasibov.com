<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\About;
use App\Models\AboutTranslation;
use App\Models\MetaTag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $role = Role::create(['name' => 'admin']);
        $role = Role::create(['name' => 'writer']);
        $role = Role::create(['name' => 'seo']);

        $tags = MetaTag::create(['attribute' => 'name', 'attribute_name' => 'keywords', 'content' => 'DXC', 'status' => 1]);
        $tags = MetaTag::create(['attribute' => 'name', 'attribute_name' => 'description', 'content' => 'DXC', 'status' => 1]);
        $tags = MetaTag::create(['attribute' => 'name', 'attribute_name' => 'robots', 'content' => 'index, follow', 'status' => 1]);

        $about = new About();
        $about->photo = 'firstPhoto';
        $about->save();
        foreach (active_langs() as $lang) {
            $trans = new AboutTranslation();
            $trans->about_id = $about->id;
            $trans->title = 'Example';
            $trans->description = 'firstPhoto';
            $trans->locale = $lang->code;
            $trans->save();
        }
//        $user = User::create([
//            'name' => 'Admin DXC',
//            'email' => 'admin@dxc.az',
//            'password' => '$2y$10$hcn0QuYc5NOiKrjaNMGNIeITHW3bzJ6UeTVWWg/1ZaFQ8eXX1Incm' //Password
//        ]);
//        $seo = User::create([
//            'name' => 'Seo DXC',
//            'email' => 'seo@dxc.az',
//            'password' => '$2y$10$hcn0QuYc5NOiKrjaNMGNIeITHW3bzJ6UeTVWWg/1ZaFQ8eXX1Incm' //Password
//        ]);
//        $writer = User::create([
//            'name' => 'Writer DXC',
//            'email' => 'writer@dxc.az',
//            'password' => '$2y$10$hcn0QuYc5NOiKrjaNMGNIeITHW3bzJ6UeTVWWg/1ZaFQ8eXX1Incm' //Password
//        ]);
//        $user->assignRole('admin');
//        $seo->assignRole('seo');
//        $writer->assingRole('writer');
    }
}
