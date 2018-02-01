@extends('templateWarzone', ['title' =>  $pages->title  ])

@section('content')

<style>
.test{
    background-color: rgba(63, 63, 63, 0.9);
    margin-top:10%;
    border-radius: 5px;
    font-family:'Arial';
}
span{
    color:red;
}
h1{
    font-size:40px;font-weight:bold;color:#ffffff;
}

</style>

<div class="row">
    <div class="col-md-4 offset-md-4 text-center text-white test">
        <br>
        <img src="http://warzone-multi-gaming.fr/FRANCE0.jpg?v=5g27ao84gvrpd" alt="">
        <br>
        {!! $pages->contend !!}
    </div>
</div>

@stop




