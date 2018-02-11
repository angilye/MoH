@extends('pages.admin.AdminIndex')

@section('gestion')
    
<style>
.test{
    background-color: rgba(63, 63, 63, 0.9);
    margin-top:1%;
    border-radius: 5px;
    font-family:'Arial';
}
span{
    color:#1E90FF;
}
h1{
    font-size:40px;font-weight:bold;color:#ffffff;
}

@media screen{ 

    .date{
        width:10%;
    }

    .title{
        width:90%;
    }

    .ligne{
        padding:25px;
    }

}

@media(max-width: 1200px) {

    .date{
        width:25%;
    }

    .title{
        width:75%;
    }

    .ligne{
        padding:25px;
    }
}

</style>
<div class="row">
	<a href="javascript:history.back()" class="btn btn-primary offset-md-5 col-md-2">
		<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
	</a>
</div>
<div class="row">
    <div class="col-md-8 offset-md-2 text-white test">
        <h3 class="panel-title text-center">Updates</h3>
        <img class="img-fluid mx-auto d-block" src="https://images.joinsquad.com/NavigationDividers/middle_separator.png" alt="">
        <br>
            
                <div class="row ligne" style=" background-image: url(' {!! $update->image !!}')">
                    <div class="date" ><strong> {!! $update->date !!} </strong></div>
                    <div class="title" ><strong> {!! $update->title !!} </strong></div>
                </div>
            
        <br>
    </div>
</div>
<br><br><br>
<div class="row">
    <div class="col-md-8 offset-md-2 text-center text-white test">
    
        <br>
        <img src="http://warzone-multi-gaming.fr/FRANCE0.jpg?v=5g27ao84gvrpd" alt="">
        <br>
        
        <br>

        <h2>{!! $update->sousTitre !!}</h2>


        {!! $update->contend !!}

        <br><br>

    </div>
</div>


@endsection

