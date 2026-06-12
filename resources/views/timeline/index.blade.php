<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Uma surpresa de Dia dos Namorados feita com carinho.">
    <title>{{ $couple['names'] }} | Uma surpresa para você</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
  </head>
  <body>
    <main class="page-shell">
      <section class="hero" aria-labelledby="hero-title">
        <div class="hero__content" data-reveal>
          <p class="eyebrow">Surpresa especial</p>
          <h1 id="hero-title">{{ $couple['names'] }}</h1>
          <p class="hero__subtitle">{{ $couple['subtitle'] }}</p>

          <div class="hero__actions" aria-label="Atalhos da pagina">
            <a class="button button--primary" href="#timeline">Ver momentos</a>
            <a class="button button--ghost" href="#gallery">Fotos</a>
          </div>
        </div>

        <div class="hero__photo" aria-label="Foto especial" data-reveal>
          <img class="hero__image" src="{{ asset($couple['hero_image']) }}" alt="{{ $couple['names'] }}">
        </div>
      </section>

      <section class="intro section-band" aria-labelledby="intro-title">
        <div class="intro__text" data-reveal>
          <p class="eyebrow">Para você</p>
          <h2 id="intro-title">Algumas lembranças que eu quis guardar aqui</h2>
        </div>
        <p data-reveal>{{ $couple['letter'] }}</p>
      </section>

      <section class="timeline-section" id="timeline" aria-labelledby="timeline-title">
        <div class="section-heading" data-reveal>
          <p class="eyebrow">Momentos</p>
          <h2 id="timeline-title">Pequenas partes de um amor enorme</h2>
        </div>

        <div class="timeline">
          @foreach ($moments as $moment)
            <article class="timeline-card timeline-card--{{ $moment['accent'] }}" data-reveal>
              <div class="timeline-card__date">{{ $moment['date'] }}</div>
              <div class="timeline-card__media">
                @if ($moment['image'])
                  <img src="{{ asset($moment['image']) }}" alt="{{ $moment['title'] }}" loading="lazy">
                @else
                  <div class="photo-placeholder">
                    <span>Adicionar foto</span>
                  </div>
                @endif
              </div>
              <div class="timeline-card__body">
                <h3>{{ $moment['title'] }}</h3>
                <p>{{ $moment['description'] }}</p>
              </div>
            </article>
          @endforeach
        </div>
      </section>

      <section class="gallery-section section-band" id="gallery" aria-labelledby="gallery-title">
        <div class="section-heading" data-reveal>
          <p class="eyebrow">Galeria</p>
          <h2 id="gallery-title">Algumas fotos favoritas</h2>
        </div>

        <div class="gallery-grid">
          @foreach ($gallery as $item)
            <figure class="gallery-item" data-reveal>
              @if ($item['image'])
                <img src="{{ asset($item['image']) }}" alt="{{ $item['label'] }}" loading="lazy">
              @else
                <div class="photo-placeholder photo-placeholder--gallery">
                  <span>{{ $item['label'] }}</span>
                </div>
              @endif
              <figcaption>{{ $item['label'] }}</figcaption>
            </figure>
          @endforeach
        </div>
      </section>
    </main>
  </body>
</html>
