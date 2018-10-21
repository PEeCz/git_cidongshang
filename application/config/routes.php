<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Website
 */
$route['default_controller'] = 'Home';
$route['Checkout'] = 'Home/Checkout';

/*
 * Admin Backend
 */
$route['LoginBackend'] = 'Admin';
$route['Loginchk'] = 'Admin/login_adminchk';
$route['Dashboard'] = 'Superadmin';
$route['AddCategory'] = 'Superadmin/addCategory';
$route['Savecategory'] = 'Superadmin/saveCategory';
$route['unpublishedCategory/(.+)'] = 'Superadmin/unpublishedCategory/$1';
$route['publishedCategory/(.+)'] = 'Superadmin/publishedCategory/$1';
$route['editCategory/(.+)'] = 'Superadmin/editCategory/$1';
$route['Updatecategory'] = 'Superadmin/updateCategory';
$route['deleteCategory/(.+)'] = 'Superadmin/deleteCategory/$1';

$route['AddManufacture'] = 'Superadmin/addManufacture';
$route['Savemanufacture'] = 'Superadmin/saveManufacture';
$route['unpublishedManufacture/(.+)'] = 'Superadmin/unpublishedManufacture/$1';
$route['publishedManufacture/(.+)'] = 'Superadmin/publishedManufacture/$1';
$route['editManufacture/(.+)'] = 'Superadmin/editManufacture/$1';
$route['deleteManufacture/(.+)'] = 'Superadmin/deleteManufacture/$1';

$route['operationData'] = 'Backend/operationData';
$route['AddOperationData'] = 'Backend/addOperationData';
$route['SaveAddOperationData'] = 'Backend/saveAddOperationData';

$route['accountingData'] = 'Backend/accountingData';
$route['AddAccountingData/(.+)'] = 'Backend/addAccountingData/$1';

$route['Logout'] = 'Superadmin/logout';





$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
