<?php namespace System\Console;

use Illuminate\Console\Command;
use System\Classes\UpdateManager;
use Exception;

/**
 * OctoberUpdate performs a system update.
 *
 * This updates October CMS and all plugins, database and libraries.
 *
 * @package october\system
 * @author Alexey Bobkov, Samuel Georges
 */
class OctoberUpdate extends Command
{
    /**
     * @var string name of console command
     */
    protected $name = 'october:update';

    /**
     * @var string description of the console command
     */
    protected $description = 'Updates October CMS and all plugins, database and files.';

    /**
     * handle executes the console command
     */
    public function handle()
    {
        $composerBin = env('COMPOSER_BIN', 'composer');

        $this->line('Updating October CMS...');

        $this->comment("Executing: {$composerBin} update");
        $this->newLine();

        // Composer update
        $errCode = null;
        passthru("$composerBin update", $errCode);
        $this->newLine();

        if ($errCode !== 0) {
            $this->output->error('Update failed. Check output above');
            exit(1);
        }

        // Migrate database
        $this->comment("Executing: php artisan october:migrate");
        $this->newLine();

        $errCode = null;
        static::passthruArtisan('october:migrate', $errCode);
        $this->newLine();

        if ($errCode !== 0) {
            $this->output->error('Migration failed. Check output above');
            exit(1);
        }

        try {
            $this->output->success('System Update Complete');
        }
        catch (Exception $ex) {
            // ...
        }
    }

    /**
     * passthruArtisan
     */
    protected static function passthruArtisan($command, &$errCode = null)
    {
        passthru('"'.PHP_BINARY.'" artisan ' .$command, $errCode);
    }
}
