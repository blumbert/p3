<?php

namespace P3\Http\Controllers;

use Illuminate\Http\Request;

use P3\Http\Requests;

class LipsumController extends Controller
{
    function index() {
        return view('lipsum.index');
    }

    function show(Request $request) {

        //validate input
        $this->validate($request, ['paragraphCount' => 'required|numeric']);

        // create new generator instance
        $generator = new \Badcow\LoremIpsum\Generator();

        // generate given number of paragraphs
        $paragraphs = $generator->getParagraphs($request->input('paragraphCount'));

        // get text as string
        // $text = implode('<p>', $paragraphs);

        return view('lipsum.show', ['paragraphs' => $paragraphs]);
    }
}
