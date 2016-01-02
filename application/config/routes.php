<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Login/show';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* form input pelimpahan perkara */
$route['home']											=	"Dashboard";
$route['Home']											=	"Dashboard";
$route['homeE']											=	"Dashboard/homeEmpty";
$route['dataPelimpahanPerkara']							=	"Dashboard/dataPelimpahanPerkara";
$route['formPelimpahan']								=	"Dashboard_/formPelimpahanPerkara"; // code AD, JK
$route['simpanPelimpahan']								=	"Dashboard_/simpanPelimpahan"; // code AD, JK
$route['dataSuratPelimpahan']							=	"Dashboard_/listSuratPelimpahan";
$route['prosesPenginputan']								=	"Dashboard_/formSuratLanjutan";
$route['formDataPeradilan']								=	"Dashboard/formDataPeradilan"; //code AD
$route['resCariNomorPelimpahanPerkara']		 			=	"Dashboard/cariNomorPelimpahanPerkara";
$route['resTambahDataTerdakwa']				 			=	"Dashboard/formTambahDataTerdakwa";
$route['resTambahDataDakwaan']				 			=	"Dashboard/formTambahDataDakwaan";
//
$route['resDataTerdakwa'] 								=	"Dashboard/suratDakwaan";
$route['resFormDataTerdakwa'] 							=	"Dashboard/FormDataTerdakwa";
$route['resDataTerdakwaTambah'] 						=	"Dashboard/FormDataTerdakwaTambah";
//$route['saveDataPelimpahan'] 										=	"Dashboard/simpanDataPelimpahan"; // code AD, JK
$route['savePelimpahanBerkasPerkara'] 					=	"Dashboard/simpanPelimpahanBerkasPerkara"; // code AD, JK
$route['saveDataPerkara'] 								=	"Dashboard/simpanDataPerkara"; // code AD
$route['resCariDataPelimpahan'] 						=	"Dashboard/responseCariDataPelimpahanPerkara";
$route['InsertDataPersidangan'] 						=	"Dashboard/InsertDataPersidangan";
$route['showsurat'] 									=	"Dashboard/showNoSurat";
$route['showdetailsurat'] 								=	"Dashboard/showNoSuratDetail"; //code AD
$route['showsuratView'] 								=	"Dashboard/showNoSuratView";
$route['showdetailsuratView'] 							=	"Dashboard/showNoSuratViewDetail";
$route['editNoSuratDetail'] 							=	"Dashboard/editNoSuratDetail"; //code AD 
$route['editNoSurat'] 									=	"Dashboard/editNoSurat";
$route['UpdatePelimpahanBerkasPerkaraDetail'] 			=	"Dashboard/UpdatePelimpahanBerkasPerkaraDetail"; //code AD
$route['UpdatePelimpahanBerkasPerkara'] 				=	"Dashboard/UpdatePelimpahanBerkasPerkara";
$route['deletePelimpahanBerkasPerkara'] 				=	"Dashboard/deletePelimpahanBerkasPerkara";
/**/
$route['showToday'] 										=	"Dashboard/showToday";
$route['showTanpaPerkara'] 								=	"Dashboard/showTanpaPerkara";
/**/
$route['admlogin']										=	"Login"; 
$route['login/find']									=	"Login/cariApapun";  
$route['loginResponse']									=	"Login/response";
$route['logout']										=	"Login/logout";
/**/
$route['resCariApapun']									=	"Login/cariApapun";
 