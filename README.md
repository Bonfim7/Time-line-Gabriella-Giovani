# Feliz Dia dos Namorados

Uma página em Laravel feita como surpresa de Dia dos Namorados, com fotos, lembranças e momentos especiais.

## Como rodar

```bash
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run dev
php artisan serve
```

Depois acesse `http://127.0.0.1:8000`.

## Onde editar os momentos

Os textos e momentos ficam em `app/Http/Controllers/TimelineController.php`.

As fotos podem ser colocadas em `public/images/timeline/` e referenciadas no array `moments`.
