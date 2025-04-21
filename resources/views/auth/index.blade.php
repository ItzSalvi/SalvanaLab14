<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salvana | Posts </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            text-align: center;
        }

        .profile-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .stats,
        .notifications,
        .posts {
            background: white;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
        }

        .btn-twitter {
            background-color: #1da1f2;
            color: white;
            border-radius: 999px;
            font-weight: bold;
            padding: 10px 24px;
            margin-top: 15px;
        }

        .btn-twitter:hover {
            background-color: #1991da;
        }

        .stat-box {
            text-align: center;
        }

        .stat-box h3 {
            font-size: 22px;
            margin-bottom: 0;
        }

        .stat-box p {
            color: #657786;
            margin: 0;
        }

        .post-item {
            border-bottom: 1px solid #e6ecf0;
            padding: 10px 0;
        }

        .post-item:last-child {
            border-bottom: none;
        }

        body {
            background-color: #f0f2f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .timeline-card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            transition: 0.2s ease;
        }

        .timeline-card:hover {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        }

        .rounded-pill {
            border-radius: 50rem !important;
        }
    </style>
</head>

<body>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="fw-bold">Home</h4>
                    <a href="{{ route('posts.create') }}" class="btn btn-dark rounded-pill px-4">Post</a>
                </div>
                <!-- Profile Card -->
                <div class="profile-card">
                    <img src="https://www.w3schools.com/howto/img_avatar.png" alt="User">
                    <h2>{{ auth()->user()->name }}</h2>
                    <p>{{ auth()->user()->email }}</p>
                    <form method="POST" action="{{ url('/logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-twitter">Logout</button>
                    </form>
                </div>

                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @forelse($posts as $post)
                <div class="card mb-4 p-3 timeline-card">
                    <div class="card-body">
                        <h5 class="fw-bold">{{ $post->title }}</h5>
                        <p class="text-muted">{{ Str::limit($post->body, 280) }}</p>

                        <div class="d-flex gap-2">
                            <a href="{{ route('posts.show', $post) }}" class="btn btn-outline-primary btn-sm rounded-pill">View</a>
                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-outline-secondary btn-sm rounded-pill">Edit</a>
                            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Delete this post?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger btn-sm rounded-pill">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                @empty
                <div class="text-center text-muted">No posts yet. Be the first to post something!</div>
                @endforelse

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>