<?php

namespace App\Http\Controllers;

use App\Sondage;
use ConsoleTVs\Charts\Facades\Charts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SondageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.sondage');
    }

    public function thank()
    {
        return view('front.thank');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sondage()
    {
        $result= Sondage::all();
        return  view('back.sondage',compact('result'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $age = $request['age'];
        $statut = $request['status'];
        $enfant = $request['enfant'];
        $telephone = $request['telephone'];
        $dure = $request['dure'];
        $flux = $request['flux'];
        $protection = $request['protection'];
        $change = $request['change'];
        $tache = $request['tache'];
        $budget = $request['budget'];
        $change_complement = $request['change-complement'];
        $serviette_complement = $request['serviette-complement'];
        $tache_complement = $request['tache-complement'];
        $efficace = $request['efficace'];
        $simple = $request['simple'];
        $confortable = $request['confortable'];
        $securite = $request['securite'];
        $achat = $request['achat'];
        $recommandation = $request['recommandation'];
        $preference = $request['preference'];
        $derangement= $request['derangement'];
        $modifier= $request['modifier'];

        $sondage=new Sondage();
        $sondage->age=$age;
        $sondage->statut=$statut;
        $sondage->enfant=$enfant;
        $sondage->telephone=$telephone;
        $sondage->dure=$dure;
        $sondage->flux=$flux;
        $sondage->protection=$protection;
        $sondage->change=$change;
        $sondage->tache=$tache;
        $sondage->budget=$budget;
        $sondage->change_complement=$change_complement;
        $sondage->serviette_complement=$serviette_complement;
        $sondage->tache_complement=$tache_complement;
        $sondage->efficace=$efficace;
        $sondage->simple=$simple;
        $sondage->confortable=$confortable;
        $sondage->securite=$securite;
        $sondage->achat=$achat;
        $sondage->recommandation=$recommandation;
        $sondage->preference=$preference;
        $sondage->derangement=$derangement;
        $sondage->modifier=$modifier;

        $sondage->save();
        return redirect()->route('thank');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sondage  $sondage
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $moins18 = DB::table('sondages')
            ->where('age','moins de 18 ans')
            ->count();
        $plus18 = DB::table('sondages')
            ->where('age','plus de 18 ans')
            ->count();
        $entre = DB::table('sondages')
            ->where('age','entre 18 et 25 ans')
            ->count();
        $plus25 = DB::table('sondages')
            ->where('age','entre 18 et 25 ans')
            ->count();
        $age = Charts::create('donut', 'highcharts')
            ->title('Age')
            ->labels(['Moins de 18 ans', 'Plus de 18 ans','entre 18 et 25 ans', 'entre 18 et 25 ans'])
            ->values([$moins18,$plus18,$entre,$plus25])
            ->dimensions(500,300)
            ->responsive(false);

        $jour2 = DB::table('sondages')
            ->where('dure','2 jours')
            ->count();
        $jour3 = DB::table('sondages')
            ->where('dure','3 jours')
            ->count();
        $jour5 = DB::table('sondages')
            ->where('dure','plus de 5 jours')
            ->count();
        $dure = Charts::create('donut', 'highcharts')
            ->title('Durée des regles')
            ->labels(['2 jours', '3 jours','plus de 5 jours'])
            ->values([$jour2,$jour3,$jour5])
            ->dimensions(500,300)
            ->responsive(false);

        $leger = DB::table('sondages')
            ->where('flux','leger')
            ->count();
        $important = DB::table('sondages')
            ->where('flux','important')
            ->count();
        $tresimportant = DB::table('sondages')
            ->where('flux','tres important')
            ->count();
        $flux = Charts::create('donut', 'highcharts')
            ->title('Flux des regles')
            ->labels(['leger', 'important','tres important'])
            ->values([$leger,$important,$tresimportant])
            ->dimensions(500,300)
            ->responsive(false);

        $moins1000 = DB::table('sondages')
            ->where('budget','Moins de 1000 FCFA')
            ->count();
        $plus1000 = DB::table('sondages')
            ->where('budget','Plus de 1000 FCFA')
            ->count();
        $plus2000 = DB::table('sondages')
            ->where('budget','2000 FCFA et plus')
            ->count();
        $budget = Charts::create('donut', 'highcharts')
            ->title("Budget pour l'achat des protection")
            ->labels(['Moins de 1000 FCFA', 'Plus de 1000 FCFA','2000 FCFA et plus'])
            ->values([$moins1000,$plus1000,$plus2000])
            ->dimensions(500,300)
            ->responsive(false);

        $efficace_oui = DB::table('sondages')
            ->where('efficace','oui')
            ->count();
        $efficace_non = DB::table('sondages')
            ->where('efficace','non')
            ->count();
        $efficace = Charts::create('donut', 'highcharts')
            ->title("Efficacité")
            ->labels(['OUI', 'NON'])
            ->values([$efficace_oui,$efficace_non])
            ->dimensions(500,300)
            ->responsive(false);

        $simple_oui = DB::table('sondages')
            ->where('efficace','oui')
            ->count();
        $simple_non = DB::table('sondages')
            ->where('efficace','non')
            ->count();
        $simple = Charts::create('donut', 'highcharts')
            ->title("Simplicité")
            ->labels(['OUI', 'NON'])
            ->values([$simple_oui,$simple_non])
            ->dimensions(500,300)
            ->responsive(false);

        $confortable_oui = DB::table('sondages')
            ->where('confortable','oui')
            ->count();
        $confortable_non = DB::table('sondages')
            ->where('confortable','non')
            ->count();
        $confortable = Charts::create('donut', 'highcharts')
            ->title("Confortable")
            ->labels(['NON', 'OUI'])
            ->values([$confortable_non,$confortable_oui])
            ->dimensions(500,300)
            ->responsive(false);

        $securite_oui = DB::table('sondages')
            ->where('securite','oui')
            ->count();
        $securite_non = DB::table('sondages')
            ->where('securite','non')
            ->count();
        $securite = Charts::create('donut', 'highcharts')
            ->title("Securite")
            ->labels(['OUI', 'NON'])
            ->values([$securite_oui,$securite_non])
            ->dimensions(500,300)
            ->responsive(false);

        $achat_oui = DB::table('sondages')
            ->where('achat','oui')
            ->count();
        $achat_non = DB::table('sondages')
            ->where('achat','non')
            ->count();
        $achat = Charts::create('donut', 'highcharts')
            ->title("Achat ")
            ->labels(['OUI', 'NON'])
            ->values([$achat_oui,$achat_non])
            ->dimensions(500,300)
            ->responsive(false);

        $epais = DB::table('sondages')
            ->where('preference','epais')
            ->count();
        $mince = DB::table('sondages')
            ->where('preference','mince')
            ->count();
        $preference = Charts::create('donut', 'highcharts')
            ->title("Preference")
            ->labels(['mince', 'epais'])
            ->values([$mince,$epais])
            ->dimensions(500,300)
            ->responsive(false);

        $reco_oui = DB::table('sondages')
            ->where('achat','oui')
            ->count();
        $reco_non = DB::table('sondages')
            ->where('achat','non')
            ->count();
        $recommandation = Charts::create('donut', 'highcharts')
            ->title("Recommandation")
            ->labels(['OUI', 'NON'])
            ->values([$reco_oui,$reco_non])
            ->dimensions(500,300)
            ->responsive(false);

        $fois2 = DB::table('sondages')
            ->where('change','2 fois')
            ->count();
        $fois3 = DB::table('sondages')
            ->where('change','3 fois')
            ->count();
        $fois4 = DB::table('sondages')
            ->where('change','4 fois')
            ->count();
        $fois5 = DB::table('sondages')
            ->where('change','plus de 5 jours')
            ->count();
        $change = Charts::create('donut', 'highcharts')
            ->title('Changement de protection par jour')
            ->labels(['2 jours', '3 jours','4 jours','plus de 5 jours'])
            ->values([$fois2,$fois3,$fois4,$fois5])
            ->dimensions(500,300)
            ->responsive(false);

        $etudiant = DB::table('sondages')
            ->where('statut','Etudiante')
            ->count();
        $mere = DB::table('sondages')
            ->where('statut','Mere au foyer')
            ->count();
        $cadre = DB::table('sondages')
            ->where('statut','Cadre')
            ->count();
        $gerante = DB::table('sondages')
            ->where('statut','Gerante d\'une entreprise')
            ->count();

        $autre = DB::table('sondages')
            ->where('statut','autre')
            ->count();

        $status = Charts::create('donut', 'highcharts')
            ->title('Status')
            ->labels(['Etudiante', 'Mere au foyer','Cadre','Gerante d\'une entreprise','Autre'])
            ->values([$etudiant,$mere,$cadre,$gerante,$autre])
            ->dimensions(500,300)
            ->responsive(false);

        return view('back.stats',compact(
            'age',
            'dure',
            'flux',
            'budget',
            'efficace',
            'simple','confortable',
            'securite','achat','preference','recommandation','change','status'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sondage  $sondage
     * @return \Illuminate\Http\Response
     */
    public function edit(Sondage $sondage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sondage  $sondage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sondage $sondage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sondage  $sondage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sondage $sondage)
    {
        //
    }
}
