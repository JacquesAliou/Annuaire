@extends('template.template-app')



@section('content')
    <form action="{{ route('projets.store') }}" method="post">
        <!-- Le Token csrf_field() permet une validation effective du formulaire  -->
        {{csrf_field()}}


        <div class="form-group col-6">
                <input type="text"
                       name="libelle_projet" class="form-control
                   {!! $errors->has('libelle_projet') ? 'is-invalid': '' !!}"
                       placeholder="Libelle du projet"
                       value="{{old('libelle_projet')}}"> <!--old('valeur')concerve le titre tapé dans le champ  -->

                {!!$errors->first('libelle_projet','<p class="invalid-feedback">:message</p>')!!}
        </div>

        <div class="form-group col-6">
                <input type="text"
                       name="code_projet" class="form-control
                   {!! $errors->has('code_projet') ? 'is-invalid': '' !!}"
                       placeholder="Le code du projet"
                       value="{{old('code_projet')}}"> <!--old('valeur')concerve le titre tapé dans le champ  -->

                {!!$errors->first('code_projet','<p class="invalid-feedback">:message</p>')!!}
        </div>

        <div class="form-group col-6">
                <input type="number" min="1"
                       name="meteo_id" class="form-control
                   {!! $errors->has('meteo_id') ? 'is-invalid': '' !!}"
                       placeholder="meteo_id"
                       value="{{old('meteo_id')}}"> <!--old('valeur')concerve le titre tapé dans le champ  -->

                {!!$errors->first('meteo_id','<p class="invalid-feedback">:message</p>')!!}
        </div>

        <div class="form-group col-6">
                <input type="number" min="1"
                       name="type_id" class="form-control {!! $errors->has('type_id') ? 'is-invalid': '' !!}"
                       placeholder="type_id"
                       value="{{old('type_id')}}"> <!--old('valeur')concerve le titre tapé dans le champ  -->

                {!!$errors->first('type_id','<p class="invalid-feedback">:message</p>')!!}
        </div>

        <div class="form-group col-6">
                <input type="number" min="1"
                       name="etat_id" class="form-control {!! $errors->has('etat_id') ? 'is-invalid': '' !!}"
                       placeholder="etat_id"
                       value="{{old('etat_id')}}"> <!--old('valeur')concerve le titre tapé dans le champ  -->

                {!!$errors->first('etat_id','<p class="invalid-feedback">:message</p>')!!}
        </div>


        <div class="form-group col-6">
                <textarea name="description" class="form-control
                          {!! $errors->has('description') ? 'is-invalid': '' !!}"
                          placeholder="La description du projet"
                          rows="10">{{old('description')}}</textarea>

                {!! $errors->first('description', '<p class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group col-6">
                <input type="number" min="0"
                       name="avancement" class="form-control
                   {!! $errors->has('avancement') ? 'is-invalid': '' !!}"
                       placeholder="avancement"
                       value="{{old('avancement')}}"> <!--old('valeur')concerve le titre tapé dans le champ  -->

                {!!$errors->first('avancement','<p class="invalid-feedback">:message</p>')!!}

        </div>

        <div class="form-group col-6">
                <input type="date"
                       name="date_debut" class="form-control
                   {!! $errors->has('date_debut') ? 'is-invalid': '' !!}"
                       placeholder="date_debut"
                       value="{{old('date_debut')}}"> <!--old('valeur')concerve le titre tapé dans le champ  -->

                {!!$errors->first('date_debut','<p class="invalid-feedback">:message</p>')!!}

        </div>

        <div class="form-group col-6">
                <input type="date"
                       name="date_fin" class="form-control
                   {!! $errors->has('date_fin') ? 'is-invalid': '' !!}"
                       placeholder="date_fin"
                       value="{{old('date_fin')}}"> <!--old('valeur')concerve le titre tapé dans le champ  -->

                {!!$errors->first('date_fin','<p class="invalid-feedback">:message</p>')!!}

        </div>


        <div>
                <button type="submit" class="btn btn-success">Ajouter</button>

        </div>

    </form>

@endsection