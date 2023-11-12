<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibController extends Controller
{
    public function ShowController(){
        return "Kontroler LibController";
    }
    public function ShowInput(Request $req){
        echo $req->input("name").", ";
        echo $req->input("author").", ";
        echo $req->input("pages");
    }
    public function ValidateInput(Request $req){
        $req->validate(
            [
                "name" => "required | min:3 | max:20",
                "author" => "required | min:5 | max:25",
                "pages" => "required | numeric | gt:10 | lt:500"
            ],
            [
                "name.required" => "Pole :attribute jest wymagane",
                "name.min" => "Pole :attribute musi mieć co najmniej :min znaki",
                "name.max" => "Pole :attribute musi mieć maksymalnie :max znaków",

                "author.required" => "Pole :attribute jest wymagane",
                "author.min" => "Pole :attribute musi mieć co najmniej :min znaków",
                "author.max" => "Pole :attribute musi mieć maksymalnie :max znaków",

                "pages.required" => "Pole :attribute jest wymagane",
                "pages.numeric" => "Pole :attribute musi być liczbą",
                "pages.gt" => "Pole :attribute musi być większe niż 5",
                "pages.lt" => "Pole :attribute musi być mniejsze niż 500"
            ]
            );
            echo $req->input("name").", ".$req->input("author").", ".$req->input("pages");
    }
}
