@extends('template.template-app')


@section('content')

    <form action="ajouter-projet" method="post" class="form-ajout-projet">
        <!-- Le Token csrf_field() permet une validation effective du formulaire  -->
        {{csrf_field()}}

        <div class="row">
        <div class="form-group btn float-right col-xs-6 col-md-4 col-lg-4">
            <label for="libelle_projet">Libellé du Projet:</label>
            <input type="text"
                   name="libelle_projet" class="form-control
                   {!! $errors->has('libelle_projet') ? 'is-invalid': '' !!}"
                   placeholder="Libelle du projet"
                   value="{{old('libelle_projet')}}"> <!--old('valeur')concerve le titre tapé dans le champ  -->

            {!!$errors->first('libelle_projet','<p class="invalid-feedback">:message</p>')!!}
        </div>

        <div class="form-group btn float-right col-xs-6 col-md-4 col-lg-4">
            <label for="code_projet">Code du Projet</label>
                <input type="text"
                   name="code_projet" class="form-control
                   {!! $errors->has('code_projet') ? 'is-invalid': '' !!}"
                   placeholder="Le code du projet"
                   value="{{old('code_projet')}}"> <!--old('valeur')concerve le titre tapé dans le champ  -->

                {!!$errors->first('code_projet','<p class="invalid-feedback">:message</p>')!!}
        </div>
    </div>

        <div class=" row">
            <div class="btn float-right col-xs-6 col-md-4  col-lg-4">
        <label for="etat_id">Etat du Projet</label>
        <select name="etat_id" class="form-control"
                class="selectpicker"
                data-style="select-with-transition"
                title="Select Class" data-size="15">
                <option value="" disabled selected></option>
                @foreach($etat_array as $data)
                <option value="{{$data->id}}">{{$data->libelle_etat}}</option>
                @endforeach
        </select></div>

            <div class="btn float-right col-xs-6 col-md-4 col-lg-4">
            <label for="type_id">Type du Projet</label>
            <select name="type_id" class="form-control"
                    class="selectpicker"
                    data-style="select-with-transition"
                    title="Select Class" data-size="5">
                <option value="" disabled selected></option>
                @foreach($type_array as $data)
                    <option value="{{$data->id}}">{{$data->libelle_type}}</option>
                @endforeach
            </select></div>
    </div>


        <div class=" row">
            <div class="btn float-right col-xs-6 col-md-4  col-lg-4">
                <label for="meteo_id">Météo du Projet</label>
                <select name="meteo_id" class="form-control"
                        class="selectpicker"
                        data-style="select-with-transition"
                        title="Select Class" data-size="15">
                    <option value="" disabled selected></option>
                    @foreach($meteo_array as $data)
                        <option value="{{$data->id}}">{{$data->code_meteo}}</option>
                    @endforeach
                </select></div>

            <div class="btn float-right col-xs-6 col-md-4 col-lg-4">
                <label for="avancement">Avancement du Projet</label>
                <select name="avancement" class="form-control"
                        class="selectpicker"
                        data-style="select-with-transition"
                        title="Select Class" data-size="15">
                    <option value="" disabled selected></option>
                    @foreach($projet_array as $data)
                        <option value="{{$data->id}}">{{$data->avancement}}</option>
                    @endforeach
                </select></div>
        </div>

        <div class="row description">
        <div class="col-xs-12 col-md-4 col-lg-8">
            <label for="description">La description du Projet</label>
                <textarea name="description" class="form-control
                          {!! $errors->has('description') ? 'is-invalid': '' !!}"
                          placeholder="La description du projet"
                          rows="10">{{old('description')}}</textarea>

            {!! $errors->first('description', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        </div>

        <div class="row">
                <div class="btn float-right col-xs-12 col-sm-5 col-md-4 col-lg-4">
                    <label for="date_debut">Date de Début du Projet</label>
                    <input type="date"
                           name="date_debut" class="form-control
                           {!! $errors->has('date_debut') ? 'is-invalid': '' !!}"
                           value="{{old('date_debut')}}"> <!--old('valeur')concerve le titre tapé dans le champ  -->

                    {!!$errors->first('date_debut','<p class="invalid-feedback">:message</p>')!!}

                </div>

                <div class="btn float-right col-xs-12 col-sm-5 col-md-4 col-lg-4">
                    <label for="date_fin">Date prévue de fin du Projet</label>
                    <input type="date"
                           name="date_fin" class="form-control
                           {!! $errors->has('date_fin') ? 'is-invalid': '' !!}"
                           value="{{old('date_fin')}}"> <!--old('valeur')concerve le titre tapé dans le champ  -->

                    {!!$errors->first('date_fin','<p class="invalid-feedback">:message</p>')!!}
                </div>
        </div>

        <div>
            <button type="submit" class="btn btn-success">Ajouter</button>
        </div>

    </form>

@endsection