<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Nobela Enterprise</title>

  <!-- Favicons -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}" />
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}" />
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon-32x32.png') }}" />
  <link rel="manifest" href="{{ asset('site.webmanifest') }}" />
  <meta name="theme-color" content="#0d6efd" />

  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />

  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    header {
      background: linear-gradient(90deg, #0d6efd, #0a58ca);
      color: #fff;
      padding: 1.25rem 0;
      box-shadow: 0 4px 10px rgb(13 110 253 / 0.5);
      user-select: none;
    }

    header img {
      height: 52px;
      filter: drop-shadow(0 0 2px rgba(0, 0, 0, 0.15));
    }

    header h1 {
      font-weight: 700;
      letter-spacing: 1.2px;
      margin-bottom: 0;
      font-size: 1.9rem;
    }

    /* Tabs styling */
    .nav-tabs .nav-link {
      border-radius: 0.5rem 0.5rem 0 0;
      font-weight: 600;
      color: #0d6efd;
      transition: background-color 0.3s ease, color 0.3s ease;
      border: none;
    }

    .nav-tabs .nav-link.active {
      background-color: #0d6efd;
      color: white !important;
      box-shadow: 0 4px 6px rgb(13 110 253 / 0.3);
    }

    .nav-tabs .nav-link:hover:not(.active) {
      background-color: #e7f1ff;
      color: #0a58ca;
    }

    /* Tab pane styling */
    .tab-pane {
      background: #fff;
      padding: 2rem;
      border-radius: 0 0 0.5rem 0.5rem;
      box-shadow: 0 8px 18px rgb(0 0 0 / 0.07);
      min-height: 360px;
      animation: fadeIn 0.35s ease forwards;
    }

    /* Fade in animation */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(10px);
      }
      to {
        opacity: 1;
        transform: none;
      }
    }

    /* Property card */
    .property-card {
      border-radius: 0.75rem;
      box-shadow: 0 6px 15px rgb(0 0 0 / 0.07);
      transition: transform 0.25s ease, box-shadow 0.25s ease;
      overflow: hidden;
      cursor: pointer;
      background: #fff;
      position: relative;
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    .property-card:hover,
    .property-card:focus-within {
      transform: translateY(-8px);
      box-shadow: 0 12px 25px rgb(0 0 0 / 0.15);
      z-index: 5;
    }

    .property-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 0.75rem 0.75rem 0 0;
      transition: transform 0.25s ease;
    }

    .property-card:hover img,
    .property-card:focus-within img {
      transform: scale(1.05);
    }

    .property-card-body {
      padding: 1rem 1.25rem 1.5rem;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .property-card-title {
      font-size: 1.2rem;
      font-weight: 700;
      margin-bottom: 0.35rem;
      color: #0d6efd;
    }

    .property-details {
      font-size: 0.9rem;
      color: #666;
      margin-bottom: 0.8rem;
      line-height: 1.35;
    }

    .property-price {
      font-weight: 700;
      font-size: 1.15rem;
      color: #198754;
      margin-bottom: 1rem;
    }

    .btn-view {
      align-self: flex-start;
      padding: 0.375rem 1rem;
      font-weight: 600;
      border-radius: 0.5rem;
      transition: background-color 0.3s ease;
    }

    .btn-view:hover,
    .btn-view:focus {
      background-color: #145cb4;
      color: #fff;
      outline: none;
      box-shadow: 0 0 8px rgb(13 110 253 / 0.7);
    }

    /* Badge */
    .badge-top-purchase {
      position: absolute;
      top: 12px;
      left: 12px;
      background-color: #ffc107;
      color: #212529;
      font-weight: 600;
      padding: 0.25rem 0.5rem;
      border-radius: 0.5rem;
      font-size: 0.85rem;
      box-shadow: 0 2px 8px rgb(0 0 0 / 0.12);
      user-select: none;
    }

    /* Form inputs */
    .form-control,
    .form-select {
      box-shadow: none !important;
      border-radius: 0.375rem;
      border-color: #ced4da;
      transition: border-color 0.3s ease;
    }

    .form-control:focus,
    .form-select:focus {
      border-color: #0d6efd;
      box-shadow: 0 0 5px rgb(13 110 253 / 0.3);
      outline: none;
    }

    /* Responsive tweaks */
    @media (max-width: 575.98px) {
      .property-card img {
        height: 140px;
      }
    }
  </style>
</head>

<body>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background: linear-gradient(90deg, #737d8e, #0a58ca);">
    <div class="container-fluid">
      <!-- Logo -->
      <a class="navbar-brand d-flex align-items-center" href="/">
        <img src="{{ asset('K.png') }}" alt="Company Logo" height="50" class="me-2 rounded shadow-sm"/>
        <span class="fw-bold fs-5">Our Business Ventures</span>
      </a>

      <!-- Hamburger toggle for mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
        aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Nav links -->
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
          <li class="nav-item">
            <a href="#" class="nav-link active" data-bs-target="#about-tab">Home</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" data-bs-target="#about-tab">About</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" data-bs-target="#property-tab">Property</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" data-bs-target="#logistics-tab">Logistics</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" data-bs-target="#boilermaking-tab">Boilermaking</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" data-bs-target="#other-tab">Other Ventures</a>
          </li>
        </ul>

        <!-- Register & Login buttons -->
        <div class="d-flex ms-lg-3 mt-2 mt-lg-0">
          <a href="{{ route('register') }}" class="btn btn-outline-light me-2 shadow-sm">Register</a>
          <a href="{{ route('login') }}" class="btn btn-light shadow-sm">Login</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Script for tab linking -->
  <script>
    document.querySelectorAll('a[data-bs-target]').forEach(link => {
      link.addEventListener('click', e => {
        e.preventDefault();
        const tabButton = document.querySelector(link.getAttribute('data-bs-target'));
        const tabInstance = bootstrap.Tab.getOrCreateInstance(tabButton);
        tabInstance.show();

        // Toggle active class in header nav
        document.querySelectorAll('.navbar-nav .nav-link').forEach(nav => nav.classList.remove('active'));
        link.classList.add('active');
      });
    });
  </script>

  <style>
    /* Smooth hover effects */
    .navbar-nav .nav-link {
      transition: transform 0.2s, color 0.2s, background-color 0.2s;
    }

    .navbar-nav .nav-link:hover {
      transform: translateY(-2px);
      color: #fff !important;
      background-color: rgba(255,255,255,0.1);
      border-radius: 0.35rem;
    }

    .btn {
      transition: transform 0.2s, box-shadow 0.2s;
    }

    .btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0,0,0,0.25);
    }

    /* Mobile spacing adjustments */
    @media (max-width: 991.98px) {
      .d-flex.ms-lg-3 {
        width: 100%;
        justify-content: flex-start;
      }
    }
  </style>
</header>






  <main class="container my-5" role="main" tabindex="-1">

    @php
  

    $ventures = [
    ['id'=>'about','label'=>'About Us','title'=>'Nobela Enterprise','description'=>'Nobela Enterprise, located in the heart of Gauteng, is dedicated to helping clients buy, sell, and manage their properties with confidence and care.','form'=>'']
    
      ,
            [
              'id' => 'property',
              'label' => 'Property',
              'title' => 'Property Ventures',
              'description' => 'Explore our real estate listings, rental opportunities, and land development projects.',
              'form' => '
                <form class="row g-3 mb-4" method="GET" action="' .
                route('login') .
                '">
                  <!--<div class="col-md-4">
                    <input type="text" name="location" class="form-control" placeholder="Location" />
                  </div>
                  <div class="col-md-3">
                    <select name="type" class="form-select">
                      <option value="">Property Type</option>
                      <option value="residential">Residential</option>
                      <option value="commercial">Commercial</option>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <input type="number" name="max_price" class="form-control" placeholder="Max Price" />
                  </div>
                  <div class="col-md-2 d-grid">
                    <button type="submit" class="btn btn-primary">Search</button>
                  </div>
                </form> --->
              ',
            ],
            [
              'id' => 'logistics',
              'label' => 'Logistics',
              'title' => 'Logistics Services',
              'description' =>
                'Offering transportation, freight, and delivery solutions tailored to your business needs.',
              'form' => '
                <form class="row g-3 mb-4" method="GET" action="' .
                route('login') .
                '">
                  <div class="col-md-5">
                    <input type="text" name="origin" class="form-control" placeholder="Origin" />
                  </div>
                  <div class="col-md-5">
                    <input type="text" name="destination" class="form-control" placeholder="Destination" />
                  </div>
                  <div class="col-md-2 d-grid">
                    <button type="submit" class="btn btn-primary">Check Availability</button>
                  </div>
                </form>
              ',
            ],
            [
              'id' => 'boilermaking',
              'label' => 'Boilermaking',
              'title' => 'Boilermaking & Fabrication',
              'description' =>
                'Industrial fabrication services including custom boilermaking projects and maintenance.',
              'form' => '
                <form class="mb-4" method="POST" action="' .
                route('login') .
                '">
                  ' .
                csrf_field() .
                '
                  <div class="mb-3">
                    <label for="projectDetails" class="form-label">Project Details</label>
                    <textarea
                      id="projectDetails"
                      name="project_details"
                      class="form-control"
                      rows="4"
                      placeholder="Describe your project"
                    ></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit Inquiry</button>
                </form>
              ',
            ],
            [
              'id' => 'other',
              'label' => 'Other Ventures',
              'title' => 'Other Business Ventures',
              'description' => 'Discover our new and upcoming business projects and opportunities.',
              'form' => '',
            ],
          ];
          @endphp

          {{-- Nav Tabs --}}
          <ul class="nav nav-tabs mb-4" id="ventureTabs" role="tablist">
            @foreach ($ventures as $index => $venture)
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link {{ $index === 0 ? 'active' : '' }}"
                  id="{{ $venture['id'] }}-tab"
                  data-bs-toggle="tab"
                  data-bs-target="#{{ $venture['id'] }}"
                  type="button"
                  role="tab"
                  aria-controls="{{ $venture['id'] }}"
                  aria-selected="{{ $index === 0 ? 'true' : 'false' }}"
                >
                  {{ $venture['label'] }}
                </button>
              </li>
            @endforeach
          </ul>

          {{-- Tab Content --}}
          <div class="tab-content" id="ventureTabsContent">
            @foreach ($ventures as $index => $venture)
              <div
                class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}"
                id="{{ $venture['id'] }}"
                role="tabpanel"
                aria-labelledby="{{ $venture['id'] }}-tab"
                tabindex="0"
              >
                <h2 class="mb-3">{{ $venture['title'] }}</h2>
                <p class="mb-4 text-secondary">{{ $venture['description'] }}</p>

                {!! $venture['form'] !!}

                {{-- Property cards only on property tab --}}
      @if ($venture['id'] === 'property')
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
        @foreach ($properties as $property)
            <article
                class="property-card col position-relative"
                tabindex="0"
                aria-label="{{ $property->title }}, {{ $property->bedrooms }} bedrooms, {{ $property->bathrooms }} bathrooms, {{ $property->size }}m², priced at R{{ number_format($property->price, 2) }}"
            >
                {{-- Badge Top Purchase --}}
                @if ($property->is_featured ?? false)
                    <span class="badge-top-purchase position-absolute" aria-hidden="true">Top Purchase</span>
                @endif

                {{-- Main Image --}}
                @if($property->images->count() > 0)
                    <img
                        src="{{ asset('storage/'.$property->images->first()->image_path) }}"
                        alt="{{ $property->title }}"
                        loading="lazy"
                        class="w-100"
                    >
                    {{-- Optional: Small gallery thumbnails --}}
                    <div class="d-flex gap-2 mt-2 overflow-auto">
                        @foreach($property->images as $img)
                            <img
                                src="{{ asset('storage/'.$img->image_path) }}"
                                alt="Thumbnail"
                                class="thumbnail-img rounded border"
                                style="width: 60px; height: 60px; object-fit: cover; cursor: pointer;"
                            >
                        @endforeach
                    </div>
                @else
                    <img
                        src="{{ asset('img/no-image.jpg') }}"
                        alt="No Image Available"
                        class="w-100"
                    >
                @endif

                <div class="property-card-body mt-2">
                    <h3 class="property-card-title">{{ $property->title }}</h3>
                    <p class="property-details text-muted">
                        🛏 {{ $property->bedrooms }} &nbsp; | &nbsp; 🛁 {{ $property->bathrooms }} &nbsp; | &nbsp; 📐 {{ $property->size }} m²
                    </p>
                    <p class="property-price text-primary">R{{ number_format($property->price, 2) }}</p>
                    <a href="{{ route('Guest.show', $property->id) }}" class="btn btn-outline-primary btn-view" role="button">View Details</a>
                </div>
            </article>
        @endforeach
    </div>
@endif

                {{-- Inside your tab-pane for the "about" tab --}}
      @if ($venture['id'] === 'about')
        <div class="row gy-4">
          <div class="col-md-6">
            <h5 class="mb-3">Who We Are</h5>
            <p>
              Nobela Enterprise is located in the heart of Gauteng. We assist clients in buying,
              selling, and managing their properties. Before starting the process, we provide
              counseling to ensure our clients make the right decisions.
            </p>
            <p>
              We also help boost credit scores, assess affordability based on property value,
              and assist in finding reliable tenants if you plan to use your property for business.
            </p>

            <h5 class="mb-3">Mission & Vision</h5>
            <p><strong>Mission:</strong> To guide clients in making informed property and business decisions while providing trusted support services.</p>
            <p><strong>Vision:</strong> To be the go-to enterprise in Gauteng for property, logistics, and business solutions that uplift individuals and communities.</p>

            <!-- Carousel -->
            <div id="aboutCarousel" class="carousel slide mt-3" data-bs-ride="carousel">
              <div class="carousel-inner rounded overflow-hidden">
                <div class="carousel-item active">
                  <img
                    src="{{ asset('img/property-1.jpg') }}"
                    class="d-block w-100"
                    alt="Business Meeting"
                    loading="lazy"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="{{ asset('img/property-3.jpg') }}"
                    class="d-block w-100"
                    alt="Property Management"
                    loading="lazy"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="{{ asset('img/property-4.jpg') }}"
                    class="d-block w-100"
                    alt="Logistics"
                    loading="lazy"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="{{ asset('img/property-2.jpg') }}"
                    class="d-block w-100"
                    alt="Boilermaking & Fabrication"
                    loading="lazy"
                  />
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#aboutCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#aboutCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>

              <!-- Optional indicators -->
              <div class="carousel-indicators position-static mt-3">
                <button type="button" data-bs-target="#aboutCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#aboutCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#aboutCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#aboutCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <h5 class="mb-3">Our Services</h5>
            <ul class="list-unstyled">
              <li class="mb-3">
                <strong>🏠 Property Sales & Rentals</strong><br>
                <small>Helping you buy, sell, and rent properties with confidence.</small>
                <ul class="mt-2 small text-muted">
                  <li>Market analysis & pricing strategy</li>
                  <li>Buyer pre-qualification guidance</li>
                  <li>Rental listing & tenant screening</li>
                </ul>
              </li>
              <li class="mb-3">
                <strong>👥 Property Management</strong><br>
                <small>Assistance in managing your property and securing reliable tenants.</small>
                <ul class="mt-2 small text-muted">
                  <li>Rent collection & statements</li>
                  <li>Maintenance coordination</li>
                  <li>Inspection & compliance checks</li>
                </ul>
              </li>
              <li class="mb-3">
                <strong>💳 Credit Score Assistance</strong><br>
                <small>Boost your credit score and check affordability before investing.</small>
                <ul class="mt-2 small text-muted">
                  <li>Credit health assessment</li>
                  <li>Affordability & bond readiness checks</li>
                  <li>Action plan to improve score</li>
                </ul>
              </li>
              <li class="mb-3">
                <strong>🚚 Logistics & Transportation</strong><br>
                <small>Reliable freight and delivery solutions tailored to your needs.</small>
                <ul class="mt-2 small text-muted">
                  <li>Local & regional deliveries</li>
                  <li>Real-time status updates</li>
                  <li>Route optimization</li>
                </ul>
              </li>
              <li class="mb-3">
                <strong>⚙️ Boilermaking & Fabrication</strong><br>
                <small>High-quality industrial fabrication with a focus on precision.</small>
                <ul class="mt-2 small text-muted">
                  <li>Custom steel work & repairs</li>
                  <li>On-site assessment & quotes</li>
                  <li>Quality control & safety first</li>
                </ul>
              </li>
            </ul>

            <h5 class="mb-3 mt-4">Contact Information</h5>
            <p class="mb-1">
              <strong>📞 Phone:</strong>
              <a href="tel:+1234567890" class="link-primary text-decoration-none">+123 456 7890</a>
            </p>
            <p class="mb-1">
              <strong>📧 Email:</strong>
              <a href="mailto:info@businesscenter.com" class="link-primary text-decoration-none">info@businesscenter.com</a>
            </p>
            <p class="mb-1">
              <strong>📍 Address:</strong>
              <a
                href="https://www.google.com/maps/search/?api=1&query=123+Business+St,+Gauteng,+South+Africa"
                target="_blank"
                rel="noopener"
                class="link-primary text-decoration-none"
              >
                123 Business St, Gauteng, South Africa
              </a>
            </p>
            <p class="mb-1"><strong>🕒 Working Hours:</strong> Mon–Fri 09:00 – 17:00</p>
          </div>
        </div>
      @endif

          </div>
        @endforeach
      </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
