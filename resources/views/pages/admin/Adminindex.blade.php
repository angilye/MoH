@extends('template', ['title' => 'Index' ])

@section('content')

<style>

body{
    background: white;
}
.navbar-static-top {
  margin-bottom:20px;
}

i {
  font-size:16px;
}

.nav > li > a {
  color:#787878;
}
  
footer {
  margin-top:20px;
  padding-top:20px;
  padding-bottom:20px;
  background-color:#efefef;
}

/* count indicator near icons */
.nav>li .count {
  position: absolute;
  bottom: 12px;
  right: 6px;
  font-size: 9px;
  background: rgba(51,200,51,0.55);
  color: rgba(255,255,255,0.9);
  line-height: 1em;
  padding: 2px 4px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  -o-border-radius: 10px;
  border-radius: 10px;
}

.indexAdmin{
    margin-top:25px;
}

.iconeMessagerie{
    margin-right:150px;
}
</style>

<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

<!-- Main -->
<div class="container-fluid indexAdmin">
    <div class="row">
        <div class="col-sm-2">
            <!-- Left column -->
            <a href="#"><strong><i class="fa fa-wrench" aria-hidden="true"></i> Tools</strong></a>

            <hr>
            <ul class="nav flex-column nav-pills">
                <li class="nav-item dropdown">
                    <ul class="nav flex-column collapse in " id="userMenu">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Setting</a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('acceuil_path') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <!-- <a class="dropdown-item" href="#"><i class="fa fa-envelope" aria-hidden="true"></i> Messages <span class="badge badge-info">4</span></a></li>
                            <a class="dropdown-item" href="#"><i class="fa fa-cog" aria-hidden="true"></i> Options</a></li>
                            <a class="dropdown-item" href="#"><i class="fa fa-comment" aria-hidden="true"></i> Shoutbox</a></li>
                            <a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i> Staff List</a></li>
                            <a class="dropdown-item" href="#"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Rules</a></li> -->
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></li>
                            </div>
                    </ul>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li> 
                <li class="nav-item dropdown">
                    <ul class="nav flex-column collapse in " id="userMenu">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Serveur</a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Arma 3 <span class="badge badge-info">1</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="a3.moh-warzone.fr">Gestion Serveur</a>
                            </div>
                    </ul>
                </li> -->
            </ul>

            <hr>

            <a href="#"><strong><i class="fa fa-link" aria-hidden="true"></i> Resources</strong></a>

            <hr>

            <ul class="nav flex-column nav-pills">
                <li class="nav-header"></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('updates.index') }}"><i class="fa fa-list-alt" aria-hidden="true"></i> Gestion Update</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('user.index') }}"><i class="fa fa-user" aria-hidden="true"></i> Gestion Membres</a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-briefcase" aria-hidden="true"></i> Toolbox</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-link" aria-hidden="true"></i> Widgets</a></li> -->
                <li class="nav-item"><a class="nav-link" href="{{ route('ticket.index') }}"><i class="fas fa-ticket-alt" aria-hidden="true"></i> Gestion Ticket</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('page.index') }}"><i class="fa fa-book" aria-hidden="true"></i> Gestion Pages</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('gallerieImage_path') }}"><i class="fas fa-images"></i> Gallerie image</a></li>
            </ul>

            <hr>

            <a href="#"><strong><i class="fa fa-info-circle" aria-hidden="true"></i> More Templates</strong></a>

            <hr>

            <ul class="nav flex-column nav-pills">
                <li class="nav-item dropdown">
                    <ul class="nav flex-column collapse in " id="userMenu">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
                        <div class="dropdown-menu">
                        <a class="dropdown-item disable" href="#">Bootstrap</a>
                        </div>
                    </ul>
                </li>
            </ul>
        <!-- / Left column-->
            
        </div>
        <!-- /col-3 -->
        <div class="col-sm-10">

            <!-- column 2 -->
            <ul class="list-inline pull-right iconeMessagerie">
                <li class="nav-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope" aria-hidden="true"></i><span class="count">3</span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="dropdown-item"><a href="#">1. Is there a way..</a></li>
                        <li class="dropdown-item"><a href="#">2. Hello, admin. I would..</a></li>
                        <li class="dropdown-item"><a href="#"><strong>All messages</strong></a></li>
                    </ul>
                </li>
            </ul>
            <a href="{{ route('indexAdmin_path') }}"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>
            <hr>

            <div class="row">
                <!-- center left-->
                <div class="col-md-11">

                    <div class="btn-group d-flex" role="group">
                        
                        <a href="{{ route('page.index') }}" class="btn btn-primary col-sm-6">
                            <br> Pages
                        </a>
                        <a href="{{ route('user.index') }}" class="btn btn-primary col-sm-6">
                            <br> Membres
                        </a>
                        <a href="{{ route('ticket.index') }}" class="btn btn-primary col-sm-6">
                            <br> Contacts
                        </a>
                    
                    </div>
                    
                    <hr>

                    <br>
                    
                    @yield('gestion')
                    
                </div>
                <!--/col-span-6-->

            </div>
            <!--/row-->

            
        </div>
        <!--/col-span-9-->
    </div>
    <div class="row">
        
    </div>
</div>
<!-- /Main -->

<div class="modal" id="addWidgetModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Add Widget</h4>
            </div>
            <div class="modal-body">
                <p>Add a widget stuff here..</p>
            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dalog -->
</div>
<!-- /.modal -->


<script>
$(".alert").addClass("in").fadeOut(4500);

$(".alert").addClass("in").fadeOut(3500);

/* swap open/close side menu icons */
$('[data-toggle=collapse]').click(function(){
  	// toggle icon
  	$(this).find("i").toggleClass("glyphicon-chevron-right glyphicon-chevron-down");
});
</script>
@stop