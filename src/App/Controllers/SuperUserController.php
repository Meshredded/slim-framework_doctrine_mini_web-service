<?php
/**
 * Created by PhpStorm.
 * User: MacBook
 * Date: 13/10/2016
 * Time: 11:59
 */

namespace App\Controllers;


class SuperUserController extends Controller
{
    public function index( $request, $response){
        /** @var em $em */
        //$response->render("index.html");


        return $this->container->renderer->render($response, "superuser.html");

    }
}