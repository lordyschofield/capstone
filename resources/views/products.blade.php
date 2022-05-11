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

<div class="flex display ">

<div class="card card-compact w-96 bg-base-100 shadow-xl mr-5 ">
  <figure><img src="https://philmedicalsupplies.com/wp-content/uploads/2022/01/Surgical-Tape-1x10yards-PARTNERS-12s-2.png" alt="Shoes" /></figure>
  <div class="card-body">
    <h2 class="card-title">Surgical Tape, Non-woven, 1″x10yards, (12’s)</h2>
    <p>Partners Surgical Tape 1 Inch x 10 yards, Surgical Tape, Non-woven, 1″x10yards, (12’s)</p>
    <div class="card-actions justify-end">
      <a href="https://philmedicalsupplies.com/product/surgical-tape-1x10yards-12s/">
      <button class="btn btn-primary">₱216.00</button>
    </a>
    </div>
  </div>
</div>

<div class="card card-compact w-96 bg-base-100 shadow-xl mr-5">
  <figure><img src="https://philmedicalsupplies.com/wp-content/uploads/2021/12/Syringe-w-Needle-SITICARE-1cc-5.png" alt="Shoes" /></figure>
  <div class="card-body">
    <h2 class="card-title">Syringe w/ Needle (Luer Slip), SITICARE 1cc</h2>
    <p>Syringes and needles are sterile devices used to inject solutions into or withdraw secretions from the body.</p>
    <div class="card-actions justify-end">
      <a href="https://philmedicalsupplies.com/product/syringe-w-needle-siticare-1cc/">
      <button class=" mt-5 btn btn-primary">₱255.00</button>
    </div>
  </div>
</div>

<div class="card card-compact w-96 bg-base-100 shadow-xl mr-5">
  <figure><img src="https://philmedicalsupplies.com/wp-content/uploads/2021/10/Isolation-Gown-Non-Woven-Non-sterile-TOPCARE-1-set-2.png" alt="Shoes" /></figure>
  <div class="card-body">
    <h2 class="card-title mt-5">Isolation Gown Set Disposable</h2>
    Isolation gowns are defined by Association for the Advancement of Medical Instrumentation (AAMI) <div class="card-actions justify-end">
      <a href="https://philmedicalsupplies.com/product/isolation-gown-set/">

      <button class=" mt-5 btn btn-primary">₱260.00</button>
    </div>
  </div>
</div>

</div>

<footer class="p-4 mt-96 footer bg-base-300 text-base-content footer-center">
  <div>
    <p>Copyright © 2022 - All right reserved by Philippine Medical Supplies</p>
  </div>
</footer>
@endsection


