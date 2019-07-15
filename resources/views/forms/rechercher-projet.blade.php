@extends('template.template-app')


@section('content')
    <div class="container">
        <form action="rechercher-projet" method="post" class="form-horizontal" class="rechercher-projet">
            <!-- Le Token csrf_field() permet une validation effective du formulaire  -->
            {{csrf_field()}}

            <div class="row">
                {!!$errors->first('libelle_projet','<p class="invalid-feedback">:message</p>')!!}
                <div class=" rechercher-projet form-group btn float-right btn-filter col-xs-12 col-md-4 col-lg-6 ">
                    <label for="Libelle">Libellé Projet</label>
                    <input type="text" name="libelle_projet"
                           class="form-control
                                {!! $errors->has('libelle_projet') ? 'is-invalid': '' !!}"
                           placeholder="rechercher par libellé de projet">
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-filter"><span
                        class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            <br><br>

            <diV class="row">
                <div class="form-group float-right btn-filter col-xs-12 col-md-6 col-lg-8">
                    {{--Affichage resultats sous-forme de tableau--}}
                    @if(isset($details))
                        <p>Votre Recherche sur <b>{{$query}}</b> : </p>
                        <table class="searchtable table table-bordered">
                            <thead>
                            <tr>
                                <th class="col-lg-3">Libelle du Projet</th>
                                <th class="col-lg-6">Description du Projet</th>
                                <th class="col-lg-3">Avancement du Projet</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($details as $projets)
                                <tr>
                                    <td>{{$projets->libelle_projet}}</td>
                                    <td>{{$projets->description}}</td>
                                    <td>{{$projets->avancement}}</td>

                                </tr>
                            @endforeach
                            </tbody>

                        </table>

                        <table class="searchtable table table-bordered">
                            <thead>
                            <tr>
                                <th class="col-lg-2">Code du Projet</th>
                                <th class="col-lg-3">Météo</th>
                                <th class="col-lg-3">Etat</th>
                                <th class="col-lg-3">Type</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($details as $projets)
                                <tr>
                                    <td>{{$projets->code_projet}}</td>
                                    <td>

                                        <div class="row">
                                            <div class="form-group col-xs-6 col-md-2 col-lg-10">
                                                {{$projets->meteo_id}}<br/>
                                                {!! Form::select('liste_meteos', $meteos, $projets->meteo_id, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                    <td>
                                        <div class="row">
                                            <div class="form-group col-xs-6 col-md-2 col-lg-10">
                                                {{$projets->etat_id}}<br/>
                                                {!! Form::select('liste_etats', $etats, $projets->etat_id, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                    </td>


                                    <td>
                                        <div class="row">
                                            <div class="form-group col-xs-6 col-md-2 col-lg-10">
                                                {{$projets->type_id}}<br/>
                                                {!! Form::select('liste_types', $types, $projets->type_id, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                </div>
                @elseif(isset($message))
                    <p>{{$message}}</p>
                @endif
            </diV>
        </form>
    </diV>
@endsection