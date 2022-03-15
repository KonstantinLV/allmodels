<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function allCollections()
    {
        return Inertia::render('Collection/AllCollections', [
            'title' => 'All Collections'
        ]);
    }

    public function myCollection()
    {
        return Inertia::render('Collection/MyCollection', [
            'title' => 'My Collection'
        ]);
    }

    public function editCollection()
    {
        return Inertia::render('Collection/EditCollection', [
            'title' => 'Edit Collection'
        ]);
    }
}
