<!-- Page Title -->
<div class="page-title dark-background" data-aos="fade" style="background-image: url('{{ asset('assets/img/page-title-bg.jpg') }}');">
    <div class="container position-relative">
        <h1>{{ $title }}</h1>
        <p>{{ $intro }}</p>
        <nav class="breadcrumbs">
            <ol>
                @foreach ($breadcrumb as $crumb)
                    @if (!$loop->last)
                        <li><a href="{{ $crumb['route'] }}">{{ $crumb['name'] }}</a></li>
                    @else
                        <li class="current">{{ $crumb['name'] }}</li>
                    @endif
                @endforeach
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->
