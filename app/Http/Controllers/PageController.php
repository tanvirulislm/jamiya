<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Event;
use App\Models\Video;
use App\Models\Jamiya;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Teacher;
use App\Models\Principal;
use App\Models\Department;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // Home Page
    public function HomePage()
    {
        $about = About::first();
        $jamiyas = Jamiya::orderBy('created_at', 'asc')->get();
        $sliders = Slider::latest()->get();
        $principal = Principal::first();
        return view('welcome', compact('principal', 'sliders', 'jamiyas', 'about'));
    }

    // About Page
    public function AboutPage()
    {
        $about = About::first();
        return view('about', compact('about'));
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
        $kitab = Department::where('type', 'kitab')->first();
        return view('kitab', compact('kitab'));
    }

    // Hifz Page
    public function HifzPage()
    {
        $hifz = Department::where('type', 'hifz')->first();
        return view('hifz', compact('hifz'));
    }

    // Nurani Page
    public function NuraniPage()
    {
        $nurani = Department::where('type', 'nurani')->first();
        return view('nurani', compact('nurani'));
    }

    // Nurani Page
    public function SchoolPage()
    {
        $school = Department::where('type', 'school')->first();
        return view('nurani', compact('school'));
    }
}
