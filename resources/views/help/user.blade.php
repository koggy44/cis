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
                        <li><a href="#starting">1. Getting started</a></li>
                        <li><a href="#homepage">2. Home page navigation</a></li>
                        <li><a href="#reporting">3. Reporting incident</a></li>
                        <li><a href="#">4. Viewing news</a></li>

                    </ul>
                </nav>
            </div>
            <main class="mdl-layout__content mdl-color--grey-100">

                <!--Getting started-->
               <div class="card" id="starting">
                    <h2 class="card-header">Getting started</h2>
                    <div class="card-body">
                        <h5 class="card-title">Intoduction</h5>
                        <p class="card-text">
                            Campus Incident System facilitates incident reporting procedure. 
                            The system has a powerful facility which links the user to the administrator or the 
                            system as a whole using a selection parameter. CIS solves the ineffectiveness in 
                            dealing with incidents in our campus today. 

                            CIS is a custom friendly system. The system is designed ultimately to drive students’ 
                            service who are the main character in our campuses and improve communications services 
                            and interactivity with administration whenever an incident occurs. Incident system 
                            seeks to advice on the establishment of an appropriate framework, within which one 
                            achieves the set out objectives of reporting an incident and particularly to have
                             regard to the purpose for which the system is held.


                        </p>
                    </div>
                </div>

                <!--Homepage-->
                <div class="card" id="homepage">
                    <h2 class="card-header">Navigating the home page</h2>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">
                            The home page has an easy to use interface. <br>
                            Most of the parts in the homepage are self explanatory.
                            <div>
                                <img src="{{url('images/homepage.PNG')}}" width="900px" height="400px">
                            </div>
                            <hr>
                            The main functionality of the user here is to report an incidents.
                            There are two button which will lead you to reporting incidents as shown below.
                            <div>
                                <img src="{{url('images/reporting.png')}}" width="900px" height="400px">
                            </div>
                            <hr>
                            The homepage also provide a button to view your older reported incidents.
                            
                        </p>
                    </div>
                </div>

                <!--Reporting incident-->
                <div class="card" id="reporting">
                    <h2 class="card-header">Reporting incident</h2>
                    <div class="card-body">

                        <p class="card-text">
                            The home page has an easy to use interface. <br>
                            Most of the parts in the homepage are self explanatory.
                            <div>
                                <img src="{{url('images/reportinc.PNG')}}" width="900px" height="400px">
                            </div>
                        </p>
                        
                    </div>


                </div>
           </main>
@endsection