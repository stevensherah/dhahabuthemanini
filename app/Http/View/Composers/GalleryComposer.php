<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

use App\Product;

class GalleryComposer
{
    /**
     * @param  View  $view
     * @return void
     */

        // PASSING OF VARIABLES TO THE VIEW COMPOSER
        public function compose(View $view)
            {
                $perPage = 10;
                
                $gallery = \App\gallery::orderBy('created_at','desc')->paginate($perPage);

                $view->with('galleries', $gallery);
                

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