<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin',
    'as' => 'admin.'], function()
    {
      Route::apiResource('merge_result', 'MergeresultController');
      Route::apiResource('message', 'MessageController');
      Route::apiResource('news', 'NewsController');
      Route::apiResource('psychomotor', 'PsychomotorController');
      Route::apiResource('result_lock', 'ResultlockController');
      Route::apiResource('score', 'ScoreController');
      Route::apiResource('scratch_card_detail', 'ScratchcardDetailController');
      Route::apiResource('session', 'SessionController');
      Route::apiResource('session_record', 'SessionRecordController');
      Route::apiResource('signature', 'SignatureController');
      Route::apiResource('student_bio_data','StudentBiodataController');
      Route::apiResource('subjects', 'SubjectController');
      Route::apiResource('teacher_comment', 'TeachercommentController');
      Route::apiResource('teacher_detail', 'TeacherdetailController');
      Route::apiResource('affective', 'AffectiveController');
      Route::apiResource('all_hm_comment', 'AllhmcommentController');
      Route::apiResource('arms', 'ArmController');
      Route::apiResource('allocation', 'AllocationController');
      Route::apiResource('assessment', 'AssessmentController');
      Route::apiResource('attendance', 'AttendanceController');
      Route::apiResource('clas', 'ClasController');
      Route::apiResource('class_teacher', 'ClassteacherController');
      Route::apiResource('comment', 'CommentController');
      Route::apiResource('events', 'EventController');
      Route::apiResource('hm_comment', 'HmcommentController');
      Route::apiResource('user', 'UserController');
      Route::apiResource('resumption_close', 'ResumptionCloseController');
      Route::apiResource('subject_order', 'SubjectOrderController');
    });