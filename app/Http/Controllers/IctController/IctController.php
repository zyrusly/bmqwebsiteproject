<?php

namespace App\Http\Controllers\IctController;

use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class IctController extends Controller
{
    function ictIndex(){

        SEOMeta::setTitle('BMQ Builders and Supply Corp - Home | ICT')
            ->setDescription('Official website of BMQ Builders and Supply Corp.')
            ->setKeywords('BMQ, BMQ Builders, BMQ Builders Website, BMQ Website')
            ->setCanonical(route('index'));

        OpenGraph::addProperty('type', 'website')
            ->setTitle('BMQ Builders and Supply Corp - Home | ICT')
            ->setDescription('Official website of BMQ Builders and Supply Corp.')
            ->setUrl(route('index'))
            ->setSiteName('BMQ Builders and Supply Corp - Home | ICT')
            ->addImage('https://bmqbuilders.com/images/bmq-logo.webp');
        

        return view('contents.ict.ict-home');
    }

    function ictServices(){

        SEOMeta::setTitle('BMQ Builders and Supply Corp - ICT Services')
            ->setDescription('ICT services of BMQ Builders and Supply Corp')
            ->setKeywords('BMQ, BMQ Builders, BMQ Builders Website, BMQ Website', 'Services', 'ICT')
            ->setCanonical(route('ict.services'));

        OpenGraph::addProperty('type', 'website')
            ->setTitle('BMQ Builders and Supply Corp - ICT Services')
            ->setDescription('ICT services of BMQ Builders and Supply Corp')
            ->setUrl(route('ict.services'))
            ->setSiteName('BMQ Builders and Supply Corp - ICT Services')
            ->addImage('https://bmqbuilders.com/images/bmq-logo.webp');
        
        return view('contents.ict.ict-services');
    }

    function ictPortfolio(){

        SEOMeta::setTitle('BMQ Builders and Supply Corp - ICT Portfolio')
            ->setDescription('ICT portfolio of BMQ Builders and Supply Corp')
            ->setKeywords('BMQ, BMQ Builders, BMQ Builders Website, BMQ Website', 'Portfolio', 'ICT')
            ->setCanonical(route('ict.portfolio'));

        OpenGraph::addProperty('type', 'website')
            ->setTitle('BMQ Builders and Supply Corp - ICT Portfolio')
            ->setDescription('ICT portfolio of BMQ Builders and Supply Corp')
            ->setUrl(route('ict.portfolio'))
            ->setSiteName('BMQ Builders and Supply Corp - ICT Portfolio')
            ->addImage('https://bmqbuilders.com/images/bmq-logo.webp');
        
        return view('contents.ict.ict-portfolio');
    }
}
