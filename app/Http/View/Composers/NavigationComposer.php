<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

use App\Products;

class NavigationComposer
{
    /**
     * @param  View  $view
     * @return void
     */

        // PASSING OF VARIABLES TO THE VIEW COMPOSER
        public function compose(View $view)
            {
                // $view->with('name', random_int(0, 1));
                $view->with('products', \App\Tag::pluck('name'));

            }
        
//     public function compose(View $view)
//     {
//         $view->with('navigation', [
//             'items1', 'items2', 'item3'
//         ]);
//     }

//     public function testDetailHasNavigationItems()
//     {
//         $this->get('/detail')->assertViewHas('navigation');
//     }
}