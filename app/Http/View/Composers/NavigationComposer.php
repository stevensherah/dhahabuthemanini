<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

use App\Product;

class NavigationComposer
{
    /**
     * @param  View  $view
     * @return void
     */

        // PASSING OF VARIABLES TO THE VIEW COMPOSER
        public function compose(View $view)
            {
                // testing with an integer value
                    // $view->with('name', random_int(0, 1));
                // $view->with('productos', \App\Product::pluck('title'));
                $products = \App\Product::all();

                $view->with('productos', $products);
                

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