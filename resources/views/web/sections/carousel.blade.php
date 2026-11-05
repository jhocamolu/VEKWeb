<!-- About Section -->
<section id="about" class="about section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <span>{{ $subtitle }}</span>
        <h2>{{ $subtitle }}</h2>
    </div><!-- End Section Title -->
    <div class="container">

        <div class="row gy-4">
            <div class="col-lg-6 position-relative align-self-center order-lg-last order-first" data-aos="fade-up"
                data-aos-delay="200">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        @foreach ($items as $item)
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $loop->index }}"       class="{{ $loop->first ? 'active' : '' }}" {{ $loop->first ? 'aria-current=true' : '' }}             aria-label="Slide {{ $loop->iteration }}">
                        </button>
                    @endforeach
                    </div>
                    <div class="carousel-inner">
                        @foreach ($items as $item)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <img src="{{ asset('assets/img/' . $item['image']) }}" class="d-block w-100"
                                    alt="...">
                                <div class="carousel-caption d-none d-md-block"
                                    style="background-color: rgba(0, 0, 0, 0.5);">
                                    <h5>{{ $item['title'] }}</h5>
                                    <p>{{ $item['text'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-lg-6 content order-last  order-lg-first" data-aos="fade-up" data-aos-delay="100">
                <h3>{{ $title }}</h3>
                <p>
                    {{ $intro }}
                </p>
                <ul>
                    @foreach ($items as $item)
                        <li>
                            <i class="{{ $item['icon'] }}"></i>
                            <div>
                                <h5>{{ $item['title'] }}</h5>
                                <p>{{ $item['holder'] }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>

    </div>

</section><!-- /About Section -->
