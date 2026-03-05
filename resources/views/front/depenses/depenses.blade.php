<!DOCTYPE html>
<html lang="fr" class="h-full bg-slate-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dépenses - ColocManage</title>
    <!-- Google Fonts: Inter -->
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
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            900: '#14532d'
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-slate-50 text-slate-800 antialiased h-full flex overflow-hidden">

    <div class="flex-1 flex flex-col h-full overflow-hidden">

        <!-- Modern App Header -->
        <header class="bg-white border-b border-slate-200 sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16 items-center">
                    <!-- Nav Left -->
                    <div class="flex items-center gap-8">
                        <a href="/" class="flex items-center gap-2 group">
                            <div
                                class="w-8 h-8 rounded-lg bg-brand-600 flex items-center justify-center shadow-sm group-hover:bg-brand-700 transition-colors">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                    </path>
                                </svg>
                            </div>
                            <span class="font-bold text-lg tracking-tight text-slate-900">ColocManage</span>
                        </a>

                        <!-- Desktop Links -->
                        <nav class="hidden md:flex gap-1">
                            <a href="{{ route('colocation.index')}}"
                                class="px-4 py-2 rounded-lg text-slate-500 hover:text-slate-900 hover:bg-slate-50 font-medium text-sm transition-colors">Mes
                                Colocations</a>
                            <a href="#"
                                class="px-4 py-2 rounded-lg bg-slate-100 text-slate-900 font-semibold text-sm transition-colors">Dépenses</a>
                            <a href="{{ route('ballances.index',$colocation) }}"
                                class="px-4 py-2 rounded-lg text-slate-500 hover:text-slate-900 hover:bg-slate-50 font-medium text-sm transition-colors">Soldes</a>
                            @if($user->role_id == 1)
                            <a href="{{ route('admin.index') }}"
                                class="px-4 py-2 rounded-lg text-slate-500 hover:text-slate-900 hover:bg-slate-50 font-medium text-sm transition-colors">Utilisateurs</a>
                            @endif
                        </nav>
                    </div>

                    <!-- User Right -->
                    <div class="flex items-center gap-4">
                        <div class="hidden sm:flex items-center bg-slate-100 rounded-lg p-1 border border-slate-200">
                            <div
                                class="px-3 py-1 bg-white shadow-sm rounded-md text-sm font-bold text-slate-800 flex items-center gap-2 cursor-pointer">
                                <span class="w-2 h-2 rounded-full bg-brand-500"></span> {{ $colocation->name }}
                            </div>
                        </div>

                        <div class="w-px h-6 bg-slate-200 mx-2 hidden sm:block"></div>

                        <div
                            class="h-8 w-8 rounded-full bg-gradient-to-tr from-brand-500 to-emerald-400 text-white flex items-center justify-center font-bold text-sm shadow-sm border border-white cursor-pointer">
                            {{ mb_substr($user->firstname, 0, 1)}}{{ mb_substr($user->lastname, 0, 1)}}
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content Scrollable -->
        <main class="flex-1 overflow-y-auto w-full pb-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">

                @if($isOwner == 1)
                <div>
                    <div class="mb-5 flex justify-between items-end">
                        <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">Catégories de Dépenses</h2>
                    </div>

                    <div class="bg-black/15 rounded-2xl shadow-sm border border-slate-200 p-6 lg:p-8">
                        <div class="flex flex-col md:flex-row gap-8 items-start">

                            <!-- Formulaire d'ajout rapide -->
                            <div class="w-full md:w-1/3">
                                <h3 class="text-sm font-bold text-slate-900 uppercase tracking-wider mb-4">Nouvelle
                                    catégorie</h3>
                                <form class="space-y-3" action="{{ route('categories.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="colocation_id" value="{{ $colocation->id }}">
                                    <div>
                                        <label for="name" class="sr-only">Nom</label>
                                        <input type="text" id="name" name="name" placeholder="Ex: Internet, Loyer..."
                                            class="w-full bg-slate-50 border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition-all font-medium placeholder-slate-400">
                                    </div>
                                    <button type="submit"
                                        class="w-full bg-brand-600 hover:bg-brand-700 text-white font-semibold py-2.5 rounded-lg text-sm shadow-sm transition-all focus:ring-2 focus:ring-brand-500 focus:ring-offset-2 flex justify-center items-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 4v16m8-8H4"></path>
                                        </svg>
                                        Ajouter la catégorie
                                    </button>
                                </form>
                            </div>

                            <!-- Séparateur visuel sur Desktop -->
                            <div class="hidden md:block w-px h-32 bg-slate-100 self-center"></div>

                            <!-- Liste des Catégories -->
                            <div class="flex-1 w-full">
                                <h3 class="text-sm font-bold text-slate-900 uppercase tracking-wider mb-4">Catégories
                                    existantes</h3>
                                <div class="flex flex-wrap gap-3">

                                    <!-- Catégorie  -->
                                    @forelse($colocation->categories as $category)
                                    <div
                                        class="inline-flex items-center bg-slate-50 border border-slate-200 rounded-xl px-2 py-1.5 group hover:bg-white hover:border-slate-300 hover:shadow-sm transition-all">
                                        <form action="{{ route('categories.update',$category) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <div class="flex items-center ml-2 border-l border-slate-200 pl-2 gap-1">
                                                <input type="text" name="categorie" value="{{ $category->name }}">
                                                <button type="submit"
                                                    class="p-1 text-slate-400 hover:text-blue-600 rounded-md hover:bg-blue-50 transition-colors"
                                                    title="Modifier">
                                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </form>
                                        <div class="inline-flex items-center bg-slate-50 border border-slate-200 rounded-xl px-2 py-1.5 group hover:bg-white hover:border-slate-300 hover:shadow-sm transition-all">
                                            <form action="{{ route('categories.destroy',$category) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    class="p-1 text-slate-400 hover:text-red-600 rounded-md hover:bg-red-50 transition-colors"
                                                    title="Supprimer">
                                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    @empty
                                    <div class="text-sm text-slate-500 italic py-2">Aucune catégorie pour le moment.</div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <div class="mb-8 flex flex-col md:flex-row md:items-end justify-between gap-4">
                    <div>
                        <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">Dépenses</h1>
                        <p class="text-slate-500 mt-2 text-sm sm:text-base">Gérez les achats communs et factures de la
                            colocation.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">

                    <!-- Colonne de Gauche : Formulaire d'ajout -->
                    <div
                        class="lg:col-span-1 lg:sticky lg:top-8 bg-black/15 rounded-2xl shadow-sm border border-slate-200 overflow-hidden">

                        <div class="px-6 py-5 border-b border-slate-100 bg-slate-50/50">
                            <h2 class="text-lg font-bold text-slate-900 flex items-center gap-2">
                                <div
                                    class="w-8 h-8 rounded-lg bg-brand-100 text-brand-600 flex items-center justify-center">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                    </svg>
                                </div>
                                Ajouter une Dépense
                            </h2>
                        </div>
                        @if ($errors->any())
                        <div class="text-sm" style="color:red;">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form class="p-6 space-y-5" action="{{ route('depenses.store')}}" method="POST">
                            @csrf
                            <input type="hidden" name="colocation_id" value="{{ $colocation->id }}">
                            <!-- Montant -->
                            <div>
                                <label for="montont" class="block text-sm font-semibold text-slate-700 mb-1.5">Montant
                                    Total</label>
                                <div class="relative">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 pl-4 flex items-center">
                                        <span class="text-slate-400 font-medium sm:text-lg">€</span>
                                    </div>
                                    <input type="number" name="montont" placeholder="0.00"
                                        class="block w-full pl-10 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-lg font-bold text-slate-900 focus:bg-white focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition-all placeholder-slate-300"
                                        required>
                                </div>
                            </div>

                            <!-- Titre -->
                            <div>
                                <label for="title"
                                    class="block text-sm font-semibold text-slate-700 mb-1.5">Titre</label>
                                <input type="text" name="title" placeholder="Ex: Courses Carrefour, Internet..."
                                    class="block w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-lg text-sm text-slate-900 focus:bg-white focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition-all"
                                    required>
                            </div>

                            <!-- Row : Date & Catégorie -->
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label for="date"
                                        class="block text-sm font-semibold text-slate-700 mb-1.5">Date</label>
                                    <input type="date" name="date" value="2026-02-26"
                                        class="block w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-lg text-sm text-slate-900 focus:bg-white focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition-all text-slate-500"
                                        required>
                                </div>
                                <div>
                                    <label for="category"
                                        class="block text-sm font-semibold text-slate-700 mb-1.5">Catégorie</label>
                                    <select id="category" name="category"
                                        class="block w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-lg text-sm text-slate-900 focus:bg-white focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition-all appearance-none">
                                        @isset($colocation->categories)
                                        @foreach($colocation->categories as $category)
                                        <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                        @endforeach
                                        @endisset

                                    </select>
                                </div>
                            </div>

                            <!-- Payeur -->
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Payé par</label>
                                <div class="flex gap-3 flex-wrap">
                                    @forelse($colocation->users as $user)
                                    <label class="flex-1 cursor-pointer">
                                        <input type="radio" name="payer" class="peer sr-only" value="{{ $user->id }}" checked>
                                        <div
                                            class="rounded-lg border border-slate-200 bg-white px-4 py-2 text-center hover:bg-slate-50 peer-checked:border-brand-700 peer-checked:bg-brand-50 peer-checked:text-brand-700 transition-all">
                                            <span class="text-sm font-bold">{{ $user->firstname }} {{ $user->lastname }}</span>
                                        </div>
                                    </label>
                                    @empty
                                    <p> there is no user </p>
                                    @endforelse

                                </div>
                            </div>


                            <div class="pt-4">
                                <button type="submit"
                                    class="w-full bg-slate-900 hover:bg-slate-800 text-white font-bold py-3.5 rounded-xl text-sm shadow-md shadow-slate-900/10 transition-all focus:ring-2 focus:ring-slate-900 focus:ring-offset-2">
                                    Enregistrer la dépense
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Colonne de Droite : Tableau des Dépenses -->
                    <div class="lg:col-span-2 space-y-4">

                        <!-- Filtres / Actions -->
                        <div class="flex items-center justify-between gap-4">
                            <!-- Barre de recherche -->
                            <div class="relative flex-1 max-w-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-4 w-4 text-slate-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                                <input type="text" placeholder="Chercher une dépense..."
                                    class="block w-full pl-9 pr-3 py-2 bg-white border border-slate-200 rounded-lg text-sm placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-brand-500 shadow-sm transition-shadow">
                            </div>

                            <!-- Filtre -->
                            <button
                                class="bg-white border border-slate-200 text-slate-600 hover:text-slate-900 hover:bg-slate-50 font-semibold px-4 py-2 rounded-lg ext-sm transition-colors shadow-sm flex items-center gap-2">
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z">
                                    </path>
                                </svg>
                                <span class="hidden sm:inline text-sm">Filtrer</span>
                            </button>
                        </div>

                        <!-- Card Tableau -->
                        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                            <div class="overflow-x-auto">
                                <table class="w-full text-left border-collapse min-w-max">
                                    <thead>
                                        <tr
                                            class="bg-slate-50/80 border-b border-slate-200 text-slate-500 text-[11px] uppercase tracking-widest font-bold">
                                            <th class="px-5 py-3.5">Info</th>
                                            <th class="px-5 py-3.5">Payeur</th>
                                            <th class="px-5 py-3.5 text-right">Montant</th>
                                            <th class="px-5 py-3.5 text-center w-16"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-slate-100">

                                        <!-- Row 1 (Positif - Payé par Moi) -->
                                        @isset($colocation->depenses)
                                        @forelse($colocation->depenses as $depenses)
                                        <tr class="hover:bg-slate-200 transition-colors group">
                                            <td class="px-5 py-4">
                                                <div class="flex items-center gap-4">
                                                    <div
                                                        class="w-10 h-10 rounded-xl bg-orange-50 text-orange-500 flex items-center justify-center flex-shrink-0">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <p class="text-sm font-bold text-slate-900 mb-0.5">{{ $depenses->title }}</p>
                                                        <div
                                                            class="flex items-center gap-2 text-xs text-slate-500 font-medium">
                                                            <span>{{ $depenses->date_pose }}</span>
                                                            <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                                                            <span
                                                                class="bg-slate-100 text-slate-600 px-1.5 py-0.5 rounded">
                                                                @foreach($colocation->categories as $category)
                                                                @if($depenses->category_id == $category->id)
                                                                {{ $category->name }}
                                                                @endif
                                                                @endforeach
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-4 align-middle">
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-xs font-bold bg-brand-50 text-brand-700 border border-brand-100">
                                                    @foreach($colocation->users as $usere)
                                                    @if($depenses->user_id == $usere->id)
                                                    {{ $usere-> firstname }} {{ $usere-> lastname }}
                                                    @endif
                                                    @endforeach
                                                </span>
                                            </td>
                                            <td class="px-5 py-4 text-right align-middle">
                                                <span class="text-base font-extrabold text-slate-900 block">{{ $depenses->montont }}
                                                    €</span>
                                                <!-- Vert car l'utilisateur a payé pour le groupe -->
                                                <span class="text-xs text-brand-600 font-bold block mt-0.5">Vous prêtez
                                                    {{ number_format($depenses->montont/count($colocation->users),2) }}€</span>
                                            </td>
                                            <td class="px-5 py-4 align-middle">
                                                <div
                                                    class="flex justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                                    <button
                                                        class="p-1.5 text-slate-400 hover:text-blue-600 rounded-lg hover:bg-blue-50 transition-colors"
                                                        title="Détails">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                                            </path>
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                    <form action="{{ route('depenses.destroy',$depenses) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" onclick="return confirm('are you sure ?')"
                                                            class="p-1.5 text-slate-400 hover:text-red-600 rounded-lg hover:bg-red-50 transition-colors"
                                                            title="Supprimer">
                                                            <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                                viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @empty

                                        @endforelse
                                        @endisset

                                    </tbody>
                                </table>
                            </div>

                            <!-- Pagination (Static UX) -->
                            <div class="p-4 border-t border-slate-100 bg-slate-50 flex items-center justify-between">
                                <span class="text-xs font-medium text-slate-500">Affiche 1 à 3 sur 12 dépenses</span>
                                <div class="flex gap-2">
                                    <button
                                        class="px-3 py-1.5 border border-slate-200 text-slate-400 rounded-md text-sm font-semibold cursor-not-allowed bg-white"
                                        disabled>&larr;</button>
                                    <button
                                        class="px-3 py-1.5 border border-slate-200 text-slate-700 hover:text-brand-600 hover:bg-slate-50 rounded-md text-sm font-semibold transition-colors bg-white">&rarr;</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </main>
    </div>

</body>

</html>