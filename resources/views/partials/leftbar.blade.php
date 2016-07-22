<section id="left-sidebar" class="left-sidebar">

    <div class="brand"> <img src="{!! asset('assets/images/logo.png') !!}" alt=""> </div>
    <div class="brand-mini-bar"><img src="{!! asset('assets/images/mini-logo.png') !!}" alt=""></div>

    <div class="avatar-block">
        <img src="{!! asset('assets/images/avatar/one.png') !!}" alt="">
        <a class="info" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" data-parent="#left-sidebar">
            <h6>Welcome</h6>
            <h3>{!! Auth::user()->name !!}</h3>
            <div class="edit"><i class="ion-android-options"></i></div>
        </a>
        <!-- info -->
        <div class="collapse avtar-settings" id="collapseExample1">
            <ul class="list-unstyled">
                <li><a href="{!! url('settings') !!}">Settings</a></li>
                <li><a href="{!! url('settings') !!}">Privacy</a></li>
                <li><a href="{!! url('settings') !!}">Location</a></li>
                <li><a href="{!! url('settings') !!}">Time</a></li>
                <li><a href="{!! url('settings') !!}">Password</a></li>
                <li><a href="{!! url('templates/extras/lock-screen') !!}">Lock</a></li>
            </ul>
        </div>
    </div>
    <!-- avatar-block -->

    <ul class="list-unstyled left-sidebar-menu">
        <li class="menu-header"><h4 class="text-white">Main Menu</h4></li>

        <li {!! Request::segment(1)=='' ? 'class="active"' : '' !!}><a href="{!! url('/') !!}"><i class="ion-ios-home-outline"></i><span class="menu-name">Dashboard</span></a></li>

        <li {!! Request::segment(1)=='generator_builder' ? 'class="active"' : '' !!}><a href="{!! url('generator_builder') !!}"><i class="ion-ios-list-outline"></i><span class="menu-name">CRUD Generator</span></a></li>
        <li {!! Request::segment(1)=='users' ? 'class="active"' : '' !!}><a href="{!! url('users') !!}"><i class="ion-ios-gear-outline"></i><span class="menu-name">Users</span></a></li>
        <li {!! Request::segment(1)=='settings' ? 'class="active"' : '' !!}><a href="{!! url('settings') !!}"><i class="ion-ios-gear-outline"></i><span class="menu-name">Settings</span></a></li>
        <hr>
        <li class="menu-header"><h4 class="text-white">Template Menu</h4></li>
        <li class="submenu">
            <a data-toggle="collapse" href="#collapseLayouts" aria-expanded="false" data-parent="#left-sidebar">
                <i class="ion-ios-bookmarks-outline"></i><span class="menu-name">Layouts</span>
                <i class="ion-chevron-right menu-chevron"></i>
            </a>
            <div class="collapse" id="collapseLayouts">
                <ul class="list-unstyled">
                    <li {!! Request::segment(3)=='collapsed-sidebar' ? 'class="active"' : '' !!}><a href="{!! url('templates/layouts/collapsed-sidebar') !!}">Collapsed Sidebar</a></li>
                    <li {!! Request::segment(3)=='menu-with' ? 'class="active"' : '' !!}><a href="{!! url('templates/layouts/menu-with-header') !!}">Menu with Header</a></li>
                    <li {!! Request::segment(3)=='horizontal-menu' ? 'class="active"' : '' !!}><a href="{!! url('templates/layouts/horizontal-menu') !!}">Horizontal Menu</a></li>
                    <li {!! Request::segment(3)=='right-sidebar' ? 'class="active"' : '' !!}><a href="{!! url('templates/layouts/right-sidebar') !!}">Right Sidebar</a></li>
                    <li {!! Request::segment(3)=='left-right' ? 'class="active"' : '' !!}><a href="{!! url('templates/layouts/left-right-sidebar') !!}">Left Right Sidebar</a></li>
                </ul>
            </div>
        </li>
        <li class="submenu">
            <a data-toggle="collapse" href="#collapseKnotExclusive" aria-expanded="false" data-parent="#left-sidebar">
                <i class="ion-ios-medical-outline"></i><span class="menu-name">Knot Exclusive</span>
                <i class="ion-chevron-right menu-chevron"></i>
            </a>
            <div class="collapse" id="collapseKnotExclusive">
                <ul class="list-unstyled">
                    <li {!! Request::segment(3)=='gallery' ? 'class="active"' : '' !!}><a href="{!! url('templates/knot-exclusive/gallery') !!}">Gallery</a></li>
                    <li {!! Request::segment(3)=='invoice' ? 'class="active"' : '' !!}><a href="{!! url('templates/knot-exclusive/invoice') !!}">Invoice</a></li>
                    <li {!! Request::segment(3)=='mailbox' ? 'class="active"' : '' !!}><a href="{!! url('templates/knot-exclusive/mailbox') !!}">Mail Box</a></li>
                    <li {!! Request::segment(3)=='calendar' ? 'class="active"' : '' !!}><a href="{!! url('templates/knot-exclusive/calendar') !!}">Calendar</a></li>
                    <li {!! Request::segment(3)=='pricing' ? 'class="active"' : '' !!}><a href="{!! url('templates/knot-exclusive/pricing') !!}">Pricing</a></li>
                    <li {!! Request::segment(3)=='info' ? 'class="active"' : '' !!}><a href="{!! url('templates/knot-exclusive/info-boxes') !!}">Info Boxes</a></li>
                    <li {!! Request::segment(3)=='profile' ? 'class="active"' : '' !!}><a href="{!! url('templates/knot-exclusive/profile') !!}">Profile</a></li>
                    <li {!! Request::segment(3)=='tasks' ? 'class="active"' : '' !!}><a href="{!! url('templates/knot-exclusive/tasks') !!}">Tasks</a></li>
                    <li {!! Request::segment(3)=='timeline' ? 'class="active"' : '' !!}><a href="{!! url('templates/knot-exclusive/timeline') !!}">Timeline</a></li>

                </ul>
            </div>
        </li>
        <li class="submenu">
            <a data-toggle="collapse" href="#collapseUiElements" aria-expanded="false" data-parent="#left-sidebar">
                <i class="ion-ios-toggle-outline"></i><span class="menu-name">UI Elements</span>
                <i class="ion-chevron-right menu-chevron"></i>
            </a>
            <div class="collapse" id="collapseUiElements">
                <ul class="list-unstyled">
                    <li {!! Request::segment(3)=='typography' ? 'class="active"' : '' !!}><a href="{!! url('templates/ui-elements/typography') !!}">Typography</a></li>
                    <li {!! Request::segment(3)=='buttons' ? 'class="active"' : '' !!}><a href="{!! url('templates/ui-elements/buttons') !!}">Buttons</a></li>
                    <li {!! Request::segment(3)=='notifications' ? 'class="active"' : '' !!}><a href="{!! url('templates/ui-elements/notifications') !!}">Notifications</a></li>
                    <li {!! Request::segment(3)=='alerts' ? 'class="active"' : '' !!}><a href="{!! url('templates/ui-elements/alerts') !!}">Alerts</a></li>
                    <li {!! Request::segment(3)=='progress' ? 'class="active"' : '' !!}><a href="{!! url('templates/ui-elements/progress-bars') !!}">Progress Bars</a></li>
                    <li {!! Request::segment(3)=='dropdowns' ? 'class="active"' : '' !!}><a href="{!! url('templates/ui-elements/dropdowns') !!}">Dropdowns</a></li>
                    <li {!! Request::segment(3)=='tree' ? 'class="active"' : '' !!}><a href="{!! url('templates/ui-elements/tree-view') !!}">Tree View</a></li>
                    <li {!! Request::segment(3)=='animations' ? 'class="active"' : '' !!}><a href="{!! url('templates/ui-elements/animations') !!}">Animations</a></li>
                    <li {!! Request::segment(3)=='sliders' ? 'class="active"' : '' !!}><a href="{!! url('templates/ui-elements/sliders') !!}">Sliders</a></li>
                    <li {!! Request::segment(3)=='nestable' ? 'class="active"' : '' !!}><a href="{!! url('templates/ui-elements/nestable-lists') !!}">Nestable Lists</a></li>
                    <li {!! Request::segment(3)=='carousel' ? 'class="active"' : '' !!}><a href="{!! url('templates/ui-elements/carousel') !!}">Carousel</a></li>
                    <li {!! Request::segment(3)=='portlets' ? 'class="active"' : '' !!}><a href="{!! url('templates/ui-elements/portlets') !!}">Portlets</a></li>
                    <li {!! Request::segment(3)=='tooltips' ? 'class="active"' : '' !!}><a href="{!! url('templates/ui-elements/tooltips') !!}">Tooltips</a></li>
                    <li {!! Request::segment(3)=='list' ? 'class="active"' : '' !!}><a href="{!! url('templates/ui-elements/list-groups') !!}">List Groups</a></li>
                    <li {!! Request::segment(3)=='breadcrumbs' ? 'class="active"' : '' !!}><a href="{!! url('templates/ui-elements/breadcrumbs') !!}">Bread Crumbs</a></li>
                    <li {!! Request::segment(3)=='tabs' ? 'class="active"' : '' !!}><a href="{!! url('templates/ui-elements/tabs-accordions') !!}">Tabs & Accordions</a></li>
                    <li {!! Request::segment(3)=='pagination' ? 'class="active"' : '' !!}><a href="{!! url('templates/ui-elements/pagination') !!}">Pagination</a></li>
                    <li {!! Request::segment(3)=='modals' ? 'class="active"' : '' !!}><a href="{!! url('templates/ui-elements/modals') !!}">Modals</a></li>
                    <li {!! Request::segment(3)=='file' ? 'class="active"' : '' !!}><a href="{!! url('templates/ui-elements/file-manager') !!}">File Manager</a></li>
                </ul>
            </div>
        </li>
        <li class="submenu">
            <a data-toggle="collapse" href="#collapseForms" aria-expanded="false" data-parent="#left-sidebar">
                <i class="ion-ios-list-outline"></i><span class="menu-name">Forms</span>
                <i class="ion-chevron-right menu-chevron"></i>
            </a>
            <div class="collapse" id="collapseForms">
                <ul class="list-unstyled">
                    <li {!! Request::segment(3)=='form-elements' ? 'class="active"' : '' !!}><a href="{!! url('templates/forms/form-elements') !!}">Form Elements</a></li>
                    <li {!! Request::segment(3)=='input-groups' ? 'class="active"' : '' !!}><a href="{!! url('templates/forms/input-groups') !!}">Input Groups</a></li>
                    <li {!! Request::segment(3)=='dropzone-file' ? 'class="active"' : '' !!}><a href="{!! url('templates/forms/dropzone-file-upload') !!}">Dropzone File Upload</a></li>
                    <li {!! Request::segment(3)=='form-validation' ? 'class="active"' : '' !!}><a href="{!! url('templates/forms/form-validation') !!}">Validations</a></li>
                    <li {!! Request::segment(3)=='form-wizard' ? 'class="active"' : '' !!}><a href="{!! url('templates/forms/form-wizard') !!}">Wizards</a></li>
                    <li {!! Request::segment(3)=='image-crop' ? 'class="active"' : '' !!}><a href="{!! url('templates/forms/image-crop') !!}">Image Crop</a></li>
                    <li {!! Request::segment(3)=='wysiwig' ? 'class="active"' : '' !!}><a href="{!! url('templates/forms/wysiwig') !!}">WYSIWIG</a></li>
                </ul>
            </div>
        </li>
        <li class="submenu">
            <a data-toggle="collapse" href="#collapseExtras" aria-expanded="false" data-parent="#left-sidebar">
                <i class="ion-ios-football-outline"></i><span class="menu-name">Extras</span>
                <i class="ion-chevron-right menu-chevron"></i>
            </a>
            <div class="collapse" id="collapseExtras">
                <ul class="list-unstyled">
                    <li {!! Request::segment(3)=='register' ? 'class="active"' : '' !!}><a href="{!! url('templates/extras/register') !!}">Register</a></li>
                    <li {!! Request::segment(3)=='login' ? 'class="active"' : '' !!}><a href="{!! url('templates/extras/login') !!}">Login</a></li>
                    <li {!! Request::segment(3)=='lock-screen' ? 'class="active"' : '' !!}><a href="{!! url('templates/extras/lock-screen') !!}">Lock Screen</a></li>
                    <li {!! Request::segment(3)=='forgot-password' ? 'class="active"' : '' !!}><a href="{!! url('templates/extras/forgot-password') !!}">Forgot Password</a></li>
                    <li {!! Request::segment(3)=='faq' ? 'class="active"' : '' !!}><a href="{!! url('templates/extras/faq') !!}">Faq</a></li>
                    <li {!! Request::segment(3)=='404' ? 'class="active"' : '' !!}><a href="{!! url('templates/extras/404') !!}">404</a></li>
                    <li {!! Request::segment(3)=='505' ? 'class="active"' : '' !!}><a href="{!! url('templates/extras/505') !!}">505</a></li>
                    <li {!! Request::segment(3)=='template' ? 'class="active"' : '' !!}><a href="{!! url('templates/extras/template') !!}">Template</a></li>
                </ul>
            </div>
        </li>
        <li class="submenu">
            <a data-toggle="collapse" href="#collapseTables" aria-expanded="false" data-parent="#left-sidebar">
                <i class="ion-ios-grid-view-outline"></i><span class="menu-name">Tables</span>
                <i class="ion-chevron-right menu-chevron"></i>
            </a>
            <div class="collapse" id="collapseTables">
                <ul class="list-unstyled">
                    <li {!! Request::segment(3)=='basic-tables' ? 'class="active"' : '' !!}><a href="{!! url('templates/tables/basic-tables') !!}">Basic</a></li>
                    <li {!! Request::segment(3)=='dynamic-tables' ? 'class="active"' : '' !!}><a href="{!! url('templates/tables/dynamic-tables') !!}">Dynamic</a></li>
                    <li {!! Request::segment(3)=='editable-tables' ? 'class="active"' : '' !!}><a href="{!! url('templates/tables/editable-tables') !!}">Editable</a></li>
                    <li {!! Request::segment(3)=='users-table' ? 'class="active"' : '' !!}><a href="{!! url('templates/tables/users-table') !!}">Users</a></li>
                </ul>
            </div>
        </li>
        <li class="submenu">
            <a data-toggle="collapse" href="#collapseGraphs" aria-expanded="false" data-parent="#left-sidebar">
                <i class="ion-ios-analytics-outline"></i><span class="menu-name">Graphs</span>
                <i class="ion-chevron-right menu-chevron"></i>
            </a>
            <div class="collapse" id="collapseGraphs">
                <ul class="list-unstyled">
                    <li {!! Request::segment(3)=='line-graphs' ? 'class="active"' : '' !!}><a href="{!! url('templates/graphs/line-graphs') !!}">Line Graphs</a></li>
                    <li {!! Request::segment(3)=='area-graphs' ? 'class="active"' : '' !!}><a href="{!! url('templates/graphs/area-graphs') !!}">Area Graphs</a></li>
                    <li {!! Request::segment(3)=='bar-graphs' ? 'class="active"' : '' !!}><a href="{!! url('templates/graphs/bar-graphs') !!}">Bar Graphs</a></li>
                    <li {!! Request::segment(3)=='other-graphs' ? 'class="active"' : '' !!}><a href="{!! url('templates/graphs/other-graphs') !!}">Other Graphs</a></li>
                </ul>
            </div>
        </li>
        <li class="submenu">
            <a data-toggle="collapse" href="#collapseMaps" aria-expanded="false" data-parent="#left-sidebar">
                <i class="ion-ios-location-outline"></i><span class="menu-name">Maps</span>
                <i class="ion-chevron-right menu-chevron"></i>
            </a>
            <div class="collapse" id="collapseMaps">
                <ul class="list-unstyled">
                    <li {!! Request::segment(3)=='basic-maps' ? 'class="active"' : '' !!}><a href="{!! url('templates/maps/basic-maps') !!}">Google Basic Maps</a></li>
                    <li {!! Request::segment(3)=='routes-maps' ? 'class="active"' : '' !!}><a href="{!! url('templates/maps/routes-maps') !!}">Google Routes Maps</a></li>
                    <li {!! Request::segment(3)=='vector-maps' ? 'class="active"' : '' !!}><a href="{!! url('templates/maps/vector-maps') !!}">Vector Maps</a></li>
                </ul>
            </div>
        </li>
        <li class="submenu">
            <a data-toggle="collapse" href="#collapseIcons" aria-expanded="false" data-parent="#left-sidebar">
                <i class="ion-ios-americanfootball-outline"></i><span class="menu-name">Icons</span>
                <i class="ion-chevron-right menu-chevron"></i>
            </a>
            <div class="collapse" id="collapseIcons">
                <ul class="list-unstyled">
                    <li {!! Request::segment(3)=='font-awesome' ? 'class="active"' : '' !!}><a href="{!! url('templates/icons/font-awesome') !!}">Font Awesome</a></li>
                    <li {!! Request::segment(3)=='ion-icons' ? 'class="active"' : '' !!}><a href="{!! url('templates/icons/ion-icons') !!}">Ion Icons</a></li>
                    <li {!! Request::segment(3)=='themify-icons' ? 'class="active"' : '' !!}><a href="{!! url('templates/icons/themify-icons') !!}">Themify Icons</a></li>

                </ul>
            </div>
        </li>
        <li class="submenu">
            <a data-toggle="collapse" href="#collapseMenuLevels" aria-expanded="false" data-parent="#left-sidebar">
                <i class="ion-ios-keypad-outline"></i><span class="menu-name">Menu Levels</span>
                <i class="ion-chevron-right menu-chevron"></i>
            </a>
            <div class="collapse" id="collapseMenuLevels">
                <ul class="list-unstyled">
                    <li>
                        <a data-toggle="collapse" href="#collapseTryMe" aria-expanded="false" data-parent="#left-sidebar">Try me here
                            <i class="ion-chevron-right menu-chevron"></i>
                        </a>
                        <div class="collapse" id="collapseTryMe">
                            <ul class="list-unstyled">
                                <li>
                                    <a data-toggle="collapse" href="#collapseOnceAgain" aria-expanded="false" data-parent="#left-sidebar">Once again please <i class="ion-chevron-right menu-chevron"></i>
                                    </a>
                                    <div class="collapse" id="collapseOnceAgain">
                                        <ul class="list-unstyled">
                                            <li><a href="#">You can add</a></li>
                                            <li><a href="#">more than two</a></li>
                                            <li><a href="#">leves of menu</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#">Menu Link</a></li>
                                <li><a href="#">Menu Link</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class='current'><a class='current' href="{!! url('/') !!}">Direct link</a></li>
                </ul>
            </div>
        </li>
    </ul>
</section>
