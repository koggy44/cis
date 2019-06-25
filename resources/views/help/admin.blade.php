@extends('layout.help')

@section('content')
     <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">

            <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600" style="background-color:#5cdb95">
                <div class="mdl-layout__header-row" >
                    <span class="mdl-layout-title" style="color:">Online Help</span>
                    <div class="mdl-layout-spacer"></div>                
                </div>
            </header>

            <div class="demo-drawer mdl-layout__drawer logo-header-background-color">
                <header class="demo-drawer-header">
                    <span>  <a href="/incidents" class="nav-link text-center" style="color:white;">CAMPUS INCIDENT SYSTEM</a></span>
                </header>

                <nav class="demo-navigation mdl-navigation sidebar-nav-background">
                    <ul id="navmenu">
                        <li><a href="#incidents">1. Icidents view</a></li>
                        <li><a href="#reporter">2. Reporters details</a></li>
                        <li><a href="#">3. Add/Delete news</a></li>
                        <li><a href="#">4. Viewing the news</a></li>
                        <li><a href="#">5. Add/delete incidents types</a></li>
                        <li><a href="#">6. Add/Delete place of residence</a></li>
                        <li><a href="#">7. Genrrating Reports</a></li>
                        

                    </ul>
                </nav>
            </div>
            <main class="mdl-layout__content mdl-color--grey-100">
                 <div class="card" id="incidents">
                    <h2 class="card-header">Incident View</h2>
                    <div class="card-body">

                        <p class="card-text">
                            This is the first page an admin enters when he/she login in the ststem as an admin
                            The pages gives a clear view of the incidents that are not yet worked on.
                            All the incidents shown here have a checkbox that is unchecked.
                            <div>
                                <img src="{{url('images/incidents.PNG')}}" width="900px" height="400px">
                            </div>
                            <hr>
                            Once a incident is seen and worked on. The admin is supposed to check the box. <br>
                            the incident will then be reomved automatically from that view.
                            <div>
                                 <img src="{{url('images/statues.png')}}" width="900px" height="400px">
                            </div>
                            <hr>
                            All the previous incidents can be viewed by sorting as their category.
                            <div>
                                <img src="{{url('images/category.png')}}" width="900px" height="400px">
                            </div>
                        </p>
                        
                    </div>


                </div> 

                <!--Reporters details-->
                <div class="card" id="reporter">
                    <h2 class="card-header">Reporters details</h2>
                    <div class="card-body">

                        <p class="card-text">
                            The Reporter's details can be viewed by clicking the registration number in the 
                            incidents table.
                            <div>
                                <img src="{{url('images/reporter.png')}}" width="900px" height="400px">
                            </div>
                            <hr>
                              <div>
                                <img src="{{url('images/details.PNG')}}" width="500px" height="400px">
                            </div>
                        </p>
                        
                    </div>


                </div>
           </main>
@endsection