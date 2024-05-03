<?php

namespace App\Http\Controllers;

use App\Models\product_categories;
use App\Models\product_images;
use App\Models\product_variants;
use App\Models\products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        if (auth()->check()) {
            $user = auth()->user();
            $navbarView = 'userNavbar';
            $username = $user->username;
            $email = $user->email;
            $phone = $user->phone;
            $dob = $user->dob;
            $gender = $user->gender;
            $image = $user->image;

        } else {

            $navbarView = 'guestNavbar';
        }

        $productsImages = product_images::with('product.category')
            ->inRandomOrder()
            ->get();

            $randomProductVariant = product_variants::inRandomOrder()->first();
            $price = $randomProductVariant->price;

        return view($navbarView, compact('productsImages', 'username', 'email', 'phone', 'dob', 'gender', 'image', 'price'));


    }


}
