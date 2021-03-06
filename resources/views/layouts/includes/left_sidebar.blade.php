    <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <ul>
                        
                    
                        <li class="has_sub">
                            <a class="waves-effect"><i class="mdi mdi-view-grid"></i> <span> Dashboard

                                </span> <i class="mdi mdi-chevron-right"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="index-2.html">Dashboard1</a></li>
                                <li><a href="dashboard2.html">Dashboard2</a></li>
                                <li><a href="dashboard3.html">Dashboard3</a></li>

                            </ul>
                        </li>
                        @foreach($menu['sections_array'] as $section)
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class=" {{$section['icon']}}"></i><span>
                                     {{'s=> '.$section['label']}}</span> <i class="mdi mdi-chevron-right"></i></a>
                            <ul class="list-unstyled">
                                <!--sub-title-->
                                 @foreach($menu['categs_array'] as $categ)
                                   @if($section['id_s']==$categ['id_s'])
                                <li class="has_sub">
                                     <a href="javascript:void(0);" class="waves-effect"><i class="{{$categ['icon']}}"></i><span>
                                    {{'c=> '.$categ['label']}}</span> <i class="mdi mdi-chevron-right"></i></a>
                                    @endif
                                    <ul class="list-unstyled">
                                        @foreach($menu['links_array'] as $link)
                                        @if($categ['id_c']==$link['id_c'] and $link['id_s']==$section['id_s'])
                                        <li><a href="{{$link['url']}}">{{'l=>'.$link['label']}} </a></li>

                                        @endif

                                        @endforeach
                                         
                                    </ul>
                                </li>                                 
                                 @endforeach
                                <!--end-sub-title-->

                            </ul>
                        </li>
                        @endforeach
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class=" mdi mdi-school"></i><span>
                                    P??dagogie</span> <i class="mdi mdi-chevron-right"></i></a>
                            <ul class="list-unstyled">
                                <!--sub-title-->
                                <li class="has_sub">
                                     <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-calendar-clock"></i><span>
                                    Assiduit??</span> <i class="mdi mdi-chevron-right"></i></a>
                                    <ul class="list-unstyled">
                                        <li><a href="widgets-charts.html">Statistiques </a></li>
                                         <li><a href="widgets-charts.html">Feuille Presence</a></li>
                                         <li><a href="widgets-charts.html">Registre Absences </a></li>
                                         <li><a href="widgets-charts.html">Saisie Absences </a></li>
                                         <li><a href="widgets-charts.html">Feuille Pr??sence Saisi</a></li>
                                         <li><a href="widgets-charts.html"> Rapports Assiduit??</a></li>
                                         <li><a href="widgets-charts.html">Rapport Assiduit?? Groupes </a></li>
                                    </ul>
                                </li>
                                <!--end-sub-title-->

                                <!--sub-title-->
                                <li class="has_sub">
                                     <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-calendar-text"></i><span>
                                    Emploi Du Temps</span> <i class="mdi mdi-chevron-right"></i></a>
                                    <ul class="list-unstyled">
                                        <li><a href="widgets-charts.html">S??ances  </a></li>
                                         <li><a href="widgets-charts.html">Emploi Du Temps Global </a></li>
                                         <li><a href="widgets-charts.html">Volume Horaire </a></li>
                                         <li><a href="widgets-charts.html">Cr??neaux  </a></li>
                                         <li><a href="widgets-charts.html">Salles </a></li>
                                         <li><a href="widgets-charts.html">Tableau Consommation Enseignants </a></li>
                                         <li><a href="widgets-charts.html">Enseignants</a></li>
                                         <li><a href="widgets-charts.html">Emploi Du Temps </a></li>
                                    </ul>
                                </li>
                                <!--end-sub-title-->

                                 <!--sub-title-->
                                <li class="has_sub">
                                     <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-note"></i><span>
                                    Notes Bulletins</span> <i class="mdi mdi-chevron-right"></i></a>
                                    <ul class="list-unstyled">
                                        <li><a href="widgets-charts.html">Param??trage  </a></li>
                                         <li><a href="widgets-charts.html">Mod??les (prog. annuels)</a></li>
                                         <li><a href="widgets-charts.html">Unit??s (modules) </a></li>
                                         <li><a href="widgets-charts.html">Dispens??s  </a></li>
                                         <li><a href="widgets-charts.html">P.V notes</a></li>
                                         <li><a href="widgets-charts.html"> Rapports Assiduit??</a></li>
                                         <li><a href="widgets-charts.html">Rapport Assiduit?? Groupes </a></li>
                                    </ul>
                                </li>
                                <!--end-sub-title-->
       
                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chair-school"></i>
                                <span>Scolarit??</span> <i class="mdi mdi-chevron-right"></i></a>
                            <ul class="list-unstyled">
                                <!--sub-title-->
                                 <li class="has_sub">
                                     <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-areaspline"></i><span>
                                    Statistiques</span> <i class="mdi mdi-chevron-right"></i></a>
                                    <ul class="list-unstyled">
                                        <li><a href="widgets-charts.html">Vue G??n??rale   </a></li>
                                         <li><a href="widgets-charts.html">Stat. D??taill??es </a></li>
                                        
                                    </ul>
                                </li>
                                <!--end-sub-title-->

                                 <!--sub-title-->
                                 <li class="has_sub">
                                     <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-settings-box"></i><span>
                                    Param??trage Scolarit?? </span> <i class="mdi mdi-chevron-right"></i></a>
                                    <ul class="list-unstyled">
                                        <li><a href="widgets-charts.html">Ann??es Universitaires </a></li>
                                         <li><a href="widgets-charts.html">Remises Sp??ciales  </a></li>

                                         <li><a href="widgets-charts.html">Plan Scolarit??</a></li>

                                         <li><a href="widgets-charts.html">Attestations</a></li>

                                         <li><a href="widgets-charts.html">Mois</a></li>

                                         <li><a href="widgets-charts.html">Liste Pi??ces</a></li>

                                         <li><a href="widgets-charts.html">Tarifs</a></li>
                                        
                                    </ul>
                                </li>
                                <!--end-sub-title-->

                                 <!--sub-title-->
                                 <li class="has_sub">
                                     <a href="javascript:void(0);" class="waves-effect"><i class=" mdi mdi-format-list-bulleted"></i><span>
                                    Listes</span> <i class="mdi mdi-chevron-right"></i></a>
                                    <ul class="list-unstyled">
                                        <li><a href="widgets-charts.html">Liste Pr??-inscriptions </a></li>
                                         <li><a href="widgets-charts.html">Liste ??tudiants(es)  </a></li>

                                         <li><a href="widgets-charts.html">Trombinoscopes</a></li>

                                         <li><a href="widgets-charts.html">Liste Non R??inscrits </a></li>

                                         <li><a href="widgets-charts.html">Liste Attestations </a></li>

                                         <li><a href="widgets-charts.html">Liste D??parts</a></li>

                                         <li><a href="widgets-charts.html">Ajouter Inscription </a></li>

                                         <li><a href="widgets-charts.html">Dossiers Incomplets</a></li>

                                         <li><a href="widgets-charts.html">Importer Etudiants(es) </a></li>
                                        
                                    </ul>
                                </li>
                                <!--end-sub-title-->
                                
                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i
                                    class="mdi mdi-message"></i><span> Messagerie</span> <i
                                    class="mdi mdi-chevron-right"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="chart-apex.html">Apexcharts</a></li>
                                <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                                <li><a href="chart-flot.html">Flot Chart</a></li>
                                <li><a href="chart-morris.html">Morris Chart</a></li>
                                <li><a href="chart-chartist.html">Chartist Charts</a></li>
                                <li><a href="chart-other.html">Other Chart</a></li>
                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-cash-multiple"></i> <span>
                                    Finance</span> <i class="mdi mdi-chevron-right"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="icons-material-design.html">Material Design Icons</a></li>
                                <li><a href="icons-font-awesome.html">Font Awesome</a></li>
                                <li><a href="icons-dripicons.html">Dripicons</a></li>
                                <li><a href="icons-themify.html">Themify Icons</a></li>
                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i
                                    class="mdi mdi-contact-mail"></i><span> Contacts</span> <i
                                    class="mdi mdi-chevron-right"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="form-elements.html">General Elements</a></li>
                                <li><a href="form-advanced.html">Advanced Form</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                                <li><a href="form-fileupload.html">Form Uploads</a></li>
                                <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
                                <li><a href="form-xeditable.html">X-editable</a></li>
                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-settings-variant"></i> <span>
                                    GRH</span> <i class="mdi mdi-chevron-right"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                <li><a href="tables-datatable.html">Data Table</a></li>
                                <li><a href="tables-responsive.html">Responsive Table</a></li>
                                <li><a href="tables-editable.html">Editable Table</a></li>
                                <li><a href="tables-tablesaw.html">Tablesaw Table</a></li>
                            </ul>
                        </li>                       
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="  mdi mdi-settings"></i> <span> Param??trages
                                </span> <i class="mdi mdi-chevron-right"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="app-email.html">Email</a></li>
                                <li><a href="app-calendar.html">Calendar</a></li>
                                <li><a href="app-typography.html">Typography</a></li>
                                <li><a href="app-profile.html">Profile</a></li>
                                <li><a href="app-timeline.html">Timeline</a></li>
                            </ul>
                        </li>

                    </ul>
                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>
            </div>
        </div>