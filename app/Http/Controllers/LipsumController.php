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
        $generator = new \Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($request->input('paragraphCount'));
        $text = implode('<p>', $paragraphs);
        return view('lipsum.show', ['text' => $text]);
    }
}
