@php
    use Illuminate\Support\Str;
    $currentRoute = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">My App</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link {{ Str::startsWith($currentRoute, 'User.') ? 'active fw-bold text-primary' : '' }}"
                       href="{{ route('User.index') }}">
                        User
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Str::startsWith($currentRoute, 'Doctor.') ? 'active fw-bold text-primary' : '' }}"
                       href="{{ route('Doctor.index') }}">
                        Doctor
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Str::startsWith($currentRoute, 'Service.') ? 'active fw-bold text-primary' : '' }}"
                       href="{{ route('Service.index') }}">
                        Service
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Str::startsWith($currentRoute, 'Category.') ? 'active fw-bold text-primary' : '' }}"
                       href="{{ route('Category.index') }}">
                        Category
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Str::startsWith($currentRoute, 'Transaction.') ? 'active fw-bold text-primary' : '' }}"
                       href="{{ route('Transaction.index') }}">
                        Transaction
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Str::startsWith($currentRoute, 'Article.') ? 'active fw-bold text-primary' : '' }}"
                       href="{{ route('Article.index') }}">
                        Article
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>

