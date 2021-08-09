@extends('layouts.master')
@section('title', 'Ajoute Administrateur')

@section('content')
<!-- Start content -->
                <div class="content">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="container-fluid">
                        <div class="row">
                            
                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="form-validation.html#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                          
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                           
                                            <!-- item-->
                                            
                                            <!-- item-->
                                            
                                            <!-- item-->
                                            
                                        </div>
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">Ajouter Administrateur</h4>

                                    <form method="POST" action="{{route('store_admin')}}" data-parsley-validate novalidate>
                                        <div class="form-group">
                                            <label for="userName">Nom*</label>

                                            @csrf

                                            <input type="hidden" name="user_type" value="1">
                                            <input type="text" name="nom" value="{{old('nom')}}" parsley-trigger="change" required
                                                   placeholder="Entrer le nom de famille" class="form-control" id="userName">
                                        </div>
                                        <div class="form-group">
                                            <label for="userName">Prénom*</label>
                                            <input type="text" name="prenom" value="{{old('prenom')}}" parsley-trigger="change" required
                                                   placeholder="Entrer prénom" class="form-control" id="userName">
                                        </div>
                                        <div class="form-group">
                                            <label for="emailAddress">Adresse e-mail*</label>
                                            <input type="email" name="email"
                                            value="{{old('email')}}" parsley-trigger="change" required
                                                   placeholder="Entrer l'e-mail" class="form-control" id="emailAddress">
                                        </div>
                                        <div class="form-group">
                                            <label for="pass1">
                                            Mot de passe*</label>
                                            <input name="password" id="password" type="password" / class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="passWord2">Confirmez le mot de passe</label>
                                           <input type="password" name="password_confirmation" id="confirm_password" class="form-control"/>
                                        </div>
 
                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-info waves-effect waves-light" type="submit">
                                                Ajouter 
                                            </button>
                                            <button type="reset" class="btn btn-secondary waves-effect waves-light m-l-5">
                                                Annuler
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div><!-- end col -->

                           
                        </div>
                        <!-- end row -->


                       

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                   2021 - EmaaLink </footer>

@stop