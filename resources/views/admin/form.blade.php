<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $isEdit ? 'Edit Article' : 'New Article' }} | FamilyDentalCare</title>
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
        .admin-container {
            max-width: 900px;
            margin: 3rem auto;
            padding: 0 1.5rem;
        }
        .form-card {
            background: white;
            border-radius: 24px;
            border: 1px solid var(--border);
            padding: 3rem;
            box-shadow: var(--shadow-md);
        }
        .form-header {
            margin-bottom: 2.5rem;
            border-bottom: 1px solid var(--border);
            padding-bottom: 1.5rem;
        }
        .form-header h2 {
            font-size: 1.75rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }
        .form-group {
            margin-bottom: 2rem;
        }
        .form-group label {
            display: block;
            font-weight: 700;
            font-size: 0.95rem;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }
        .form-control {
            width: 100%;
            padding: 0.85rem 1.25rem;
            border: 1px solid var(--border);
            border-radius: 12px;
            font-size: 1rem;
            color: var(--text-dark);
            transition: var(--transition);
            outline: none;
        }
        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(15, 118, 110, 0.15);
        }
        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }
        .alert-error {
            background: #fef2f2;
            border: 1px solid #fee2e2;
            color: #ef4444;
            border-radius: 12px;
            padding: 1rem 1.5rem;
            margin-bottom: 2rem;
            font-size: 0.9rem;
            font-weight: 600;
        }
    </style>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
</head>
<body>

    <!-- Header bar -->
    <header class="admin-header">
        <div class="container admin-header-inner">
            <a href="/" class="logo">FamilyDentalCare <span style="font-weight: 400; font-size: 1rem; opacity: 0.7;">Admin</span></a>
            <a href="{{ route('admin.dashboard') }}" style="color: var(--text-muted); text-decoration: none; font-weight: 600;">
                <i class="fas fa-arrow-left"></i> Back to Dashboard
            </a>
        </div>
    </header>

    <!-- Form Container -->
    <main class="admin-container">
        @if($errors->any())
            <div class="alert-error">
                <ul style="margin: 0; padding-left: 1.25rem;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-card">
            <div class="form-header">
                <h2>{{ $isEdit ? 'Edit Dental Article' : 'Write New Article' }}</h2>
                <p style="color: var(--text-muted);">{{ $isEdit ? 'Modify post content details' : 'Publish a new dental care guide' }}</p>
            </div>

            <form action="{{ $isEdit ? route('admin.blog.update', $article->id) : route('admin.blog.store') }}" method="POST">
                @csrf
                @if($isEdit)
                    @method('PUT')
                @endif

                <div class="form-group">
                    <label for="title">Article Title</label>
                    <input type="text" name="title" id="title" class="form-control" required placeholder="e.g. Benefits of Dental Veneers" value="{{ old('title', $article->title) }}">
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-bottom: 2rem;">
                    <div class="form-group" style="margin-bottom: 0;">
                        <label for="category">Category</label>
                        <select name="category" id="category" class="form-control" required>
                            <option value="Aligners" {{ old('category', $article->category) == 'Aligners' ? 'selected' : '' }}>Aligners</option>
                            <option value="Implants" {{ old('category', $article->category) == 'Implants' ? 'selected' : '' }}>Implants</option>
                            <option value="Hygiene" {{ old('category', $article->category) == 'Hygiene' ? 'selected' : '' }}>Hygiene</option>
                            <option value="General Care" {{ old('category', $article->category) == 'General Care' ? 'selected' : '' }}>General Care</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-bottom: 0;">
                        <label for="read_time">Estimated Read Time</label>
                        <input type="text" name="read_time" id="read_time" class="form-control" required placeholder="e.g. 5 min read" value="{{ old('read_time', $article->read_time) }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="image">Cover Image URL (Unsplash or similar)</label>
                    <input type="url" name="image" id="image" class="form-control" placeholder="https://images.unsplash.com/..." value="{{ old('image', $article->image) }}">
                </div>

                <div class="form-group">
                    <label for="excerpt">Short Excerpt (appears on list grids)</label>
                    <textarea name="excerpt" id="excerpt" class="form-control" required placeholder="Provide a brief summary of the article..." rows="3">{{ old('excerpt', $article->excerpt) }}</textarea>
                </div>

                <div class="form-group">
                    <label for="content">Article Body (Supports HTML tags like &lt;p&gt;, &lt;h3&gt;, &lt;ul&gt;)</label>
                    <textarea name="content" id="content" class="form-control" required placeholder="Write your full guide here..." rows="12">{{ old('content', $article->content) }}</textarea>
                </div>

                <div style="display: flex; gap: 1.5rem; justify-content: flex-end; border-top: 1px solid var(--border); padding-top: 2rem;">
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-outline" style="text-decoration: none;">Cancel</a>
                    <button type="submit" class="btn btn-primary">
                        {{ $isEdit ? 'Save Changes' : 'Publish Post' }} <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            </form>
        </div>
    </main>

</body>
</html>
