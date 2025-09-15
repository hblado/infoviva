@extends('layouts.app')

@section('title', 'Início')

@php
    $infoboradTitle = "Conhecimento é vida. Acesso é resistência.";
    $infoboardText = "A Info Viva é um espaço digital para organização e representação de informações sobre
    os direitos da mulher, para fortalecer o enfrentamento à violência contra as mulheres. Reunimos dados,
    evidências e saberes situados para apoiar mulheres, profissionais da rede de atendimento, gestoras/es
    públicas/os, pesquisadoras/es e movimentos sociais.";
    $origin = "A Plataforma Info Viva nasce do percurso do LabRecrie — grupo de pesquisa certificado pela UFBA
    no Diretório de Grupos de Pesquisa/CNPq, com o Projeto Regime de Informação da Rede de Atendimento à Mulher,
    iniciado em 2024, —  que se consolida no âmbito da pesquisa internacional financiada pela Chamada nº 14 (CNPq)
    – Projetos Internacionais, com o pós-doutorado da Prof.ª Dra. Bruna Lessa na Universidad Carlos III de Madrid,
    em parceria com o Instituto Universitário de Estudos de Gênero e o Departamento de Biblioteconomia.";
    $whoWeAreTitle = "Quem somos nós";
    $whoWeAre = [
        [
            'title' => "Bruna Lessa",
            'text' => "Criadora da Plataforma Info Viva, professora e pesquisadora da UFBA. Pós-doutora em Documentação
            e Estudos Interdisciplinares sobre a Mulher (UC3M, Espanha). Doutora em Ciência da Informação e fundadora
            do LabRecriE (UFBA/CNPq).",
            'orcid' => "https://orcid.org/0000-0003-4485-203X",
            'lattes' => "http://lattes.cnpq.br/4775068257764378",
            'imagePath' => "bruna.png"
        ],
        [
            'title' => "Eneida Santana",
            'text' => "Pesquisadora e coordenadora da Plataforma Info Viva, é bibliotecária-documentalista no IFBA,
            doutora em Difusão do Conhecimento (PPGDC/2023), mestre em Ciência da Informação (UFBA/2011) e especialista
            em EaD (IFPR/2016). Pesquisa dados governamentais, tecnologias educacionais e redes complexas. Vice-líder
            do grupo Ticase, integra o LABRECRIE e fundou o LABDAGE.",
            'orcid' => "https://orcid.org/0000-0002-0884-4756",
            'lattes' => "http://lattes.cnpq.br/9832000444934835",
            'imagePath' => "eneida.png"
        ]
    ];
    $faq = [
        [
            'question' => "Quem mantém a plataforma?",
            'answer' => "A Info Viva é vinculada ao LabRecrie/UFBA, com recursos financiados para sua criação
            provenientes do Edital Jovem Pesquisador (2024) , da Pró-Reitoria de Pesquisa e Pós-Graduação (PRPPG),
            da Universidade Federal da Bahia."
        ],
        [
            'question' => "A Info Viva oferece atendimento direto a casos?",
            'answer' => "Não. A plataforma não é um serviço de emergência nem substitui a Rede de Atendimento.
            Nosso foco é informação qualificada, navegação de serviços e formação sobre direitos da mulher.
            Em situação de risco imediato, procure os serviços de atenção e a rede local da sua cidade/estado."
        ],
        [
            'question' => "Como uso os mapas?",
            'answer' => "Você pode filtrar por tipo de serviço, território e temas. Cada ponto possui uma ficha com
            endereço, horários e canais oficiais (quando disponíveis). Os mapas priorizam dados públicos e fontes
            oficiais e indicam a data da última atualização."
        ]
    ]
@endphp

@section('content')
    <x-infoboard :title="$infoboradTitle" :text="$infoboardText"/>
    <x-divider :title="'Origem e base de pesquisa'" />
    <x-text-no-bg>
        <p>
            A Plataforma Info Viva nasce do percurso do <strong>LabRecrie</strong> — grupo de pesquisa certificado pela 
            <strong>UFBA</strong> no Diretóriode Grupos de Pesquisa/CNPq, com o Projeto Regime de Informação da Rede de 
            Atendimento à Mulher, iniciado em 2024, —  que se consolida no âmbito da pesquisa internacional financiada pela 
            <strong>Chamada nº 14 (CNPq) – Projetos Internacionais</strong>, com o pós-doutorado da Prof.ª Dra. 
            <strong>Bruna Lessa</strong> na <strong>Universidad Carlos III de Madrid</strong>, em parceria com o <strong>Instituto
             Universitário de Estudos de Gênero</strong> e o <strong>Departamento de Biblioteconomia.</strong>
        </p>
    </x-text-no-bg>
    <x-text-no-bg>
        <p>
            Desse processo resulta um framework para análise e aprimoramento das ações de informação em redes e serviços de
            atendimento à mulher, considerando características culturais, sociais e políticas dos territórios, e desse contexto
            metodológico de análise, surge o conceito de violência informativa.
        </p>
    </x-text-no-bg>
    <x-divider :title="'Quem Somos'" />
    @foreach ($whoWeAre as $person)
        <x-circleboardleft
            :title="$person['title']"
            :text="$person['text']"
            :orcid="$person['orcid']"
            :lattes="$person['lattes']"
            :imagePath="$person['imagePath']"
        />
    @endforeach
    <div class="info-section">
        <x-objectives 
            title="Objetivos" 
            :items="[
                'Observatório das ações informacionais: monitoramento de iniciativas, indicadores e boas práticas.',
                'Mapas e painéis interativos: serviços da rede, percursos de atendimento e dados públicos correlatos.',
                'Repositório formativo: materiais de linguagem simples para mulheres e para equipes da rede.',
                'Trilhas de direitos: rotas de acesso a serviços e garantias, passo a passo e com glossário.',
                'Catálogo de evidências: estudos, relatórios e bases de dados para gestão e advocacy.',
                'Ferramentas de co-criação: processos colaborativos com a rede, a sociedade civil e a academia.'
            ]" 
            variant="left"
        />

        <x-objectives 
            title="Para quem" 
            :items="[
                'Mulheres em busca de informação confiável e caminhos de acesso à rede.',
                'Profissionais da rede (saúde, assistência, justiça, segurança, educação) que precisam de referências claras e integradas.',
                'Gestoras/es públicas/os que demandam dados e evidências para decisões e políticas.',
                'Pesquisadoras/es, jornalistas e movimentos sociais que atuam em defesa de direitos das mulheres.'
            ]" 
            variant="right"
        />
    </div>
    <x-divider :title="'FAQ'" />
    @foreach($faq as $baloon)
        <x-faq-baloon :question="$baloon['question']" :answer="$baloon['answer']" />
    @endforeach
@endsection
