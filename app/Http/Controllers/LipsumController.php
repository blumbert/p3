<?php

namespace P3\Http\Controllers;

use Illuminate\Http\Request;

use P3\Http\Requests;

class LipsumController extends Controller
{
    function index() {
        return view('lipsum.index', ['title' => "Lorem Ipsum Generator"]);
    }

    function show(Request $request) {

        //validate input
        $this->validate($request, ['paragraphCount' => 'required|numeric|max:9']);

        // create new generator instance
        $generator = new \Badcow\LoremIpsum\Generator();

        // generate given number of paragraphs
        $paragraphs = $generator->getParagraphs($request->input('paragraphCount'));

        return view('lipsum.show',
            ['title' => "Lorem Ipsum Generator",
             'paragraphs' => $paragraphs]);
    }
}
