@extends('template.template-app')


@section('content')
    <div class="container">
        <form action="rechercher-projet" method="post" class="form-horizontal" class="rechercher-projet">
            <!-- Le Token csrf_field() permet une validation effective du formulaire  -->
            {{csrf_field()}}

            <div class="row">
                {!!$errors->first('libelle_projet','<p class="invalid-feedback">:message</p>')!!}
                <div class="form-group btn float-right btn-filter col-xs-12 col-md-6 col-lg-8">
                    <label for="Libelle">Libellé Projet</label>
                    <input type="text" name="libelle_projet"
                           class="form-control
                    {!! $errors->has('libelle_projet') ? 'is-invalid': '' !!}"
                           placeholder="rechercher par libellé de projet">
                </div>
            </div>


            <div class="row">
                {{--Start-Filter-Libelle du Projet--}}
                <div class="form-group btn float-right btn-filter col-xs-12 col-md-3 col-lg-4">
                    <label for="code projet">Code projet</label>
                    <select name="code_projet" class="form-control" id="rechercherOption"
                            class="selectpicker"
                            data-style="select-with-transition"
                            title="Select Class" data-size="15">
                        <option value="" disabled selected></option>
                        @foreach($projet_array as $data)
                            <option value="{{$data->id}}">{{$data->code_projet}}</option>
                        @endforeach
                    </select>
                </div>
                {{--End-Filter-Libelle du Projet--}}
                <div class="form-group btn float-right btn-filter col-xs-12 col-md-3 col-lg-4">
                    <label for="type">Type</label>
                    <select name="libelle_type" class="form-control"
                            class="selectpicker"
                            data-style="select-with-transition"
                            title="Select Class" data-size="15">
                        <option value="" disabled selected></option>
                        @foreach($type_array as $data)
                            <option value="{{$data->id}}">{{$data->libelle_type}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row">
                {{--Start-Filter-User--}}
                <div class="form-group btn float-right btn-filter col-xs-12 col-md-3 col-lg-4">
                    <label for="utilisateur">Utilisateur</label>
                    <select name="name" class="form-control"
                            class="selectpicker"
                            data-style="select-with-transition"
                            title="Select Class" data-size="15">
                        <option value="" disabled selected></option>
                        @foreach($user_array as $data)
                            <option value="{{$data->id}}">{{$data->name}}</option>
                        @endforeach
                    </select>
                </div>
                {{--End-Filter-User--}}
                <div class="form-group btn float-right btn-filter col-xs-12 col-md-3 col-lg-4">
                    <label for="avancement">Avancement</label>
                    <select name="avancement" class="form-control"
                            class="selectpicker"
                            data-style="select-with-transition"
                            title="Select Class" data-size="15">
                        <option value="" disabled selected></option>
                        @foreach($projet_array as $data)
                            <option value="{{$data->id}}">{{$data->avancement}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group btn float-right btn-filter col-xs-12 col-md-3 col-lg-4">
                    <label for="meteo">Météo</label>
                    <select name="code_meteo" class="form-control"
                            class="selectpicker"
                            data-style="select-with-transition"
                            title="Select Class" data-size="15">
                        <option value="" disabled selected></option>
                        @foreach($meteo_array as $data)
                            <option value="{{$data->id}}">{{$data->code_meteo}}</option>
                        @endforeach
                    </select>
                </div>


                <div class=" form-group btn float-right btn-filter col-xs-12 col-md-3 col-lg-4">
                    <label for="etat">Etat</label>
                    <select name="libelle_etat" class="form-control"
                            class="selectpicker"
                            data-style="select-with-transition"
                            title="Select Class" data-size="15">
                        <option value="" disabled selected></option>
                        @foreach($etat_array as $data)
                            <option value="{{$data->id}}">{{$data->libelle_etat}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-filter col-xs-12 col-md-2 col-lg-3"><span
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
                                <th class="col-lg-3">Code du Projet</th>
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
                                            <div class="form-group col-xs-6 col-md-2 col-lg-4">
                                                {{$projets->meteo_id}}<br/>
                                                {!! Form::select('liste_meteos', $meteos, $projets->meteo_id, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                    <td>
                                        <div class="row">
                                            <div class="form-group col-xs-6 col-md-2 col-lg-4">
                                                {{$projets->etat_id}}<br/>
                                                {!! Form::select('liste_etats', $etats, $projets->etat_id, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                    </td>


                                    <td>
                                        <div class="row">
                                            <div class="form-group col-xs-6 col-md-2 col-lg-4">
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