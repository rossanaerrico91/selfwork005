<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PublicController extends Controller
{

    public array $services;

    public function __construct()
    {
        $this->services = [
            [
                'uri' => 'gestionali',
                'name' => 'Sistema Gestionali',
                'costo' => 1500,
                'tempo_di_realizzazione' => '2 settimane'
            ],
            [
                'uri' => 'ecommerce',
                'name' => 'Piattaforma eCommerce',
                'costo' => 2500,
                'tempo_di_realizzazione' => '3 settimane'
            ],
            [
                'uri' => 'siti-web',
                'name' => 'Siti Web',
                'costo' => 1000,
                'tempo_di_realizzazione' => '1 settimana'
            ],
            [
                'uri' => 'marketing-digitale',
                'name' => 'Marketing Digitale',
                'costo' => 1800,
                'tempo_di_realizzazione' => '2 settimane'
            ],
            [
                'uri' => 'app-mobile',
                'name' => 'Applicazione Mobile',
                'costo' => 3000,
                'tempo_di_realizzazione' => '4 settimane'
            ],
            [
                'uri' => 'seo',
                'name' => 'Servizi SEO',
                'costo' => 1200,
                'tempo_di_realizzazione' => '2 settimane'
            ],
            [
                'uri' => 'social-media',
                'name' => 'Gestione Social Media',
                'costo' => 800,
                'tempo_di_realizzazione' => '1 settimana'
            ],
            [
                'uri' => 'analisi-dati',
                'name' => 'Analisi Dati',
                'costo' => 2200,
                'tempo_di_realizzazione' => '3 settimane'
            ],
            [
                'uri' => 'design-grafico',
                'name' => 'Design Grafico',
                'costo' => 900,
                'tempo_di_realizzazione' => '1 settimana'
            ],
            [
                'uri' => 'formazione',
                'name' => 'Formazione Online',
                'costo' => 500,
                'tempo_di_realizzazione' => '2 settimane'
            ],
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('services.index', ['services' => $this->services]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $service)
    {
        $service_index = array_search($service, array_column($this->services, 'uri'));

        if ($service_index === false) {
            abort(404);
        }

        $service = $this->services[$service_index];

        return view('template.service-layout',compact('service'));
    }
}
