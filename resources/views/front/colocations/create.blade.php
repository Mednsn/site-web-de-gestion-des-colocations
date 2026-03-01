<!DOCTYPE html>
<html lang="fr" class="h-full bg-slate-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle Colocation - ColocManage</title>
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
                        <a href="index.html" class="flex items-center gap-2 group">
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
                            <a href="colocations.html"
                                class="px-4 py-2 rounded-lg bg-slate-100 text-slate-900 font-semibold text-sm transition-colors">Mes
                                Colocations</a>
                            <a href="depenses.html"
                                class="px-4 py-2 rounded-lg text-slate-500 hover:text-slate-900 hover:bg-slate-50 font-medium text-sm transition-colors">Dépenses</a>
                            <a href="balances.html"
                                class="px-4 py-2 rounded-lg text-slate-500 hover:text-slate-900 hover:bg-slate-50 font-medium text-sm transition-colors">Soldes</a>
                        </nav>
                    </div>

                    <!-- User Right -->
                    <div class="flex items-center gap-4">
                        <button
                            class="p-2 text-slate-400 hover:text-slate-600 rounded-full hover:bg-slate-100 transition-colors relative">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                                </path>
                            </svg>
                            <span
                                class="absolute top-1.5 right-1.5 block h-2.5 w-2.5 rounded-full bg-red-500 ring-2 ring-white"></span>
                        </button>
                        <div
                            class="h-8 w-8 rounded-full bg-gradient-to-tr from-brand-500 to-emerald-400 text-white flex items-center justify-center font-bold text-sm shadow-sm border border-white cursor-pointer">
                            JD
                        </div>
                        <div><span>{{ $user->firstname}} {{ $user->lastname  }} </span></div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content Scrollable -->
        <main class="flex-1 overflow-y-auto w-full pb-20">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12 space-y-8">

                <!-- Header de page avec bouton retour -->
                <div>
                    <a href="colocations.html"
                        class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-slate-700 transition-colors mb-4 font-medium">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Retour aux colocations
                    </a>
                    <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Nouvelle Colocation</h2>
                    <p class="text-slate-500 mt-2 text-lg">Créez un nouvel espace pour gérer les finances de votre
                        logement partagé.</p>
                </div>

                <!-- Formulaire -->
               
                <form action="{{ route('colocation.store') }}" method="POST" class="bg-white rounded-2xl p-6 sm:p-8 shadow-sm border border-slate-200">
                    @csrf
                    <div class="space-y-6">
                        <!-- Nom de la colocation -->
                        <div>
                            <label for="name" class="block text-sm font-semibold text-slate-900 mb-2">Nom de la
                                colocation <span class="text-red-500">*</span></label>
                            <input type="text" id="name" name="name" required placeholder="ex: Appart Gambetta"
                                class="w-full rounded-xl border-slate-300 shadow-sm focus:border-brand-500 focus:ring-brand-500 transition-colors sm:text-sm px-4 py-3 border bg-slate-50 focus:bg-white outline-none">
                        </div>

                        <!-- Description -->
                        <div>
                            <label for="description" class="block text-sm font-semibold text-slate-900 mb-2">Description
                               </label>
                            <textarea id="description" name="description" rows="3"
                                placeholder="Quelques mots sur votre colocation..."
                                class="w-full rounded-xl border-slate-300 shadow-sm focus:border-brand-500 focus:ring-brand-500 transition-colors sm:text-sm px-4 py-3 border bg-slate-50 focus:bg-white outline-none"></textarea>
                        </div>

                    </div>

                    <!-- Ligne de séparation -->
                    <hr class="my-8 border-slate-200">

                    <!-- Actions -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-end items-center">
                        <a href="{{ route('colocation.index')}}"
                            class="w-full sm:w-auto px-6 py-3 border border-slate-200 text-slate-600 font-semibold rounded-xl hover:bg-slate-50 transition-colors text-center text-sm">
                            Annuler
                        </a>
                        <button type="submit"
                            class="w-full sm:w-auto px-6 py-3 bg-brand-600 hover:bg-brand-700 text-white font-bold rounded-xl shadow-sm hover:shadow transition-all text-sm flex justify-center items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            Créer la colocation
                        </button>
                    </div>

                </form>

            </div>
        </main>
    </div>

</body>

</html>