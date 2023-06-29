<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
  
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'product-list',
           'product-create',
           'product-edit',
           'product-delete',
           'blog-list',
           'blog-create',
           'blog-edit',
           'blog-delete',
           'counter-list',
           'counter-create',
           'counter-edit',
           'counter-delete',
           'image-list',
           'image-create',
           'image-edit',
           'image-delete',
           'page-list',
           'page-create',
           'page-edit',
           'page-delete',
           'portfolio-list',
           'portfolio-create',
           'portfolio-edit',
           'portfolio-delete',
           'service-list',
           'service-create',
           'service-edit',
           'service-delete',
           'setting-list',
           'setting-create',
           'setting-edit',
           'setting-delete',
           'slider-list',
           'slider-create',
           'slider-edit',
           'slider-delete',
           'video-list',
           'video-create',
           'video-edit',
           'video-delete'
        ];
     
        foreach ($permissions as $permission) {
             Permission::updateOrCreate(['name' => $permission]);
        }
    }
}