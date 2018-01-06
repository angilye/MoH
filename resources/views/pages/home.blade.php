@extends('template', ['title' => 'Home' ])

@section('content')

<div class="row body">
    <div class="col-md-1"></div>

        <div id="fond_acceuil" class="col-md-10">
            <div id="acceuil_text">
                <div align="center" id="text_acceuil">
                    <p>
                        <span class="taille60">Site en construction </span> 
                        <br>
                        <span class="taille28">(21/12/2017)</span> 
                        <br>
                        <span class="taille40">le site sera disponible tr&#232;s bient&#244;t !</span> 
                        <br>
                        <span class="taille28" >(vous pouvez quand m&#234;me acc&#233;der &#224; certaine fonctionnalit&#233;s)</span> 
                        <br>
                    </p>
                </div>
                <div align="center" id="separateur_acceuil">
                    &#126;
                </div>
                <div align="center" id="text_acceuil_en">
                    <p>
                        <span class="taille60">Under Construction</span> 
                        <br>
                        <span class="taille28">(21/12/2017)</span> 
                        <br>
                        <span class="taille40">This website will be available soon!</span> 
                        <br>
                        <span class="taille28" >(You can still access certain features)</span> 
                        <br>
                    </p>
                </div>
            </div>
        </div>

    <div class="col-md-1"></div>
</div>

@stop