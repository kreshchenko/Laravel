<?php

use Illuminate\Database\Seeder;
use App\Models\Profile;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('ProfilesSeeder');
    }
}

class ProfilesSeeder extends Seeder{

    public function run()
    {
        DB::table('profiles')->delete();

        Profile::create([
            'name' => 'Igor',
            'surname' => 'Kreshchenko',
            'fathername' => 'Petrovich',
            'date' => '12/05/1993',
            'email' => 'kreshshenkoi@gmail.com',
            'telephone' => '0638157537',
            'url' => 'https://github.com/mirkinoid/course/blob/master/exercises/final.md',
            'other' => 'Other',
        ]);
    
        Profile::create([
            'name' => 'Василий',
            'surname' => 'Васильев',
            'fathername' => 'Васильевич',
            'date' => '12/05/1993',
            'email' => 'kreshshenkoi@gmail.com',
            'telephone' => '0638157537',
            'url' => 'https://github.com/mirkinoid/course/blob/master/exercises/final.md',
            'other' => 'Other',
        ]);
    }



}
