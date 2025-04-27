<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class RemoveUsers extends Command
{
    /**
     * The name and signature of the console command.
     * Qu'est ce que nous allons mettre après php artisan afin de pouvoir identififer la commande
     * Avec {user} on peut passer un paramètre
     * @var string
     */
    protected $signature = 'remove:user {user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove a user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user = User::find($this->argument('user'));
        if(!empty($user)){
            $user->delete();
            $this->info('User deleted');
        }
        else{
            $this->error('User not found');
        }
        return 0 ;
    }
}
