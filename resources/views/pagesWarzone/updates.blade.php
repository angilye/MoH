@extends('templateWarzone', ['title' =>  $pages->title  ])

@section('content')

<style>
.test{
    background-color: rgba(63, 63, 63, 0.9);
    margin-top:5%;
    padding-top:2%;
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

.lien-update {
    text-decoration: none; color: white;
}
.lien-update:hover {
    text-decoration: none; color: white; zoom: 1.1;
}


</style>

<div class="row">
    <div class="col-md-8 offset-md-2 text-white test">
        <h3 class="panel-title text-center">Updates</h3>
        <img class="img-fluid mx-auto d-block" src="https://images.joinsquad.com/NavigationDividers/middle_separator.png" alt="">
        <br>
        @foreach ($pages as $pages)
            <a class="lien-update" href="update/{!! $pages->id !!}">
                <div class="row ligne" style=" background-image: url(' {!! $pages->image !!}')">
                    <div class="date" ><strong> {!! $pages->date !!} </strong></div>
                    <div class="title" ><strong> {!! $pages->title !!} </strong></div>
                </div>
            </a>
        @endforeach
        <br>
    </div>
</div>

@stop