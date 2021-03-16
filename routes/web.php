<?php

use Illuminate\Support\Facades\Route;

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
// forntend Default Route 
Route::get('/', function () {
    return view('pages.index');
});
// Backend Default Route 

Route::get('/json-districts','AddressController@district');
Route::get('/json-upazila','AddressController@upazila');
Route::get('/json-course','AddressController@course');
Route::get('/json-teacher','AddressController@teacher');
Route::get('/json-books','AddressController@book');
Route::get('/json-select_teacher','AddressController@selectTeacher');
Route::get('/json-select_course','AddressController@selectCourse');
Route::get('/json-dpt_book','AddressController@dptBook');
Route::get('/json-enroll_course','AddressController@courseEnroll');
Route::get('/json-selectCourse','AddressController@stdCourses');
Route::get('/json-select_std_teacher','AddressController@stdTeacher');
Route::get('/json-select_student','AddressController@selectStudent');
Route::get('/json-fetch_student_data','AddressController@fetchStudent');


Route::get('/json-subjectAssign','Admin\student\JsonStudentController@subject');
Route::get('/json-fetch_subject','Admin\student\JsonStudentController@fetchSubject');
Route::get('/json-fetch_student','Admin\student\JsonStudentController@fetchStudents');
// Route::get('/json-select_semester','Admin\student\JsonStudentController@fetchSemiterSub');
Route::get('/json-select_semester','Admin\student\JsonStudentController@fetchStudents');


// ============================> Admin <================================\\
// Route Department Data

Route::get('user/view-user','UserController@index');


Route::get('department/add-department','Admin\student\DepartmentController@create');
Route::post('department','Admin\student\DepartmentController@store');
Route::get('department/department-view','Admin\student\DepartmentController@index');
Route::get('department/{id}/delete','Admin\student\DepartmentController@destroy');
Route::get('department/{id}/edit','Admin\student\DepartmentController@edit');
Route::post('department/{id}','Admin\student\DepartmentController@update');

// Teacher
Route::get('teacher/teacherinfo','Admin\TeacherController@create');
Route::post('teachers','Admin\TeacherController@store');
Route::get('teacher/view-teacher','Admin\TeacherController@index');
Route::get('teacher/{id}/edit','Admin\TeacherController@edit');
Route::post('teachers/{id}','Admin\TeacherController@update');
Route::get('teacher/{id}/delete','Admin\TeacherController@destroy');

// Course 
Route::get('course/course-add','Admin\course\CourseController@create');
Route::post('courses','Admin\course\CourseController@store');
Route::get('course/view-course','Admin\course\CourseController@index');
Route::get('course/{id}/edit','Admin\course\CourseController@edit');
Route::post('courses/{id}','Admin\course\CourseController@update');
Route::get('course/{id}/delete','Admin\course\CourseController@destroy');

// Semister 
Route::get('semister/add-semister','Admin\student\SemisterController@create');
Route::post('semisters','Admin\student\SemisterController@store');
Route::get('semister/view-semister','Admin\student\SemisterController@index');
Route::get('semister/{id}/semister-edit','Admin\student\SemisterController@edit');
Route::post('semisters/{id}','Admin\student\SemisterController@update');
Route::get('semister/{id}/delete','Admin\student\SemisterController@destroy');

// Year  
Route::get('year/add-year','Admin\student\YearController@create');
Route::post('years','Admin\student\YearController@store');
Route::get('year/view-year','Admin\student\YearController@index');
Route::get('year/{id}/year-edit','Admin\student\YearController@edit');
Route::post('years/{id}','Admin\student\YearController@update');
Route::get('year/{id}/delete','Admin\student\YearController@destroy');

// Shift 
Route::get('shift/add-shift','Admin\student\ShiftController@create');
Route::post('shifts','Admin\student\ShiftController@store');
Route::get('shift/view-shift','Admin\student\ShiftController@index');
Route::get('shift/{id}/shift-edit','Admin\student\ShiftController@edit');
Route::post('shifts/{id}','Admin\student\ShiftController@update');
Route::get('shift/{id}/delete','Admin\student\ShiftController@destroy');

// Fee Category  
Route::get('fee/add-fee','Admin\student\FeeCategoryController@create');
Route::post('fees','Admin\student\FeeCategoryController@store');
Route::get('fee/view-fee','Admin\student\FeeCategoryController@index');
Route::get('fee/{id}/fee-edit','Admin\student\FeeCategoryController@edit');
Route::post('fees/{id}','Admin\student\FeeCategoryController@update');
Route::get('fee/{id}/delete','Admin\student\FeeCategoryController@destroy');

// Fee Amount  
Route::get('amount/add-amount','Admin\student\FeeAmountController@create');
Route::post('amounts','Admin\student\FeeAmountController@store');
Route::get('amount/view-amount','Admin\student\FeeAmountController@index');
Route::get('amount/{id}/amount-edit','Admin\student\FeeAmountController@edit');
Route::post('amounts/{id}','Admin\student\FeeAmountController@update');
Route::get('amount/{id}/delete','Admin\student\FeeAmountController@destroy');

// Subject With Department  
Route::get('subject/add-subject','Admin\student\SubjectController@create');
Route::post('subjects','Admin\student\SubjectController@store');
Route::get('subject/view-subject','Admin\student\SubjectController@index');
Route::get('subject/{id}/subject-edit','Admin\student\SubjectController@edit');
Route::post('subjects/{id}','Admin\student\SubjectController@update');
Route::get('subject/{id}/subject-delete','Admin\student\SubjectController@destroy');

// Assign Subject With Department 
Route::get('assigns/add-subject_assign','Admin\student\SubjectAssignController@create');
Route::post('assign_subjects','Admin\student\SubjectAssignController@store');
Route::get('assigns/view-subject_assign','Admin\student\SubjectAssignController@index');
Route::get('assigns/{id}/subject_assign-edit','Admin\student\SubjectAssignController@edit');
Route::post('subjects/{id}','Admin\student\SubjectAssignController@update');
Route::get('assigns/{id}/subject_assign-delete','Admin\student\SubjectAssignController@destroy');

// Student Result Add  
Route::get('result/add-result','Admin\student\ResultController@create');
Route::post('results','Admin\student\ResultController@store');
Route::get('result/view-result','Admin\student\ResultController@index');
Route::get('result/{id}/result-edit','Admin\student\ResultController@edit');
Route::post('results/{id}','Admin\student\ResultController@update');
Route::get('result/{id}/result-delete','Admin\student\ResultController@destroy');

// Route Student Data 
Route::get('student/add-student','Admin\student\StudentController@create');
Route::post('students','Admin\student\StudentController@store');
Route::get('student/view-student','Admin\student\StudentController@index');
Route::get('student/{id}/edit','Admin\student\StudentController@edit');
Route::post('students/{id}','Admin\student\StudentController@update');
Route::get('student/{id}/delete','Admin\student\StudentController@destroy');

// Assign A new Course -->
Route::get('assign/add-courseAssign','Admin\course\CourseAssignController@create');
Route::post('assign-course','Admin\course\CourseAssignController@store');
Route::get('assign/view-courseAssign','Admin\course\CourseAssignController@index');
Route::get('assign/{id}/assign-edit','Admin\course\CourseAssignController@edit');
Route::get('assign/{id}/assign-delete','Admin\course\CourseAssignController@destroy');
Route::post('assign-course/{id}','Admin\course\CourseAssignController@update');

// Course Enroll
Route::get('enroll/add-enrollCourse','Admin\course\EnrollController@create');
Route::post('enrolles','Admin\course\EnrollController@store');
Route::get('enroll/view-enrollCourse','Admin\course\EnrollController@index');
Route::get('enroll/{id}/enroll-edit','Admin\course\EnrollController@edit');
Route::get('enroll/{id}/enroll-delete','Admin\course\EnrollController@destroy');
Route::post('enrolls/{id}','Admin\course\EnrollController@update');

// Book
Route::get('library/book/add-book','Admin\library\BookController@create');
Route::post('books','Admin\library\BookController@store');
Route::get('library/book/book-view','Admin\library\BookController@index');
Route::get('book/{id}/edit','Admin\library\BookController@edit');
Route::post('books/{id}','Admin\library\BookController@update');
Route::get('book/{id}/delete','Admin\library\BookController@destroy');
Route::get('library/find/find-book','Admin\library\BookController@find');

// registration
Route::get('register','RegistrationController@create');
Route::post('sign-up','RegistrationController@register');
Route::get('login','LoginController@loginform');
Route::get('logout','LoginController@logout');
Route::post('login-form','LoginController@login');

// Route for Category 
Route::get('admin','Admin\AdminController@admin');

Route::get('post/add-category','Admin\CategoryController@create');
Route::get('view/category-view','Admin\CategoryController@index');
Route::post('category','admin\CategoryController@store');
Route::delete('category/{id}/delete','Admin\CategoryController@destroy');
Route::get('category/{id}/edit','Admin\CategoryController@edit');
Route::post('category/{id}/','Admin\CategoryController@update');

// Route For Post 
Route::get('post/add-post','Admin\PostController@create');
Route::get('view/post-view','Admin\PostController@index');
Route::post('post','Admin\PostController@store');
Route::post('post/{id}','Admin\PostController@update');
Route::get('view/{id}/edit','Admin\PostController@edit');
Route::get('post/{id}/delete','Admin\PostController@destroy');

// =======---Address----->
// division
Route::get('address/division/add-division','Admin\address\DivisionController@create');
Route::post('divisions','Admin\address\DivisionController@store');
Route::get('address/division/division-view','Admin\address\DivisionController@index');
Route::get('division/{id}/division-edit','Admin\address\DivisionController@edit');
Route::post('divisions/{id}','Admin\address\DivisionController@update');
// districts 
Route::get('address/districts/add-districts','Admin\address\DistrictController@create');
Route::post('districts','Admin\address\DistrictController@store');
Route::get('address/districts/districts-view','Admin\address\DistrictController@index');
Route::get('districts/{id}/districts-edit','Admin\address\DistrictController@edit');
Route::get('districts/{id}/districts-delete','Admin\address\DistrictController@destroy');
Route::post('districts/{id}','Admin\address\DistrictController@update');
// Upazila 
Route::get('address/upazilla/add-upazilla','Admin\address\UpazilaController@create');
Route::get('address/upazilla/upazilla-view','Admin\address\UpazilaController@index');
Route::post('upazilas','Admin\address\UpazilaController@store');
Route::get('upazila/{id}/upazila-edit','Admin\address\UpazilaController@edit');
Route::get('upazila/{id}/upazila-delete','Admin\address\UpazilaController@destroy');
Route::post('upazilas/{id}/','Admin\address\UpazilaController@update');
// ================================ Front End ===================================================>

// Route Frontend 
Route::get('blog-post','Frontend\BlogController@view');
Route::get('blogdetails/{id}','Frontend\DetailsController@details');
// Route comment 
Route::post('comment','Frontend\CommentController@store');

// Route CategoryPost
Route::get('category/{id}','Frontend\CategoryPostController@index');

// ======== Route About Page ================ \\
// admin---------->
//  About
Route::get('abouts/about-details','Admin\about\AboutController@create');
Route::post('about','Admin\about\AboutController@store');
Route::get('abouts/about-view','Admin\about\AboutController@index');
Route::get('about/{id}/edit','Admin\about\AboutController@edit');
Route::post('about/{id}','Admin\about\AboutController@update');
Route::get('about/{id}/delete','Admin\about\AboutController@destroy');
//  project
Route::get('abouts/project/add-project','Admin\about\ProjectController@create');
Route::get('abouts/project/project-view','Admin\about\ProjectController@index');
Route::get('project/{id}/edit','Admin\about\ProjectController@edit');
Route::post('project','Admin\about\ProjectController@store');
Route::post('project/{id}','Admin\about\ProjectController@update');
Route::get('project/{id}/delete','Admin\about\ProjectController@destroy');
// skill
Route::get('abouts/skill/add-skill','Admin\about\SkilController@create');
Route::get('abouts/skill/skill-view','Admin\about\SkilController@index');
Route::post('skill','Admin\about\SkilController@store');
Route::get('skill/{id}/edit','Admin\about\SkilController@edit');
Route::post('skill/{id}/','Admin\about\SkilController@update');
Route::get('skill/{id}/delete','Admin\about\SkilController@destroy');
// skill Details 
Route::get('abouts/skill/add-skilldetails','Admin\about\SkilldetailsController@create');
Route::post('skilldetails','Admin\about\SkilldetailsController@store');
Route::get('abouts/skill/view-skilldetails','Admin\about\SkilldetailsController@index');
Route::get('skilldetails/{id}/edit','Admin\about\SkilldetailsController@edit');
Route::get('skilldetails/{id}/delete','Admin\about\SkilldetailsController@destroy');
Route::post('skilldetails/{id}','Admin\about\SkilldetailsController@update');
// Team Section
Route::get('abouts/team/add-member','Admin\about\TeamController@create');
Route::post('teams','Admin\about\TeamController@store');
Route::get('abouts/team/member-view','Admin\about\TeamController@index');
Route::get('team/{id}/edit','Admin\about\TeamController@edit');
Route::get('team/{id}/delete','Admin\about\TeamController@destroy');
Route::post('teams/{id}/','Admin\about\TeamController@update');
// details
Route::get('abouts/team/add-teamdetails','Admin\about\TeamDetailsController@create');
Route::post('teamdetails','Admin\about\TeamDetailsController@store');
Route::get('abouts/team/view-teamdetails','Admin\about\TeamDetailsController@index');
Route::get('teamdetails/{id}/edit','Admin\about\TeamDetailsController@edit');
Route::get('teamdetails/{id}/delete','Admin\about\TeamDetailsController@destroy');
Route::post('teamdetails/{id}','Admin\about\TeamDetailsController@update');

// Jobs
Route::get('abouts/job/add-jobdetails','Admin\about\JobController@create');
Route::post('jobs','Admin\about\JobController@store');
Route::get('abouts/job/view-jobdetails','Admin\about\JobController@index');
Route::get('job/{id}/edit','Admin\about\JobController@edit');
Route::get('job/{id}/delete','Admin\about\JobController@destroy');
Route::post('jobs/{id}','Admin\about\JobController@update');

// Partner
Route::get('abouts/imgslide/add-imgslide','Admin\about\PartnerController@create');
Route::post('/partners','Admin\about\PartnerController@store');
Route::get('abouts/imgslide/imgslide-view','Admin\about\PartnerController@index');
Route::get('imgslide/{id}/edit','Admin\about\PartnerController@edit');
Route::get('imgslide/{id}/delete','Admin\about\PartnerController@destroy');
Route::post('partners/{id}','Admin\about\PartnerController@update');

// Frontend--------------->
Route::get('about','Frontend\AboutController@view');