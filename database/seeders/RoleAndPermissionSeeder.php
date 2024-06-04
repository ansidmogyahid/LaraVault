<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('roles')->truncate();
        DB::table('permissions')->truncate();
        DB::table('role_has_permissions')->truncate();

        $roles_permissions = [
            "project manager" => ["create projects", "assign tasks", "manage resources", "monitor progress"],
            "backend developer" => ["develop server-side logic", "create APIs", "handle database operations", "implement business logic"],
            "frontend developer" => ["build user interfaces", "implement client-side interactions", "integrate with frontend frameworks"],
            "database administrator" => ["design database schemas", "optimize queries", "ensure data integrity", "manage backups"],
            "devops engineer" => ["configure servers", "set up environments", "implement CI/CD pipelines", "manage infrastructure"],
            "quality assurance (qa) engineer" => ["write test cases", "execute tests", "identify bugs", "ensure code quality"],
            "security expert" => ["identify vulnerabilities", "implement security best practices", "ensure compliance", "perform audits"],
            "technical writer/documentation specialist" => ["create user guides", "write API documentation", "maintain project documentation"],
            "ui/ux designer" => ["design user interfaces", "create wireframes", "conduct usability testing", "ensure accessibility"],
            "business analyst" => ["gather requirements", "translate requirements to specifications", "ensure business goals", "communicate with stakeholders"]
        ];

        foreach ($roles_permissions as $roleKey => $permissions) {
            $role = Role::create(['name' => $roleKey]);

            foreach ($permissions as $permission) {
                $permissionObj = Permission::create(['name' => $permission]);
                $role->givePermissionTo($permissionObj);
            }
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}

