@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-10 col-xs-10">
                <div class="card">
                    <div class="card-header">{{ __('Add Last Game Details') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('games.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="gameWeek" class="col-md-4 col-form-label text-md-right">Game Week</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="gameWeek" name="gameWeek" required>
                                        @for ($i = 1; $i <= 20; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="teamA" class="col-md-4 col-form-label text-md-right">Équipe A</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="teamA" name="teamA" required>
                                        @foreach ($teams as $team)
                                            <option value="{{ $team->name }}">{{ $team->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="teamB" class="col-md-4 col-form-label text-md-right">Équipe B</label>
                                <div class="col-md-6">

                                    <select class="form-control" id="teamB" name="teamB" required>
                                        @foreach ($teams as $team)
                                            <option value="{{ $team->name }}">{{ $team->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="scoreA" class="col-md-4 col-form-label text-md-right">Score Équipe A</label>
                                <div class="col-md-6">
                                    <input id="scoreA" type="number" class="form-control" name="scoreA" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="scoreB" class="col-md-4 col-form-label text-md-right">Score Équipe B</label>
                                <div class="col-md-6">
                                    <input id="scoreB" type="number" class="form-control" name="scoreB" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="gameDate" class="col-md-4 col-form-label text-md-right">Date du jeu</label>
                                <div class="col-md-6">
                                    <input id="gameDate" type="date" class="form-control" name="gameDate" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-success mt-1">
                                        Ajouter le jeu
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-10 col-xs-10">
                <div class="card">
                    <div class="card-header">{{ __('Add players list') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('players.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="fullname" class="col-md-4 col-form-label text-md-right">Nom complet</label>
                                <div class="col-md-6">
                                    <input id="fullname" type="text" class="form-control" name="fullname" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="position" class="col-md-4 col-form-label text-md-right">Poste</label>
                                <div class="col-md-6">
                                    <input id="position" type="text" class="form-control" name="position" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="dateofbirth" class="col-md-4 col-form-label text-md-right">Date de naissance</label>
                                <div class="col-md-6">
                                    <input id="dateofbirth" type="date" class="form-control" name="dateofbirth" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="goalsnumber" class="col-md-4 col-form-label text-md-right">Nombre de buts</label>
                                <div class="col-md-6">
                                    <input id="goalsnumber" type="number" class="form-control" name="goalsnumber" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">Titre</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="content" class="col-md-4 col-form-label text-md-right">Contenu</label>
                                <div class="col-md-6">
                                    <textarea id="content" class="form-control" name="content" required></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">Image</label>
                                <div class="col-md-6">
                                    <input type="file" name="image" id="image" class="form-control-file" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-success mt-1">
                                        Ajouter le joueur
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-10 col-xs-10">
                <div class="card">
                <div class="card-header">{{ __('Classement') }}</div>

                <div class="card-body">
                    <form action="{{ route('addTeam') }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Équipe</label>
                            <div class="col-md-6">
                                <select class="form-control" id="name" name="name" required>
                                    @foreach ($teams as $team)
                                        <option value="{{ $team->name }}">{{ $team->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="victoires" class="col-md-4 col-form-label text-md-right">Victoires</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" id="victoires" name="victoires" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="defaites" class="col-md-4 col-form-label text-md-right">Défaites</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" id="defaites" name="defaites" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="points" class="col-md-4 col-form-label text-md-right">Points</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" id="points" name="points" required>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success mt-1">Ajouter l'équipe</button>

                            </div>
                        </div>
                    </form>
                </div>

                </div>
            </div>
            <div class="col-md-4  col-sm-10 col-xs-10">
                <div class="card">
                    <div class="card-header">{{ __('Next game') }}</div>
                    <div class="card-body">
                        <div class="card-body">
                            <form method="POST" action="{{ route('insertNextGame') }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="teamA" class="col-md-4 col-form-label text-md-right">Équipe A</label>
                                    <div class="col-md-6">
                                        <select class="form-control" id="teamB" name="teamB" required>
                                            @foreach ($teams as $team)
                                                <option value="{{ $team->name }}">{{ $team->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="teamB" class="col-md-4 col-form-label text-md-right">Équipe B</label>
                                    <div class="col-md-6">
                                        <select class="form-control" id="teamB" name="teamB" required>
                                            @foreach ($teams as $team)
                                                <option value="{{ $team->name }}">{{ $team->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="gameDate" class="col-md-4 col-form-label text-md-right">Date du
                                        match</label>
                                    <div class="col-md-6">
                                        <input type="date" class="form-control" id="gameDate" name="gameDate"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="gameWeek" class="col-md-4 col-form-label text-md-right">Semaine du
                                        match</label>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control" id="gameWeek" name="gameWeek"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="gameStadium" class="col-md-4 col-form-label text-md-right">Stade</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="gameStadium" name="gameStadium"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-success mt-1">Ajouter le prochain
                                            match</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>


                </div>
            </div>
            <div class="col-md-4  col-sm-10 col-xs-10">
                <div class="card">
                    <div class="card-header">{{ __('Popular News') }}</div>
                    <div class="card-body">
                        <div class="card-body">
                            <form method="post" action="{{ route('popular-news.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="title" class="form-label">{{ __('Title') }}</label>
                                    <input type="text" class="form-control" id="title" name="title" required>
                                </div>
                                <div class="mb-3">
                                    <label for="author" class="form-label">{{ __('Author') }}</label>
                                    <input type="text" class="form-control" id="author" name="author" required>
                                </div>
                                <div class="mb-3">
                                    <label for="content" class="form-label">{{ __('Content') }}</label>
                                    <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">{{ __('Image') }}</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                                <div class="mb-3">
                                    <label for="date" class="form-label">{{ __('Date') }}</label>
                                    <input type="date" class="form-control" id="date" name="date" required>
                                </div>
                                <div class="mb-3">
                                    <label for="category" class="form-label">{{ __('Topic') }}</label>
                                    <select class="form-select" id="category" name="topic" required>
                                        <option value="L'équipe">{{ __('L\'équipe') }}</option>
                                        <option value="Championnat">{{ __('Championnat') }}</option>
                                        <option value="Transferts">{{ __('Transferts') }}</option>
                                        <option value="Les matches">{{ __('Les matches') }}</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success">{{ __('Submit') }}</button>
                            </form>

                        </div>
                    </div>


                </div>
            </div>
            <div class="col-md-4  col-sm-10 col-xs-10">
                <div class="card">
                    <div class="card-header">{{ __('Add player') }}</div>
                    <div class="card-body">
                        <div class="card-body">
                            <!-- resources/views/listes_joueurs/create.blade.php -->

                            <!-- resources/views/listes_joueurs/create.blade.php -->

                            <form action="{{ route('listes_joueurs.store') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="nom" class="col-md-4 col-form-label text-md-right">Nom du joueur</label>
                                    <div class="col-md-6 mb-1">
                                        <input type="text" class="form-control" name="nom" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="prenom" class="col-md-4 col-form-label text-md-right">Prénom du joueur</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="prenom" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="numero" class="col-md-4 col-form-label text-md-right">Numéro du joueur</label>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control" name="numero" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="poste" class="col-md-4 col-form-label text-md-right">Poste du joueur</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="poste" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="datedenaissance" class="col-md-4 col-form-label text-md-right">Date de naissance du joueur</label>
                                    <div class="col-md-6">
                                        <input type="date" class="form-control" name="datedenaissance" required>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-success mt-1">Ajouter Joueur</button>
                                    </div>
                                </div>
                            </form>




                        </div>
                    </div>


                </div>

                {{--                 <div class="card">
                    <div class="card-header">{{ __('Popular News') }}</div>
                    <div class="card-body">
                        <div class="card-body">

                            <form method="POST" action="{{ route('listes_joueurs.destroy', ['listes_joueur' => $selectedPlayer->id]) }}">
                                @csrf
                                @method('DELETE')

                                <label for="player">Sélectionnez un joueur à supprimer :</label>
                                <select name="player" id="player">
                                    @foreach($players as $player)
                                        <option value="{{ $player->id }}">{{ $player->prenom }} {{ $player->nom }}</option>
                                    @endforeach
                                </select>

                                <button type="submit">Supprimer le joueur</button>
                            </form>




                        </div>
                    </div>


                </div> --}}
            </div>
            <div class="col-md-4 col-sm-10 col-xs-10">
                <div class="card">
                    <div class="card-header">{{ __('Update player') }}</div>
                    <div class="card-body">
                        <div class="card-body">

                            <form action="{{ route('updateplayer') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="selected_player" class="col-md-4 col-form-label text-md-right">Choisir un joueur à mettre à jour</label>
                                    <div class="col-md-6">
                                        <select name="id" class="form-control" required>
                                            @foreach($joueur as $player)
                                                <option value="{{ $player->id }}">{{ $player->nom }} {{ $player->prenom }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nom" class="col-md-4 col-form-label text-md-right">Nom du joueur</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="nom" value="{{ old('nom') }}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="prenom" class="col-md-4 col-form-label text-md-right">Prénom du joueur</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="prenom" value="{{ old('prenom') }}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="numero" class="col-md-4 col-form-label text-md-right">Numéro du joueur</label>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control" name="numero" value="{{ old('numero') }}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="poste" class="col-md-4 col-form-label text-md-right">Poste du joueur</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="poste" value="{{ old('poste') }}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="datedenaissance" class="col-md-4 col-form-label text-md-right">Date de naissance du joueur</label>
                                    <div class="col-md-6">
                                        <input type="date" class="form-control" name="datedenaissance" value="{{ old('datedenaissance') }}" required>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-success mt-1">Modifier Joueur</button>
                                    </div>
                                </div>
                            </form>






                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
