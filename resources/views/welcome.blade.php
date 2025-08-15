<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Business Center</title>

  <!-- Favicons -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}" />
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}" />
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}" />
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
<header class="d-flex align-items-center justify-content-between px-4 py-3" style="background: linear-gradient(90deg, #0d6efd, #0a58ca); color: white;">
  <div>
    <img src="{{ asset('K.png') }}" alt="Company Logo" height="50" />
  </div>
  <div class="text-end">
    <h1 class="fw-bold mb-1">Our Business Ventures</h1>
  </div>
</header>



  <main class="container my-5" role="main" tabindex="-1">

    @php
    $properties = [
      [
        'img' => 'property-1.jpg',
        'title' => 'Sunny Villa',
        'bedrooms' => 4,
        'bathrooms' => 3,
        'size' => '250 sqm',
        'price' => '$350,000',
        'top' => true,
      ],
      [
        'img' => 'property-2.jpg',
        'title' => 'Urban Apartment',
        'bedrooms' => 2,
        'bathrooms' => 2,
        'size' => '110 sqm',
        'price' => '$200,000',
        'top' => false,
      ],
      [
        'img' => 'property-3.jpg',
        'title' => 'Countryside Cottage',
        'bedrooms' => 3,
        'bathrooms' => 2,
        'size' => '180 sqm',
        'price' => '$275,000',
        'top' => true,
      ],
      [
        'img' => 'property-4.jpg',
        'title' => 'Luxury Penthouse',
        'bedrooms' => 5,
        'bathrooms' => 4,
        'size' => '320 sqm',
        'price' => '$750,000',
        'top' => false,
      ],
      [
        'img' => 'property-5.jpg',
        'title' => 'Beach House',
        'bedrooms' => 4,
        'bathrooms' => 3,
        'size' => '280 sqm',
        'price' => '$500,000',
        'top' => true,
      ],
    ];

    $ventures = [
      [
        'id' => 'property',
        'label' => 'Property',
        'title' => 'Property Ventures',
        'description' => 'Explore our real estate listings, rental opportunities, and land development projects.',
        'form' => '
          <form class="row g-3 mb-4" method="GET" action="' .
          route('login') .
          '">
            <div class="col-md-4">
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
          </form>
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
                  class="property-card col"
                  tabindex="0"
                  aria-label="{{ $property['title'] }}, {{ $property['bedrooms'] }} bedrooms, {{ $property['bathrooms'] }} bathrooms, {{ $property['size'] }}, priced at {{ $property['price'] }}"
                >
                  @if ($property['top'])
                    <span class="badge-top-purchase" aria-hidden="true">Top Purchase</span>
                  @endif
                  <img
                    src="{{ asset('img/'.$property['img']) }}"
                    alt="{{ $property['title'] }}"
                    loading="lazy"
                  />
                  <div class="property-card-body">
                    <h3 class="property-card-title">{{ $property['title'] }}</h3>
                    <p class="property-details">
                      🛏 {{ $property['bedrooms'] }} &nbsp; | &nbsp; 🛁
                      {{ $property['bathrooms'] }} &nbsp; | &nbsp; 📐 {{ $property['size'] }}
                    </p>
                    <p class="property-price">{{ $property['price'] }}</p>
                    <a href="#" class="btn btn-outline-primary btn-view" role="button"
                      >View Details</a
                    >
                  </div>
                </article>
              @endforeach
            </div>
          @endif
        </div>
      @endforeach
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
