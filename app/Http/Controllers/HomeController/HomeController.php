<?php

namespace App\Http\Controllers\HomeController;

use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class HomeController extends Controller
{
    function index(){
        
        SEOMeta::setTitle('BMQ Builders and Supply Corp - Home | Construction')
            ->setDescription('Official website of BMQ Builders and Supply Corp.')
            ->setKeywords('BMQ, BMQ Builders, BMQ Builders Website, BMQ Website')
            ->setCanonical(route('index'));

        OpenGraph::addProperty('type', 'website')
            ->setTitle('BMQ Builders and Supply Corp - Home | Construction')
            ->setDescription('Official website of BMQ Builders and Supply Corp.')
            ->setUrl(route('index'))
            ->setSiteName('BMQ Builders and Supply Corp - Home | Construction')
            ->addImage('https://bmqbuilders.com/images/bmq-logo.webp');

        return view('contents.construction.construction-home');
    }

    function services(){

        SEOMeta::setTitle('BMQ Builders and Supply Corp - Construction Services')
            ->setDescription('Construction services of BMQ Builders and Supply Corp')
            ->setKeywords('BMQ, BMQ Builders, BMQ Builders Website, BMQ Website', 'Services', 'Construction')
            ->setCanonical(route('services'));

        OpenGraph::addProperty('type', 'website')
            ->setTitle('BMQ Builders and Supply Corp - Construction Services')
            ->setDescription('Construction services of BMQ Builders and Supply Corp')
            ->setUrl(route('services'))
            ->setSiteName('BMQ Builders and Supply Corp - Construction Services')
            ->addImage('https://bmqbuilders.com/images/bmq-logo.webp');
        
        return view('contents.construction.construction-services');
    }

    function portfolio(){

        SEOMeta::setTitle('BMQ Builders and Supply Corp - Construction Portfolio')
            ->setDescription('Construction portfolio of BMQ Builders and Supply Corp')
            ->setKeywords('BMQ, BMQ Builders, BMQ Builders Website, BMQ Website', 'Portfolio', 'Construction')
            ->setCanonical(route('portfolio'));

        OpenGraph::addProperty('type', 'website')
            ->setTitle('BMQ Builders and Supply Corp - Construction Portfolio')
            ->setDescription('Construction portfolio of BMQ Builders and Supply Corp')
            ->setUrl(route('portfolio'))
            ->setSiteName('BMQ Builders and Supply Corp - Construction Portfolio')
            ->addImage('https://bmqbuilders.com/images/bmq-logo.webp');
        
        return view('contents.construction.construction-portfolio');
    }

    function careers(){

        SEOMeta::setTitle('BMQ Builders and Supply Corp - Construction Careers')
            ->setDescription('Construction careers of BMQ Builders and Supply Corp')
            ->setKeywords('BMQ, BMQ Builders, BMQ Builders Website, BMQ Website', 'Careers', 'Construction')
            ->setCanonical(route('careers'));

        OpenGraph::addProperty('type', 'website')
            ->setTitle('BMQ Builders and Supply Corp - Construction Careers')
            ->setDescription('Construction careers of BMQ Builders and Supply Corp')
            ->setUrl(route('careers'))
            ->setSiteName('BMQ Builders and Supply Corp - Construction Careers')
            ->addImage('https://bmqbuilders.com/images/bmq-logo.webp');

        return view('contents.opportunities-careers');
    }

    function partners(){

        SEOMeta::setTitle('BMQ Builders and Supply Corp - Construction Partners')
            ->setDescription('Construction partners of BMQ Builders and Supply Corp')
            ->setKeywords('BMQ, BMQ Builders, BMQ Builders Website, BMQ Website', 'Partners', 'Construction')
            ->setCanonical(route('partners'));

        OpenGraph::addProperty('type', 'website')
            ->setTitle('BMQ Builders and Supply Corp - Construction Partners')
            ->setDescription('Construction partners of BMQ Builders and Supply Corp')
            ->setUrl(route('partners'))
            ->setSiteName('BMQ Builders and Supply Corp - Construction Partners')
            ->addImage('https://bmqbuilders.com/images/bmq-logo.webp');

        return view('contents.opportunities-partners');
    }

    function about(){

        SEOMeta::setTitle('BMQ Builders and Supply Corp - About Us')
            ->setDescription('About BMQ Builders and Supply Corp.')
            ->setKeywords('BMQ, BMQ Builders, BMQ Builders Website, BMQ Website', 'About us', 'Construction', 'ICT')
            ->setCanonical(route('about'));

        OpenGraph::addProperty('type', 'website')
            ->setTitle('BMQ Builders and Supply Corp - About Us')
            ->setDescription('About BMQ Builders and Supply Corp.')
            ->setUrl(route('about'))
            ->setSiteName('BMQ Builders and Supply Corp - About Us')
            ->addImage('https://bmqbuilders.com/images/bmq-logo.webp');

        return view('contents.about');
    }
}
