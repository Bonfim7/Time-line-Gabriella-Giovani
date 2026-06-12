<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class TimelineController extends Controller
{
    public function __invoke(): View
    {
        $couple = [
            'names' => 'Feliz Dia dos Namorados',
            'subtitle' => 'Uma surpresa feita com carinho para lembrar alguns dos nossos momentos mais especiais.',
            'hero_image' => 'images/timeline/primeiro-dia-dos-namorados.jpeg',
            'letter' => 'Preparei esse cantinho para guardar um pouco de tudo que vivemos: os dias simples, os encontros, as risadas, o cuidado, a fé e os momentos que ficaram marcados. É só uma pequena parte do quanto você é especial para mim.',
        ];

        $moments = [
            [
                'date' => 'Primeiro encontro',
                'title' => 'Strogonoff',
                'description' => 'Nosso primeiro encontro de todos: o dia em que tudo começou a ganhar outro sentido e eu fui conquistando você no detalhe.',
                'image' => 'images/timeline/strogonoff.jpeg',
                'accent' => 'rose',
            ],
            [
                'date' => 'Começo',
                'title' => 'Foto do começo',
                'description' => 'Um registro com cara de começo, quando a gente ainda estava descobrindo o tamanho do que vinha pela frente.',
                'image' => 'images/timeline/foto-comeco.jpeg',
                'accent' => 'peach',
            ],
            [
                'date' => 'Antes do namoro',
                'title' => 'Na casa dela',
                'description' => 'Eu já ia na sua casa antes de começarmos a namorar, e esses momentos foram deixando tudo mais próximo e natural.',
                'image' => 'images/timeline/primeiras-vezes-na-casa-dela.jpeg',
                'accent' => 'green',
            ],
            [
                'date' => 'Momentos',
                'title' => 'Colecionando momentos',
                'description' => 'Cada saída, cada foto e cada detalhe virando parte das lembranças que a gente conta sorrindo.',
                'image' => 'images/timeline/colecionando-momentos.jpeg',
                'accent' => 'blue',
            ],
            [
                'date' => 'Pedido',
                'title' => 'O pedido de namoro',
                'description' => 'Flores, alianças, doces e uma pergunta que virou resposta para muitos dias depois.',
                'image' => 'images/timeline/pedido-de-namoro.jpeg',
                'accent' => 'rose',
            ],
            [
                'date' => 'Pedido',
                'title' => 'Mais fotos do pedido',
                'description' => 'Detalhes pequenos, mas gigantes no coração: as alianças e o brilho daquele momento.',
                'image' => 'images/timeline/mais-fotos-do-pedido.jpeg',
                'accent' => 'peach',
            ],
            [
                'date' => 'Uma semana depois',
                'title' => 'Quando sofri o acidente',
                'description' => 'Logo depois do pedido veio um capítulo difícil, mas também cheio de cuidado, presença e amor na prática.',
                'image' => 'images/timeline/quando-sofri-o-acidente.jpeg',
                'accent' => 'green',
            ],
            [
                'date' => '1 mês',
                'title' => 'Nosso primeiro mês namorando',
                'description' => 'O primeiro mês de muitos, com sorriso de quem já sabia que valia a pena comemorar.',
                'image' => 'images/timeline/primeiro-mes-namorando.jpeg',
                'accent' => 'green',
            ],
            [
                'date' => 'Rotina',
                'title' => 'Cozinhando e comendo besteiras juntos',
                'description' => 'Porque amor também mora no simples: uma comida, uma besteira, um beijo e uma foto.',
                'image' => 'images/timeline/cozinhando-e-comendo-besteiras-juntos.jpeg',
                'accent' => 'blue',
            ],
            [
                'date' => 'Cinema',
                'title' => 'Nossos encontros no cinema',
                'description' => 'Pipoca, filme e aquele programa que fica melhor só porque a gente vai junto.',
                'image' => 'images/timeline/nossos-dates-no-cinema.jpeg',
                'accent' => 'rose',
            ],
            [
                'date' => 'Dia dos Namorados',
                'title' => 'Nosso primeiro Dia dos Namorados',
                'description' => 'Um dia especial para lembrar que o amor também se celebra de pertinho.',
                'image' => 'images/timeline/primeiro-dia-dos-namorados.jpeg',
                'accent' => 'green',
            ],
            [
                'date' => 'Primeiro Effata',
                'title' => 'Primeiro Effata',
                'description' => 'Um momento de fé vivido juntos, daqueles que marcam por dentro e por fora.',
                'image' => 'images/timeline/primeiro-effata.jpeg',
                'accent' => 'blue',
            ],
            [
                'date' => 'Depois do Effata',
                'title' => 'Primeiro acampamento juntos',
                'description' => 'Natureza, uniforme, abraço e mais uma memória bonita para colocar na nossa coleção.',
                'image' => 'images/timeline/primeiro-acampamento-juntos.jpeg',
                'accent' => 'rose',
            ],
            [
                'date' => 'Depois do acampamento',
                'title' => 'Primeiro servir juntos',
                'description' => 'Depois veio a alegria de servir lado a lado, dividindo a caminhada com propósito e parceria.',
                'image' => 'images/timeline/primeiro-servir-juntos.jpeg',
                'accent' => 'peach',
            ],
            [
                'date' => 'Shows',
                'title' => 'Indo a shows',
                'description' => 'Música alta, multidão, beijo na testa e a certeza de que qualquer lugar fica melhor junto.',
                'image' => 'images/timeline/indo-a-shows.jpeg',
                'accent' => 'green',
            ],
            [
                'date' => 'Festival',
                'title' => 'Primeiro festival juntos',
                'description' => 'Arrumados, animados e prontos para viver mais uma primeira vez juntos.',
                'image' => 'images/timeline/primeiro-festival-juntos.jpeg',
                'accent' => 'blue',
            ],
            [
                'date' => 'Festa junina',
                'title' => 'Sempre juntos',
                'description' => 'No meio da festa, das luzes e das risadas, um registro com movimento de felicidade.',
                'image' => 'images/timeline/sempre-juntos.jpeg',
                'accent' => 'rose',
            ],
            [
                'date' => 'Festa junina',
                'title' => 'Festa junina',
                'description' => 'Um daqueles dias leves, com abraço, brincadeira e foto para lembrar do clima gostoso.',
                'image' => 'images/timeline/festa-junina.jpeg',
                'accent' => 'peach',
            ],
            [
                'date' => 'Diversão',
                'title' => 'Se divertindo e se amando juntos',
                'description' => 'Careta, espelho e intimidade de quem se diverte até nas fotos mais espontâneas.',
                'image' => 'images/timeline/se-divertindo-e-se-amando-juntos.jpeg',
                'accent' => 'green',
            ],
            [
                'date' => 'Risadas',
                'title' => 'Sempre juntos, rindo',
                'description' => 'Aquela energia de amizade, amor e bagunça boa que deixa tudo mais nosso.',
                'image' => 'images/timeline/sempre-juntos-rindo.jpeg',
                'accent' => 'blue',
            ],
            [
                'date' => 'Simples',
                'title' => 'Felizes até no simples',
                'description' => 'Às vezes uma sombra no chão já diz tudo: a felicidade também aparece nos detalhes.',
                'image' => 'images/timeline/felizes-ate-no-simples.jpeg',
                'accent' => 'rose',
            ],
        ];

        $gallery = [
            ['label' => 'Pedido de namoro', 'image' => 'images/timeline/pedido-de-namoro.jpeg'],
            ['label' => 'Primeiro Dia dos Namorados', 'image' => 'images/timeline/primeiro-dia-dos-namorados.jpeg'],
            ['label' => 'Primeiro Effata', 'image' => 'images/timeline/primeiro-effata.jpeg'],
            ['label' => 'Primeiro acampamento', 'image' => 'images/timeline/primeiro-acampamento-juntos.jpeg'],
            ['label' => 'Encontros no cinema', 'image' => 'images/timeline/nossos-dates-no-cinema.jpeg'],
            ['label' => 'Primeiro festival juntos', 'image' => 'images/timeline/primeiro-festival-juntos.jpeg'],
            ['label' => 'Colecionando momentos', 'image' => 'images/timeline/colecionando-momentos.jpeg'],
        ];

        return view('timeline.index', compact('couple', 'moments', 'gallery'));
    }
}
