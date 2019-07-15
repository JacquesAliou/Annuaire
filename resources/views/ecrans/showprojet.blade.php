@extends('template.template-app')


@section('content')

    <div class="row" style="margin-top: 60px;">

        <div class="form-group btnedit pull-right" style="padding-left: 25px;padding-inline-end: 50px;padding-top:15px;">
            <a href="{{url($projet->id).'/edit'}}">
                <button class="edit btn btn-success">Editer</button>
            </a>
        </div>

        {{--<div class="row">--}}
            <div class=" form-group show-projet">

                <h3 class="col-md-offset-3">{{$projet->libelle_projet}}</h3>

                <p class="edit-description col-md-offset-3 " >{{$projet->description}}</p>

                {{--<p class="edit-description col-md-offset-3" >{{substr($projet->description,0,20)}}</p>--}}
            </div>
        {{--</div>--}}
    </div>
        <div class="row">
            <div class="col-md-offset-2 form-group col col-xl-6 col-lg-6 col-md-2">
                <form action="{{url($projet->id).'/commentaires'}}" method="post" class="commentaires" >

                    {{csrf_field()}}
                    <div class="form-group">
                        <p>Voulez-vous laisser un commentaire ???</p>
                <textarea name="contenu" id="contenuinput"
                      placeholder="Votre commentaire" cols="50" rows="3">{{old('contenu')}}
                </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Publier Votre commentaire</button>
                </form>
            </div>

        </div>

            <div class="comments card-columns">

                @for($i=0; $i < count($projet->commentaires);$i++)
                    <div class="username col-md-offset-2 col-xl-12 col-lg-6 col-md-6 text-justify card">
                        @if($users_comment && $users_comment[$i]->name == $users_comment[$i]->name)
                            {{--form pour le boutton Supprimer--}}
                            <form action="{{url($projet->id).'/delete'}}" method="post">
                                {{csrf_field()}}
                                {{method_field('delete')}}
                                <button type="submit" class="fa fa-fw fa-trash justify-content-end" style="color: #c6080d; font-size:18px;";
                                        data-toggle="tooltip" data-placement="left" title="deletecomment"></button>
                            </form>
                        @endif
                        <p> <strong>{{ $users_comment[$i]->name. ' ' . $projet->commentaires[$i]->created_at }}</strong></p>
                        <p id="contenu {!! $projet->commentaires[$i]->id !!}">{!! $projet->commentaires[$i]->contenu !!}</p>

                    </div>
                    @endfor
            </div>

    @endsection