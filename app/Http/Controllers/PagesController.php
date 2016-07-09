<?php
/**
 * Created by PhpStorm.
 * User: andriy
 * Date: 09.07.16
 * Time: 14:12
 */

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function getIndex()
    {
        return view('pages.welcome');
    }

    public function getAbout()
    {
        $first = "Andriy";
        $last  = "Taranchuk";

        $full  = $first . ' ' . $last;
        $email = "www@g.com";

        $data = [];
        $data['email']  = $email;
        $data['fullname']  = $full;

        return view('pages.about')->withData($data);
    }

    public function getContact()
    {
        return view('pages.contact');
    }

}
