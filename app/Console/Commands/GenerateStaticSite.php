<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

class GenerateStaticSite extends Command
{
    protected $signature = 'static:generate';
    protected $description = 'Generate static HTML files from Blade views.';

    // app/Console/Commands/GenerateStaticSite.php

    // ... (Bagian atas file tetap sama)

    public function handle()
    {
        $this->info('Generating static site...');

        // Peta dari (Nama View Blade) ke (Nama File Output HTML)
        $pages = [
            'components/navbar' => 'navbar/index.html',
            'layout/master' => 'master/index.html',
        ];

        $exportPath = base_path('static-export');

        foreach ($pages as $viewName => $outputFile) {
            try {
                // 1. Render view Blade menjadi string HTML
                $content = view($viewName)->render();

                // 2. Tentukan path output
                $path = $exportPath . '/' . $outputFile;

                // 3. Pastikan direktori ada dan tulis file
                File::ensureDirectoryExists(dirname($path));
                File::put($path, $content);

                $this->info("Generated: {$viewName} -> {$outputFile}");
            } catch (\Throwable $e) {
                $this->error("Failed to render view '{$viewName}': " . $e->getMessage());
            }
        }

        $this->info('Static site generation complete! 🚀');
        return 0;
    }
}
