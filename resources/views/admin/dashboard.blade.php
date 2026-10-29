<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard | FamilyDentalCare</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .admin-header {
            background: white;
            border-bottom: 1px solid var(--border);
            padding: 1.5rem 0;
            position: sticky;
            top: 0;
            z-index: 50;
            box-shadow: var(--shadow-sm);
        }
        .admin-header-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .admin-nav {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }
        .admin-container {
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 1.5rem;
        }
        .dashboard-card {
            background: white;
            border-radius: 24px;
            border: 1px solid var(--border);
            padding: 2.5rem;
            box-shadow: var(--shadow-md);
        }
        .dashboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            flex-wrap: wrap;
            gap: 1.5rem;
        }
        .dashboard-header h2 {
            font-size: 1.75rem;
            font-weight: 800;
            color: var(--text-dark);
        }
        .admin-table-wrapper {
            overflow-x: auto;
            width: 100%;
        }
        .admin-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }
        .admin-table th,
        .admin-table td {
            padding: 1.25rem 1.5rem;
            border-bottom: 1px solid var(--border);
            font-size: 0.95rem;
        }
        .admin-table th {
            background: var(--bg-main);
            font-weight: 700;
            color: var(--text-dark);
        }
        .admin-table td {
            color: var(--text-main);
        }
        .admin-table tr:hover td {
            background: var(--primary-light);
        }
        .badge-admin-category {
            display: inline-block;
            background: var(--bg-alt);
            color: var(--text-muted);
            padding: 0.25rem 0.6rem;
            border-radius: 6px;
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
        }
        .action-btns {
            display: flex;
            gap: 0.5rem;
        }
        .btn-sm {
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
            border-radius: 8px;
        }
        .btn-edit {
            background: var(--primary-light);
            color: var(--primary);
        }
        .btn-edit:hover {
            background: var(--primary);
            color: white;
        }
        .btn-delete {
            background: #fef2f2;
            color: #ef4444;
            border: 1px solid #fee2e2;
        }
        .btn-delete:hover {
            background: #ef4444;
            color: white;
            border-color: #ef4444;
        }
        .alert-success {
            background: #ecfdf5;
            border: 1px solid #d1fae5;
            color: #059669;
            border-radius: 16px;
            padding: 1.25rem 1.5rem;
            margin-bottom: 2rem;
            font-weight: 600;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
    </style>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
</head>
<body>

    <!-- Header bar -->
    <header class="admin-header">
        <div class="container admin-header-inner">
            <a href="{{ url('/') }}" class="logo">FamilyDentalCare <span style="font-weight: 400; font-size: 1rem; opacity: 0.7;">Admin</span></a>
            <div class="admin-nav">
                <a href="{{ url('/') }}" target="_blank" style="color: var(--text-muted); text-decoration: none; font-weight: 600;"><i class="fas fa-external-link-alt"></i> View Site</a>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-outline btn-sm">
                        Logout <i class="fas fa-sign-out-alt"></i>
                    </button>
                </form>
            </div>
        </div>
    </header>

    <!-- Main Container -->
    <main class="admin-container">
        @if(session('success'))
            <div class="alert-success">
                <i class="fas fa-check-circle"></i>
                {{ session('success') }}
            </div>
        @endif

        <div class="dashboard-card">
            <div class="dashboard-header">
                <h2>Article Management</h2>
                <a href="{{ route('admin.blog.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add New Article
                </a>
            </div>

            <div class="admin-table-wrapper">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Cover</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Publish Date</th>
                            <th>Read Time</th>
                            <th style="width: 180px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($articles) > 0)
                            @foreach($articles as $article)
                                <tr>
                                    <td>
                                        <div style="width: 60px; height: 40px; border-radius: 6px; overflow: hidden; background: #eee;">
                                            <img src="{{ $article->image }}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                                        </div>
                                    </td>
                                    <td style="font-weight: 700; color: var(--text-dark);">{{ $article->title }}</td>
                                    <td><span class="badge-admin-category">{{ $article->category }}</span></td>
                                    <td>{{ $article->date }}</td>
                                    <td>{{ $article->read_time }}</td>
                                    <td>
                                        <div class="action-btns">
                                            <a href="{{ route('admin.blog.edit', $article->id) }}" class="btn btn-edit btn-sm" style="text-decoration: none; font-weight: 700;">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <form action="{{ route('admin.blog.destroy', $article->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this article?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-delete btn-sm" style="font-weight: 700;">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="6" style="text-align: center; padding: 4rem 0; color: var(--text-muted);">
                                    <i class="fas fa-folder-open" style="font-size: 2.5rem; margin-bottom: 1rem;"></i>
                                    <p>No articles found. Click "Add New Article" to write your first post.</p>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </main>

</body>
</html>
