@extends('layouts.master')

@section('title', 'acceuil')


@section('content')
 <div class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card-box">
                                <a href="{{route('list_admin')}}">
                                    <h4 class="header-title mb-3">Administrateurs</h4>
                                <div class="widget-box-2">
                                    <div class="widget-detail-2">
                                        <div class="pull-left dsha mb-10"><i class="mdi mdi-account-settings-variant"></i></div>
                                        <h2 class="mb-0"> 50</h2>

                                    </div>
                                   
                                </div>
                                </a>
                                
                            </div>
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <a href="{{route('list_student')}}">
                                <div class="card-box">
                          
                                <h4 class="header-title mb-3">Étudiants</h4>
                                <div class="widget-box-2">
                                        <div class="widget-detail-2">
                                        <div class="pull-left dsha"><i class="mdi mdi-account-multiple"></i></div>
                                        <h2 class="mb-0"> 300 </h2>
                                        
                                        </div>
                                    
                                 </div>
                                </div>
                            </a>
                            
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <a href="{{route('list_teacher')}}">
                                 <div class="card-box">                               
                                <h4 class="header-title mb-3">Professeurs</h4>
                                <div class="widget-box-2">
                                    <div class="widget-detail-2">
                                        <div class="pull-left dsha"><i class="mdi mdi-account-box-outline"></i></div>
                                        <h2 class="mb-0"> 50</h2>
                                       
                                    </div>
                                    
                                </div>
                            </div>
                                
                            </a>
                           
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <div class="card-box">
                                <a href="{{route('create_tutor')}}">
                                    <h4 class="header-title mb-3">Tuteurs</h4>
                                <div class="widget-box-2">
                                    <div class="widget-detail-2">
                                        <div class="pull-left dsha"><i class="mdi mdi-account-card-details"></i></div>
                                        <h2 class="mb-0"> 300</h2>
                                        
                                    </div>
                                    
                                </div>
                                </a>
                                
                            </div>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                         <div class="col-xl-3 col-md-6">
                            <a href="{{route('add_links')}}">
                                 <div class="card-box widget-user">
                                  <div class="text-center">
                                      <h2 class="text-info" data-plugin="counterup"><i class="mdi mdi-link-variant"></i></h2>
                                      <h5><b>Ajouter un Raccourci</b></h5>
                                  </div>
                            </div>
                            </a>
                           

                         </div><!-- end col -->

                        
                    </div><!-- end row -->


                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card-box">
                                <h4 class="header-title mt-0 m-b-30">Emploi du temps</h4>
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Location</th>
                                                <th>Created Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Sifaou Smita</td>
                                                <td>123-456-7891</td>
                                                <td>France</td>
                                                <td>29/01/2019</td>
                                                <td><span class="badge badge-info">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Tilila Moga</td>
                                                <td>123-456-7891</td>
                                                <td>Canada</td>
                                                <td>04/01/2019</td>
                                                <td><span class="badge badge-purple">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Tonarouz Miaou</td>
                                                <td>123-456-7891</td>
                                                <td>Tokyo</td>
                                                <td>08/12/2018</td>
                                                <td><span class="badge badge-info">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Ayour Lebakour</td>
                                                <td>123-456-7891</td>
                                                <td>New York</td>
                                                <td>24/11/2018</td>
                                                <td><span class="badge badge-info">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Titrit Abaknous</td>
                                                <td>123-456-7891</td>
                                                <td>England</td>
                                                <td>15/11/2018</td>
                                                <td><span class="badge badge-purple">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Amayno Kilote</td>
                                                <td>123-456-7891</td>
                                                <td>New York</td>
                                                <td>21/10/2018</td>
                                                <td><span class="badge badge-info">Active</span></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card-box">
                                
                                <h4 class="header-title mt-0 m-b-30">Recent Customers</h4>
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Location</th>
                                                <th>Created Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Sifaou Smita</td>
                                                <td>123-456-7891</td>
                                                <td>France</td>
                                                <td>29/01/2019</td>
                                                <td><span class="badge badge-info">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Tilila Moga</td>
                                                <td>123-456-7891</td>
                                                <td>Canada</td>
                                                <td>04/01/2019</td>
                                                <td><span class="badge badge-purple">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Tonarouz Miaou</td>
                                                <td>123-456-7891</td>
                                                <td>Tokyo</td>
                                                <td>08/12/2018</td>
                                                <td><span class="badge badge-info">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Ayour Lebakour</td>
                                                <td>123-456-7891</td>
                                                <td>New York</td>
                                                <td>24/11/2018</td>
                                                <td><span class="badge badge-info">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Titrit Abaknous</td>
                                                <td>123-456-7891</td>
                                                <td>England</td>
                                                <td>15/11/2018</td>
                                                <td><span class="badge badge-purple">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Amayno Kilote</td>
                                                <td>123-456-7891</td>
                                                <td>New York</td>
                                                <td>21/10/2018</td>
                                                <td><span class="badge badge-info">Active</span></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end col -->

                       <!-- end col -->
                       <div class="col-xl-4">
                        <div class="card-box">
                            
                            <h4 class="header-title mt-0 m-b-30">User top</h4>
                            <div class="inbox-widget nicescroll" style="height: 315px; overflow: hidden; outline: none;" tabindex="1">
                                <a href="index-2.html#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-1.jpg" class="rounded-circle" alt=""></div>
                                        <p class="inbox-item-author">Amayno Kilote</p>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <p class="inbox-item-date">13:40 PM</p>
                                    </div>
                                </a>
                                <a href="index-2.html#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle" alt=""></div>
                                        <p class="inbox-item-author">Titrit Abaknous</p>
                                        <p class="inbox-item-text">I've finished it! See you so...</p>
                                        <p class="inbox-item-date">13:34 PM</p>
                                    </div>
                                </a>
                                <a href="index-2.html#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="rounded-circle" alt=""></div>
                                        <p class="inbox-item-author">Ayour Lebakour</p>
                                        <p class="inbox-item-text">This theme is awesome!</p>
                                        <p class="inbox-item-date">13:17 PM</p>
                                    </div>
                                </a>
                                <a href="index-2.html#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="rounded-circle" alt=""></div>
                                        <p class="inbox-item-author">Tonarouz Miaou</p>
                                        <p class="inbox-item-text">Nice to meet you</p>
                                        <p class="inbox-item-date">12:20 PM</p>
                                    </div>
                                </a>
                                <a href="index-2.html#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="rounded-circle" alt=""></div>
                                        <p class="inbox-item-author">Moga</p>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <p class="inbox-item-date">10:15 AM</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                 </div>
                    

                </div> <!-- container -->
 </div> <!-- content -->


@stop


 


