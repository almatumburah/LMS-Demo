<?php

namespace App\View\Composers;

use App\Course;
use Illuminate\View\View;
use App\Institution;

class MenuComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('menuInstitutions', Institution::withCount('courses')->whereHas('courses')->pluck('name', 'id'));
    }
}
