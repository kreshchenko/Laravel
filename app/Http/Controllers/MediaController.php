<?php

    namespace App\Http\Controllers;

    class MediaController extends Controller {

        public function index($id){
            return view('media');
        }

    }