<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Vatsim\Xml\Facades\XML;

class UpdateUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updates the user\'s data in the DB';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
	$this->line('Updating user ratings');
	$total = User::count();
	$this->output->progressStart($total);
        User::chunk(100, function ($users) {
            foreach ($users as $user) {
                $data = XML::getData($user->id, 'idstatusint');
                $user->name_first = $data->name_first;
                $user->name_last = $data->name_last;
                $user->atc_rating = self::humanize_atc_rating($data->rating);
                $user->save();
		$this->output->progressAdvance();
            }
        });
	$this->output->progressFinish();
	$this->info('Updated!');
    }

    protected static function humanize_atc_rating($rating)
    {
        switch ($rating) {
            case -1:
                return 'INA';
            case 0:
                return 'SUS';
            case 1:
                return 'OBS';
            case 2:
                return 'S1';
            case 3:
                return 'S2';
            case 4:
                return 'S3';
            case 5:
                return 'C1';
            case 7:
                return 'C3';
            case 8:
                return 'I1';
            case 10:
                return 'I3';
            case 11:
                return 'SUP';
            case 12:
                return 'ADM';
        }
    }
}
