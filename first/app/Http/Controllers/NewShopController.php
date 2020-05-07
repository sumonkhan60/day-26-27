<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewShopController extends Controller
{
    public function index() {
        return view('front-end.home.home');
    }
    public function categoryProduct() {
        return view('front-end.category.category-content');
    }
    public function contactUs() {
        return view('front-end.contact.contact-us');
    }
    public function login() {
        return view('front-end.login.login');
    }
    public function createAccount() {
        return view('front-end.account.create-account');
    }
    public function checkOut() {
        return view('front-end.checkout.check-out');
    }
    public function shortCodes() {
        return view('front-end.shortcodes.short-codes');
    }
    public function categoryProduct1() {
        return view('front-end.category.category-content2');
    }
    public function single() {
        return view('front-end.category.single-content');
    }
}
