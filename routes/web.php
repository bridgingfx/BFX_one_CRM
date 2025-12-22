<?php
require __DIR__ . '/auth.php';

use App\Http\Controllers\BrokerAccountController;
use App\Http\Controllers\FundAccountController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\InvestAccountController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropfirmAccountController;
use App\Http\Controllers\SocialTradingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', [ProfileController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/documentUpload', [ProfileController::class, 'documentUpload'])->name('documentUpload');
    Route::post('uploadDocument', [ProfileController::class, 'uploadDocument'])->name('uploadDocument');
    /*Broker Section*/
    Route::get('/createDemoaccount', [BrokerAccountController::class, 'createDemoaccount'])->name('broker.createDemoaccount');
    Route::get('/createLiveaccount', [BrokerAccountController::class, 'createLiveaccount'])->name('broker.createLiveaccount');
    Route::get('/liveaccount', [BrokerAccountController::class, 'liveaccount'])->name('broker.liveaccount');
    Route::get('/demoaccount', [BrokerAccountController::class, 'demoaccount'])->name('broker.demoaccount');
    Route::get('/accountdetails', [BrokerAccountController::class, 'accountdetails'])->name('broker.accountdetails');

    /*Fund Transfer Wallet or MT5 Account*/
    Route::get('/deposit', [FundAccountController::class, 'funddeposit'])->name('funds.funddeposit');
    Route::get('/withdrawal', [FundAccountController::class, 'fundwithdrawal'])->name('funds.fundwithdrawal');
    Route::get('/transfer', [FundAccountController::class, 'fundtransfer'])->name('funds.fundtransfer');
    Route::get('/p2p', [FundAccountController::class, 'fundp2p'])->name('funds.fundp2p');
    Route::get('/history', [FundAccountController::class, 'fundhistory'])->name('funds.fundhistory');
    Route::get('/prophistory', [FundAccountController::class, 'fundprophistory'])->name('funds.fundprophistory');

    /*Propfirm Section*/
    Route::get('/challenges', [PropfirmAccountController::class, 'createchallenges'])->name('propfirm.challenges');
    Route::get('/buychallenges', [PropfirmAccountController::class, 'buychallenges'])->name('propfirm.buychallenges');
    Route::get('/mychallenges', [PropfirmAccountController::class, 'mychallenges'])->name('propfirm.mychallenges');
    Route::get('/challengesDetails', [PropfirmAccountController::class, 'challengesDetails'])->name('propfirm.challengesDetails');
    Route::get('/contests', [PropfirmAccountController::class, 'contests'])->name('propfirm.contests');

    /*Investment Section*/
    Route::get('/investplan', [InvestAccountController::class, 'investPlan'])->name('invest.investplan');
    Route::get('/myinvest', [InvestAccountController::class, 'myInvest'])->name('invest.myinvest');

    /*Social Trading Section*/
    Route::get('/copierstrategies', [SocialTradingController::class, 'coiperstrategies'])->name('copier.strategies');
    Route::get('/copiermycopies', [SocialTradingController::class, 'coipermycopies'])->name('copier.mycopies');
    Route::get('/copierperformance', [SocialTradingController::class, 'copierperformance'])->name('copier.performance');
    Route::get('/socialleaderboard', [SocialTradingController::class, 'socialleaderboard'])->name('social.leaderboard');
    Route::get('/socialmyaccounts', [SocialTradingController::class, 'socialmyaccounts'])->name('social.myaccounts');
    Route::get('/socialtransfer', [SocialTradingController::class, 'socialtransfer'])->name('social.transfer');
    Route::get('/socialtransferhistory', [SocialTradingController::class, 'socialtransferhistory'])->name('social.transferhistory');
    Route::get('/sociallegaldocs', [SocialTradingController::class, 'sociallegaldocs'])->name('social.legaldocs');
    Route::get('/pammmanagers', [SocialTradingController::class, 'pammmanagers'])->name('pamm.managers');
    Route::get('/pammmyinvestment', [SocialTradingController::class, 'pammmyinvestment'])->name('pamm.myinvestment');
    Route::get('/pammperformance', [SocialTradingController::class, 'pammperformance'])->name('pamm.performance');

    /*Help Center*/
    Route::get('/webterminal', [GeneralController::class, 'webTerminal'])->name('general.webterminal');
    Route::get('/helpfiles', [GeneralController::class, 'helpFiles'])->name('general.helpfiles');
    Route::get('/helpdesk', [GeneralController::class, 'helpDesk'])->name('general.helpdesk');
    Route::get('/createticket', [GeneralController::class, 'createTicket'])->name('general.createTicket');
    Route::get('/openticket', [GeneralController::class, 'openTicket'])->name('general.openticket');
    Route::get('/closedticket', [GeneralController::class, 'closedTicket'])->name('general.closedticket');

    // Promotions
    Route::get('/bonus', [GeneralController::class, 'bonus'])->name('general.bonus');

});
