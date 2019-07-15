
@extends('template.template-app')

    @php  $title = $projet->libelle_projet @endphp
@section('content')

    <div class="form-edit">

        <form action="{{ url($projet->id.'/update') }}" method="post">
        <!-- Le Token csrf_field() permet une validation effective du formulaire  -->
                {{csrf_field()}}

                {{method_field("put")}}
            <div class="row">
                <div class="form-group col-xs-12 col-md-4 col-lg-6">
                    <input type="text"
                           name="libelle_projet" class="form-control {!! $errors->has('libelle_projet') ? 'is-invalid': '' !!}"
                           placeholder="Libelle du projet"
                           value="{{$projet->libelle_projet}}"> <!--old('valeur')concerve le titre tapé dans le champ  -->

                    {!!$errors->first('libelle_projet','<p class="invalid-feedback">:message</p>')!!}
                </div>

            </div>

            <div class="row">
                <div class="form-group col-xs-12 col-md-4 col-lg-6">
                    <textarea name="description" class="form-control
                    {!! $errors->has('description') ? 'is-invalid': '' !!}"
                              placeholder="La description du projet"
                              rows="10">{{$projet->description }}</textarea>

                    {!! $errors->first('description', '<p class="invalid-feedback">:message</p>') !!}
                </div>

            </div>

                <div>
                    <button type="submit" class="btn btn-danger pull-left">Mettre à Jour</button>

                </div>

        </form>

    </div>

@endsection