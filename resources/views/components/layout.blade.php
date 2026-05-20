<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ 
            $title ?? 
            'Página principal' 
        }}
    </title>
    @vite(
        'resources/css/app.css'
    )
</head>
<body>
    <div class="conteudo">
        {{-- 
        Local onde o conteído principal será renderizado.
        Esse é o placeholder padrão, mais conhecido no laravel como "slot".
        Esse conteúdo será atribuído usando as tags
        <x-layout></x-layout> nos arquivos de template.
        --}}
        {{ $slot }}
    </div>
</body>
</html>