<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id = null)
    {
        if ($id) {
            return 'Halaman Artikel dengan id '. $id;
        } else {
            return 'Halaman Artikel dengan id ';
        }
    }
}
