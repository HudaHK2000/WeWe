@extends('layout.masterFrontEnd')
@section('title')
Safety Instructions
@endsection
@section('class_body')
class="preload home1 mutlti-vendor"
@endsection
@section('content')
<!-- sart safety instructions -->
<section class="section--padding2" style="background-color: #a2c3d2;padding-top: 25px; padding-bottom: 0px;">
    <div class="container">
        <div class="row" style="display: flex;">
        
            <div class="col-md-8 offset-md-2 col-sm-12">
            
                <div class="shortcode_modules">
                    <div class="modules__title">
                        <h3 class="safety-instructions">Safety Instructions</h3>
                    </div>
                    <div class="modules__content">
                        <div class="panel-group accordion " role="tablist" id="accordion">
                            <!-- earthquake -->
                            <div class="panel accordion__single accordion-bgcolor" id="panel-one">
                                <div class="single_acco_title">
                                    <h4>
                                        <a data-toggle="collapse" href="#collapse1" class="collapsed" aria-expanded="false" data-target="#collapse1" aria-controls="collapse1">
                                            <img src="{{ asset('images/svg//earthquak.svg') }}" alt="" style="max-width:20%;margin-right: 10px;">
                                            <span>Earthquakes</span>
                                            <i class="lnr lnr-chevron-down indicator"></i>
                                        </a>
                                    </h4>
                                </div>

                                <div id="collapse1" class="panel-collapse collapse" aria-labelledby="panel-one" data-parent="#accordion">
                                    <div class="panel-body">
                                        <h3 class="safety-instructions-title">What to do during an earthquake:</h3>
                                        <h3 class="safety-instructions-title">If you are inside a structurally safe building, stay inside:</h3>
                                        <p>
                                            - Remember the rule of drop, take cover, and hold on: that is, drop down, rest on your hands and knees, take cover under something solid and strong, such as a table or desk, and hold on to a piece of furniture or any strong object with one hand and protect your head and neck with the other hand. If you cannot find something solid and strong to cling to, or if you are in an unprotected place, protect your head and neck with both arms.
                                            <br>
                                            - Do not use the elevator.
                                            <br>
                                            - If you live or work in a building that you believe is unstable or does not meet earthquake safety specifications, contact your local authorities and obtain their guidance regarding safer practices.
                                        </p>
                                        <h3 class="safety-instructions-title">If you are outside the building, stay outside:</h3>
                                        <p>
                                            - Try to go to a yard away from buildings, trees, and objects such as street lamps, electrical wires, telephone poles, etc. When you reach an open field, sit on the ground and stay there until the earthquake stops.
                                        </p>
                                        <h3 class="safety-instructions-title">If you are in a car, do not get out of it:</h3>
                                        <p>
                                            - Stop the car as quickly as possible without endangering your safety. Pull the parking brake (handbrake) and keep the seat belt fastened until the shaking stops.
                                        </p>
                                        <h3 class="safety-instructions-title">If you feel an aftershock, follow the same instructions above:</h3>
                                        <p>
                                            - Aftershocks may occur frequently in the first hours and days following the earthquake, but they will decrease in frequency and intensity.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end /.accordion__single -->
                            <!-- floods -->
                            <div class="panel accordion__single accordion-bgcolor" id="panel-two">
                                <div class="single_acco_title">
                                    <h4>
                                        <a data-toggle="collapse" href="#collapse2" class="collapsed" aria-expanded="false" data-target="#collapse2" aria-controls="collapse2">
                                            <img src="{{ asset('images/svg//Flood.svg') }}" alt="" style="max-width:20%;margin-right: 10px;">
                                           
                                            <span>Floods</span>
                                            <i class="lnr lnr-chevron-down indicator"></i>
                                        </a>
                                    </h4>
                                </div>

                                <div id="collapse2" class="panel-collapse collapse" aria-labelledby="panel-two" data-parent="#accordion">
                                    <div class="panel-body">
                                        <h3 class="safety-instructions-title">What to do during a flood:</h3>
                                        <h3 class="safety-instructions-title">Listen to what local authorities broadcast.</h3>
                                        <p>
                                            - Listen to your local news channel or radio station to receive the latest weather updates and official advice. If you are advised to evacuate, carry an emergency kit and personal identification and leave immediately. If you find that first responders have placed barriers blocking the road, do not attempt to cross them - these barriers are placed to direct the movement of people safely away from dangerous areas.
                                        </p>
                                        <h3 class="safety-instructions-title">Home insurance.</h3>
                                        <p>
                                            - Before you evacuate, unplug electrical appliances from wall outlets and disconnect all services such as electricity, gas and water if you have time to do so and if it is safe to do so.
                                        </p>
                                        <h3 class="safety-instructions-title"> Go to a high place off the ground.</h3>
                                        <p>
                                            - Avoid stagnant, flowing, or rising water, and move toward a high spot of ground. Never attempt to walk, swim, or drive a car through fast moving flood water. If you are inside your car and it starts to fill with water, get on the roof of the car. If you are stuck inside a building, climb to the highest floor, but do not climb to the ceiling unless necessary. Do not go into a confined or blocked area such as an attic or attic, as you may be trapped there by rising flood waters.
                                        </p>
                                        <h3 class="safety-instructions-title">Do not allow children to wade in flood water, whether stagnant or moving. </h3>
                                        <p>
                                            - Water in the basement can endanger your children's health, even if the amount is small. Teenagers who are able to drive should also be warned never to drive during floods.
                                        </p>
                                        <h3 class="safety-instructions-title"> Inform your family and loved ones about your situation.</h3>
                                        <p>
                                            - Once you reach a safe place and have communication channels available, be sure to inform the rest of your family and people close to you that you are okay.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end /.accordion__single -->
                            <!-- heat waves -->
                            <div class="panel accordion__single accordion-bgcolor" id="panel-three">
                                <div class="single_acco_title">
                                    <h4>
                                        <a data-toggle="collapse" href="#collapse3" class="collapsed" aria-expanded="false" data-target="#collapse3" aria-controls="collapse3">
                                            <img src="{{ asset('images/svg//heat waves.svg') }}" alt="" style="max-width:20%;margin-right: 10px; margin-left: 15px;">
                                            <span>Heat waves </span>
                                            <i class="lnr lnr-chevron-down indicator"></i>
                                        </a>
                                    </h4>
                                </div>

                                <div id="collapse3" class="panel-collapse collapse" aria-labelledby="panel-three" data-parent="#accordion">
                                    <div class="panel-body">
                                        <h3 class="safety-instructions-title">Ways to protect against a heat wave:</h3>
                                        <p>
                                            - Advance planning: It is necessary to know the temperature that is expected to be recorded during the day, week, or month, in order to organize times for outdoor activities.
                                            <br>
                                            - Avoid going out during times when the temperature is highest during the day.
                                            <br>
                                            - If you need to leave the house, you should wear light, loose, well-ventilated clothing, in addition to wearing a hat.
                                            <br>
                                            - Drink water before feeling thirsty and take rest when possible.
                                            <br>
                                            - It is necessary to stay in the shade when outside.
                                            <br>
                                            - Keep an emergency kit at home, a thermometer, and small salt packets to stay hydrated.
                                            <br>
                                            - Know how to get help and important information, such as going to the nearest health care center.
                                            <br>
                                            - Draw curtains and close windows during the hottest times of the day, open windows when temperatures inside the house are hotter than outside, and turn on fans and air conditioners if possible.
                                            <br>
                                            - Helping infants, pregnant women, and other most vulnerable groups to sleep in cool places such as ground floors. Using cotton covers is a good option to maintain freshness.
                                            <br>
                                            - Check on neighbors and the most vulnerable groups of community members during heat waves.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end /.accordion__single -->
                            <!-- fires -->
                            <div class="panel accordion__single accordion-bgcolor" id="panel-four">
                                <div class="single_acco_title">
                                    <h4>
                                        <a data-toggle="collapse" href="#collapse4" class="collapsed" aria-expanded="false" data-target="#collapse4" aria-controls="collapse4">
                                            <img src="{{ asset('images/svg//fires.svg') }}" alt="" style="max-width:15%;margin-right: 10px;">
                                            <span>Fires</span>
                                            <i class="lnr lnr-chevron-down indicator"></i>
                                        </a>
                                    </h4>
                                </div>

                                <div id="collapse4" class="panel-collapse collapse" aria-labelledby="panel-four" data-parent="#accordion">
                                    <div class="panel-body">
                                        <h3 class="safety-instructions-title">How to deal with fires:
                                        </h3>
                                        <h3 class="safety-instructions-title">You should follow these steps as soon as you realize that a fire has occurred:</h3>
                                        <p>
                                            - Pull the nearest fire alarm, and ask civil defense to call 911.
                                            <br>
                                            - Ask everyone to stay calm and reassure them that things will go well.
                                            <br>
                                            - Begin the process of evacuating the building. Direct everyone around you to exit the building through emergency exits and be sure to prevent them from using elevators to evacuate the building.
                                            <br>
                                            - Touch doors before opening them to check that there is no fire hazard on the other side of the door when you leave the building.
                                            <br>
                                            - Stay low to the ground if there is smoke in the air in the room you are in. Make sure to keep your head down to reduce your exposure to inhalation. Try to stay close to the wall and crawl to the nearest exit.
                                            <br>
                                            - Tell firefighters immediately upon arrival whether there is anyone inside the building.
                                            <br>
                                            - Follow these instructions if you cannot exit the building:
                                            <br>
                                            * Get everyone into a room with a window, and try to place pillows, bedding, or clothing around the bottom of the door to keep smoke out.
                                            <br>
                                            * Open the window to ventilate the area and maintain the amount of oxygen in the room, and move the window curtains frequently so that firefighters know where you are.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end /.accordion__single -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end safety instructions -->
@endsection
