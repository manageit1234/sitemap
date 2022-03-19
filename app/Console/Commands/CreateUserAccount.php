<?php

namespace App\Console\Commands;
use App\User;
use Illuminate\Console\Command;

class CreateUserAccount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a User account in Users Table in datebase';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $newUser=[
            'name' => 'Manu',
            'email' => 'manageit4321@gmail.com',
            'password' => unipass( value: 'secret'),
            'role' => 'Admin'
        ];

        $user = User::create($newUser);
        if($user){
            echo 'New User Manu Created Successfully';
        }
        return 0;
    }
}
