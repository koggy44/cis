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
                        <li><a href="#newss">3. Add, edit and Delete news</a></li>
                        <li><a href="#type">4. Add and delete Incident type</a></li>
                        <li><a href="#place">5. Add and Delete place of residence</a></li>
                        <li><a href="#report">6. Genarating Reports</a></li>
                        

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
                            On clicking the registration number on the incident row, <br>
                            it leads you to the reporter’s profile which contains needed information about the 
                            reporter.
                              <div>
                                <img src="{{url('images/details.PNG')}}" width="500px" height="400px">
                            </div>
                        </p>
                        
                    </div>
                </div>


                <div class="card" id="newss">
                    <h2 class="card-header">Add, edit and delete News</h2>
                    <div class="card-body">

                        <p class="card-text">
                            To add news: <br>
                                 Click on the news dropdown button on the side bar. <br>
                                 Then click ‘add news’ button. <br>
                                 A form will be provided. <br>
                                 Fill the title, briefing and full news fields and click ‘Send’ button.
                            <div>
                                <img src="{{url('images/addnews.PNG')}}" width="800px" height="300px">
                            </div>
                            <hr>
                             The next page you will see after adding news is all posted news <br>
                            
                            <div>
                                <img src="{{url('images/posted news.PNG')}}" width="800px" height="300px">
                            </div>
                             You can further edit or delete it by clicking ‘edit’. <br>
                             To update, make the relevant changes the click ‘update’ <br>
                             To delete, simply click ‘Delete news’ <br>
                            <div>
                                <img src="{{url('images/edit news.PNG')}}" width="500px" height="400px">
                            </div>
                              

                        </p>
                        
                    </div>
                </div>

                <div class="card" id="type">
                    <h2 class="card-header">Add and delete Incident type</h2>
                    <div class="card-body">

                        <p class="card-text">
                            To add incident, follow the steps below: <br>
                                 Click the ‘Add type of incident’ button on the side bar.
                            <div>
                                <img src="{{url('images/report.PNG')}}" width="200px" height="300px">
                            </div>
                            <hr>
                             Fill in the field and add.<br>
                            
                            <div>
                                <img src="{{url('images/incident type.PNG')}}" width="800px" height="300px">
                            </div>
                            The next screen shows all the incident types. <br>
                             There is a delete button that removes the incident type completely.
                            <div>
                                <img src="{{url('images/delete type.PNG')}}" width="500px" height="400px">
                            </div>
                              

                        </p>
                        
                    </div>
                </div>


                <div class="card" id="place">
                    <h2 class="card-header">Add and delete place of residence</h2>
                    <div class="card-body">

                        <p class="card-text">
                            To add place of residence, <br>
                                 Click on the button ‘add place of residence’. <br>
                                 Fill the place and check on either residence or non residence. <br>
                                 Then click on add. <br>
                            <div>
                                <img src="{{url('images/residence.PNG')}}" width="800px" height="200px">
                            </div>
                            <hr>
                             The next screen shows all the places recorded. <br>
                             Alternatively you can reach this screen using the button the side bar. <br>
                             The Screen provides a ‘Delete’ button that deletes the specific place when clicked.<br>
                            
                            <div>
                                <img src="{{url('images/places.PNG')}}" width="800px" height="300px">
                            </div>
                              

                        </p>
                        
                    </div>
                </div>


                 <div class="card" id="report">
                    <h2 class="card-header">Generating report</h2>
                    <div class="card-body">

                        <p class="card-text">
                            Generating reports is as easy as clicking a button.
                            <div>
                                <img src="{{url('images/report.PNG')}}" width="200px" height="500px">
                            </div>
                            <hr>
                             The button on clicked asks you to confirm and continue to print a report in a pdf format.
                            
                            <div>
                                <img src="{{url('images/print.PNG')}}" width="800px" height="300px">
                            </div>
                              

                        </p>
                        
                    </div>
                </div>
           </main>
@endsection