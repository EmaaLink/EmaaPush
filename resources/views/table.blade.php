@extends('layouts.master')

@section('title', 'table')

@section('content')

<div class="content">
                   <div class="container-fluid">

                        <!-- Row start -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">

                            
                                    <h4 class="header-title m-b-30" style="text-align: center"><u>Emploi du Temps</u></h4>

                                   

                                    	<button type="button" class="btn btn-info btn-trans waves-effect w-md waves-info m-b-5 col-2">Séances</button>

                                    	<button type="button" class="btn btn-info btn-trans waves-effect w-md waves-info m-b-5 col-2 m-r-2">Volume Horaire</button>

                                    	<button type="button" class="btn btn-info btn-trans waves-effect w-md waves-info m-b-5 col-2 m-r-2">Enseignants</button>

                                     	<a href="" class="top_head_link col"><u>Emploi du Temps</u> </a>


                                     	<a href="" class="top_head_link col"><u>Emploi Du Temps Global</u>  </a>

                                     	<a href="" class="top_head_link col"><u>Créneaux</u></a>

                                     	<a href="" class="top_head_link col"><u>Tableau Consommation Enseignants </u></a>

                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- End of Row -->

                        <!-- Row start -->
                       <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Input Types</h4>
                                    <p class="text-muted m-b-30 font-14">
                                        Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
                                    </p>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="p-20">
                                                <form class="form-horizontal" role="form">
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Text</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" value="Some text value...">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label" for="example-email">Email</label>
                                                        <div class="col-10">
                                                            <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Password</label>
                                                        <div class="col-10">
                                                            <input type="password" class="form-control" value="password">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Placeholder</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" placeholder="placeholder">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Text area</label>
                                                        <div class="col-10">
                                                            <textarea class="form-control" rows="5"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Readonly</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" readonly="" value="Readonly value">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Disabled</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" disabled="" value="Disabled value">
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Static control</label>
                                                        <div class="col-10">
                                                            <p class="form-control-static">email@example.com</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Helping text</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" placeholder="Helping text">
                                                            <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Input Select</label>
                                                        <div class="col-10">
                                                            <select class="form-control">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                            <h6>Multiple select</h6>
                                                            <select multiple="" class="form-control">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Default file input</label>
                                                        <div class="col-10">
                                                            <input type="file" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Date</label>
                                                        <div class="col-10">
                                                            <input class="form-control" type="date" name="date">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Month</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="month" name="month">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Time</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="time" name="time">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Week</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="week" name="week">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Number</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="number" name="number">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">URL</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="url" name="url">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Search</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="search" name="search">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Tel</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="tel" name="tel">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Color</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="color" name="color">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Range</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="range" name="range" min="0" max="10">
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->

                                </div> <!-- end card-box -->
                            </div><!-- end col -->
                       </div>
                       <!-- End of Row -->

                    </div> <!-- container -->

 </div>

@stop
