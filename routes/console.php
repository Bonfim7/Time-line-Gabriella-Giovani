<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('love:status', function (): void {
    $this->info('A timeline da Gabriella e do Giovani esta pronta para receber memorias.');
})->purpose('Mostra o status carinhoso da timeline');
