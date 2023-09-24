<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageStaticController extends Controller
{
   /**
     * Retourne la page index
     * @return [response] [Retourne une vue]
     */
    public function index()
    {
        return view('statics_pages.index');
    }

    /**
     * Retourne la page d'à-propos
     * @@return [response] [Retourne une vue]
     */
    public function presentation()
    {
        return view('statics_pages.presentation');
    }

    /**
     * Retourne la page des services offertes
     * @@return [response] [Retourne une vue]
     */
    public function service()
    {
        return view('statics_pages.service');
    }

    /**
     * Retourne la page de partenaires
     * @return [response] [Retourne une vue]
     */
    public function partenaires()
    {
        return view('statics_pages.xinone');
    }
}
