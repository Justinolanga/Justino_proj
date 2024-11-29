@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <!-- Título do Dashboard -->
    <h1 class="mb-4">Dashboard</h1>

    <!-- Abas Navegáveis -->
    <ul class="nav nav-tabs" id="dashboardTabs" role="tablist">
        <!-- Aba Boas-vindas -->
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="welcome-tab" data-bs-toggle="tab" data-bs-target="#welcome" type="button" role="tab" aria-controls="welcome" aria-selected="true">
                Boas-vindas
            </button>
        </li>
        <!-- Aba Previsão do Tempo -->
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="weather-tab" data-bs-toggle="tab" data-bs-target="#weather" type="button" role="tab" aria-controls="weather" aria-selected="false">
                Previsão do Tempo
            </button>
        </li>
        <!-- Aba Configurações -->
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">
                Configurações
            </button>
        </li>
    </ul>

    <!-- Conteúdo das Abas -->
    <div class="tab-content mt-4" id="dashboardTabsContent">
        <!-- Aba Boas-vindas -->
        <div class="tab-pane fade show active" id="welcome" role="tabpanel" aria-labelledby="welcome-tab">
            <h2>Bem-vindo(a), {{ auth()->user()->name }}!</h2>
            <p class="mt-3">Aqui está uma breve visão geral de seu dashboard:</p>
            <ul>
                <li>Previsão do tempo personalizada.</li>
                <li>Gerenciamento de configurações da conta.</li>
                <li>Acesso rápido às informações importantes.</li>
            </ul>
            <p class="mt-4">Explore as abas acima para mais funcionalidades.</p>
        </div>

        <!-- Aba Previsão do Tempo -->
        <div class="tab-pane fade" id="weather" role="tabpanel" aria-labelledby="weather-tab">
            <h2>Previsão do Tempo</h2>
            @if(isset($weather))
                <div class="card mt-3">
                    <div class="card-body">
                        <h4 class="card-title"><i class="bi bi-cloud-sun"></i> {{ $weather['name'] }}</h4>
                        <p><strong>Temperatura:</strong> {{ $weather['main']['temp'] }}°C</p>
                        <p><strong>Clima:</strong> {{ $weather['weather'][0]['description'] }}</p>
                        <p><strong>Humidade:</strong> {{ $weather['main']['humidity'] }}%</p>
                        <p><strong>Vento:</strong> {{ $weather['wind']['speed'] }} km/h</p>
                        <p>
                            <img src="https://openweathermap.org/img/w/{{ $weather['weather'][0]['icon'] }}.png" alt="Ícone do clima">
                        </p>
                    </div>
                </div>
            @else
                <p>Não foi possível carregar a previsão do tempo.</p>
            @endif
        </div>

        <!-- Aba Configurações -->
        <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
            <h2>Configurações</h2>

            @if(session('status'))
                <p>{{ session('status') }}</p>
            @endif

            <form method="POST" action="{{ route('settings.toggleTwoFactor') }}">
                @csrf
                <p>Autenticação em dois fatores: 
                    @if(auth()->user()->two_factor_enabled)
                        <strong>Ativada</strong>
                    @else
                        <strong>Desativada</strong>
                    @endif
                </p>
                <button type="submit" class="btn btn-primary">
                    @if(auth()->user()->two_factor_enabled)
                        Desativar
                    @else
                        Ativar
                    @endif
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
