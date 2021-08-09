@extends('layouts.master')
@section('title', 'acceuil')

@section('styles')
<!-- DataTables -->
        <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Multi Item Selection examples -->
        <link href="assets/plugins/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

@stop

@section('content')
<div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                   
                                    

                                   
                                </div>
                            </div>
                        </div> <!-- end row -->


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                   <a href="{{route('create_student')}}" class="btn btn-purple waves-effect waves-light m-b-5"> <span>Ajouter un étudiant</span> <i class="fa fa-user-plus"></i> </a><br><br> 

                                    <table id="selection-datatable" class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Email</th>
                                            <th>Profils </th>
                                            <th>Etat</th>
                                            <th>OPRS.</th>
                                            
                                        </tr>
                                        </thead>


                                        <tbody>
                                        <tr>
                                            <td>FATIMA AIT MBAREK </td>
                                             <td>f.aitmbarek@emaa.ma </td>
                                              <td>Service Pédagogique  </td>
                                               <td><button class="btn btn-icon waves-effect waves-light btn-success m-b-5"> <i class=" fa fa-check"></i> </button> </td>
                                               <td style="text-align: center">
                                                <form>
                                                    <a class="btn btn-icon waves-effect waves-light btn-warning m-b-5"> <i class="fa fa-edit"></i> </a>

                                                    <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5"> <i class="fa fa-remove"></i> </button>

                                                    <button class="btn btn-icon waves-effect waves-light btn-primary m-b-5"> <i class="fa fa-user"></i> </button>
                                                </form>

                                               </td>
                                               
                                        </tr>
                                        <tr>
                                            <td>Brahim AJERAME</td>
                                             <td>a.brahim@emaa.ma</td>
                                              <td>Service Pédagogique  </td>
                                               <td><button class="btn btn-icon waves-effect waves-light btn-success m-b-5"> <i class=" fa fa-check"></i> </button> </td>
                                               <td style="text-align: center">
                                                <form>
                                                    <a class="btn btn-icon waves-effect waves-light btn-warning m-b-5"> <i class="fa fa-edit"></i> </a>

                                                    <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5"> <i class="fa fa-remove"></i> </button>

                                                    <button class="btn btn-icon waves-effect waves-light btn-primary m-b-5"> <i class="fa fa-user"></i> </button>
                                                </form>

                                               </td>
                                               
                                        </tr>
                                        <tr>
                                            <td>ABDELLAH ALBOUR </td>
                                             <td>a.albourr@emaa.ma </td>
                                              <td>Comptabilité </td>
                                               <td><button class="btn btn-icon waves-effect waves-light btn-success m-b-5"> <i class=" fa fa-check"></i> </button> </td>
                                               <td style="text-align: center">
                                                <form>
                                                    <a class="btn btn-icon waves-effect waves-light btn-warning m-b-5"> <i class="fa fa-edit"></i> </a>

                                                    <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5"> <i class="fa fa-remove"></i> </button>

                                                    <button class="btn btn-icon waves-effect waves-light btn-primary m-b-5"> <i class="fa fa-user"></i> </button>
                                                </form>

                                               </td>
                                               
                                        </tr>
                                         <tr>
                                            <td>Lalla Touhfa BELGUNAOUI  </td>
                                             <td>t.belgunaoui@emaa.ma </td>
                                              <td>Responsable des Affaires Estudiantines </td>
                                               <td><button class="btn btn-icon waves-effect waves-light btn-success m-b-5"> <i class=" fa fa-check"></i> </button> </td>
                                               <td style="text-align: center">
                                                <form>
                                                    <a class="btn btn-icon waves-effect waves-light btn-warning m-b-5"> <i class="fa fa-edit"></i> </a>

                                                    <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5"> <i class="fa fa-remove"></i> </button>

                                                    <button class="btn btn-icon waves-effect waves-light btn-primary m-b-5"> <i class="fa fa-user"></i> </button>
                                                </form>

                                               </td>
                                               
                                        </tr>
                                         <tr>
                                            <td>SOUMIA BOUJDAD </td>
                                             <td> s.boujdad@emaa.ma  </td>
                                              <td>Service Pédagogique </td>
                                               <td><button class="btn btn-icon waves-effect waves-light btn-success m-b-5"> <i class=" fa fa-check"></i> </button> </td>
                                               <td style="text-align: center">
                                                <form>
                                                    <a class="btn btn-icon waves-effect waves-light btn-warning m-b-5"> <i class="fa fa-edit"></i> </a>

                                                    <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5"> <i class="fa fa-remove"></i> </button>

                                                    <button class="btn btn-icon waves-effect waves-light btn-primary m-b-5"> <i class="fa fa-user"></i> </button>
                                                </form>

                                               </td>
                                               
                                        </tr>
                                        <tr>
                                            <td>Khadija BOUZOUGUI </td>
                                             <td> m.bouzougui@emaa.ma  </td>
                                              <td>Service Pédagogique </td>
                                               <td><button class="btn btn-icon waves-effect waves-light btn-success m-b-5"> <i class=" fa fa-check"></i> </button> </td>
                                               <td style="text-align: center">
                                                <form>
                                                    <a class="btn btn-icon waves-effect waves-light btn-warning m-b-5"> <i class="fa fa-edit"></i> </a>

                                                    <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5"> <i class="fa fa-remove"></i> </button>

                                                    <button class="btn btn-icon waves-effect waves-light btn-primary m-b-5"> <i class="fa fa-user"></i> </button>
                                                </form>

                                               </td>
                                               
                                        </tr>
                                         <tr>
                                            <td>Sarah CHERKAOUI  </td>
                                             <td>  s.cherkaoui@emaa.ma  </td>
                                              <td>Chargé(e) d'affaires (Consultation)  </td>
                                               <td><button class="btn btn-icon waves-effect waves-light btn-success m-b-5"> <i class=" fa fa-check"></i> </button> </td>
                                               <td style="text-align: center">
                                                <form>
                                                    <a class="btn btn-icon waves-effect waves-light btn-warning m-b-5"> <i class="fa fa-edit"></i> </a>

                                                    <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5"> <i class="fa fa-remove"></i> </button>

                                                    <button class="btn btn-icon waves-effect waves-light btn-primary m-b-5"> <i class="fa fa-user"></i> </button>
                                                </form>

                                               </td>
                                               
                                        </tr>
                                         <tr>
                                            <td>Tarik Dr. LAFOU</td>
                                             <td>  tariklafou@gmail.com   </td>
                                              <td>Président Directeur Général   </td>
                                               <td><button class="btn btn-icon waves-effect waves-light btn-success m-b-5"> <i class=" fa fa-check"></i> </button> </td>
                                               <td style="text-align: center">
                                                <form>
                                                    <a class="btn btn-icon waves-effect waves-light btn-warning m-b-5"> <i class="fa fa-edit"></i> </a>

                                                    <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5"> <i class="fa fa-remove"></i> </button>

                                                    <button class="btn btn-icon waves-effect waves-light btn-primary m-b-5"> <i class="fa fa-user"></i> </button>
                                                </form>

                                               </td>
                                               
                                        </tr>
                                         <tr>
                                            <td>SANAA EL JAMALI </td>
                                             <td>s.eljamali@emaa.ma</td>
                                              <td>Service Pédagogique</td>
                                               <td><button class="btn btn-icon waves-effect waves-light btn-success m-b-5"> <i class=" fa fa-check"></i> </button> </td>
                                               <td style="text-align: center">
                                                <form>
                                                    <a class="btn btn-icon waves-effect waves-light btn-warning m-b-5"> <i class="fa fa-edit"></i> </a>

                                                    <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5"> <i class="fa fa-remove"></i> </button>

                                                    <button class="btn btn-icon waves-effect waves-light btn-primary m-b-5"> <i class="fa fa-user"></i> </button>
                                                </form>

                                               </td>
                                               
                                        </tr>
                                        <tr>
                                            <td>Hassan JABBAR </td>
                                             <td>h.jabbar@emaa.ma</td>
                                              <td>System manager </td>
                                               <td><button class="btn btn-icon waves-effect waves-light btn-success m-b-5"> <i class=" fa fa-check"></i> </button> </td>
                                               <td style="text-align: center">
                                                <form>
                                                    <a class="btn btn-icon waves-effect waves-light btn-warning m-b-5"> <i class="fa fa-edit"></i> </a>

                                                    <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5"> <i class="fa fa-remove"></i> </button>

                                                    <button class="btn btn-icon waves-effect waves-light btn-primary m-b-5"> <i class="fa fa-user"></i> </button>
                                                </form>

                                               </td>
                                               
                                        </tr>
                                        <tr>
                                            <td>HAMZA EL HAFDAOUI  </td>
                                             <td>h.elhafdaoui@emaa.ma </td>
                                              <td>-</td>
                                               <td><button class="btn btn-icon waves-effect waves-light btn-success m-b-5"> <i class=" fa fa-check"></i> </button> </td>
                                               <td style="text-align: center">
                                                <form>
                                                    <a class="btn btn-icon waves-effect waves-light btn-warning m-b-5"> <i class="fa fa-edit"></i> </a>

                                                    <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5"> <i class="fa fa-remove"></i> </button>

                                                    <button class="btn btn-icon waves-effect waves-light btn-primary m-b-5"> <i class="fa fa-user"></i> </button>
                                                </form>

                                               </td>
                                               
                                        </tr>
                                         <tr>
                                            <td>Farida OUTOUHAJ</td>
                                             <td>f.outouhaj@emaa.ma  </td>
                                              <td>System manager </td>
                                               <td><button class="btn btn-icon waves-effect waves-light btn-success m-b-5"> <i class=" fa fa-check"></i> </button> </td>
                                               <td style="text-align: center">
                                                <form>
                                                    <a class="btn btn-icon waves-effect waves-light btn-warning m-b-5"> <i class="fa fa-edit"></i> </a>

                                                    <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5"> <i class="fa fa-remove"></i> </button>

                                                    <button class="btn btn-icon waves-effect waves-light btn-primary m-b-5"> <i class="fa fa-user"></i> </button>
                                                </form>

                                               </td>
                                               
                                        </tr>
                                        <tr>
                                            <td>Hassan BOUADDI </td>
                                             <td>h.bouaddi1@emaa.ma </td>
                                              <td>- </td>
                                               <td><button class="btn btn-icon waves-effect waves-light btn-danger m-b-5"> <i class=" fa fa-remove"></i> </button> </td>
                                               <td style="text-align: center">
                                                <form>
                                                    <a class="btn btn-icon waves-effect waves-light btn-warning m-b-5"> <i class="fa fa-edit"></i> </a>

                                                    <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5"> <i class="fa fa-remove"></i> </button>

                                                    <button class="btn btn-icon waves-effect waves-light btn-primary m-b-5"> <i class="fa fa-user"></i> </button>
                                                </form>

                                               </td>
                                               
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end row -->

                    </div> <!-- container -->

</div> <!-- content -->

@section('scripts')
<!-- Required datatable js -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
<!-- Selection table -->
        <script src="assets/plugins/datatables/dataTables.select.min.js"></script>
 <script type="text/javascript">
            $(document).ready(function () {

                // Default Datatable
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                // Key Tables

                $('#key-table').DataTable({
                    keys: true
                });

                // Responsive Datatable
                $('#responsive-datatable').DataTable();

                // Multi Selection Datatable
                $('#selection-datatable').DataTable({
                    select: {
                        style: 'multi'
                    },

                     "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                    }


                });

                table.buttons().container()
                    .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            });

        </script>

@stop

<footer class="footer text-right">
2021 - EmaaLink </footer>


@stop  