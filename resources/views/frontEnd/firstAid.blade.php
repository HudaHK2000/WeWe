@extends('layout.masterFrontEnd')
@section('title')
First Aid
@endsection
@section('class_body')
class="preload home1 mutlti-vendor" style="background-color: #c7ebeb;"
@endsection
@section('content')
<div class="first-aid-title">Fisrt Aid</div>
    <div class="container">
        <div class="row" style="margin-top: 40px; margin-bottom: 80px; padding-top: 40px;" id="Fainting">
            <div class="col-sm-12 col-md-4" style="margin-bottom: 30px;">
                <img src="{{ asset('images/fainting.jpg')}}" class="img-fluid first-aid-img" alt="...">
            </div>
            <div class="col-sm-12 col-md-8">
                <h3 style="color: #253e6f; font-weight: bold; margin: 5px; margin-top: 10px;">Fainting</h3>
                <p style="text-decoration: underline;">When someone faints, the following steps can be followed as first aid:</p>
                <p> <i class="fa fa-check"></i> Make sure the place is safe: Make sure that the place is safe and there is no danger to the unconscious person.</p>
                <p><i class="fa fa-check"></i> Place the person in a lying position: Place the person on his back by raising his feet slightly to improve blood flow to the brain.</p>
                <p><i class="fa fa-check"></i> Loosen tight clothing: If any clothing is tight, open it to facilitate breathing.</p>
                <p><i class="fa fa-check"></i> Provide ventilation: Make sure there is good airflow through the nostril and mouth.</p>
                <p><i class="fa fa-check"></i> Moisture application: A cloth dampened with water can be placed on the person's forehead to help restore consciousness.</p>
                <p><i class="fa fa-check"></i> Monitor the person: Stay next to the unconscious person and monitor him until he regains consciousness.</p>
            </div>
        </div>

        <div class="row" style="margin-top: 40px; margin-bottom: 80px; border: #253e6f dashed 2px; padding-top: 40px;" id="Severe high temperature">
            <div class="col-sm-12 col-md-4" style="margin-bottom: 30px;">
                <img src="{{ asset('images/Severe-high-temperature.jpg')}}" class="img-fluid first-aid-img" alt="...">
            </div>
            <div class="col-sm-12 col-md-8">
                <h3 style="color: #253e6f; font-weight: bold; margin: 5px; margin-top: 10px;">Severe high temperature</h3>
                <p style="text-decoration: underline;"> When someone suffers from a high temperature, the following steps can be followed as first aid:</p>
                <p> <i class="fa fa-check"></i> Move the person to a cool place: Move the person to a cool, shaded place if outdoors, or turn on an air conditioner or fan indoors. </p>
                <p><i class="fa fa-check"></i> Remove excess clothing: Remove excess clothing from the person and leave him in light, comfortable clothing. </p>
                <p><i class="fa fa-check"></i> Cooling the body: Use cold water or a wet towel to cool the person's body, especially sensitive areas such as the neck, armpits, and thighs.</p>
                <p><i class="fa fa-check"></i> Fluid intake: Provide the person with sufficient amounts of water to maintain hydration and avoid dehydration.</p>
                <p><i class="fa fa-check"></i> Monitor the condition: Monitor the person’s temperature using a thermometer and follow his condition to ensure his improvement. </p>
                <p><i class="fa fa-check"></i> Call for medical help: If the person’s temperature continues to rise or serious signs appear such as severe headache, nausea, dizziness, or blurred consciousness, ambulance services must be called immediately and professional medical assistance should be provided.</p>
            </div>
        </div>

        <div class="row" style="margin-top: 40px; margin-bottom: 80px; padding-top: 40px;" id="Choking">
            <div class="col-sm-12 col-md-4" style="margin-bottom: 30px;">
                <img src="{{ asset('images/Choking.jpg')}}" class="img-fluid first-aid-img" alt="...">
            </div>
            <div class="col-sm-12 col-md-8">
                <h3 style="color: #253e6f; font-weight: bold; margin: 5px; margin-top: 10px;">Choking</h3>
                <p style="text-decoration: underline;">If the person is able to breathe forcefully, he should continue coughing.</p>
                <p style="text-decoration: underline;">If the person is suffocating and unable to speak, cry, or laugh forcefully, the following must be done:</p>
                <p> <i class="fa fa-check"></i> Stand behind the injured person.</p>
                <p><i class="fa fa-check"></i> Place one foot slightly in front of the other for balance.</p>
                <p><i class="fa fa-check"></i> Wrap the arms around the injured person's waist.</p>
                <p><i class="fa fa-check"></i> Lean the affected person forward slightly.</p>
                <p><i class="fa fa-check"></i> Make a fist with the other hand and then place it above the navel area.</p>
                <p><i class="fa fa-check"></i> Hold the fist with the other hand, then apply strong pressure on the abdomen, quickly upward.</p>
                <p><i class="fa fa-check"></i> Perform 6 to 10 abdominal thrusts until the stuck object is removed.</p>
                <p style="text-decoration: underline;"> If the injured person has lost consciousness, perform cardiopulmonary resuscitation with chest compressions and rescue breaths.</p>
            </div>
        </div>

        <div class="row" style="margin-top: 40px; margin-bottom: 80px; border: #253e6f dashed 2px; padding-top: 40px;" id="Bone fracture">
            <div class="col-sm-12 col-md-4" style="margin-bottom: 30px;">
                <img src="{{ asset('images/Bone-fracture.jpg')}}" class="img-fluid first-aid-img" alt="...">
            </div>
            <div class="col-sm-12 col-md-8">
                <h3 style="color: #253e6f; font-weight: bold; margin: 5px; margin-top: 10px;">Bone fracture</h3>
                <p style="text-decoration: underline;">Do not move the person unless necessary to avoid further injury. Take these actions immediately while waiting for medical help:</p>
                <p> <i class="fa fa-check"></i> Stop any bleeding. Apply pressure to the wound with a sterile bandage, clean cloth, or piece of clothing.</p>
                <p><i class="fa fa-check"></i> Do not move the affected area. Do not try to put the bone back in place or put pressure on the stuck bone to put it back in place.</p>
                <p><i class="fa fa-check"></i> If you have received training in how to splint and a specialist is not immediately available, apply a splint to the area above and below the fracture sites. Padding the splint may help reduce discomfort.</p>
                <p><i class="fa fa-check"></i> Apply cold compresses to reduce swelling and help relieve pain. Do not apply ice directly to the skin. Wrap the ice in a towel, cloth, or other material.</p>
                <p><i class="fa fa-check"></i> Treat trauma. If the person feels unwell or is breathing intermittently or rapidly, lie down with their head slightly off the torso and raise their legs if possible</p>
            </div>
        </div>


        <div class="row" style="margin-top: 40px; margin-bottom: 80px; padding-top: 40px;" id="Severe diarrhea">
            <div class="col-sm-12 col-md-4" style="margin-bottom: 30px;">
                <img src="{{ asset('images/Severe-diarrhea.jpg')}}" class="img-fluid first-aid-img" alt="...">
            </div>
            <div class="col-sm-12 col-md-8">
                <h3 style="color: #253e6f; font-weight: bold; margin: 5px; margin-top: 10px;">Severe diarrhea</h3>
                <p style="text-decoration: underline;">Fluid replacement:</p>
                <p> <i class="fa fa-check"></i> Drink plenty of fluids: It's important to drink plenty of clear fluids, such as water or oral rehydration solution (ORS), to replace lost fluids and minerals.</p>
                <p><i class="fa fa-check"></i> Avoid drinks that irritate the intestines: Avoid drinks that contain caffeine, alcohol, or added sugars, as they may make diarrhea worse.</p>
                <p><i class="fa fa-check"></i> Eat foods rich in potassium: such as bananas, potatoes, and spinach, to replace lost potassium.</p>
                <p style="text-decoration: underline;">Comfort:</p>
                <p><i class="fa fa-check"></i> Bed rest: Bed rest is important to conserve energy and avoid stress.</p>
                <p><i class="fa fa-check"></i> Avoid physical activity: Avoid strenuous physical activity until symptoms improve.</p>
                <p style="text-decoration: underline;">Medicines:</p>
                <p><i class="fa fa-check"></i> Diarrhea medications: Over-the-counter diarrhea medications, such as loperamide, can be used to reduce the frequency of bowel movements.</p>
                <p><i class="fa fa-check"></i> Antiemetic medications: Antiemetic medications, such as ondansetron, may be used to control nausea and vomiting.</p>
                <p><i class="fa fa-check"></i> Antibiotics: If a bacterial infection is present, the doctor may prescribe antibiotics to treat the infection.</p>
            </div>
        </div>

        <div class="row" style="margin-top: 40px; margin-bottom: 80px;border: #253e6f dashed 2px; padding-top: 40px;" id="Severe constipation">
            <div class="col-sm-12 col-md-4" style="margin-bottom: 30px;">
                <img src="{{ asset('images/Severe-constipation.jpg')}}" class="img-fluid first-aid-img" alt="...">
            </div>
            <div class="col-sm-12 col-md-8">
                <h3 style="color: #253e6f; font-weight: bold; margin: 5px; margin-top: 10px;">Severe constipation</h3>
                <p style="text-decoration: underline;">Change the diet:</p>
                <p> <i class="fa fa-check"></i> Eating dietary fiber: It is important to eat foods rich in dietary fiber, such as fruits, vegetables, and whole grains, to increase bowel movement.</p>
                <p><i class="fa fa-check"></i> Drink plenty of fluids: It is important to drink plenty of fluids, such as water or fruit juice, to keep the body hydrated and soften stool.</p>
                <p><i class="fa fa-check"></i> Avoid foods that cause constipation: Avoid foods that cause constipation, such as high-fat foods, processed foods, coffee, and alcohol.</p>
                <p style="text-decoration: underline;">Physical activity:</p>
                <p><i class="fa fa-check"></i> Exercising regularly: It is important to exercise regularly to stimulate bowel movements.</p>
                <p><i class="fa fa-check"></i> Move regularly: Avoid sitting for long periods of time, and try to move regularly during the day.</p>
                <p style="text-decoration: underline;">Medicines:</p>
                <p><i class="fa fa-check"></i> Stool softeners: Over-the-counter stool softeners, such as bisacodyl or olive oil, can be used to soften the stool and make defecation easier.</p>
                <p><i class="fa fa-check"></i> Enemas: Enemas may be used in severe cases to soften stool and stimulate bowel movements.</p> <p><i class="fa fa-check"></i> Move regularly: Avoid sitting for long periods of time, and try to move regularly during the day.</p>
                <p style="text-decoration: underline;">Medical intervention:</p>
                <p><i class="fa fa-check"></i> If symptoms do not improve with home treatments, you should see a doctor.</p>
            </div>
        </div>
    </div>
@endsection
