@extends('layouts.base')


@section('content')


<div class="flex items-center pb-3">
  <div class="flex border-2 rounded">
      <input type="text" class="px-4 py-2 w-80" placeholder="Search...">
      <button class="flex items-center justify-center px-4 border-l">
          <svg class="w-6 h-6 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24">
              <path
                  d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
          </svg>
      </button>
      
  </div>
  
         
</div>
<div class="card lg:card-side card-bordered">
  <figure>
    <img src="{{ asset('media/products/Air.png') }}" class="h-48 w-96 ">
  </figure> 
  <div class="card-body">
    <h2 class="card-title">Powered Air Purifying Respirator, OTOS AIR WING III- ₱36,000
      <div class="badge mx-2">NEW</div>
    </h2> 
    <p>A respirator is a device designed to protect the wearer from inhaling hazardous atmospheres, including fumes, vapours, gases and particulate matter such as dusts and airborne microorganisms</p> 

    <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Content List:</p> 
          <br>
          <ul class="list-disc">
            <li>Hood with headgear system</li>
            <li>Breathing tube (connecting tube to blower)</li>
            <li>Flowmeter</li>
            <li>Air flow indicator</li>
            <li>PAPR BLOWER, Blower assembly with filtration system, and low battery and low air flow alarms</li>
            <li>Foam prefilter, HEPA filter , filter cover</li>
            <li>Belt Assembly</li>
            <li>Shoulder Strap</li>
            <li>Snap</li>
            <li>Link</li>
            <li>Battery Charger</li>
            <li>Battery Terminal</li>
            <li>120 volt AC Battery Charger</li>
            <li>Shoulder Strap Cover</li>
            <li>Long Plastic Cover</li>
            <li>short plastic cover</li>
            <li>Hose Cover Plastic.</li>
            
          </ul>
          <div class="modal-action">
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>

    
  </div>
</div>
<br>
<div class="card lg:card-side card-bordered">
  <figure>
    <img src="{{ asset('media/products/facemask.jpg') }}" class="h-48 w-96 ">
  </figure> 
  <div class="card-body">
    <h2 class="card-title">Face Mask N95-₱60.00 – ₱1,100.00
      <div class="badge mx-2">NEW</div>
    </h2> 
    <p> is a particulate-filtering facepiece respirator that meets the U.S. National Institute for Occupational Safety and Health (NIOSH) N95 classification of air filtration, meaning that it filters at least 95% of airborne particles. </p> 
    <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<div class="card lg:card-side card-bordered">
  <figure>
    <img src="{{ asset('media/products/faceshield.jpg') }}" class="h-48 w-96 ">
  </figure> 
  <div class="card-body">
    <h2 class="card-title">Face Shield-₱12.00
      <div class="badge mx-2">NEW</div>
    </h2> 
    <p>A face shield, an item of personal protective equipment (PPE), aims to protect the wearer's entire face (or part of it) from hazards such as flying objects and road debris, chemical splashes (in laboratories or in industry), or potentially infectious materials (in medical and laboratory environments).</p> 
    <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<div class="card lg:card-side card-bordered">
  <figure>
    <img src="{{ asset('media/products/gloves.jpg') }}" class="h-48 w-96 ">
  </figure> 
  <div class="card-body">
    <h2 class="card-title">Gloves Nitrile 100’s, RANDOM BRAND- ₱520.00
      <div class="badge mx-2">NEW</div>
    </h2> 
    <p>Medical gloves are disposable gloves used during medical examinations and procedures to help prevent cross-contamination between caregivers and patients.</p> 
    <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<div class="card lg:card-side card-bordered">
  <figure>
    <img src="{{ asset('media/products/syringe.jpg') }}" class="h-48 w-96 ">
  </figure> 
  <div class="card-body">
    <h2 class="card-title">Syringe w/ Needle (Luer Slip), SITICARE 1cc-₱255.00

      <div class="badge mx-2">NEW</div>
    </h2> 
    <p>A syringe is a simple reciprocating pump consisting of a plunger (though in modern syringes, it is actually a piston) that fits tightly within a cylindrical tube called a barrel</p> 
    <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<div class="card lg:card-side card-bordered">
  <figure>
    <img src="{{ asset('media/products/thermalscanner.jpg') }}" class="h-48 w-96 ">
  </figure> 
  <div class="card-body">
    <h2 class="card-title">Infrared Thermal Scanner w/ Alcohol Dispenser, K3-₱4,510.00
      <div class="badge mx-2">NEW</div>
    </h2> 
    <p>An infrared thermometer is a thermometer which infers temperature from a portion of the thermal radiation sometimes called black-body radiation emitted by the object being measured.</p> 
    <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<div class="card lg:card-side card-bordered">
  <figure>
    <img src="{{ asset('media/products/ethyl.jfif') }}" class="h-48 w-96 ">
  </figure> 
  <div class="card-body">
    <h2 class="card-title">Ethyl Alcohol 70%, Gallon-₱355.00
      <div class="badge mx-2">NEW</div>
    </h2> 
    <p>Ethanol is naturally produced by the fermentation of sugars by yeasts or via petrochemical processes such as ethylene hydration. It has medical applications as an antiseptic and disinfectant. It is used as a chemical solvent and in the synthesis of organic compounds. Ethanol is a fuel source.</p> 
    <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<div class="card lg:card-side card-bordered">
  <figure>
    <img src="{{ asset('media/products/bandage.png') }}" class="h-48 w-96 ">
  </figure> 
  <div class="card-body">
    <h2 class="card-title">Elastic Wrap Bandage, NAR-₱150.00 – ₱260.00
      <div class="badge mx-2">NEW</div>
    </h2> 
    <p>Rerum reiciendis beatae tenetur excepturi aut pariatur est eos. Sit sit necessitatibus veritatis sed molestiae voluptates incidunt iure sapiente.</p> 
    <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<div class="card lg:card-side card-bordered">
  <figure>
    <img src="{{ asset('media/products/soda.png') }}" class="h-48 w-96 ">
  </figure> 
  <div class="card-body">
    <h2 class="card-title">Soda Lime (4.5kg), SEDASENZ- ₱2,450
      <div class="badge mx-2">NEW</div>
    </h2> 
    <p>Sedasenz Soda Lime is used to absorb carbon dioxide in a closed breathing environment to prevent carbon dioxide retention which could lead to carbon dioxide poisoning.
      <br>
      <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
    </div>
  </div>
  <br>
  <div class="card lg:card-side card-bordered">
    <figure>
      <img src="{{ asset('media/products/alcoholpads.jpg') }}" class="h-48 w-96 ">
    </figure> 
    <div class="card-body">
      <h2 class="card-title">Alcohol Prep Pads 100’s, SUREGUARD- ₱115
        <div class="badge mx-2">NEW</div>
      </h2> 
      <p>Sterile Alcohol Prep Pads, Alcohol Prep Pads are used as a topical antiseptic, Ideal for use prior to injections, Saturated in 70% Isopropyl Alcohol
      <br>  
      <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
      </div>
    </div>
    <br>
    <div class="card lg:card-side card-bordered">
      <figure>
        <img src="{{ asset('media/products/microtainertube.jfif') }}" class="h-48 w-96 ">
      </figure> 
      <div class="card-body">
        <h2 class="card-title">Microtainer tube 0.5mL Red Top- ₱450 -₱930
          <div class="badge mx-2">NEW</div>
        </h2> 
        <p>Microtainer Blood Collection Tubes facilitate collection of a high-quality capillary blood sample.
        <br>  
        <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
        </div>
      </div>
      <br>
      <div class="card lg:card-side card-bordered">
        <figure>
          <img src="{{ asset('media/products/spinalneedle.jpg') }}" class="h-48 w-96 ">
        </figure> 
        <div class="card-body">
          <h2 class="card-title">Spinal Needle, SPINOCAN B-BRAUN- ₱486 -₱2,430
            <div class="badge mx-2">NEW</div>
          </h2> 
          <p>Spinal Needle provides exceptional control when penetrating the dura, Suitable for Spinal anaesthesia, Aggressive anesthetic distribution upon injection, High flow rate enables faster Cerebro Spinal Fluid (CSF) flashback
            <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
          </div>
        </div>
        <br>
        <div class="card lg:card-side card-bordered">
          <figure>
            <img src="{{ asset('media/products/regulator.jfif') }}" class="h-48 w-96 ">
          </figure> 
          <div class="card-body">
            <h2 class="card-title">Oxygen Regulator w/ Accessories , PROHEALTHCARE- ₱1,000
              <div class="badge mx-2">NEW</div>
            </h2> 
            <p>Oxygen Regulator Compatible with ALL Oxygen Tanks Oxygen Flow Range 1-10L/Min; 1-15L/Min Pressure Reducing Range 2.0 – 3.0kg Relief Valve Pressure Range 3.5kg +/- 0.5kg Oxygen Flow control regulators and conserving devices are pressure reducing devices designed to regulate or lower oxygen pressure from a cylinder to levels that can be safely used by the patient.
            <br>  
            <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
            </div>
          </div>
          <br>
          <div class="card lg:card-side card-bordered">
            <figure>
              <img src="{{ asset('media/products/pulse.jpg') }}" class="h-48 w-96 ">
            </figure> 
            <div class="card-body">
              <h2 class="card-title">Pulse Oximeter Handheld, ROSSMAX SA210- ₱299
                <div class="badge mx-2">NEW</div>
              </h2> 
              <p>Rossmax Handheld Pulse Oximeter is used to measure oxygen saturation in blood (SpO2) and pulse rate, also to issue warnings immediately. It is a non-invasive device intended for spot-check of adults, child, and infants with corresponding probe applied at home, hospital and clinics. The probe contains a dual light source and a photodetector.
               <br>
                <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
              </div>
            </div>
            <br>
            <div class="card lg:card-side card-bordered">
              <figure>
                <img src="{{ asset('media/products/aerosolmask.png') }}" class="h-48 w-96 ">
              </figure> 
              <div class="card-body">
                <h2 class="card-title">Aerosol Mask- ₱75 -₱90
                  <div class="badge mx-2">NEW</div>
                </h2> 
                <p>Drive Aerosol Mask includes elastic strap that helps to find the most comfortable fit.
                  Works only for nebulizer treatments.
                  Aerosol Mask is a transparent mask made of soft plastic materials with an anatomical form.
                  It maintains proper positioning behind the head to provide complete comfort.
                  Focuses the nebulizer treatment to the mouth and nose, making it easier to take a treatment without having to hold the nebulizer between the lips.
                  <br>
                  <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
                </div>
              </div>
              <br>
              <div class="card lg:card-side card-bordered">
                <figure>
                  <img src="{{ asset('media/products/ambubag.png') }}" class="h-48 w-96 ">
                </figure> 
                <div class="card-body">
                  <h2 class="card-title">Ambu Bag Manual Resuscitator Silicone, TOPCARE- ₱1,100- ₱1,300
                    <div class="badge mx-2">NEW</div>
                  </h2> 
                  <p>Manual Resuscitator with Oxygen tubing, reservoir bag and pressure limiting valve.
                    <br>
                    <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
                    <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
                    <div class="modal">
                      <div class="modal-box">
                        <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
                        <div class="modal-action">
                          <label for="my-modal-2" class="btn btn-primary">Accept</label> 
                          <label for="my-modal-2" class="btn">Close</label>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
                <br>
                <div class="card lg:card-side card-bordered">
                  <figure>
                    <img src="{{ asset('media/products/nasalcannula.png') }}" class="h-48 w-96 ">
                  </figure> 
                  <div class="card-body">
                    <h2 class="card-title">Oxygen Nasal Cannula- ₱25- ₱55
                      <div class="badge mx-2">NEW</div>
                    </h2> 
                    <p>The nasal cannula is a device used to deliver supplemental oxygen or increased airflow to a patient or person in need of respiratory help. The other end of the tube is connected to an oxygen supply such as a portable oxygen generator, or a wall connection in a hospital via a flowmeter.
                      <br>
                      <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
                    </div>
                  </div>
                  <br>
                  <div class="card lg:card-side card-bordered">
                    <figure>
                      <img src="{{ asset('media/products/meshnebulizer.jpg') }}" class="h-48 w-96 ">
                    </figure> 
                    <div class="card-body">
                      <h2 class="card-title">Nebulizer Mesh- ₱3,050
                        <div class="badge mx-2">NEW</div>
                      </h2> 
                      <p>NE-105 Mesh Nebulizer converts liquid medicines into fine droplets (aerosol form) and effectively delivers medication to the upper and lower respiratory tracts through a mouthpiece or mask with clinical accuracy.
                      <br>
                        <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
                      </div>
                    </div>
                    <br>
                    <div class="card lg:card-side card-bordered">
                      <figure>
                        <img src="{{ asset('media/products/nebulizerpulmo.png') }}" class="h-48 w-96 ">
                      </figure> 
                      <div class="card-body">
                        <h2 class="card-title">Nebulizer Pulmo Aide Heavy Duty, DEVILBISS 5650- ₱9,715
                          <div class="badge mx-2">NEW</div>
                        </h2> 
                        <p>The DeVilbiss Pulmo-Aide has been providing effective aerosol treatments for more than thirty years. It is the only compressor approved for use with TOBI (tobramycin solution for inhalation). The DeVilbiss Pulmo-Aide is unmatched in quality, value and performance.
                        <br>
                          <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
                        </div>
                      </div>
                      <br>
                      <div class="card lg:card-side card-bordered">
                        <figure>
                          <img src="{{ asset('media/products/Sterile-Water.png') }}" class="h-48 w-96 ">
                        </figure> 
                        <div class="card-body">
                          <h2 class="card-title">Sterile Water for Injection 1L- ₱95
                            <div class="badge mx-2">NEW</div>
                          </h2> 
                          <p>Sterile Water for Injection, USP, is sterile, nonpyrogenic, distilled water in a single dose container for intravenous administration after addition of a suitable solute. It may also be used as a dispensing container for diluent use. 
                            <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
                          </div>
                        </div>
                        <br>
                        <div class="card lg:card-side card-bordered">
                          <figure>
                            <img src="{{ asset('media/products/dextrose.png') }}" class="h-48 w-96 ">
                          </figure> 
                          <div class="card-body">
                            <h2 class="card-title">Dextrose 1 Liter- ₱90
                              <div class="badge mx-2">NEW</div>
                            </h2> 
                            <p>‌Dextrose is a type of sugar that usually comes from corn or wheat. Dextrose is almost identical to glucose, which is the sugar found in the bloodstream. For that reason, it can be quickly used as a source of energy by the human body. Dextrose is often used in foods as an artificial sweetener or a preservative.
                              <br>
                              <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
                  <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
                  <div class="modal">
                    <div class="modal-box">
                      <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
                      <div class="modal-action">
                        <label for="my-modal-2" class="btn btn-primary">Accept</label> 
                        <label for="my-modal-2" class="btn">Close</label>
                    </div>
                  </div>
                </div>
                            </div>
                          </div>
                          <br>
                          <div class="card lg:card-side card-bordered">
                            <figure>
                              <img src="{{ asset('media/products/Minor-Surgery-Set.jpg') }}" class="h-48 w-96 ">
                            </figure> 
                            <div class="card-body">
                              <h2 class="card-title">Minor Surgery Set- ₱13,435
                                <div class="badge mx-2">NEW</div>
                              </h2> 
                              <p>37 Pieces surgery tools
                                <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
                              </div>
                            </div>
                            <br>
                            <div class="card lg:card-side card-bordered">
                            <figure>
                              <img src="{{ asset('media/products/Electro-Cautery.png') }}" class="h-48 w-96 ">
                            </figure> 
                            <div class="card-body">
                              <h2 class="card-title">Electro Cautery Machine- ₱47,250
                                <div class="badge mx-2">NEW</div>
                              </h2> 
                              <p>NEO Frecator is a simple, compact device creating a very high-frequency current by use of a spark-gap. A real up-to-date technique has been applied in the making of NEO Frecator under the most careful direction of authoritative surgeons.
                            <br>  
                            <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
                              </div>
                            </div>



                            <br>
                            <div class="card lg:card-side card-bordered">
                            <figure>
                              <img src="{{ asset('media/products/Blood-Lancet.png') }}" class="h-48 w-96 ">
                            </figure> 
                            <div class="card-body">
                              <h2 class="card-title">Blood Lancet (200’s),- ₱825
                                <div class="badge mx-2">NEW</div>
                              </h2> 
                              <p>Feather Disposable Blood Lancet. These disposable blood lancets are completely sterile and feature a microsharp point which provides quick, clean punctures every time. ces surgery tools
                              <br>  
                              <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
                              </div>
                            </div>
                            <br>
                            <div class="card lg:card-side card-bordered">
                            <figure>
                              <img src="{{ asset('media/products/surgicaltape.jfif') }}" class="h-48 w-96 ">
                            </figure> 
                            <div class="card-body">
                              <h2 class="card-title">Surgical Tape (PE Plastic) 1″, 12’s- ₱250
                                <div class="badge mx-2">NEW</div>
                              </h2> 
                              <p>Medical adhesive tape, or surgical tape, is used to attach bandages, gauze, and other dressings to skin around wounds.
                                <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
                                <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
                                <div class="modal">
                                  <div class="modal-box">
                                    <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
                                    <div class="modal-action">
                                      <label for="my-modal-2" class="btn btn-primary">Accept</label> 
                                      <label for="my-modal-2" class="btn">Close</label>
                                  </div>
                                </div>
                              </div>
                              </div>
                            </div>
                            <br>
                            <div class="card lg:card-side card-bordered">
                            <figure>
                              <img src="{{ asset('media/products/Specimen-Bottle.png') }}" class="h-48 w-96 ">
                            </figure> 
                            <div class="card-body">
                              <h2 class="card-title">Specimen bottle sterile (Stool) 60ml- ₱30- ₱90
                                <div class="badge mx-2">NEW</div>
                              </h2> 
                              <p>Stool Specimen Containers are ideal for the collection and transport of stool samples. The Specimen Cup features a screw on lid with integrated collection spoon.
                              <br>
                              <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
                              </div>
                            </div>
                            <br>
                            <div class="card lg:card-side card-bordered">
                            <figure>
                              <img src="{{ asset('media/products/Feeding-Tube.png') }}" class="h-48 w-96 ">
                            </figure> 
                            <div class="card-body">
                              <h2 class="card-title">NGT Feeding Tube sterile- ₱80– ₱100
                                <div class="badge mx-2">NEW</div>
                              </h2> 
                              <p>A nasogastric tube (NG tube) is a special tube that carries food and medicine to the stomach through the nose. It can be used for all feedings or for giving a person extra calories.
                              <br>  
                              <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
                              </div>
                            </div>
                            <br>
                            <div class="card lg:card-side card-bordered">
                            <figure>
                              <img src="{{ asset('media/products/BT-SET.jpg') }}" class="h-48 w-96 ">
                            </figure> 
                            <div class="card-body">
                              <h2 class="card-title">Blood Transfusion Set / BT Set- ₱40– ₱86
                                <div class="badge mx-2">NEW</div>
                              </h2> 
                              <p>A blood transfusion set prevents the administration of cellular debris by a 200-micron filter and provides complete safety to the patient during a blood transfusion.
                                <br>
                                <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
                              </div>
                            </div>
                            <br>
                            <div class="card lg:card-side card-bordered">
                            <figure>
                              <img src="{{ asset('media/products/Blade-Surgical.png') }}" class="h-48 w-96 ">
                            </figure> 
                            <div class="card-body">
                              <h2 class="card-title">Blade Surgical Carbon Steel (100’s)- ₱280– ₱338
                                <div class="badge mx-2">NEW</div>
                              </h2> 
                              <p>It is used for making large incisions through skin and subcutaneous tissues. 
                              <br>  
                              <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
                              </div>
                            </div>
                            <br>
                            <div class="card lg:card-side card-bordered">
                            <figure>
                              <img src="{{ asset('media/products/BP-Aneroid.png') }}" class="h-48 w-96 ">
                            </figure> 
                            <div class="card-body">
                              <h2 class="card-title">BP Aneroid Sphygmo Wall/Desktype- ₱1,225
                                <div class="badge mx-2">NEW</div>
                              </h2> 
                              <p>THE ANEROID sphygmomanometer has been used for the indirect measurement of blood pressure since the studies of Hill and Bernard in 18971 and has been widely used in clinical practice because of its convenience and portability.
                                <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
                              </div>
                            </div>
                            <br>
                            <div class="card lg:card-side card-bordered">
                            <figure>
                              <img src="{{ asset('media/products/Microset Primeline.jpg') }}" class="h-48 w-96 ">
                            </figure> 
                            <div class="card-body">
                              <h2 class="card-title">Microset Primeline, Intrafix B-BRAUN- ₱98– ₱9,600
                                <div class="badge mx-2">NEW</div>
                              </h2> 
                              <p>For administering all kinds of infusions. Universal IV administration sets with air vent for gravity infusions and pressure infusions with non-dedicated infusion pumps (pressure resistant up to 2 bars)
                               <br> <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
                              </div>
                            </div>
                            <br>
                            <div class="card lg:card-side card-bordered">
                            <figure>
                              <img src="{{ asset('media/products/Blood-Soluset.png') }}" class="h-48 w-96 ">
                            </figure> 
                            <div class="card-body">
                              <h2 class="card-title">Blood Soluset- ₱195
                                <div class="badge mx-2">NEW</div>
                              </h2> 
                              <p>Infusion Set with burette is used to deliver a fixed volume of IV fluid at a fixed rate, usually with added medication. A primary IV solution set is attached to the spike adaptor at the distal end of the in-line burette set.
                              <br>  <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
                              </div>
                            </div>
                            <br>
                            <div class="card lg:card-side card-bordered">
                              <figure>
                                <img src="{{ asset('media/products/stethoscope.jfif') }}" class="h-48 w-96 ">
                              </figure> 
                              <div class="card-body">
                                <h2 class="card-title">Stethoscope- ₱7,655
                                  <div class="badge mx-2">NEW</div>
                                </h2> 
                                <p>stethoscope, medical instrument used in listening to sounds produced within the body, chiefly in the heart or lungs.37 Pieces surgery tools
                                 <br> <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
                                </div>
                              </div>
                              <br>
                              <div class="card lg:card-side card-bordered">
                                <figure>
                                  <img src="{{ asset('media/products/Anesthesia.png') }}" class="h-48 w-96 ">
                                </figure> 
                                <div class="card-body">
                                  <h2 class="card-title">Anesthesia Breathing Circuit with Bag (2-Limbs)- ₱880– ₱1,250
                                    <div class="badge mx-2">NEW</div>
                                  </h2> 
                                  <p>A dual limb circuit (commonly found in ICU and transport ventilator) has 2 hoses connected by a “Y” (or “wye”) adapter where the expiratory limb directs gas flows to an active expiratory valve that controls expiratory resistance.
                                   <br> <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
                                  </div>
                                </div>
                                <br>
                                <div class="card lg:card-side card-bordered">
                                  <figure>
                                    <img src="{{ asset('media/products/EpiduralAnesthesia.jpg') }}" class="h-48 w-96 ">
                                  </figure> 
                                  <div class="card-body">
                                    <h2 class="card-title">Epidural Anesthesia Set- ₱1,200
                                      <div class="badge mx-2">NEW</div>
                                    </h2> 
                                    <p>Epidural Anesthesia Kit mainly consist of Epidural Catheter , Epidural / Tuohy Needle , Threating Assist guide and LOR Syringe. 
                                     <br> <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="card lg:card-side card-bordered">
                                    <figure>
                                      <img src="{{ asset('media/products/TransferBag.jpg') }}" class="h-48 w-96 ">
                                    </figure> 
                                    <div class="card-body">
                                      <h2 class="card-title">Transfer Bag 300ml- ₱200
                                        <div class="badge mx-2">NEW</div>
                                      </h2> 
                                      <p>Transfer Bags are used for collection, preservation and transfusion of whole human blood and its components.
                                        <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
                                        <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
                                        <div class="modal">
                                          <div class="modal-box">
                                            <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
                                            <div class="modal-action">
                                              <label for="my-modal-2" class="btn btn-primary">Accept</label> 
                                              <label for="my-modal-2" class="btn">Close</label>
                                          </div>
                                        </div>
                                      </div>
                                      </div>
                                    </div>
                                    <br>
                                    <div class="card lg:card-side card-bordered">
                                      <figure>
                                        <img src="{{ asset('media/products/endotube.jfif') }}" class="h-48 w-96 ">
                                      </figure> 
                                      <div class="card-body">
                                        <h2 class="card-title">Endotracheal Tube- ₱30– ₱85
                                          <div class="badge mx-2">NEW</div>
                                        </h2> 
                                        <p>An endotracheal tube is a flexible plastic tube that is placed through the mouth into the trachea (windpipe) to help a patient breathe. 
                                         <br> <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
                                        </div>
                                      </div>
                                      <br>
                                      <div class="card lg:card-side card-bordered">
                                        <figure>
                                          <img src="{{ asset('media/products/Suction-Reservoir.png') }}" class="h-48 w-96 ">
                                        </figure> 
                                        <div class="card-body">
                                          <h2 class="card-title">Suction Reservoir Kit / Wound Drainage 100mL- ₱1,325
                                            <div class="badge mx-2">NEW</div>
                                          </h2> 
                                          <p>The primary purpose of a suction drain is: To prevent the collection of fluid (blood and infected fluids). To prevent the accumulation of air (dead space). To characterize collected fluid (like identification of anastomotic leakage).
                                            <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
      <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
      <div class="modal">
        <div class="modal-box">
          <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
          <div class="modal-action">
            <label for="my-modal-2" class="btn btn-primary">Accept</label> 
            <label for="my-modal-2" class="btn">Close</label>
        </div>
      </div>
    </div>
                                          </div>
                                        </div>
                                        <br>
                                        <div class="card lg:card-side card-bordered">
                                          <figure>
                                            <img src="{{ asset('media/products/Suction-Catheter.png') }}" class="h-48 w-96 ">
                                          </figure> 
                                          <div class="card-body">
                                            <h2 class="card-title">Suction Catheter Sterile (5 pieces)- ₱65
                                              <div class="badge mx-2">NEW</div>
                                            </h2> 
                                            <p>A suction catheter is a medical device used to extract bodily secretions, such as mucus or saliva from the upper airway.
                                              <label for="my-modal-2" class="btn btn-secondary w-32 content-center modal-button mt-5">MORE INFO</label> 
                                              <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
                                              <div class="modal">
                                                <div class="modal-box">
                                                  <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
                                                  <div class="modal-action">
                                                    <label for="my-modal-2" class="btn btn-primary">Accept</label> 
                                                    <label for="my-modal-2" class="btn">Close</label>
                                                </div>
                                              </div>
                                            </div>
                                            </div>
                                          </div>
                                          <br>
@endsection