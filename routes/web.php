<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EducationPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/test',function(){
    return view('test');
})->name('test');
Route::get('/', function () {
    return view('home');
})->name('home');

//contact us
Route::get('/contact-us', function () {
    return view('pages.contacts');
})->name('contact');
//privacy policy
Route::get('/privacy-policy', function () {
    return view('pages.privacyPolicy');
})->name('privacy.policy');

//deposit and withdrawal
Route::get('/deposit-and-withdrawal', function () {
    return view('pages.depositeWithdrawal');
})->name('deposit.withdrawal');

//payment option
Route::get('/payment-options', function () {
    return view('pages.depositeWithdrawal');
})->name('payment.optiions');

//fund security
Route::get('/fund-security', function () {
    return view('pages.securitypage');
})->name('fund.security');

//foerx market
Route::get('/markets-forex', function () {
    return view('pages.forex');
})->name('market.forex');

//commodities market
Route::get('/markets-commodities', function () {
    return view('pages.commodities');
})->name('market.commodities');

//CFD market
Route::get('/markets-cfd', function () {
    return view('pages.cfd');
})->name('market.cfd');

//Crypto market
Route::get('/markets-crypto', function () {
    return view('pages.crypto');
})->name('market.crypto');

//web platform
Route::get('/platform-web', function () {
    return view('pages.webplatform');
})->name('platform.web');
//mt4 platform
Route::get('/platform-mt4', function () {
    return view('pages.mt4platform');
})->name('platform.mt4');
//mt5 platform
Route::get('/platform-mt5', function () {
    return view('pages.mt5platform');
})->name('platform.mt5');

//technical analysis
Route::get('/technical-analysis', function () {
    return view('pages.technicalAnalysis');
})->name('technical.analysis');

//economic calender
Route::get('/economic-calender', function () {
    return view('pages.economicCalender');
})->name('economic.calender');
//holiday calender
Route::get('/holiday-calender', function () {
    return view('pages.holidayCalender');
})->name('holiday.calender');

//what is forex
Route::get('/education-forex', function () {
    return view('pages.education.whatIsForex');
})->name('education.forex');

//become a trader
Route::get('/education-become-trader', function () {
    return view('pages.education.becomeTrader.trader');
})->name('education.become.trader');

//new to forex
Route::get('/education-new-to-forex', function () {
    return view('pages.education.newToForex');
})->name('education.newToForex');

//learn forex
Route::get('/education-learn-forex', function () {
    return view('pages.education.learnForex');
})->name('education.learnForex');

//forex tools
Route::get('/forex-tools', function () {
    return view('pages.tools.forexTools');
})->name('forex.tools');

//forex calculator
Route::get('/forex-calculator', function () {
    return view('pages.tools.forexCalculator');
})->name('forex.calculator');

//profit calculator
Route::get('/profit-calculator', function () {
    return view('pages.tools.profitCalculator');
})->name('profit.calculator');

//AI robot
Route::get('/forex-tools-ai-robot', function () {
    return view('pages.tools.aiRobot');
})->name('tools.aiRobot');
//AI robot currency shop
Route::get('/forex-tools-ai-robot-shop-currency', function () {
    return view('pages.checkout.shopCurrency');
})->name('aiRobot.shopCurency');
//AI robot gold shop
Route::get('/forex-tools-ai-robot-shop-gold', function () {
    return view('pages.checkout.shopGold');
})->name('aiRobot.shopGold');
//AI robot crypto shop
Route::get('/forex-tools-ai-robot-shop-crypto', function () {
    return view('pages.checkout.shopCrypto');
})->name('aiRobot.shopCrypto');
//AI robot checkout
Route::get('/forex-tools-ai-robot-shop-checkout', function () {
    return view('pages.checkout.checkout');
})->name('aiRobot.checkout');



//Account Types
Route::get('/account-types', function () {
    return view('pages.accounts.accountTypes');
})->name('account.types');
//Standard account
Route::get('/standard-account', function () {
    return view('pages.accounts.standard');
})->name('account.standard');
//Premium account
Route::get('/premium-account', function () {
    return view('pages.accounts.premium');
})->name('account.premium');
//VIP account
Route::get('/vip-account', function () {
    return view('pages.accounts.vip');
})->name('account.vip');
//DEMO account
Route::get('/demo-account', function () {
    return view('pages.accounts.demo');
})->name('account.demo');




//IB page
Route::get('/become-ib', function () {
    return view('pages.ibPage');
})->name('page.ib');

//referral program
Route::get('/referal-program', function () {
    return view('pages.referralPage');
})->name('referal.program');

Route::get('/education',[EducationPageController::class,'index'])->name('education');
Route::get('/trader-post',[EducationPageController::class,'traderPost'])->name('traders.post');
