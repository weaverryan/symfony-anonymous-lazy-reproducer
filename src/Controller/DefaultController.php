<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function index()
    {
        return new Response('Should not be hit - AppCustomAuthenticator::supports() has a die in it');
    }
}
