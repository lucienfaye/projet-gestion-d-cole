<?php

namespace App\Nova\Dashboards;

use App\Nova\Metrics\Etudiants;
use App\Nova\Metrics\Modules;
use App\Nova\Metrics\NombreFilieres;
use App\Nova\Metrics\NombreModules;
use App\Nova\Metrics\TotalEtudiants;
use App\Nova\Metrics\TotalFiliere;
use App\Nova\Metrics\TotalFiliéres;
use App\Nova\Metrics\TotalProfesseurs;
use Laravel\Nova\Dashboard;

class users extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            new TotalEtudiants(),
            new NombreFilieres(),
            new TotalProfesseurs(),
            new NombreModules(),
        ];
    }

    /**
     * Get the URI key for the dashboard.
     *
     * @return string
     */
    public static function uriKey()
    {
        return 'users';
    }
}
