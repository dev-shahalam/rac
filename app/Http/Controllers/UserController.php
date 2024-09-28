<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function HomePage(){
       

        return view('user.index');
    }
    public function ProfilePage(){
        // Hardcoded demo customer data
        $customer = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'phone' => '123-456-7890',
            'address' => '123 Main St, Springfield',
            'profile_picture' => 'https://via.placeholder.com/150', // Example profile picture
            'total_rentals' => 5,
            'total_spent' => 3000.00,
        ];

        // Hardcoded demo rental history data with more interaction
        $rentals = [
            [
                'id' => 1,
                'car_name' => 'Tesla Model S',
                'brand' => 'Tesla',
                'start_date' => '2023-09-01',
                'end_date' => '2023-09-05',
                'total_cost' => 750.00,
                'status' => 'Completed',
            ],
            [
                'id' => 2,
                'car_name' => 'BMW X5',
                'brand' => 'BMW',
                'start_date' => '2023-09-10',
                'end_date' => '2023-09-15',
                'total_cost' => 1000.00,
                'status' => 'Pending',
            ],
            // Add more rental history items if needed
        ];
        return view('user.cus-profile', compact('customer', 'rentals'));
    }

    public function CarsPage(){
        return view('user.cars');
    }

    public function ServicePage(){
        return view('user.service');
    }

    public function ContactPage(){
        return view('user.contact');
    }
    public function AboutPage(){
        return view('user.about');
    }






}
