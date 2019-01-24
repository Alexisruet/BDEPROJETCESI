@extends('template')

@section('main')

<div id="carouselExampleIndicators" class="carousel slide  carousel-fade" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/batC.jpg" alt="First slide">
      <div class="carousel-caption d-md-block" id="Welcome">
        <p id="p1"> Bienvenue sur le site du BDE </br> CESI Bordeaux </p>
      </div>
    </div>
    <!--<div class="carousel-item">
      <img class="d-block w-100" src="img/social.png" alt="Second slide">
    </div>-->
  </div>
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="col-md-12 margeMem"></div>
<div class="row home">
  <div class="col-md-2"></div>

  <div class="col-md-8" id="presBDE">
      <h2>Présentation du BDE </h2>
      <br>
			<br>
      <p>Le bureau des élèves est une association à but non lucratifs qui a pour vocation
			d'organiser la vie étudiante du CESI. Notre objectif est de de créer des liens entre les étudiants,
			pour ce faire nous organisons beaucoup de soirées ou d'événements succeptibles d'intéresser un
			maximum de personnes. L'organisation de tous ces événements coûte chère et pour les financer
			nous avons mis en place une boutique en ligne vous permettant d'acheter des goodies ou des vétements.
		 	Vous pourrez ainsi arborer les couleurs de l'école et ainsi la promouvoir</p>
			<p>Pour éviter tout débordement sur ce site, les salariés de l'école ont un rôle de modération.
			Nous vous invitons donc à rester polis et courtois. Vous avez la possibilité de contacter un membres du BDE
		 	si vous avez des réclamations.</p>
			<div class="imgWei">
				<img src="img/wei.jpg" alt="journée d'intégration">
			</div><br>
			<p>Le BDE met également en place plusieurs associations pour occuper vos Jeudi après-midi, vous aurez
			 le choix entre jouer aux jeux vidéo entre amis grâce à l'association AC/DC (association de coopération
			 et de détente et de compétiont), améliorer votre prise de parole en public grâce à l'associations Eloquence
		 	 mise en place par Benjamin Coudannes. Si vous êtes passionnés d'élèctronique, Corentin Lapastoure vous permet
		 	 d'utiliser le matériel de l'école pour réparer vos objets défectueux, vous pouvez aussi lui confier vos objets
		 	 et il se chargera lui même de le réssuciter.</p>

    </div>

    <div class="col-md-2"></div>
</div>
<div class="col-md-12 margeMem"></div>

<div class="row" id="rowMem">

    <h2 class="col-md-12">Membres du BDE</h2>

    <div class="col-sm-6 col-md-3 imgHome">
      <img src="img/sancho.jpg" alt="sancho">
			<p class="descriptionMembre">Président</p>
    </div>
    <div class="col-sm-6 col-md-3 imgHome">
      <img src="img/lp7.jpg" alt="lp7">
			<p class="descriptionMembre">Vice-Président</p>
    </div>
    <div class="col-sm-6 col-md-3 imgHome">
      <img src="img/theo.jpg" alt="theo">
			<p class="descriptionMembre">Secrétaire</p>
    </div>
    <div class="col-sm-6 col-md-3 imgHome">
      <img src="img/alex.jpg" alt="alex">
			<p class="descriptionMembre">Trésorier</p>
    </div>

  </div>




@endsection
