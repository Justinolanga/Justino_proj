<!-- resources/views/api/index.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSONPlaceholder - Dados</title>
    <!-- Adicionar o Bootstrap para estilizar as abas -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">JSONPlaceholder API - Dados</h1>

        <!-- Abas -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="users-tab" data-bs-toggle="tab" href="#users" role="tab" aria-controls="users" aria-selected="true">Usuários</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="posts-tab" data-bs-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="false">Postagens</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="comments-tab" data-bs-toggle="tab" href="#comments" role="tab" aria-controls="comments" aria-selected="false">Comentários</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="todos-tab" data-bs-toggle="tab" href="#todos" role="tab" aria-controls="todos" aria-selected="false">Tarefas</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="albums-tab" data-bs-toggle="tab" href="#albums" role="tab" aria-controls="albums" aria-selected="false">Álbuns</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="photos-tab" data-bs-toggle="tab" href="#photos" role="tab" aria-controls="photos" aria-selected="false">Fotos</a>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <!-- Aba Usuários -->
            <div class="tab-pane fade show active" id="users" role="tabpanel" aria-labelledby="users-tab">
                <h2>Usuários</h2>
                <ul class="list-group">
                    @foreach($users ?? [] as $user)
                        <li class="list-group-item">
                            <strong>{{ $user['name'] }}</strong> - {{ $user['email'] }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Aba Postagens -->
            <div class="tab-pane fade" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                <h2>Postagens</h2>
                <ul class="list-group">
                    @foreach($posts ?? [] as $post)
                        <li class="list-group-item">
                            <strong>{{ $post['title'] }}</strong><br>
                            {{ $post['body'] }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Aba Comentários -->
            <div class="tab-pane fade" id="comments" role="tabpanel" aria-labelledby="comments-tab">
                <h2>Comentários</h2>
                <ul class="list-group">
                    @foreach($comments ?? [] as $comment)
                        <li class="list-group-item">
                            <strong>{{ $comment['name'] }}</strong><br>
                            {{ $comment['body'] }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Aba Tarefas -->
            <div class="tab-pane fade" id="todos" role="tabpanel" aria-labelledby="todos-tab">
                <h2>Tarefas</h2>
                <ul class="list-group">
                    @foreach($todos ?? [] as $todo)
                        <li class="list-group-item">
                            <strong>{{ $todo['title'] }}</strong><br>
                            Status: {{ $todo['completed'] ? 'Concluída' : 'Pendente' }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Aba Álbuns -->
            <div class="tab-pane fade" id="albums" role="tabpanel" aria-labelledby="albums-tab">
                <h2>Álbuns</h2>
                <ul class="list-group">
                    @foreach($albums ?? [] as $album)
                        <li class="list-group-item">
                            <strong>{{ $album['title'] }}</strong>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Aba Fotos -->
            <div class="tab-pane fade" id="photos" role="tabpanel" aria-labelledby="photos-tab">
                <h2>Fotos</h2>
                <ul class="list-group">
                    @foreach($photos ?? [] as $photo)
                        <li class="list-group-item">
                            <img src="{{ $photo['url'] }}" alt="{{ $photo['title'] }}" class="img-fluid" width="100">
                            <strong>{{ $photo['title'] }}</strong>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <!-- Adicionar o Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
