<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\announcementsController;
use App\Http\Controllers\archiveController;
use App\Http\Controllers\auditController;
use App\Http\Controllers\changesController;
use App\Http\Controllers\competenceController;
use App\Http\Controllers\engeneeringhomeController;
use App\Http\Controllers\financeController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\managementController;
use App\Http\Controllers\marketingController;
use App\Http\Controllers\objectivesController;
use App\Http\Controllers\pdfController;
use App\Http\Controllers\plannedactionsController;
use App\Http\Controllers\qualityController;
use App\Http\Controllers\rejectsController;
use App\Http\Controllers\releasedProductsController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\SOP_controller;
use App\Http\Controllers\statisticsCotroller;
use App\Http\Controllers\storeController;
use App\Http\Controllers\trainingController;
use App\Http\Controllers\transportController;
use App\Http\Controllers\reportController;
use App\Http\Controllers\demoreportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('report-download',[reportController::class,'report']);
Route::post('downloadreport',[demoreportController::class,'downloadreport'])->name('report-form');


require __DIR__.'/auth.php';


Route::post('create',[signupController::class,'create'])->name('create.route');
Route::get('signup',[signupController::class,'signup']);
Route::get('/',[indexController::class,'index'])->name('index');
Route::get('pull',[indexController::class,'logout'])->name('pull');
Route::post('check',[indexController::class,'check'])->name('check.route');

//ENGINEERS ROUTES
Route::group(['middleware'=>['engineers']], function(){

Route::get('engeneers',[EngeneeringhomeController::class,'engeneers']);
Route::get('deleteengine/{id}',[EngeneeringhomeController::class,'delete']);
Route::get('deleteenginetrain/{id}',[EngeneeringhomeController::class,'deleteenginetrain']);
Route::get('deleteenginemachine/{id}',[EngeneeringhomeController::class,'deleteenginemachine']);
Route::get('deleteenginedefects/{id}',[EngeneeringhomeController::class,'deleteenginedefects']);
Route::get('deleteenginesafety/{id}',[EngeneeringhomeController::class,'deleteenginesafety']);
Route::get('editengineeworker/{id}',[EngeneeringhomeController::class,'editengineeworker']);
Route::get('editdefectsengine/{id}',[EngeneeringhomeController::class,'editdefectsengine']);
Route::get('edittrainengine/{id}',[EngeneeringhomeController::class,'edittrainengine']);
Route::get('editsafetyengine/{id}',[EngeneeringhomeController::class,'editsafetyengine']);
Route::get('editmachineengine/{id}',[EngeneeringhomeController::class,'editenginemachine']);
Route::post('addworker',[EngeneeringhomeController::class,'addworker'])->name('engineers.addworker');
Route::post('engineupdateworker',[EngeneeringhomeController::class,'engineupdateworker'])->name('updateengineworker');
Route::post('addengdefects',[EngeneeringhomeController::class,'addengdefects'])->name('eng.addengdefects');
Route::post('addengtrain',[EngeneeringhomeController::class,'addengtrain'])->name('eng.addtrain');
Route::post('addengmachines',[EngeneeringhomeController::class,'addengmachines'])->name('engineers.addengmachines');
Route::post('addengsafety',[EngeneeringhomeController::class,'addengsafety'])->name('engineers.addengsafety');
Route::post('engineupdatemachine',[EngeneeringhomeController::class,'engineupdatemachine'])->name('updateenginemachine');
Route::post('engineupdatesafety',[EngeneeringhomeController::class,'engineupdatesafety'])->name('engineupdatesafety');
Route::post('updateengtrain',[EngeneeringhomeController::class,'updateengtrain'])->name('eng.updateengtrain');
Route::post('engineupdatedefects',[EngeneeringhomeController::class,'engineupdatedefects'])->name('engineupdatedefects');
});

// FINANCE ROUTES
Route::group(['middleware'=>['finance']], function(){

Route::get('finance',[FinanceController::class,'finance']);
Route::get('deletefinance/{id}',[FinanceController::class,'delete']);
Route::get('deletefinancetrain/{id}',[financeController::class,'deletefinancetrain']);
Route::get('deleteenginemachine/{id}',[FinanceController::class,'deleteenginemachine']);
Route::get('deletefinancemachine/{id}',[financeController::class,'deletefinancemachine']);
Route::get('deletefinancedefects/{id}',[financeController::class,'deletefinancedefects']);
Route::get('deletefinancesafety/{id}',[FinanceController::class,'deletefinancesafety']);
Route::get('editfinanceworker/{id}',[financeController::class,'editfinanceworker']);
Route::get('editdefectsfinance/{id}',[financeController::class,'editdefectsfinance']);
Route::get('edittrainfinance/{id}',[financeController::class,'edittrainfinance']);
Route::get('editsafetyfinance/{id}',[financeController::class,'editsafetyfinance']);
Route::get('editmachinefinance/{id}',[financeController::class,'editmachinefinance']);
Route::post('financeaddworker',[financeController::class,'financeaddworker'])->name('finance.addworker');
Route::post('financeupdateworker',[financeController::class,'financeupdateworker'])->name('updatefinanceworker');
Route::post('addfinancedefects',[financeController::class,'addfinancedefects'])->name('finance.addfinancedefects');
Route::post('addfinancetrain',[financeController::class,'addfinancetrain'])->name('finance.addtrain');
Route::post('addfinancemachines',[financeController::class,'addfinancemachines'])->name('finance.addfinancemachines');
Route::post('addfinancesafety',[FinanceController::class,'addfinancesafety'])->name('engineers.addfinancesafety');
Route::post('machineupdatfinance',[financeController::class,'machineupdatfinance'])->name('engineupdatfinance');
Route::post('financeupdatesafety',[financeController::class,'financeupdatesafety'])->name('financeupdatesafety');
Route::post('updatefinancetrain',[financeController::class,'updatefinancetrain'])->name('finance.updatefinancetrain');
Route::post('financeupdatedefects',[financeController::class,'financeupdatedefects'])->name('financeupdatedefects');
});

// MARKETING ROUTES
Route::group(['middleware'=>['marketing']], function(){

Route::get('marketing',[marketingController::class,'marketing']);
Route::get('deletemarketing/{id}',[marketingController::class,'delete']);
Route::get('deletemarketingtrain/{id}',[marketingController::class,'deletemarketingtrain']);
Route::get('deletemarketingmachines/{id}',[marketingController::class,'deletemarketingmachines']);
Route::get('deletemarketingdefects/{id}',[marketingController::class,'deletemarketingdefects']);
Route::get('deletemarketingsafety/{id}',[marketingController::class,'deletemarketingsafety']);
Route::get('editmarketingworker/{id}',[marketingController::class,'editmarketingworker']);
Route::get('editmarketingdefects/{id}',[marketingController::class,'editmarketingdefects']);
Route::get('edittrainmarketing/{id}',[marketingController::class,'edittrainmarketing']);
Route::get('editsafetymarketing/{id}',[marketingController::class,'editsafetymarketing']);
Route::get('editmachinemarketing/{id}',[marketingController::class,'editmachinemarketing']);
Route::post('marketingaddworker',[marketingController::class,'marketingaddworker'])->name('marketing.addworker');
Route::post('marketingupdateworker',[marketingController::class,'marketingupdateworker'])->name('updatemarketingworker');
Route::post('addmarketingdefects',[marketingController::class,'addmarketingdefects'])->name('marketing.addmarketingdefects');
Route::post('addmarketingtrain',[marketingController::class,'addmarketingtrain'])->name('marketing.addtrain');
Route::post('addmarketingmachines',[marketingController::class,'addmarketingmachines'])->name('market.addmarketingmachines');
Route::post('addmarketingsafety',[marketingController::class,'addmarketingsafety'])->name('markting.addmarketingsafety');
Route::post('marketingupdatemachine',[marketingController::class,'marketingupdatemachine'])->name('marketingupdatemachine');
Route::post('marketingupdatesafety',[marketingController::class,'marketingupdatesafety'])->name('marketingupdatesafety');
Route::post('updatemarketingtrain',[marketingController::class,'updatemarketingtrain'])->name('marketing.updatemarketingtrain');
Route::post('marketingupdatedefects',[marketingController::class,'marketingupdatedefects'])->name('marketingupdatedefects');
});

// STORE ROUTES
Route::group(['middleware'=>['store']], function(){
Route::get('store',[storeController::class,'store']);
Route::get('deletestore/{id}',[storeController::class,'delete']);
Route::get('deletestoretrain/{id}',[storeController::class,'deletestoretrain']);
Route::get('deletestoremachine/{id}',[storeController::class,'deletestoremachine']);
Route::get('deletestoredefects/{id}',[storeController::class,'deletestoredefects']);
Route::get('deletestoresafety/{id}',[storeController::class,'deletestoresafety']);
Route::get('editstoreworker/{id}',[storeController::class,'editstoreworker']);
Route::get('editstoredefects/{id}',[storeController::class,'editstoredefects']);
Route::get('edittrainstore/{id}',[storeController::class,'edittrainstore']);
Route::get('editstoresafety/{id}',[storeController::class,'editstoresafety']);
Route::get('editstoremachine/{id}',[storeController::class,'editstoremachine']);
Route::post('storeaddworker',[storeController::class,'storeaddworker'])->name('store.addworker');
Route::post('storeupdateworker',[storeController::class,'storeupdateworker'])->name('updatestoreworker');
Route::post('addstoredefects',[storeController::class,'addstoredefects'])->name('store.addstoredefects');
Route::post('addstoretrain',[storeController::class,'addstoretrain'])->name('storeaddtrain');
Route::post('addstoremachines',[storeController::class,'addstoremachines'])->name('store.ddstoremachinesmachines');
Route::post('addstoresafety',[storeController::class,'addstoresafety'])->name('store.storesafety');
Route::post('storeupdatmachine',[storeController::class,'storeupdatmachine'])->name('storeupdatmachine');
Route::post('storeupdatsafety',[storeController::class,'storeupdatsafety'])->name('storeupdatsafety');
Route::post('updatestoretrain',[storeController::class,'updatestoretrain'])->name('store.updatestoretrain');
Route::post('storeupdatdefects',[storeController::class,'storeupdatdefects'])->name('storeupdatdefects');
});
Route::post('uploadsop',[SOP_controller::class,'uploadsop'])->name('engine.uploadsop');
Route::get('view/{File}',[SOP_controller::class,'view']);
Route::get('download/{File}',[SOP_controller::class,'download']);
Route::get('deletesop/{id}',[SOP_controller::class,'deletesop']);
// TRANSPORT ROUTES

Route::group(['middleware'=>['trans']], function(){

Route::get('transport',[transportController::class,'transport']);
Route::get('deletetrans/{id}',[transportController::class,'delete']);
Route::get('deletetranstrain/{id}',[transportController::class,'deletetranstrain']);
Route::get('deletetransmachines/{id}',[transportController::class,'deletetransmachines']);
Route::get('deletetransportdefects/{id}',[transportController::class,'deletetransportdefects']);
Route::get('deletetranssafety/{id}',[transportController::class,'deletetranssafety']);
Route::get('edittransportworker/{id}',[transportController::class,'edittransportworker']);
Route::get('transporteditdefects/{id}',[transportController::class,'edittransdefects']);
Route::get('edittraintrans/{id}',[transportController::class,'edittraintrans']);
Route::get('editsafetytransport/{id}',[transportController::class,'editsafetytransport']);
Route::get('edittransportmachine/{id}',[transportController::class,'edittransportmachine']);
Route::post('transportaddworker',[transportController::class,'transportaddworker'])->name('transport.addworker');
Route::post('transportupdateworker',[transportController::class,'transportupdateworker'])->name('updatetransportworker');
Route::post('addtransdefects',[transportController::class,'addtransdefects'])->name('trans.addtransdefects');
Route::post('addtranstrain',[transportController::class,'addtranstrain'])->name('addtranstrain');
Route::post('addtransportmachines',[transportController::class,'addtransmachines'])->name('store.addtransmachinesmachines');
Route::post('addtransportsafety',[transportController::class,'addtranssafety'])->name('trans.transsafety');
Route::post('transportupdatmachine',[transportController::class,'transportupdatemachine'])->name('transportupdatemachine');
Route::post('transportupdatesafety',[transportController::class,'transportupdatesafety'])->name('transportupdatesafety');
Route::post('updatetransporttrain',[transportController::class,'updatetranstrain'])->name('trans.updatetranstrain');
Route::post('transportupdatdefects',[transportController::class,'transportupdatdefects'])->name('transportupdatedefects');
});
// QUALITY ROUTES
Route::group(['middleware'=>['quality']], function(){
Route::get('quality',[qualityController::class,'quality'])->name('qualityroute');
Route::get('editqmworker/{id}',[qualityController::class,'editqmworker']);
Route::get('sop',[SOP_controller::class,'SOP']);
Route::post('addannounce',[qualityController::class,'addannounce'])->name('addannounce');
Route::post('updateannounce',[qualityController::class,'updateannounce'])->name('updateannounce');
Route::get('editannounce/{id}',[qualityController::class,'editannounce']);
Route::get('deleteannounce/{id}',[qualityController::class,'deleteannounce']);
Route::get('deleteqmworker/{id}',[qualityController::class,'deleteqmworker']);
Route::get('deleteqmtrain/{id}',[qualityController::class,'deleteqmtrain']);
Route::get('deleteqmmachine/{id}',[qualityController::class,'deleteqmmachine']);
Route::get('deleteqmdefects/{id}',[qualityController::class,'deleteqmdefects']);
Route::get('deletetranssafety/{id}',[qualityController::class,'deletetranssafety']);
Route::get('editdefectsquality/{id}',[qualityController::class,'editdefectsquality']);
Route::get('edittrainqm/{id}',[qualityController::class,'edittrainqm']);
Route::get('editqmsafety/{id}',[qualityController::class,'editqmsafety']);
Route::get('editqmmachine/{id}',[qualityController::class,'editqmmachine']);
Route::post('addqmworker',[qualityController::class,'addqmworker'])->name('addqmworker');
Route::post('updateqmworker',[qualityController::class,'updateqmworker'])->name('updateqmworker');
Route::post('addqualitydefects',[qualityController::class,'addqualitydefects'])->name('addqualitydefects');
Route::post('addqmtrain',[qualityController::class,'addqmtrain'])->name('addqmtrain');
Route::post('addqmmachines',[qualityController::class,'addqmmachines'])->name('addqmmachines');
Route::post('addqmsafety',[qualityController::class,'addqmsafety'])->name('addqmsafety');
Route::post('qmupdatemachine',[qualityController::class,'qmupdatemachine'])->name('qmupdatemachine');
Route::post('qmupdatesafety',[qualityController::class,'qmupdatesafety'])->name('qmupdatesafety');
Route::post('updateqmtrain',[qualityController::class,'updateqmtrain'])->name('updateqmtrain');
Route::post('qualityupdatdefects',[qualityController::class,'qualityupdatdefects'])->name('qualityupdatdefects');
Route::get('uploadsop',[SOP_controller::class,'uploadsop'])->name('uploadsop');
Route::get('released',[releasedProductsController::class,'releasedproducts']);
//kili
Route::post('addreleasedkili',[releasedProductsController::class,'addreleasedkili'])->name('kili.addrleasedkili');
Route::post('addreleasedsafari',[releasedProductsController::class,'addreleasedsafari'])->name('safari.addreleasedsafari');
Route::post('addreleasedclager',[releasedProductsController::class,'addreleasedclager'])->name('clager.addreleasedclager');
Route::post('addreleasedclite',[releasedProductsController::class,'addreleasedclite'])->name('clite.addreleasedclite');
Route::get('editreleasedkili/{id}',[qualityController::class,'editreleasedkili']);
Route::get('deletereleasedkili/{id}',[qualityController::class,'deletereleasedkili']);
Route::post('updatereleasedkili',[qualityController::class,'updatereleasedkili'])->name('updatereleasedkili');
//safari
Route::get('editreleasedsafari/{id}',[qualityController::class,'editreleasedsafari']);
Route::get('deletereleasedsafari/{id}',[qualityController::class,'deletereleasedsafari']);
Route::post('updatereleasedsafari',[qualityController::class,'updatereleasedsafari'])->name('updatereleasedsafari');
//clager
Route::get('editreleasedclager/{id}',[qualityController::class,'editreleasedclager']);
Route::get('deletereleasedclager/{id}',[qualityController::class,'deletereleasedclager']);
Route::post('updatereleasedclager',[qualityController::class,'updatereleasedclager'])->name('updatereleasedclager');
//clite
Route::get('editreleasedclite/{id}',[qualityController::class,'editreleasedclite']);
Route::get('deletereleasedclite/{id}',[qualityController::class,'deletereleasedclite']);
Route::post('updatereleasedclite',[qualityController::class,'updatereleasedclite'])->name('updatereleasedclite');

Route::get('rejects',[rejectsController::class,'rejects']);
//kili
Route::post('addkilirejects',[rejectsController::class,'addkilirejects'])->name('kili.addkilirejects');
Route::post('addsafarirejects',[rejectsController::class,'addsafarirejects'])->name('safari.addsafarirejects');
Route::post('addcastlelagerrejects',[rejectsController::class,'addcastlelagerrejects'])->name('c.lager.addcastlelagerrejects');
Route::post('addcastleliterejects',[rejectsController::class,'addcastleliterejects'])->name('c.lite.addcastleliterejects');
Route::get('editrejectskili/{id}',[qualityController::class,'editrejectskili']);
Route::get('deleterejectskili/{id}',[qualityController::class,'deleterejectskili']);
Route::post('updaterejectskili',[qualityController::class,'updaterejectskili'])->name('updaterejectskili');
//safari
Route::get('editrejectssafari/{id}',[qualityController::class,'editrejectssafari']);
Route::get('deleterejectssafari/{id}',[qualityController::class,'deleterejectssafari']);
Route::post('updatesafarirejects',[qualityController::class,'updatesafarirejects'])->name('updatesafarirejects');
//clager
Route::get('editrejectsclager/{id}',[qualityController::class,'editrejectsclager']);
Route::get('deleterejectsclager/{id}',[qualityController::class,'deleterejectsclager']);
Route::post('updateclagerrejects',[qualityController::class,'updateclagerrejects'])->name('updateclagerrejects');
//clite
Route::get('editrejectsclite/{id}',[qualityController::class,'editrejectsclite']);
Route::get('deleterejectsclite/{id}',[qualityController::class,'deleterejectsclite']);
Route::post('updatecliterejects',[qualityController::class,'updatecliterejects'])->name('updatecliterejects');

Route::get('audit',[auditController::class,'audit']);
Route::post('addaudithistory',[auditController::class,'addaudithistory'])->name('audit.addaudithistory');
Route::post('addnonconformity',[auditController::class,'addnonconformity'])->name('non.addnonconformity');
Route::get('editaudit/{id}',[qualityController::class,'editaudit']);
Route::get('deleteaudit/{id}',[qualityController::class,'deleteaudit']);
Route::get('editnon/{id}',[qualityController::class,'editnon']);
Route::get('editmeeting/{id}',[qualityController::class,'editmeeting']);
Route::get('editconclusion/{id}',[qualityController::class,'editconclusion']);
Route::post('editupdate',[qualityController::class,'editupdate'])->name('editupdate');
Route::post('updatenon',[qualityController::class,'updatenon'])->name('updatenon');

Route::get('management',[managementController::class,'management'])->name('management');
Route::post('addmeeting',[managementController::class,'addmeeting'])->name('meeting.addmeeting');
Route::post('addconclusion',[managementController::class,'addconclusion'])->name('conclusion.addconclusion');
Route::post('updatemeeting',[qualityController::class,'updatemeeting'])->name('updatemeeting');
Route::get('deletemeeting/{id}',[qualityController::class,'deletemeeting']);
Route::post('updateconclusion',[qualityController::class,'updateconclusion'])->name('updateconclusion');
Route::post('uploadarchive',[archiveController::class,'uploadarchive'])->name('archive.upload');
Route::get('archive',[archiveController::class,'archive']);
Route::get('viewarchive/{File}',[archiveController::class,'viewarchive']);
Route::get('viewaction/{File}',[plannedactionsController::class,'viewaction']);
Route::get('downloadaction/{File}',[plannedactionsController::class,'downloadaction']);
Route::get('downloadarchive/{File}',[archiveController::class,'downladarchive']);
Route::get('deletearchive/{id}',[qualityController::class,'deletearchive']);
Route::get('statistics',[statisticsCotroller::class,'statistics'])->name('statistics');
Route::get('plannedactions',[plannedactionsController::class,'plannedactions']);
Route::post('uploadfile',[plannedactionsController::class,'uploadfile'])->name('uploadfile');
Route::get('deleteaction/{id}',[qualityController::class,'deleteaction']);
Route::get('objectives',[objectivesController::class,'objectives']);
Route::post('uploadobjective',[objectivesController::class,'uploadobjective'])->name('objective.upload');
Route::get('viewobjective/{File}',[objectivesController::class,'viewobjective']);
Route::get('downloadobjective/{File}',[objectivesController::class,'downloadobjective']);
Route::get('deleteobjective/{id}',[qualityController::class,'deleteobjective']);
});