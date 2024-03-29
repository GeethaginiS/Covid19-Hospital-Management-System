<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Material Dash</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../../../assets/css/demo/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
  <style>
    html, body {
    min-height: 100%;
    }
    body, div, form, input, select, textarea, label, p { 
    padding: 0;
    margin: 0;
    outline: none;
    font-family: Roboto, Arial, sans-serif;
    font-size: 14px;
    color: #666;
    line-height: 22px;
    }
    h1 {
    position: absolute;
    margin: 0;
    font-size: 38px;
    color: #fff;
    z-index: 2;
    line-height: 83px;
    }
    textarea {
    width: calc(100% - 12px);
    padding: 5px;
    }
    .testbox {
    display: flex;
    justify-content: center;
    align-items: center;
    height: inherit;
    padding: 20px;
    }
    form {
    width: 100%;
    padding: 20px;
    border-radius: 6px;
    background: #fff;
    box-shadow: 0 0 8px  #669999; 
    }
    .banner {
    position: relative;
    height: 300px;
    background-image: url("/uploads/media/default/0001/02/174b2e72df50743dfaa0a3bf9d2e59d8b42c91e1.jpeg");  
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    }
    .banner::after {
    content: "";
    background-color: rgba(0, 0, 0, 0.2); 
    position: absolute;
    width: 100%;
    height: 100%;
    }
    input, select, textarea {
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    }
    input {
    width: calc(100% - 10px);
    padding: 5px;
    }
    input[type="date"] {
    padding: 4px 5px;
    }
    textarea {
    width: calc(100% - 12px);
    padding: 5px;
    }
    .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
    color:  #669999;
    }
    .item input:hover, .item select:hover, .item textarea:hover {
    border: 1px solid transparent;
    box-shadow: 0 0 3px 0  #669999;
    color: #669999;
    }
    .item {
    position: relative;
    margin: 10px 0;
    }
    .item span {
    color: red;
    }
    input[type="date"]::-webkit-inner-spin-button {
    display: none;
    }
    .item i, input[type="date"]::-webkit-calendar-picker-indicator {
    position: absolute;
    font-size: 20px;
    color:  #a3c2c2;
    }
    .item i {
    right: 1%;
    top: 30px;
    z-index: 1;
    }
    [type="date"]::-webkit-calendar-picker-indicator {
    right: 1%;
    z-index: 2;
    opacity: 0;
    cursor: pointer;
    }
    input[type=radio], input[type=checkbox]  {
    display: none;
    }
    label.radio {
    position: relative;
    display: inline-block;
    margin: 5px 20px 15px 0;
    cursor: pointer;
    }
    .question span {
    margin-left: 30px;
    }
    .question-answer label {
    display: block;
    }
    label.radio:before {
    content: "";
    position: absolute;
    left: 0;
    width: 17px;
    height: 17px;
    border-radius: 50%;
    border: 2px solid #ccc;
    }
    input[type=radio]:checked + label:before, label.radio:hover:before {
    border: 2px solid  #669999;
    }
    label.radio:after {
    content: "";
    position: absolute;
    top: 6px;
    left: 5px;
    width: 8px;
    height: 4px;
    border: 3px solid  #669999;
    border-top: none;
    border-right: none;
    transform: rotate(-45deg);
    opacity: 0;
    }
    input[type=radio]:checked + label:after {
    opacity: 1;
    }
    .flax {
    display:flex;
    justify-content:space-around;
    }
    .btn-block {
    margin-top: 10px;
    text-align: center;
    }
    button {
    width: 150px;
    padding: 10px;
    border: none;
    border-radius: 5px; 
    background:  #669999;
    font-size: 16px;
    color: #fff;
    cursor: pointer;
    }
    button:hover {
    background:  #a3c2c2;
    }
    @media (min-width: 568px) {
    .name-item, .city-item {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    }
    .name-item input, .name-item div {
    width: calc(50% - 20px);
    }
    .name-item div input {
    width:97%;}
    .name-item div label {
    display:block;
    padding-bottom:5px;
    }
    }
  </style>
</head>
<body>
<script src="../assets/js/preloader.js"></script>
  <div class="body-wrapper">
    <!-- partial:../../partials/_sidebar.html -->
    <aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
      <div class="mdc-drawer__header">
        <a href="{{url('')}}" class="brand-logo">
          <img src="../assets/images/icon-logo.png" alt="logo">
        </a>
      </div>
      <div class="mdc-drawer__content">
        <div class="user-info">
          <p class="name" style="font-size: 22px">Life Care</p>
          <p class="email">info@Lifecare.com</p>
        </div>
        <div class="mdc-list-group">
          <nav class="mdc-list mdc-drawer-menu">
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="{{url('index1')}}">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
                Dashboard
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="myappointment">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">track_changes</i>
                My Appointments
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="sample-page-submenu">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">pages</i>
                Checking_Availability
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="sample-page-submenu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="{{url('icubedsavail')}}">
                     ICU Beds
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="{{url('ambulanceavail')}}">
                     Ambulance Services
                    </a>
                  </div>
                
                 </nav>
              </div>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-sub-menu">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
                Booking_Details
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="ui-sub-menu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="{{url('icubedsP')}}">
                      ICU Beds
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="{{url('ambulanceP')}}">
                      Ambulance Services
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="{{url('pcrtestP')}}">
                      PCR Test
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="{{url('pcrtestavailP')}}">
                      PCR Test Details
                    </a>
                  </div>
                </nav>
              </div>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="{{ url('logout') }}">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">grid_on</i>
                Logout
              </a>
            </div> 
          </nav>
        </div>
       
      </div>
    </aside>
    <!-- partial -->

    <div class="main-wrapper mdc-drawer-app-content">
      <!-- partial:partials/_navbar.html -->
      <header class="mdc-top-app-bar">
        <div class="mdc-top-app-bar__row">
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
            <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>
            <span class="mdc-top-app-bar__title">Greetings Geethagini!</span>
            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon search-text-field d-none d-md-flex">
              <input class="mdc-text-field__input" id="text-field-hero-input">
              <div class="mdc-notched-outline">
                <div class="mdc-notched-outline__leading"></div>
                <div class="mdc-notched-outline__notch">
                </div>
                <div class="mdc-notched-outline__trailing"></div>
              </div>
            </div>
          </div>
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
            <div class="menu-button-container menu-profile d-none d-md-block">
              <button class="mdc-button mdc-menu-button">
                <span class="d-flex align-items-center">
                  <span class="figure">
                    <img src="../assets/images/faces/face2.jpg" alt="user" class="user">
                  </span>
                  <span class="user-name">Geethagini</span>
                </span>
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    </div>
                    <div class="item-thumbnail item-thumbnail-icon-only">
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    </div>
                </ul>
              </div>
            </div>
            <div class="divider d-none d-md-block"></div>
            <div class="menu-button-container d-none d-md-block">
              <button class="mdc-button mdc-menu-button">
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    </div>
                  </li>
                    <div class="item-thumbnail item-thumbnail-icon-only">
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="menu-button-container">
              <button class="mdc-button mdc-menu-button">
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                    
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    </div>
                  </li>
                    
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    </div>
                  </li>
                    <div class="item-thumbnail item-thumbnail-icon">
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    </div>
                  </li> 
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon">
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    </div>
                  </li> 
                </ul>
              </div>
            </div>
            <div class="menu-button-container">
             
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                  
                  
                                 
                </ul>
              </div>
            </div>
            <div class="menu-button-container d-none d-md-block">
              <button class="mdc-button mdc-menu-button">
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    </div>
                  </li>
                    <div class="item-thumbnail item-thumbnail-icon-only">
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- partial -->
      

    <div class="testbox">
        <div class="banner">
        </div>
        <br/>
        <fieldset>
         @foreach ($pcr as $pcr1 )
         
          @endforeach
        </fieldset>

        <br/>
        <form action="{{ url('/pcrtestavailP') }}" method="post" onsubmit="document.getElementById('submit').disabled=true; processFormData();">
          {{ csrf_field() }}

          <fieldset>
            <legend>Appointment Information</legend>
            <div class="item">
              <label for="instructions">Hospital ID: </label>
              <textarea id="hospital_id" name="hospital_id" rows="2">{{ $pcr1->hospital_id }}</textarea>
            </div>
          <div class="item">
            <label for="instructions">Patient ID: </label>
            <textarea id="patient_id" name="patient_id" rows="2">{{ $pcr1->id }}</textarea>
          </div>
        
          <div class="item">
            <label for="instructions">Approved Date: </label>
            <textarea id="date" name="date" rows="2">{{ $pcr1->date }}</textarea>
          </div>

          <div class="item">
            <label for="instructions">Time: </label>
            <textarea id="time" name="time" rows="2">{{ $pcr1->time }}</textarea>
          </div>

          <div class="item">
            <label for="instructions">Approved Status: </label>
            <select name="status_pat">
          
                <option selected value="" disabled selected></option>
                <option value="accept" >Accept</option>
                <option value="reject" >Reject</option>


            </select>          
          </div>

          </fieldset>
          <div class="btn-block">
          <button type="submit" href="{{ '/index1' }}"id="btSubmit" disabled>Conform</button>
          </div>
        </form>
    </div>



    <script>
      function manage(txt) {
            var bt = document.getElementById('btSubmit');
            if (txt.value != '') {
                bt.disabled = false;
            }
            else {
                bt.disabled = true;
            }
        }    
    
    
    // 	Using ES6 feature.
    // 	let manage = (txt) => { 
    //     	let bt = document.getElementById('btSubmit');
    //         if (txt.value != '') {
    //             bt.disabled = false;
    //         }
    //         else {
    //             bt.disabled = true;
    //         }
    //     }
    </script>










              <!-- Ripple Enabled Buttons Ends -->
            </div>
          </div>
        </main>
        <!-- partial:../../partials/_footer.html -->
        <footer>
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex justify-content-end">
              </div>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
    </div>
  </div>
  <!-- plugins:js -->
  <script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../../assets/js/material.js"></script>

  <script src="../../../assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>
</html>