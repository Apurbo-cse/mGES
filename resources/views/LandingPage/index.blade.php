<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('assets/landingPageAsset/css/Style.css') }}" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{ asset('assets/landingPageAsset/css/main.css') }}">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <title>mGes-Landing page</title>
  </head>
  <body>
    <!-- top header start -->
    <nav class="navbar navbar-expand-lg navbar-light topHeading">
      <div class="container p-2">
        <a class="navbar-brand" href="#">
          <img
            src="{{ asset('assets/landingPageAsset/img/MGES-Logo-White.png') }}"
            alt=""
            style="height: 60px"
          />
        </a>

        <div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-light" href="{{ route('login') }}">LOGIN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="{{ route('register') }}">SIGNUP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="./contact.html"
                >CONTACT US</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- top header end -->

    <!-- second header start -->
    <nav class="navbar shadow navbar-expand-lg navbar-light bg-light">
      <div class="container p-2">
        <div class="d-flex justify-content-end">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="text-center navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item mx-3 active">
              <a class="nav-link" aria-current="page" href="./index.html"
                >Home</a
              >
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="./about.html">About</a>
            </li>
            <li class="nav-item mx-2 dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                mGES
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="./aboutMGES.html"
                    >About mGES</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="./medical-centers/Medical.html"
                    >Medical Center</a
                  >
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a
                    class="dropdown-item"
                    href="./Requirtment-Agency/Requirtment-Agency.html"
                    >Recruitment Agencies</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="./Insurance-Provider/Insurance.html"
                    >Insurance providers</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="./contact.html" tabindex="-1"
                >Contact</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- second header end -->

    <!-- banner start -->
    <section id="banner">
      <div class="container-fluid banner-container">
        <div class="text-center">
          <div class="typeing">
            <h1>
              <a
                href=""
                class="typewrite"
                data-period="2000"
                data-type='[ "INTRODUCING !!!" ]'
              >
                <span class="wrap"></span>
              </a>
            </h1>
          </div>

          <img
            src="{{ asset('assets/landingPageAsset/img/MGES-Logo-Orginal-Color.png') }}"
            class="img-fluid"
            height="300px"
            width="300px"
          />
          <div class="banner-content mt-2">
            <h2 class="text-light main-title mb-4">
              Migration Governance Eco system
            </h2>
            <h5 class="text-light main-subtitle">Migration with rights</h5>
            <!-- <h5 class="text-light main-subtitle">and management System</h5> -->
            <div class="my-4">
              <span class="mx-2"
                ><i class="fa-brands fa-instagram banner-icons"></i
              ></span>
              <span class="mx-2"
                ><i class="fa-brands fa-google-plus-g banner-icons"></i
              ></span>
              <span class="mx-2"
                ><i class="fa-brands fa-facebook banner-icons"></i
              ></span>
              <span class="mx-2"
                ><i class="fa-brands fa-twitter banner-icons"></i
              ></span>
            </div>
            <div>
              <button class="banner-btn">What's News</button>
              <button class="banner-btn2 mx-3">More info</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- banner end -->

    <!-- card content start -->
    <section class="py-3">
      <div class="card-items container">
        <div class="row">
          <div class="col-sm-12 col-md- col-lg-3">
            <div class="card shadow card-content mb-2">
              <div class="card-body">
                <div class="imgCard text-center mt-4 mb-5">
                  <img
                    src="{{ asset('assets/landingPageAsset/img/Icon-01.png') }}"
                    class="img-fluid"
                    height="70px"
                    width="70px"
                    alt=""
                  />
                </div>
                <p class="m-0 p-0 text-center">25 YEARS</p>
                <p class="m-0 p-0 text-center mb-3">OF EXPERIENCE</p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card shadow card-content mb-2">
              <div class="card-body">
                <div class="imgCard text-center mt-4 mb-5">
                  <img
                    src="{{ asset('assets/landingPageAsset/img/Icon-02.png')}}"
                    class="img-fluid"
                    height="70px"
                    width="70px"
                    alt=""
                  />
                </div>
                <p class="m-0 p-0 text-center">BEST INDUSTRY</p>
                <p class="m-0 p-0 text-center mb-3">EXPERTS</p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card shadow card-content mb-2">
              <div class="card-body">
                <div class="imgCard text-center mt-4 mb-5">
                  <img
                    src="{{ asset('assets/landingPageAsset/img/Icon-03.png')}}"
                    class="img-fluid"
                    height="70px"
                    width="70px"
                    alt=""
                  />
                </div>
                <p class="m-0 p-0 text-center">FAST & EFFECTIVE</p>
                <p class="m-0 p-0 text-center mb-3">SOLUTIONS</p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card shadow card-content mb-2">
              <div class="card-body">
                <div class="imgCard text-center mt-4 mb-5">
                  <img
                    src="{{ asset('assets/landingPageAsset/img/Icon-04.png') }}"
                    class="img-fluid"
                    height="70px"
                    width="70px"
                    alt=""
                  />
                </div>
                <p class="m-0 p-0 text-center">FLEXIBLE PRICING</p>
                <p class="m-0 p-0 text-center mb-3">SYSTEM</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- card content end -->

    <!-- About Section start -->
 <section>

  <div class="about about-container ">

    <img src="{{ asset('assets/landingPageAsset/img/abouts.png')}}" alt="" class="centered_About">

    <div class="row">
      <div class="about-right py-2 w-50 fw-bold text-center">
        <h2>About MGES!</h2>
      </div>
      <div class="col-md-6 col-sm-12 mt-4">
        <img src="{{ asset('assets/landingPageAsset/img/image-02.png') }}" class="img-fluid about-img" alt="">

      </div>

      <div class="col-md-6 col-sm-12 mt-5">
        <p class="aboutText">
          <br> Our company Migration Governance Eco-System is a 100% Bangladeshi-owned company that is active in the field of information technology with numerous years of experience. Apart from being a supplier of equipment to the government and the private sector, Migration Governance Eco-System also has local expertise for the development of computer software with the latest technology.

        </p>
        <p class="about-text">
          <br> Our strategic business partner, Versatilo Group based in Bangladesh, is an organization with many years of experience in the field of recruitment, training, and supply of Bangladeshi workers to Malaysia.
        </p>
      </div>
    </div>

  </div>

</section>
<!-- About Section end -->

<!-- What we do? start -->
<section>
  <div class="what what-container ">

    <div class="row justify-content-center  align-content-center ">
      <div class="what-left py-2 fw-bold w-50 text-center">
        <h2>What we do?</h2>
      </div>
      <div class="col-md-4 col-sm-12 mt-3">
        <div class="row ">

          <div class="col-md-9 mb-3 text-end ">
            <small class="what-small2">Employer Demand</small><br>
            <small>Verification & Attestation for</small><br>
            <small>Employer’s Demand of foreign Workers</small>
          </div>
          <div class="col-md-1 "><img src="{{asset('assets/landingPageAsset/img/Icon-05.png')}}" alt="" class="Icon-what"></div>

          <div class="col-md-8 mb-3 text-end ">
            <small class="what-small2">Employer Demand</small><br>
            <small>Verification & Attestation for</small><br>
            <small>Employer’s Demand of foreign Workers</small>
          </div>
          <div class="col-md-3"><img src="{{asset('assets/landingPageAsset/img/Icon-05.png')}}" alt="" class="Icon-what"></div>

          <div class="col-md-8 mb-3 text-end ">
            <small class="what-small2">Employer Demand</small><br>
            <small>Verification & Attestation for</small><br>
            <small>Employer’s Demand of foreign Workers</small>
          </div>
          <div class="col-md-3"><img src="{{asset('assets/landingPageAsset/img/Icon-05.png')}}" alt="" class="Icon-what"></div>

          <div class="col-md-9 mb-3 text-end ">
            <small class="what-small2">Employer Demand</small><br>
            <small>Verification & Attestation for</small><br>
            <small>Employer’s Demand of foreign Workers</small>
          </div>
          <div class="col-md-1 "><img src="{{asset('assets/landingPageAsset/img/Icon-05.png')}}" alt="" class="Icon-what"></div>

        </div>

      </div>

      <div class="col-md-4 col-sm-12 What_Circle mt-5  ">
        <div class="WhatParent text-center ">
          <img src="{{ asset('assets/landingPageAsset/img/image 03.png') }} " class="img-fluid what-img btn " alt="">
        </div>
      </div>

      <div class="col-md-4 col-sm-12 mt-3">
        <div class="row ">

          <div class="col-md-2 ms-3 text-end"><img src="{{asset('assets/landingPageAsset/img/Icon-05.png')}}" alt="" class="Icon-what"></div>
          <div class="col-md-9 mb-3 ">
            <small class="what-small2">Employer Demand</small><br>
            <small>Verification & Attestation for</small><br>
            <small>Employer’s Demand of foreign Workers</small>
          </div>

          <div class="col-md-3 ms-3 text-end "><img src="{{asset('assets/landingPageAsset/img/Icon-05.png')}}" alt="" class="Icon-what"></div>
          <div class="col-md-8 mb-3 ">
            <small class="what-small2">Employer Demand</small><br>
            <small>Verification & Attestation for</small><br>
            <small>Employer’s Demand of foreign Workers</small>
          </div>

          <div class="col-md-3 ms-3 text-end "><img src="{{asset('assets/landingPageAsset/img/Icon-05.png')}}" alt="" class="Icon-what"></div>
          <div class="col-md-8 mb-3 ">
            <small class="what-small2">Employer Demand</small><br>
            <small>Verification & Attestation for</small><br>
            <small>Employer’s Demand of foreign Workers</small>
          </div>

          <div class="col-md-2 ms-3 text-end"><img src="{{asset('assets/landingPageAsset/img/Icon-05.png')}}" alt="" class="Icon-what"></div>
          <div class="col-md-9 mb-3 ">
            <small class="what-small2">Employer Demand</small><br>
            <small>Verification & Attestation for</small><br>
            <small>Employer’s Demand of foreign Workers</small>
          </div>

        </div>

      </div>
    </div>

  </div>
</section>
<!-- What we do? end -->

<section>

  <div class="conatiner MEGS-info">

    <div class="card-items container p-5">
      <div class="row">


<!--
        <div class="col-md-3">
          <div class="card shadow Modules flip-card mb-2">
            <div class="card-body flip-card-inner ">
              <div class="text-center mt-4">
                <h1 class="fw-bold infoText">11</h1>
              </div>
              <p class="text-center mb-3 infoText">VDR Sticker
                e-MGES</p>
            </div>
          </div>
        </div>
         -->


        <div class="col-md-3">
          <div class="card shadow Modules ">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <div class="card shadow Modules ">
                    <div class="card-body ">
                      <div class="text-center mt-4">
                        <h1 class="fw-bold infoText">1</h1>
                      </div>
                      <p class="text-center mb-3 infoText">Employer</p>
                    </div>
                  </div>
                </div>
                <div class="flip-card-back">
                  <div class="card shadow  ">
                    <div class="card-body ">
                      <div class="text-center">
                        <h6 class="fw-bold infoText">Employer</h6>
                      </div>
                      <p class="text-center infoText">
                        Employer can do most of the process except ground handling at airport and quarantine</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card shadow Modules ">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <div class="card shadow Modules ">
                    <div class="card-body ">
                      <div class="text-center mt-4">
                        <h1 class="fw-bold infoText">2</h1>
                      </div>
                      <p class="text-center mb-3 infoText">EMP Agency (MY)</p>
                    </div>
                  </div>
                </div>
                <div class="flip-card-back">
                  <div class="card shadow  ">
                    <div class="card-body ">
                      <div class="text-center">
                        <h6 class="fw-bold infoText">EMP Agency (MY)</h6>
                      </div>
                      <p class="text-center infoText">Will act on behalf of their clients (employers) on VDR application and all ground handling.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card shadow Modules ">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <div class="card shadow Modules ">
                    <div class="card-body ">
                      <div class="text-center mt-4">
                        <h1 class="fw-bold infoText">3</h1>
                      </div>
                      <p class="text-center mb-3 infoText">KDN SSC</p>
                    </div>
                  </div>
                </div>
                <div class="flip-card-back">
                  <div class="card shadow  ">
                    <div class="card-body ">
                      <div class="text-center">
                        <h6 class="fw-bold infoText">KDN SSC</h6>
                      </div>
                      <p class="text-center infoText">Employers will only able to access the approval once it is shared by OSC.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card shadow Modules ">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <div class="card shadow Modules ">
                    <div class="card-body ">
                      <div class="text-center mt-4">
                        <h1 class="fw-bold infoText">4</h1>
                      </div>
                      <p class="text-center mb-3 infoText">EMP</p>
                    </div>
                  </div>
                </div>
                <div class="flip-card-back">
                  <div class="card shadow  ">
                    <div class="card-body ">
                      <div class="text-center">
                        <h6 class="fw-bold infoText">EMP</h6>
                      </div>
                      <p class="text-center infoText">Agency (BGD): Bangladesh’s licensed agencies will participate. Better selection and faster recruitment.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
    <div class="card-items container ABXS p-5">
      <div class="row">


<!--
        <div class="col-md-3">
          <div class="card shadow Modules flip-card mb-2">
            <div class="card-body flip-card-inner ">
              <div class="text-center mt-4">
                <h1 class="fw-bold infoText">11</h1>
              </div>
              <p class="text-center mb-3 infoText">VDR Sticker
                e-MGES</p>
            </div>
          </div>
        </div>
         -->


        <div class="col-md-3">
          <div class="card shadow Modules ">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <div class="card shadow Modules ">
                    <div class="card-body ">
                      <div class="text-center mt-4">
                        <h1 class="fw-bold infoText">5</h1>
                      </div>
                      <p class="text-center mb-3 infoText">Attestation</p>
                    </div>
                  </div>
                </div>
                <div class="flip-card-back">
                  <div class="card shadow  ">
                    <div class="card-body ">
                      <div class="text-center">
                        <h6 class="fw-bold infoText">Attestation</h6>
                      </div>
                      <p class="text-center infoText">Bangladeshi High Commission in Kuala Lumpur will determine the procedure and after verification they will generate QR code of the employer.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card shadow Modules ">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <div class="card shadow Modules ">
                    <div class="card-body ">
                      <div class="text-center mt-4">
                        <h1 class="fw-bold infoText">6</h1>
                      </div>
                      <p class="text-center mb-3 infoText">Candidates</p>
                    </div>
                  </div>
                </div>
                <div class="flip-card-back">
                  <div class="card shadow  ">
                    <div class="card-body ">
                      <div class="text-center">
                        <h6 class="fw-bold infoText">Candidates</h6>
                      </div>
                      <p class="text-center infoText">Online interview will assist the employer to select the most reliable candidates.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card shadow Modules ">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <div class="card shadow Modules ">
                    <div class="card-body ">
                      <div class="text-center mt-4">
                        <h1 class="fw-bold infoText">7</h1>
                      </div>
                      <p class="text-center mb-3 infoText">E-Medical</p>
                    </div>
                  </div>
                </div>
                <div class="flip-card-back">
                  <div class="card shadow  ">
                    <div class="card-body ">
                      <div class="text-center">
                        <h6 class="fw-bold infoText">E-Medical</h6>
                      </div>
                      <p class="text-center infoText">All registered medical center in Bangladesh will upload the medical result</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card shadow Modules ">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <div class="card shadow Modules ">
                    <div class="card-body ">
                      <div class="text-center mt-4">
                        <h1 class="fw-bold infoText">8</h1>
                      </div>
                      <p class="text-center mb-3 infoText">Orientation</p>
                    </div>
                  </div>
                </div>
                <div class="flip-card-back">
                  <div class="card shadow  ">
                    <div class="card-body ">
                      <div class="text-center">
                        <h6 class="fw-bold infoText">Orientation</h6>
                      </div>
                      <p class="text-center infoText">Orientation session and basic knowledge about work & terms for employees.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
    <div class="card-items container ABXS p-5">
      <div class="row">

        <div class="col-md-3">
          <div class="card shadow Modules ">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <div class="card shadow Modules ">
                    <div class="card-body ">
                      <div class="text-center mt-4">
                        <h1 class="fw-bold infoText">9</h1>
                      </div>
                      <p class="text-center mb-3 infoText">Immigration</p>
                    </div>
                  </div>
                </div>
                <div class="flip-card-back">
                  <div class="card shadow  ">
                    <div class="card-body ">
                      <div class="text-center">
                        <h6 class="fw-bold infoText">Immigration</h6>
                      </div>
                      <p class="text-center infoText">Integrated module for immigration department for calling visa application, Sticker, face matching through Artificial Intelligence (AI) and flights.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card shadow Modules ">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <div class="card shadow Modules ">
                    <div class="card-body ">
                      <div class="text-center mt-4">
                        <h1 class="fw-bold infoText">10</h1>
                      </div>
                      <p class="text-center mb-3 infoText">VDR Sticker mGES</p>
                    </div>
                  </div>
                </div>
                <div class="flip-card-back">
                  <div class="card shadow  ">
                    <div class="card-body ">
                      <div class="text-center">
                        <h6 class="fw-bold infoText">VDR Sticker mGES</h6>
                      </div>
                      <p class="text-center infoText">mGES official counter in Dhaka will handle all candidate's documents securely.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card shadow Modules ">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <div class="card shadow Modules ">
                    <div class="card-body ">
                      <div class="text-center mt-4">
                        <h1 class="fw-bold infoText">11</h1>
                      </div>
                      <p class="text-center mb-3 infoText">VDR Sticker High Comission</p>
                    </div>
                  </div>
                </div>
                <div class="flip-card-back">
                  <div class="card shadow  ">
                    <div class="card-body ">
                      <div class="text-center">
                        <h6 class="fw-bold infoText">VDR Sticker High Comission</h6>
                      </div>
                      <p class="text-center infoText">To ensure safety and data security, only authorized Immigration officers will be given the access to mGES data.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card shadow Modules ">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <div class="card shadow Modules ">
                    <div class="card-body ">
                      <div class="text-center mt-4">
                        <h1 class="fw-bold infoText">12</h1>
                      </div>
                      <p class="text-center mb-3 infoText">BMET</p>
                    </div>
                  </div>
                </div>
                <div class="flip-card-back">
                  <div class="card shadow  ">
                    <div class="card-body ">
                      <div class="text-center">
                        <h6 class="fw-bold infoText">BMET</h6>
                      </div>
                      <p class="text-center infoText">
                        Bangladesh Bureau of Manpower, Employment, and Training (BMET) will determine the procedure and the service fees.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>


</section>

<!-- New start -->
<section><br><br><br>

  <div class="container view my-5  ">
    <div class="row mt">
      <div class="col-md-4 p-5 ParentView">
        <div class="card btn justify-content-center align-items-center">
          <p>Endorsed</p>
          <h5 class="card-Title">MEDICAL CENTERS</h5>
          <img src="asset/img/Icon-06.png" class="IconView pye-4" alt="">
        </div>
        <a href="./medical-centers/Medical.html"><button class="w-100  BtnView py-3"> View All</button></a>
      </div>

      <div class="col-md-4 p-5 ParentView">
        <div class="card btn justify-content-center align-items-center">
          <p>Registered</p>
          <h5 class="card-Title">Recruitment Agencies</h5>
          <img src="asset/img/Icon-07.png" class="IconView pye-4" alt="">
        </div>
        <a href="./Requirtment-Agency/Requirtment-Agency.html"><button class="w-100  BtnView py-3"> View All</button></a>
      </div>

      <div class="col-md-4 p-5 ParentView">
        <div class="card btn justify-content-center align-items-center">
          <p>Accompanying</p>
          <h5 class="card-Title">Insurance providers</h5>
          <img src="asset/img/Icon-08.png" class="IconView pye-4" alt="">
        </div>
        <a href="./Insurance-Provider/Insurance.html"><button class="w-100  BtnView py-3"> View All</button></a>
      </div>

    </div>

  </div>

</section>
<!-- New end -->

<!-- Footer start -->
<div class="Footer justify-content-center pt-4 pb-4  align-items-center text-light ">

  <div class="container justify-content-between">
    <div class="row justify-content-between">
      <div class="col-md-2">
        <p class="PHead">About Us</p>
        <p>
          On the other hand,
          we denounce with righteous
          indignation and dislike
        </p>
      </div>

      <div class="col-md-2 href mt-2">

        <p><a href=""><i class="fa-brands fa-twitter"></i>&nbsp;Mges_versatilo </a></p>
        <p><a href=""><i class="fa-brands fa-instagram"></i>&nbsp;Mges_versatilo </a></p>
        <p><a href=""><i class="fa-brands fa-facebook"></i>&nbsp;Mges_versatilo </a></p>

      </div>
      <div class="col-md-2 href">
        <p class="PHead">Link</p>

        <p><a href="">www.mges.com</a></p>
        <p><a href="">www.mges.versatilo.org</a></p>

      </div>

      <div class="col-md-2 href">
        <p class="PHead">Menu</p>
        <div class="row Menu">
          <p class="col-md-6  d-flex"><a href=""> Home </a></p>
          <p class="col-md-6  d-flex"><a href=""> MGES </a></p>
          <p class="col-md-6  d-flex"><a href=""> About </a></p>
          <p class="col-md-6  d-flex"><a href=""> Contact </a></p>
        </div>
      </div>

      <div class="col-md-2 href">

        <div class=" d-flex">
          <span class="btn text-light"><i class="fa-solid fa-location-dot"></i></span>
          <span>
            <p class="text-light"> Copenhagen Street 1245, 10286 Denmark</p>
          </span>
          </a>
        </div>

        <p class="ms-4"><a href=""> +0123 - 21231 - 33322 </a> </p>
        <p class="ms-4"><a href=""> +0123 - 44562 - 66777 </a> </p>

      </div>

    </div>

  </div>

  <div class="container FooterBot">
    <div class="row justify-content-between">
      <div class="col-md-6 d-flex justify-content-between">
        <p class="d-flex">MGES | www.mges.com</p>
        <p class="d-flex text-end">2022 TFP Solution Bangladesh Ltd. &copy; All Right</p>
      </div>
      <div class="col-md-5 d-flex justify-content-between text-end">
        <p class=" d-flex mx-2 FootBtn">Cookie Setting</p>
        <p class=" d-flex mx-2 FootBtn">Guides</p>
        <p class=" d-flex mx-2 FootBtn">Term of Use</p>
        <p class=" d-flex mx-2 FootBtn">Privacy</p>
      </div>
    </div>
  </div>

  <!-- Footer end -->
    <script>
      $(document).ready(function () {
        $(".nav-item").click(function () {
          $(this).addClass("active").siblings().removeClass("active");
        });
      });

      var TxtType = function (el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = "";
        this.tick();
        this.isDeleting = false;
      };

      TxtType.prototype.tick = function () {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
          this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
          this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">' + this.txt + "</span>";

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) {
          delta /= 2;
        }

        if (!this.isDeleting && this.txt === fullTxt) {
          delta = this.period;
          this.isDeleting = true;
        } else if (this.isDeleting && this.txt === "") {
          this.isDeleting = false;
          this.loopNum++;
          delta = 500;
        }

        setTimeout(function () {
          that.tick();
        }, delta);
      };

      window.onload = function () {
        var elements = document.getElementsByClassName("typewrite");
        for (var i = 0; i < elements.length; i++) {
          var toRotate = elements[i].getAttribute("data-type");
          var period = elements[i].getAttribute("data-period");
          if (toRotate) {
            new TxtType(elements[i], JSON.parse(toRotate), period);
          }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
      };
    </script>
    <script src="{{ asset('assets/landingPageAsset/js/main.js') }}"></script>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
  </body>
</html>