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
           'faq-list',
           'faq-create',
           'faq-edit',
           'faq-delete',
           'complain-list',
           'complain-create',
           'complain-edit',
           'complain-delete',
           'vaccancy-list',
           'vaccancy-create',
           'vaccancy-edit',
           'vaccancy-delete',
           'counter-list',
           'counter-create',
           'counter-edit',
           'counter-delete',
           'contact-list',
           'contact-create',
           'contact-edit',
           'contact-delete',
           'image-list',
           'image-create',
           'image-edit',
           'image-delete',
           'task-list',
           'task-create',
           'task-edit',
           'task-delete',
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
           'testimonial-list',
           'testimonial-create',
           'testimonial-edit',
           'testimonial-delete',
           'category-list',
           'category-create',
           'category-edit',
           'category-delete',
           'product-list',
           'product-create',
           'product-edit',
           'product-delete',
           'process-list',
           'process-create',
           'process-edit',
           'process-delete',
           'setting-list',
           'setting-create',
           'setting-edit',
           'setting-delete',
           'partner-list',
           'partner-create',
           'partner-edit',
           'partner-delete',
           'team-list',
           'team-create',
           'team-edit',
           'team-delete',
           'video-list',
           'video-create',
           'video-edit',
           'video-delete',
           'user-list',
           'user-create',
           'user-edit',
           'user-delete',
           'admin-list',
           'admin-create',
           'admin-edit',
           'admin-delete',
           'message-list',
           'message-delete',
           'message-reply',
           'newsletter-list',
           'newsletter-delete',
           'newsletter-reply',
        ];

        foreach ($permissions as $permission) {
             Permission::updateOrCreate(['name' => $permission,'guard_name'=>'admin']);
        }
    }
}
