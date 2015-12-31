<?php

use App\Article;
use App\ContentArea;
use App\Template;
use App\Page;
use App\Permission;
use App\Permission_User;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('UserTableSeeder');
        $this->command->info('User table seeded!');

        $this->call('PermissionTableSeeder');
        $this->command->info('Permission table seeded!');

        $this->call('PageTableSeeder');
        $this->command->info('Page table seeded!');

        $this->call('AreaTableSeeder');
        $this->command->info('Area table seeded!');

        $this->call('ArticleTableSeeder');
        $this->command->info('Article table seeded!');

        $this->call('TemplateTableSeeder');
        $this->command->info('Template table seeded!');

        $this->call('PermissionUserTableSeeder');
        $this->command->info('Permission_User table seeded!');
    }
}//end of DatabaseSeeder class

class UserTableSeeder extends Seeder
{
    /**
     * This function seeds the users table.
     */
    public function run()
    {
        DB::table('users')->delete();

        User::create([
            'FirstName' => 'John',
            'LastName' => 'Doe',
            'email' => 'findlay@example.com',
            'password' => 'password',
            'created_by' => 1,
            'modified_by' => 1
        ]);

        User::create([
            'FirstName' => 'Ted',
            'LastName' => 'Foy',
            'email' => 'ted@example.com',
            'password' => 'password',
            'created_by' => 1,
            'modified_by' => 1
        ]);

        User::create([
            'FirstName' => 'Tim',
            'LastName' => 'Smith',
            'email' => 'tim@example.com',
            'password' => 'password',
            'created_by' => 1,
            'modified_by' => 1
        ]);

        User::create([
            'FirstName' => 'Bob',
            'LastName' => 'Kit',
            'email' => 'bob@example.com',
            'password' => 'password',
            'created_by' => 1,
            'modified_by' => 1
        ]);

        foreach (DB::table("users")->get() as $user) {
            DB::table("users")
                ->where("id", $user->id)
                ->update(array("password" => Hash::make($user->password)));
        }
    }
}//end of UserTableSeeder class

class PermissionTableSeeder extends Seeder
{
    /**
     * This function seeds the permissions lookup table.
     */
    public function run()
    {
        DB::table('permissions')->delete();

        $permission1 = Permission::create([
            'id' => '1',
            'permission_id'=> '1',
            'permission_description' => 'Administrator'
        ]);

        $permission2 = Permission::create([
            'id' => '2',
            'permission_id'=> '2',
            'permission_description' => 'Editor'
        ]);

        $permission3 = Permission::create([
            'id' => '3',
            'permission_id'=> '3',
            'permission_description' => 'Author'
        ]);
    }
}//end of PermissionTableSeeder class

class PageTableSeeder extends Seeder
{
    /**
     * This function seeds the pages table.
     */
    public function run()
    {
        DB::table('pages')->delete();

        Page::create([
            'name' => 'Home Page',
            'alias' => 'home',
            'description' => 'The home or landing page for the website',
            'created_by' => 2,
            'modified_by' => 2
        ]);

        Page::create([
            'name' => 'About Us',
            'alias' => 'about',
            'description' => 'The personal information page for the website',
            'created_by' => 2,
            'modified_by' => 2
        ]);

        Page::create([
            'name' => 'Our History',
            'alias' => 'history',
            'description' => 'The history page for the website',
            'created_by' => 2,
            'modified_by' => 2
        ]);
    }
}//end of PageTableSeeder class

class AreaTableSeeder extends Seeder
{
    /**
     * This function seeds the areas table.
     */
    public function run()
    {
        DB::table('content_areas')->delete();

        ContentArea::create([
            'name' => 'Header',
            'orderBy' => '0',
            'description' => 'The header area for the website',
            'created_by' => 2,
            'modified_by' => 2
        ]);

        ContentArea::create([
            'name' => 'Main',
            'orderBy' => '1',
            'description' => 'The main area for the website',
            'created_by' => 2,
            'modified_by' => 2
        ]);

        ContentArea::create([
            'name' => 'Footer',
            'orderBy' => '2',
            'description' => 'The footer area for the website',
            'created_by' => 2,
            'modified_by' => 2
        ]);
    }
}//end of AreaTableSeeder class

class ArticleTableSeeder extends Seeder
{
    /**
     * This function seeds the articles table.
     */
    public function run()
    {
        DB::table('articles')->delete();

        Article::create([
            'title' => 'Header Sticky',
            'html' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat mauris vel nisi volutpat, eu pretium ligula interdum. Donec malesuada consequat congue. In semper lacus eget nibh porttitor elementum. Sed vel pharetra ligula. Fusce erat massa, lobortis eu gravida venenatis, fringilla in ligula. Nulla vitae nisi lorem. Morbi mattis semper lacus, vel fermentum neque molestie et. Nunc vehicula ligula eget libero dignissim, vitae tristique metus malesuada. Duis et tellus vel ex pulvinar malesuada ac ac leo. In ullamcorper purus nec lorem euismod, id sollicitudin arcu lobortis. Donec iaculis tellus eget augue eleifend, at dignissim ante mollis.</p>',
            'area' => 1,
            'description' => 'asdf',
            'page' => 0,
            'created_by' => 2,
            'modified_by' => 2
        ]);

        Article::create([
            'title' => 'Article 2',
            'html' => '<p>Nullam vel imperdiet dui. Cras mattis sapien mauris. Cras felis augue, dignissim fermentum interdum et, semper ut purus. Maecenas rutrum ac sem eu aliquet. Ut et mi laoreet, venenatis magna sed, commodo mauris. Maecenas orci elit, tempus et faucibus a, dapibus quis ex. Sed et velit vulputate, vestibulum metus vitae, luctus justo. Cras in finibus orci. In mattis neque quis ipsum efficitur finibus. Suspendisse vitae pellentesque justo. Quisque nec ligula lorem.</p>',
            'description' => 'asdf',
            'area' => 2,
            'page' => 1,
            'created_by' => 2,
            'modified_by' => 2
        ]);

        Article::create([
            'title' => 'Article 3',
            'description' => 'asdf',
            'html' => '<p>Integer non felis ut sapien blandit viverra et quis massa. Proin tempus condimentum mattis. Praesent a ex vel dolor aliquam condimentum ac sed libero. Sed nec orci sit amet diam fringilla venenatis nec quis risus. Curabitur at nisl id purus hendrerit gravida vel vel enim. Aliquam pretium velit nibh, sit amet mollis erat ullamcorper a. Etiam commodo tortor eget consectetur facilisis. Integer ac lacus quis lacus laoreet feugiat nec at lacus. Duis interdum arcu et sem efficitur facilisis. In a porttitor metus, ut rhoncus sapien. Fusce non orci eget tortor scelerisque mattis non et ligula. Fusce laoreet gravida commodo. Nunc sed aliquam risus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>',
            'area' => 3,
            'page' => 1,
            'created_by' => 2,
            'modified_by' => 2
        ]);

        Article::create([
            'title' => 'Main Sticky',
            'description' => 'asdf',
            'html' => '<p>This will show in all main content areas.</p>',
            'area' => 2,
            'page' => 0,
            'created_by' => 2,
            'modified_by' => 2
        ]);

        Article::create([
            'title' => 'Footer Sticky',
            'description' => 'asdf',
            'html' => '<span>Copyright &copy; 2016</span>',
            'area' => 3,
            'page' => 0,
            'created_by' => 2,
            'modified_by' => 2
        ]);
    }
}//end of ArticleTableSeeder class

class TemplateTableSeeder extends Seeder
{
    /**
     * This function seeds the templates table.
     */
    public function run()
    {
        DB::table('Templates')->delete();

        Template::create([
            'name' => 'template 1',
            'active' => '1',
            'css' => 'body {background-color: #ccff99;',
            'description' => 'Green Background',
            'created_by' => 2,
            'modified_by' => 2
        ]);

        Template::create([
            'name' => 'template 2',
            'active' => null,
            'css' => 'body {background-color: #ff9966;',
            'description' => 'Orange Background',
            'created_by' => 2,
            'modified_by' => 2
        ]);

        Template::create([
            'name' => 'template 3',
            'active' => null,
            'css' => 'body {background-color: #66ccff;',
            'description' => 'Blue Background',
            'created_by' => 2,
            'modified_by' => 2
        ]);
    }
}//end of TemplateTableSeeder class

class PermissionUserTableSeeder extends Seeder
{
    /**
     * This function seeds the permissions lookup table.
     */
    public function run()
    {
        DB::table('permission_user')->delete();

        Permission_User::create([
            'user_id' => '1',
            'permission_id' => '1'
        ]);

        Permission_User::create([
            'user_id' => '1',
            'permission_id' => '2'
        ]);

        Permission_User::create([
            'user_id' => '2',
            'permission_id' => '2'
        ]);

        Permission_User::create([
            'user_id' => '3',
            'permission_id' => '2'
        ]);

        Permission_User::create([
            'user_id' => '4',
            'permission_id' => '3'
        ]);
    }
}//end of PermissionUserTableSeeder class