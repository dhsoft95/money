<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

class pagesController extends Controller
{
    public function home(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('home');
    }

    public function contact(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        return view('pages.contact');
    }

    public function help(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        return view('pages.help');
    }

    public function showPage($slug)
    {
        $decodedSlug = $this->decodeSlug($slug);

        switch ($decodedSlug) {
            case 'contact':
                return $this->contact();
            case 'help':
                return $this->help();
            default:
                abort(404);
        }
    }

    public function encodeSlug($slug)
    {
        return Hash::make($slug);
    }

    private function decodeSlug($encodedSlug): ?string
    {
        $pages = ['contact', 'help'];
        foreach ($pages as $page) {
            if (Hash::check($page, $encodedSlug)) {
                return $page;
            }
        }
        return null;
    }
}
