<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class InertiaController extends Controller
{
    public function show()
    {
        $user = 'Jérôme Desseaux';

        return Inertia::render('todo', [
            'user' => $user,
        ]);
    }
}
