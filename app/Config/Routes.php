<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AssessmentController::index');
$routes->get('/Em/(:any)', 'AssessmentController::employe/$1');

// User account management
$routes->post('/login-user', 'AssessmentController::login');
$routes->get('/logout-user', 'AssessmentController::logout');
$routes->post('/edit-password', 'AssessmentController::editPassword');

// Employee Data Management
$routes->get('/data-tabel-employee', 'AssessmentController::dataTabelEmployee');
$routes->post('/add-employee', 'AssessmentController::addDataEmployee');
$routes->post('/edit-employee', 'AssessmentController::editDataEmployee');
$routes->post('/delete-employee', 'AssessmentController::deleteDataEmployee');
$routes->post('/import-excel-employee', 'AssessmentController::importExcelEmployee');
// Doneee

// Account Data Management
$routes->get('/data-tabel-account', 'AssessmentController::dataTabelAccount');
$routes->post('/add-user', 'AssessmentController::addDataUser');
$routes->post('/edit-user', 'AssessmentController::editDataUser');
$routes->post('/delete-user', 'AssessmentController::deleteDataUser');
$routes->post('/import-excel-user', 'AssessmentController::importExcelUser');
// Doneee

// Assessment Category Data Management
$routes->get('/data-tabel-category', 'AssessmentController::dataTabelCategory');
$routes->post('/add-assessment-category', 'AssessmentController::addAssessmentCategoryData');
$routes->post('/edit-assessment-category', 'AssessmentController::editAssessmentCategoryData');
$routes->post('/delete-assessment-category', 'AssessmentController::deleteAssessmentCategoryData');
// Doneee

// Assessment Parameters Data Management
$routes->get('/data-tabel-parameter', 'AssessmentController::dataTabelParameter');
$routes->post('/add-assessment-parameter', 'AssessmentController::addAssessmentParameterData');
$routes->post('/edit-assessment-parameter', 'AssessmentController::editAssessmentParameterData');
$routes->post('/delete-assessment-parameter', 'AssessmentController::deleteAssessmentParameterData');
// Doneee

// Assessment Department Target Data Management
$routes->get('/data-tabel-department-target', 'AssessmentController::dataTabelDepartmentTarget');
$routes->post('/add-assessment-department-target', 'AssessmentController::addAssessmentDepartmentTarget');
$routes->post('/edit-assessment-department-target', 'AssessmentController::editAssessmentDepartmentTarget');
$routes->post('/delete-assessment-department-target', 'AssessmentController::deleteAssessmentDepartmentTarget');
$routes->post('/import-assessment-department-target', 'AssessmentController::importAllDataDepartmentTarget');
// Doneee


// Leader
$routes->get('/data-tabel-subordinate', 'AssessmentController::dataTabelSubordinate');
$routes->get('/detailSubordinate', 'AssessmentController::detailSubordinate');
$routes->get('/data-subordinate-target', 'AssessmentController::dataTabelSubordinateTarget');
$routes->post('/import-department-target-sub', 'AssessmentController::importDataDepartmentTargetSub');