<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = (int)$this->command->ask('How many users data do you need?', 50);

        $this->command->info(("Creating {$count} users."));

        $users = factory(User::class, $count)->create();

        $this->command->info('Users created!');
    }
}
