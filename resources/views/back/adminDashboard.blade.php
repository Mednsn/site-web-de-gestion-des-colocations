<!DOCTYPE html>
<html lang="fr" class="h-full bg-slate-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - ColocManage</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif']
                    },
                    colors: {
                        brand: {
                            500: '#22c55e',
                            600: '#16a34a'
                        }
                    }
                }
            }
        }
    </script>

</head>

<body class="bg-slate-50 text-slate-800 font-sans">

    <div class="min-h-full flex flex-col">

        <!-- HEADER -->
        <header class="bg-white border-b border-slate-200 sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex justify-between items-center h-16">
                    <a href="{{ route('colocation.index')  }}">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-brand-600 rounded-lg flex items-center justify-center text-white font-bold">
                                C
                            </div>
                            <span class="font-bold text-lg text-slate-900">ColocManage</span>
                        </div>
                    </a>
                    <div class="flex items-center gap-4">

                        <div class="text-sm font-medium text-slate-700">
                            {{ $admin->firstname }} {{ $admin->lastname }}
                        </div>

                        <div class="h-8 w-8 bg-green-500 rounded-full flex items-center justify-center text-white font-bold">
                            {{ strtoupper(substr($admin->firstname,0,1)) }}
                        </div>

                    </div>

                </div>
            </div>
        </header>

        <!-- CONTENT -->
        <main class="max-w-7xl mx-auto px-6 py-10">

            <h1 class="text-3xl font-bold text-slate-900 mb-8">
                Admin Dashboard
            </h1>

            <!-- STATS -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">

                <div class="bg-white rounded-xl shadow-sm border p-6">
                    <p class="text-sm text-slate-500">Colocations actives</p>
                    <p class="text-3xl font-bold text-green-600 mt-1">
                        {{ $nbr_coloc }}
                    </p>
                </div>

                <div class="bg-white rounded-xl shadow-sm border p-6">
                    <p class="text-sm text-slate-500">Colocations inactives</p>
                    <p class="text-3xl font-bold text-red-600 mt-1">
                        4
                    </p>
                </div>

                <div class="bg-white rounded-xl shadow-sm border p-6">
                    <p class="text-sm text-slate-500">Utilisateurs</p>
                    <p class="text-3xl font-bold text-slate-900 mt-1">
                        {{ $users->count() }}
                    </p>
                </div>

            </div>

            <!-- USERS TABLE -->
            <div class="bg-white rounded-xl shadow-sm border overflow-hidden">

                <div class="px-6 py-4 border-b flex justify-between items-center">
                    <h2 class="text-lg font-semibold text-slate-900">
                        Gestion des utilisateurs
                    </h2>
                </div>

                <table class="w-full text-sm">

                    <thead class="bg-slate-50 text-slate-500 text-xs uppercase">
                        <tr>

                            <th class="px-6 py-3 text-left">ID</th>
                            <th class="px-6 py-3 text-left">Nom</th>
                            <th class="px-6 py-3 text-left">Email</th>
                            <th class="px-6 py-3 text-left">Rôle</th>
                            <th class="px-6 py-3 text-left">Statut</th>
                            <th class="px-6 py-3 text-center">Actions</th>

                        </tr>
                    </thead>

                    <tbody class="divide-y">

                        @foreach($users as $user)

                        <tr class="hover:bg-slate-50">

                            <td class="px-6 py-4">
                                {{ $user->id }}
                            </td>

                            <td class="px-6 py-4 font-medium text-slate-900">
                                {{ $user->firstname }} {{ $user->lastname }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $user->email }}
                            </td>

                            <td class="px-6 py-4">

                                @if($user->role_id == 1)

                                <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded text-xs font-semibold">
                                    Admin
                                </span>

                                @else

                                <span class="bg-slate-100 text-slate-700 px-2 py-1 rounded text-xs">
                                    User
                                </span>

                                @endif

                            </td>

                            <td class="px-6 py-4">

                                @if($user->is_banned)

                                <span class="bg-red-100 text-red-700 px-2 py-1 rounded text-xs font-semibold">
                                    Banni
                                </span>

                                @else

                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs font-semibold">
                                    Actif
                                </span>

                                @endif

                            </td>

                            <td class="px-6 py-4 flex justify-center gap-2">

                                <form action="{{ route('admin.ban', $user) }}" method="POST">
                                    @csrf
                                    @method('PATCH')

                                    <button type="submit"
                                        class="px-3 py-1 text-xs rounded font-semibold text-white
{{ $user->is_banned ? 'bg-green-600 hover:bg-green-700' : 'bg-red-600 hover:bg-red-700' }}">
                                        {{ $user->is_banned ? 'Débannir' : 'Bannir' }}
                                    </button>

                                </form>

                            </td>

                        </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </main>

    </div>

</body>

</html>