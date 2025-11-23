<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Video;
use App\Models\Gallery;
use App\Models\Teacher;
use App\Models\Principal;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // Home Page
    public function HomePage()
    {
        $principal = Principal::first();
        return view('welcome', compact('principal'));
    }

    // About Page
    public function AboutPage()
    {
        return view('about');
    }

    // Principal Page
    public function PrincipalPage()
    {
        // Fetch principal data from the database
        $principal = Principal::first();
        return view('principal', compact('principal'));
    }

    // Admission Page
    public function AdmissionPage()
    {
        return view('admission');
    }

    // Teachers Page
    public function TeachersPage()
    {
        $kitabTeachers = Teacher::where('category', 'kitab')
            ->orderBy('order')
            ->get();

        $hifzTeachers = Teacher::where('category', 'hifz')
            ->orderBy('order')
            ->get();

        $girlsTeachers = Teacher::where('category', 'girls')
            ->orderBy('order')
            ->get();

        return view('teachers', compact('kitabTeachers', 'hifzTeachers', 'girlsTeachers'));
    }

    // Result Page
    public function ResultPage()
    {
        return view('result');
    }

    // Donation Page
    public function DonationPage()
    {
        return view('donation');
    }

    // Event Page
    public function EventPage()
    {
        $events = Event::latest()->get();
        return view('event', compact('events'));
    }

    // Contact Page
    public function ContactPage()
    {
        return view('contact');
    }

    // Gallery Page
    public function GalleryPage()
    {
        $galleries = Gallery::latest()->get();
        return view('gallery', compact('galleries'));
    }
    // Gallery Page
    public function VideoPage()
    {
        $videos = Video::latest()->get();
        return view('video', compact('videos'));
    }

    // Kitab Page
    public function KitabPage()
    {
        return view('kitab');
    }
}
