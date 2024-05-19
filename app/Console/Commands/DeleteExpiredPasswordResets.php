<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DeleteExpiredPasswordResets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete-expired-password-resets';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $password_resets = DB::table('password_reset')->get();
        foreach($password_resets as $reset)
        {
            if(Carbon::parse($reset->created_at)->addMinutes(20)->isPast())
                DB::table('password_reset')->where('email',$reset->email)->delete();
        }
        $this->info('Expired password reset records have been deleted');
    }
}
