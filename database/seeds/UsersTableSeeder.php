<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Lets create roles first
        //     $roles = array(
        //     array('name' => 'admin', 'display_name' => 'admin' ),
        //     array('name' => 'user', 'display_name' => 'user' ),
        //     array('name' => 'author', 'display_name' => 'author' ),
        //     array('name' => 'moderator', 'display_name' => 'moderator' )
        // );

        // Role::insert($roles);

        //Create admin user 
        $user = User::firstOrNew(array('email' => "admin@example.com"));
        $user->name = 'bootstrapguru';
        $user->username = 'bootstrapguru';
        $user->password = Hash::make('password');
        $user->email = 'admin@example.com';
        $user->first_name = 'bootstrap';
        $user->last_name = 'guru';
        $user->about = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';
        $user->address1 = 'Pacific towers';
        $user->city = 'Hyderabad';
        $user->postal_code = '533103';
        $user->country = 'India';
        $user->state = 'Andhra';
        $user->gender = 'male';
        $user->verification_code = str_random(18);
        $user->email_verified = 1;
        $user->remember_token = str_random(10);
        $user->save();
        
        // Create user
    	$user = User::firstOrNew(array('email' => "hire@vijaykumar.me"));
        $user->name = 'vijay';
        $user->username = 'vijay';
        $user->password = Hash::make('vijay');
        $user->email = 'hire@vijaykumar.me';
        $user->first_name = 'vijay';
        $user->last_name = 'kumar';
        $user->about = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';
        $user->address1 = 'Pacific towers';
        $user->city = 'Hyderabad';
        $user->postal_code = '533103';
        $user->country = 'India';
        $user->state = 'Andhra';
        $user->gender = 'male';
        $user->verification_code = str_random(18);
        $user->email_verified = 1;
        $user->remember_token = str_random(10);
        $user->save();
        
        //Populate dummy users
        factory(User::class,40)->create();

    }
}