<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add a new user';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        /*$this->info("The command was successful");
        $this->warn("Warning message");
        $this->error("Error message");
        $this->line("Line message");
        
        $user = User::factory()->create();
        $this->info("$user->name created successfully!");
        

        try{
            $user = new User();
            $user->name = $this->argument("name");
            $user->save();
            $this->info("$user->name created successfully!");
        }
        catch(\Excpetion $e){
            $this->error($e->getMessage());
        }*/
    }
}
