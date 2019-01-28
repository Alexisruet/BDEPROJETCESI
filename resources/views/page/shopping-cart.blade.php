@extends('template')

@section('main')

<div class="container" id="shopie">


    @foreach($products as $product)

    <ul class="list-group">
        <li class="list-group-item col-md-12">
            <div class="row">

                <div class="col-md-2">
                    <strong>Nom : {{ $product['item']['name'] }}</strong>
                </div>
                <div class="col-md-2">
                    <span class="label label-success">Prix : {{ $product['price'] }}</span>
                </div>
                <div class="col-md-2">
                    <span class="label label-succes">Quantité : {{ $product['qty'] }}</span>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-2">
                    <a href="{{ route('product.remove', ['id' => $product['item']['id']]) }}">
                        <button><i class="fas fa-times"></i>&nbspSupprimer</button>
                    </a>
                </div>

            </div>
        </li>
    </ul>

    @endforeach
    <form class="form-group row" action="https://www.paypal.me/jokerSanch">
        <div class="col-md-4">
            <a href="https://www.paypal.me/jokerSanch"><button class="waves-effect waves-light btn" id="ideaValidate" type='submit'>Commander</button></a>
        </div>
        <div class="col-md-4">
            <label class="custom-control custom-checkbox">
                <input class="custon-control-input" type="checkbox" name="cgv" required>
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">J'accepte les <a href="mentionslgl#cgv">Conditions générales de vente</a></span>
            </label>
        </div>
    </form>
</div>



</div>

@endsection