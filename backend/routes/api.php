<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\StatController;
use App\Http\Controllers\QualityController;
use App\Http\Controllers\SpecialtyController;
use App\Http\Controllers\DisadvantageController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\HistoricalEventController;


use App\Models\User;

// Public routes
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Protected routes
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    ///////////   Character routes    ///////////
    // CRUD Characters
    Route::get('/character/{id}', [CharacterController::class, 'getCharacter']);
    Route::get('/character', [CharacterController::class, 'listCharacter']);
    Route::post('/character/create', [CharacterController::class, 'createCharacter']);
    Route::put('/character/{id}/update', [CharacterController::class, 'updateCharacter']);
    Route::delete('/character/{id}/delete', [CharacterController::class, 'deleteCharacter']);

    // XP and Destiny Points
    Route::put('/character/{id}/add-xp', [CharacterController::class, 'addXP']);
    Route::put('/character/{id}/spend-xp', [CharacterController::class, 'spendXP']);
    Route::put('/character/{id}/add-destiny-points', [CharacterController::class, 'addDestinyPoints']);
    Route::put('/character/{id}/spend-destiny-points', [CharacterController::class, 'spendDestinyPoints']);

    // Stats, Qualities, Specialties, Disadvantages management
    Route::get('/character/{id}/stats', [CharacterController::class, 'getCharacterStats']);
    Route::get('/character/{id}/qualities', [CharacterController::class, 'getCharacterQualities']);
    Route::get('/character/{id}/specialties', [CharacterController::class, 'getCharacterSpecialties']);
    Route::get('/character/{id}/disadvantages', [CharacterController::class, 'getCharacterDisadvantages']);
    Route::post('/character/{id}/stats/add', [CharacterController::class, 'addCharacterStat']);
    Route::post('/character/{id}/qualities/add', [CharacterController::class, 'addCharacterQuality']);
    Route::post('/character/{id}/specialties/add', [CharacterController::class, 'addCharacterSpecialty']);
    Route::post('/character/{id}/disadvantages/add', [CharacterController::class, 'addCharacterDisadvantage']);
    Route::delete('/character/{id}/disadvantages/delete', [CharacterController::class, 'deleteCharacterDisadvantage']);


    ///////////   House routes    ///////////
    // CRUD Houses
    Route::get('/house/{id}', [HouseController::class, 'getHouse']);
    Route::get('/house', [HouseController::class, 'listHouse']);
    Route::post('/house/create', [HouseController::class, 'createHouse']);
    Route::put('/house/{id}/update', [HouseController::class, 'updateHouse']);
    Route::delete('/house/{id}/delete', [HouseController::class, 'deleteHouse']);

    // House events, regions and members
    Route::post('/house/{id}/createEvents', [HouseController::class, 'createHouseEvent']);
    Route::get('/house/{id}/events', [HouseController::class, 'listHouseEvents']);
    Route::get('/house/{id}/region', [HouseController::class, 'getHouseRegion']);
    Route::get('/house/{id}/members', [HouseController::class, 'listHouseMembers']);


    ///////////   Stat routes    ///////////
    Route::get('/stat/{id}', [StatController::class, 'getStat']);
    Route::get('/stat', [StatController::class, 'listStats']);

    ///////////   Quality routes    ///////////
    Route::get('/quality/{id}', [QualityController::class, 'getQuality']);
    Route::get('/quality', [QualityController::class, 'listQualities']);

    ///////////   Specialty routes    ///////////
    Route::get('/specialty/{id}', [SpecialtyController::class, 'getSpecialty']);
    Route::get('/specialty', [SpecialtyController::class, 'listSpecialties']);

    ///////////   Disadvantage routes    ///////////
    Route::get('/disadvantage/{id}', [DisadvantageController::class, 'getDisadvantage']);
    Route::get('/disadvantage', [DisadvantageController::class, 'listDisadvantages']);

    ///////////   Region routes    ///////////
    Route::get('/region/{id}', [RegionController::class, 'getRegion']);
    Route::get('/region', [RegionController::class, 'listRegions']);

    ///////////   Historical Event routes    ///////////
    Route::get('/historical-event/{id}', [HistoricalEventController::class, 'getHistoricalEvent']);
    Route::get('/historical-event', [HistoricalEventController::class, 'listHistoricalEvents']);
});
