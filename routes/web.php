<?php

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

Route::get('/', function () { return redirect('mypage/index'); });

/* My Page */
Route::get('mypage', function ()                { return redirect('mypage/index'); });
Route::get('mypage/index',                      'MypageController@index')->name('mypage.index');
Route::get('mypage/index4',                     'MypageController@index4')->name('mypage.index4');
Route::get('mypage/index5',                     'MypageController@index5')->name('mypage.index5');
Route::get('mypage/index6',                     'MypageController@index6')->name('mypage.index6');
Route::get('mypage/index7',                     'MypageController@index7')->name('mypage.index7');
Route::get('mypage/index8',                     'MypageController@index8')->name('mypage.index8');
Route::get('mypage/index9',                     'MypageController@index9')->name('mypage.index9');
Route::get('mypage/index10',                    'MypageController@index10')->name('mypage.index10');

/* My Page */
Route::get('dashboard', function ()             { return redirect('dashboard/index2'); });
Route::get('dashboard/index2',                  'DashboardController@index2')->name('dashboard.index2');
Route::get('dashboard/index3',                  'DashboardController@index3')->name('dashboard.index3');


/* App */
Route::get('contact', function ()               { return redirect('contact/contact'); });
Route::get('contact/contact',                   'ContactController@contact')->name('contact.contact');
Route::get('contact/contact2',                  'ContactController@contact2')->name('contact.contact2');

/* App */
Route::get('app', function ()                   { return redirect('app/contact'); });
Route::get('app/calendar',                      'AppController@calendar')->name('app.calendar');

/* email */
Route::get('email', function ()                 { return redirect('email/inbox'); });
Route::get('email/inbox',                       'EmailController@inbox')->name('email.inbox');
Route::get('email/compose',                     'EmailController@compose')->name('email.compose');
Route::get('email/inboxdetail',                 'EmailController@inboxdetail')->name('email.inboxdetail');

/* messenger */
Route::get('messenger', function ()             { return redirect('messenger/chat'); });
Route::get('messenger/chat',                    'MessengerController@chat')->name('messenger.chat');

/* Icons */
Route::get('icon', function ()                  { return redirect('icon/fontawesome'); });
Route::get('icon/fontawesome',                  'IconController@fontawesome')->name('icon.fontawesome');
Route::get('icon/iconsline',                    'IconController@iconsline')->name('icon.iconsline');
Route::get('icon/themify',                      'IconController@themify')->name('icon.themify');

/* Components  */
Route::get('components', function ()            { return redirect('components/bootstrap'); });
Route::get('components/bootstrap',              'ComponentsController@bootstrap')->name('components.bootstrap');
Route::get('components/typography',             'ComponentsController@typography')->name('components.typography');
Route::get('components/colors',                 'ComponentsController@colors')->name('components.colors');
Route::get('components/buttons',                'ComponentsController@buttons')->name('components.buttons');
Route::get('components/tabs',                   'ComponentsController@tabs')->name('components.tabs');
Route::get('components/progressbars',           'ComponentsController@progressbars')->name('components.progressbars');
Route::get('components/modals',                 'ComponentsController@modals')->name('components.modals');
Route::get('components/notifications',          'ComponentsController@notifications')->name('components.notifications');
Route::get('components/dialogs',                'ComponentsController@dialogs')->name('components.dialogs');
Route::get('components/listgroup',              'ComponentsController@listgroup')->name('components.listgroup');
Route::get('components/mediaobject',            'ComponentsController@mediaobject')->name('components.mediaobject');
Route::get('components/nestable',               'ComponentsController@nestable')->name('components.nestable');
Route::get('components/rangesliders',           'ComponentsController@rangesliders')->name('components.rangesliders');
Route::get('components/helperclass',            'ComponentsController@helperclass')->name('components.helperclass');

/* Forms  */
Route::get('forms', function ()                 { return redirect('forms/basic'); });
Route::get('forms/basic',                       'FormsController@basic')->name('forms.basic');
Route::get('forms/advanced',                    'FormsController@advanced')->name('forms.advanced');
Route::get('forms/validation',                  'FormsController@validation')->name('forms.validation');
Route::get('forms/wizard',                      'FormsController@wizard')->name('forms.wizard');
Route::get('forms/summernote',                  'FormsController@summernote')->name('forms.summernote');
Route::get('forms/dragdropupload',              'FormsController@dragdropupload')->name('forms.dragdropupload');
Route::get('forms/editors',                     'FormsController@editors')->name('forms.editors');
Route::get('forms/markdown',                    'FormsController@markdown')->name('forms.markdown');
Route::get('forms/cropping',                    'FormsController@cropping')->name('forms.cropping');

/* Table  */
Route::get('tables', function ()                { return redirect('tables/normal'); });
Route::get('tables/normal',                     'TablesController@normal')->name('tables.normal');
Route::get('tables/color',                      'TablesController@color')->name('tables.color');
Route::get('tables/datatable',                  'TablesController@datatable')->name('tables.datatable');
Route::get('tables/editable',                   'TablesController@editable')->name('tables.editable');
Route::get('tables/filter',                     'TablesController@filter')->name('tables.filter');
Route::get('tables/dragger',                    'TablesController@dragger')->name('tables.dragger');

/* Table  */
Route::get('charts', function ()                { return redirect('charts/c3'); });
Route::get('charts/c3',                         'ChartsController@c3')->name('charts.c3');
Route::get('charts/chartjs',                    'ChartsController@chartjs')->name('charts.chartjs');
Route::get('charts/morris',                     'ChartsController@morris')->name('charts.morris');
Route::get('charts/flot',                       'ChartsController@flot')->name('charts.flot');
Route::get('charts/sparkline',                  'ChartsController@sparkline')->name('charts.sparkline');
Route::get('charts/knob',                       'ChartsController@knob')->name('charts.knob');

/* Maps  */
Route::get('maps', function ()                  { return redirect('maps/jvectormap'); });
Route::get('maps/jvectormap',                   'MapsController@jvectormap')->name('maps.jvectormap');

/* Maps  */
Route::get('widget', function ()                { return redirect('widget/widgets'); });
Route::get('widget/widgets',                    'WidgetController@widgets')->name('widget.widgets');

/* Pages  */
Route::get('pages', function ()                 { return redirect('pages/blank'); });
Route::get('pages/blank',                       'PagesController@blank')->name('pages.blank');
Route::get('pages/profile',                     'PagesController@profile')->name('pages.profile');
Route::get('pages/userlist',                    'PagesController@userlist')->name('pages.userlist');
Route::get('pages/testimonials',                'PagesController@testimonials')->name('pages.testimonials');
Route::get('pages/invoices',                    'PagesController@invoices')->name('pages.invoices');
Route::get('pages/invoicedetails',              'PagesController@invoicedetails')->name('pages.invoicedetails');
Route::get('pages/timeline',                    'PagesController@timeline')->name('pages.timeline');
Route::get('pages/searchresults',               'PagesController@searchresults')->name('pages.searchresults');
Route::get('pages/gallery',                     'PagesController@gallery')->name('pages.gallery');
Route::get('pages/pricing',                     'PagesController@pricing')->name('pages.pricing');


/* Authentication  */
Route::get('authentication', function ()        { return redirect('authentication/login'); });
Route::get('authentication/login',              'AuthenticationController@login')->name('authentication.login');
Route::get('authentication/login2',             'AuthenticationController@login2')->name('authentication.login2');
Route::get('authentication/register',           'AuthenticationController@register')->name('authentication.register');
Route::get('authentication/forgotpassword',     'AuthenticationController@forgotpassword')->name('authentication.forgotpassword');
Route::get('authentication/page404',            'AuthenticationController@page404')->name('authentication.page404');
Route::get('authentication/maintenance',        'AuthenticationController@maintenance')->name('authentication.maintenance');
Route::get('authentication/comingsoon',         'AuthenticationController@comingsoon')->name('authentication.comingsoon');


/* Extra  */
Route::get('extra', function ()                 { return redirect('extra/social'); });
Route::get('extra/social',                      'ExtraController@social')->name('extra.social');
Route::get('extra/news',                        'ExtraController@news')->name('extra.news');

Route::get('extra/settings',                    'ExtraController@settings')->name('extra.settings');

/* Project   */
Route::get('projects', function ()              { return redirect('projects/taskboard'); });
Route::get('projects/taskboard',                'ProjectsController@taskboard')->name('projects.taskboard');
Route::get('projects/projectlist',              'ProjectsController@projectlist')->name('projects.projectlist');
Route::get('projects/addproject',               'ProjectsController@addproject')->name('projects.addproject');
Route::get('projects/ticket',                   'ProjectsController@ticket')->name('projects.ticket');
Route::get('projects/ticketdetails',            'ProjectsController@ticketdetails')->name('projects.ticketdetails');
Route::get('projects/clients',                  'ProjectsController@clients')->name('projects.clients');
Route::get('projects/todo',                     'ProjectsController@todo')->name('projects.todo');

/* HR   */
Route::get('hr', function ()                    { return redirect('hr/hrdashboard'); });
Route::get('hr/hrdashboard',                    'HrController@hrdashboard')->name('hr.hrdashboard');
Route::get('hr/users',                          'HrController@users')->name('hr.users');
Route::get('hr/departments',                    'HrController@departments')->name('hr.departments');
Route::get('hr/employee',                       'HrController@employee')->name('hr.employee');
Route::get('hr/activities',                     'HrController@activities')->name('hr.activities');
Route::get('hr/holidays',                       'HrController@holidays')->name('hr.holidays');
Route::get('hr/events',                         'HrController@events')->name('hr.events');
Route::get('hr/payroll',                        'HrController@payroll')->name('hr.payroll');
Route::get('hr/accounts',                       'HrController@accounts')->name('hr.accounts');
Route::get('hr/report',                         'HrController@report')->name('hr.report');

/* Card   */
Route::get('cardlayout', function ()            { return redirect('cardlayout/cards'); });
Route::get('cardlayout/cards',                  'CardlayoutController@cards')->name('cardlayout.cards');


/* Card   */
Route::get('job', function ()                   { return redirect('job/jobdashboard'); });
Route::get('job/jobdashboard',                  'JobController@jobdashboard')->name('job.jobdashboard');
Route::get('job/positions',                     'JobController@positions')->name('job.positions');
Route::get('job/applicants',                    'JobController@applicants')->name('job.applicants');
Route::get('job/resumes',                       'JobController@resumes')->name('job.resumes');
Route::get('job/jobsettings',                   'JobController@jobsettings')->name('job.jobsettings');
