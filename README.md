# Descrizione
Creiamo una tabella trains e relativa Migration.
Ogni treno dovrà avere almeno:
Azienda
Stazione di partenza
Stazione di arrivo
Orario di partenza
Orario di arrivo
Codice Treno
Numero Carrozze
In orario
Cancellato

È probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto.

Inserite inizialmente i dati tramite PhpMyAdmin o artisan tinker per chi ne ha capito l'utilizzo.

Create il modello Model relativo alla migrazione che avete predisposto al fine di mappare la tabelle del db ed un Controller per mostrare nella home page tutti i treni che sono in partenza dalla data odierna.

## Steps
- composer create-project laravel/laravel:^10.0 laravel-migration-train
- composer require pacificdev/laravel_9_preset
- modifico file in cjs
- php artisan preset:ui bootstrap
- npm install
- npm run dev
- php artisan serve

- modifico file env

Faccio la prima migration con le "table" di default su Laravel
- php artisan migrate

Creo la mia tabella trains come da esercizio
- php artisan make:migration create_trains_table