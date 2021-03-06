@extends('layout.default')
@section('title', 'Bandjikaky - Liste des membres')
@section('content')
        <div class="container-fluid">
          <div class="row justify-content-center pt-5">
            <div class="col-md-12">
                @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif                
              @if (session()->has('success'))
                  <div class="alert alert-success" role="alert">{{ session('success') }}</div>
              @endif 
              <div class="card"> 
                  <div class="card-header">
                      <i class="fas fa-table"></i>
                      Liste des membres
                  </div>              
                <div class="card-body">
                      <div class="table-responsive">
                          <div align="right">
                            <a href="{{route('membres.create')}}"><div class="btn btn-success  btn-sm"><i class="fas fa-plus"></i>&nbsp;Ajouter</i></div></a>
                          </div>
                          <br />
                        <table class="table table-bordered table-striped" width="100%" cellspacing="0" id="table-membres">
                          <thead class="table-dark">
                            <tr>
                              <th style="width:10%;">N°</th>
                              <th>membre</th>
                              <th>Quartier</th>
                              <th style="width:15%;">Action</th>
                            </tr>
                          </thead>
                          <tfoot class="table-dark">
                              <tr>
                                <th>N°</th>
                                <th>membre</th>
                                <th>Quartier</th>
                                <th>Action</th>
                              </tr>
                            </tfoot>
                          <tbody>
                           
                          </tbody>
                      </table>                        
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modal_delete_membre" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form method="POST" action="" id="form-delete-membre">
          @csrf
          @method('DELETE')
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Êtes-vous sûr de bien vouloir supprimer cet enregistrement ?</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                cliquez sur close pour annuler
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-danger"><i class="fas fa-times">&nbsp;Supprimer</i></button>
              </div>
            </div>
          </div>
        </form>
      </div>
      @endsection

      @push('scripts')
      <script type="text/javascript">
      $(document).ready(function () {
          $('#table-membres').DataTable( { 
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('membres.list')}}",
            columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'name', name: 'name' },
                    { data: null ,orderable: false, searchable: false}

                ],
                "columnDefs": [
                        {
                        "data": null,
                        "render": function (data, type, row) {
                        url_e =  "{!! route('membres.edit',':id')!!}".replace(':id', data.id);
                        url_d =  "{!! route('membres.destroy',':id')!!}".replace(':id', data.id);
                        return '<a href='+url_e+'  class=" btn btn-primary edit btn-sm" title="Modifier"><i class="far fa-edit"></i></a>'+
                        '<div class="btn btn-danger delete btn_delete_membre btn-sm" title="Supprimer" data-href='+url_d+'><i class="fas fa-trash-alt"></i></div>';
                        },
                        "targets": 3
                        },
                ],
                language: {
                  "sProcessing":     "Traitement en cours...",
                  "sSearch":         "Rechercher&nbsp;:",
                  "sLengthMenu":     "Afficher _MENU_ &eacute;l&eacute;ments",
                  "sInfo":           "Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                  "sInfoEmpty":      "Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment",
                  "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                  "sInfoPostFix":    "",
                  "sLoadingRecords": "Chargement en cours...",
                  "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
                  "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
                  "oPaginate": {
                      "sFirst":      "Premier",
                      "sPrevious":   "Pr&eacute;c&eacute;dent",
                      "sNext":       "Suivant",
                      "sLast":       "Dernier"
                  },
                  "oAria": {
                      "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                      "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
                  },
                  "select": {
                          "rows": {
                              _: "%d lignes séléctionnées",
                              0: "Aucune ligne séléctionnée",
                              1: "1 ligne séléctionnée"
                          } 
                  }
                },
                order:[[0,'asc'], [0, 'desc']]              
          });

          
        $('#table-membres').off('click', '.btn_delete_membre').on('click', '.btn_delete_membre',
        function() { 
          var href=$(this).data('href');
          $('#form-delete-membre').attr('action', href);
          $('#modal_delete_membre').modal();
        });
      });
      
  </script> 
  @endpush