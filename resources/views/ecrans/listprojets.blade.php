
@extends('template.template-app')


@section('content')
        <div class="row">
            <h3 class="titleproject col-md-offset-3" style="margin-top: 80px;">Les Projets</h3>
           {{--formulaire d'exportation de données csv--}}
            <form method='post' action='/export'class="form-group centered col-md-offset-3">

                {{ csrf_field() }}
                <input class="btn-primary btn-sm" type="submit"
                       name="exportcsv" id="exportcsv"
                       value='Exporter Tous Les Projets en CSV'>
            </form>
        </div>
        <div class="row">
        @foreach($projets as $projet)
            <div class=" btn center-block col-lg-8 col-md-10 col-xs-7">

                    <h3>{{$projet->libelle_projet}}</h3>


                    {{--[ReadMore...]dépend de getShortContentAttribute()du model Projet
                    et de la route de la methode show():projets/{projet}|projets.show--}}
                    <p id="readmore">{{ $projet->shortContent }}<a href="projets/{{$projet->id}}">[Read More]</a></p>

                </div>
        @endforeach
        </div>
            {{--Pour afficher la pagination[numbers]--}}
            <br>
           <div class="paginate btn center-block col-lg-8 col-md-4" style="font-size: medium">{{$projets->links()}}</div>
@endsection