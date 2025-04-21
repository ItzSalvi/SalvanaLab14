<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salvana | View Post </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .post-card {
            border: none;
            border-radius: 20px;
            background-color: #ffffff;
            padding: 2rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
        }

        .post-header {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .post-header img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .post-footer {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }

        .btn {
            border-radius: 50px;
        }

        .like-button,
        .comment-button {
            font-size: 0.9rem;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="post-card shadow-sm">
                    <div class="card-body">

                        <div class="post-header">
                            <img src="https://www.svgrepo.com/show/311063/person.svg" alt="User Avatar">
                            <div>
                                <h5 class="fw-bold mb-0">{{ $post->title }}</h5>
                                <small class="text-muted">
                                    Posted on {{ $post->updated_at->setTimezone('Asia/Manila')->format('M d, Y \a\t h:i A') }}
                                </small>

                            </div>
                        </div>

                        <p class="mt-3">{{ $post->body }}</p>

                        <div class="post-footer">
                            <button class="btn btn-light like-button">
                                <i class="bi bi-heart"></i> Like
                            </button>
                            <button class="btn btn-light comment-button">
                                <i class="bi bi-chat-left-text"></i> Comment
                            </button>
                            <button class="btn btn-light">
                                <i class="bi bi-share"></i> Share
                            </button>
                        </div>

                        <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary px-4 mt-3">Back to All Posts</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>