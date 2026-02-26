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
                    fontFamily: { sans: ['Inter', 'sans-serif'] },
                    colors: {
                        brand: { 50: '#f0fdf4', 100: '#dcfce7', 500: '#22c55e', 600: '#16a34a', 700: '#15803d', 900: '#14532d' }
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
                        <a href="#" class="flex items-center gap-2 group">
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
                                class="px-4 py-2 rounded-lg text-slate-500 hover:text-slate-900 hover:bg-slate-50 font-medium text-sm transition-colors">Mes
                                Colocations</a>
                            <a href="expenses.html"
                                class="px-4 py-2 rounded-lg bg-slate-100 text-slate-900 font-semibold text-sm transition-colors">Dépenses</a>
                            <a href="balances.html"
                                class="px-4 py-2 rounded-lg text-slate-500 hover:text-slate-900 hover:bg-slate-50 font-medium text-sm transition-colors">Soldes</a>
                        </nav>
                    </div>

                    <!-- User Right -->
                    <div class="flex items-center gap-4">
                        <div class="hidden sm:flex items-center bg-slate-100 rounded-lg p-1 border border-slate-200">
                            <div
                                class="px-3 py-1 bg-white shadow-sm rounded-md text-sm font-bold text-slate-800 flex items-center gap-2 cursor-pointer">
                                <span class="w-2 h-2 rounded-full bg-brand-500"></span> Appart Gambetta
                            </div>
                        </div>

                        <div class="w-px h-6 bg-slate-200 mx-2 hidden sm:block"></div>

                        <div
                            class="h-8 w-8 rounded-full bg-gradient-to-tr from-brand-500 to-emerald-400 text-white flex items-center justify-center font-bold text-sm shadow-sm border border-white cursor-pointer">
                            JD
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content Scrollable -->
        <main class="flex-1 overflow-y-auto w-full pb-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">

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
                        class="lg:col-span-1 lg:sticky lg:top-8 bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">

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

                        <form class="p-6 space-y-5">

                            <!-- Montant -->
                            <div>
                                <label for="amount" class="block text-sm font-semibold text-slate-700 mb-1.5">Montant
                                    Total</label>
                                <div class="relative">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 pl-4 flex items-center">
                                        <span class="text-slate-400 font-medium sm:text-lg">€</span>
                                    </div>
                                    <input type="number" id="amount" placeholder="0.00"
                                        class="block w-full pl-10 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-lg font-bold text-slate-900 focus:bg-white focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition-all placeholder-slate-300"
                                        required>
                                </div>
                            </div>

                            <!-- Titre -->
                            <div>
                                <label for="title"
                                    class="block text-sm font-semibold text-slate-700 mb-1.5">Description</label>
                                <input type="text" id="title" placeholder="Ex: Courses Carrefour, Internet..."
                                    class="block w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-lg text-sm text-slate-900 focus:bg-white focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition-all"
                                    required>
                            </div>

                            <!-- Row : Date & Catégorie -->
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label for="date"
                                        class="block text-sm font-semibold text-slate-700 mb-1.5">Date</label>
                                    <input type="date" id="date" value="2026-02-26"
                                        class="block w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-lg text-sm text-slate-900 focus:bg-white focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition-all text-slate-500"
                                        required>
                                </div>
                                <div>
                                    <label for="category"
                                        class="block text-sm font-semibold text-slate-700 mb-1.5">Catégorie</label>
                                    <select id="category"
                                        class="block w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-lg text-sm text-slate-900 focus:bg-white focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition-all appearance-none">
                                        <option>Alimentation</option>
                                        <option>Loyer</option>
                                        <option>Électricité / Gaz</option>
                                        <option>Internet</option>
                                        <option>Autre</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Payeur -->
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Payé par</label>
                                <div class="flex gap-3">
                                    <label class="flex-1 cursor-pointer">
                                        <input type="radio" name="payer" class="peer sr-only" checked>
                                        <div
                                            class="rounded-lg border border-slate-200 bg-white px-4 py-2 text-center hover:bg-slate-50 peer-checked:border-brand-500 peer-checked:bg-brand-50 peer-checked:text-brand-700 transition-all">
                                            <span class="text-sm font-bold">Moi</span>
                                        </div>
                                    </label>
                                    <label class="flex-1 cursor-pointer">
                                        <input type="radio" name="payer" class="peer sr-only">
                                        <div
                                            class="rounded-lg border border-slate-200 bg-white px-4 py-2 text-center hover:bg-slate-50 peer-checked:border-blue-500 peer-checked:bg-blue-50 peer-checked:text-blue-700 transition-all">
                                            <span class="text-sm font-bold">Marie</span>
                                        </div>
                                    </label>
                                    <label class="flex-1 cursor-pointer">
                                        <input type="radio" name="payer" class="peer sr-only">
                                        <div
                                            class="rounded-lg border border-slate-200 bg-white px-4 py-2 text-center hover:bg-slate-50 peer-checked:border-purple-500 peer-checked:bg-purple-50 peer-checked:text-purple-700 transition-all">
                                            <span class="text-sm font-bold">Lucas</span>
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <!-- Répartition -->
                            <div class="pt-2">
                                <div class="flex items-center justify-between mb-2">
                                    <label class="block text-sm font-semibold text-slate-700">Pour qui ?</label>
                                    <span
                                        class="text-xs font-medium text-brand-600 bg-brand-50 px-2 py-0.5 rounded">Partage
                                        équitable</span>
                                </div>
                                <div class="flex -space-x-2 overflow-hidden mb-1">
                                    <div
                                        class="inline-block h-8 w-8 rounded-full ring-2 ring-white bg-brand-100 text-brand-600 text-xs font-bold flex items-center justify-center shadow-sm">
                                        JD</div>
                                    <div
                                        class="inline-block h-8 w-8 rounded-full ring-2 ring-white bg-blue-100 text-blue-600 text-xs font-bold flex items-center justify-center shadow-sm">
                                        M</div>
                                    <div
                                        class="inline-block h-8 w-8 rounded-full ring-2 ring-white bg-purple-100 text-purple-600 text-xs font-bold flex items-center justify-center shadow-sm">
                                        L</div>
                                </div>
                                <button type="button"
                                    class="text-xs font-semibold text-slate-500 hover:text-brand-600 transition-colors">Modifier
                                    la répartition...</button>
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
                                        <tr class="hover:bg-slate-50/50 transition-colors group">
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
                                                        <p class="text-sm font-bold text-slate-900 mb-0.5">Courses
                                                            hebdomadaires</p>
                                                        <div
                                                            class="flex items-center gap-2 text-xs text-slate-500 font-medium">
                                                            <span>26 Fév 2026</span>
                                                            <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                                                            <span
                                                                class="bg-slate-100 text-slate-600 px-1.5 py-0.5 rounded">Alimentation</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-4 align-middle">
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-xs font-bold bg-brand-50 text-brand-700 border border-brand-100">
                                                    Moi
                                                </span>
                                            </td>
                                            <td class="px-5 py-4 text-right align-middle">
                                                <span class="text-base font-extrabold text-slate-900 block">124.50
                                                    €</span>
                                                <!-- Vert car l'utilisateur a payé pour le groupe -->
                                                <span class="text-xs text-brand-600 font-bold block mt-0.5">Vous prêtez
                                                    83.00 €</span>
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
                                                    <button
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
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Row 2 (Négatif - Payé par Un Autre) -->
                                        <tr class="hover:bg-slate-50/50 transition-colors group">
                                            <td class="px-5 py-4">
                                                <div class="flex items-center gap-4">
                                                    <div
                                                        class="w-10 h-10 rounded-xl bg-indigo-50 text-indigo-500 flex items-center justify-center flex-shrink-0">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <p class="text-sm font-bold text-slate-900 mb-0.5">Facture
                                                            Électricité</p>
                                                        <div
                                                            class="flex items-center gap-2 text-xs text-slate-500 font-medium">
                                                            <span>24 Fév 2026</span>
                                                            <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                                                            <span
                                                                class="bg-slate-100 text-slate-600 px-1.5 py-0.5 rounded">Électricité
                                                                / Gaz</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-4 align-middle">
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-xs font-bold bg-blue-50 text-blue-700 border border-blue-100">
                                                    Marie
                                                </span>
                                            </td>
                                            <td class="px-5 py-4 text-right align-middle">
                                                <span class="text-base font-extrabold text-slate-900 block">65.00
                                                    €</span>
                                                <!-- Rouge car l'utilisateur doit cette somme = Dette -->
                                                <span class="text-xs text-red-600 font-bold block mt-0.5">Vous devez
                                                    21.66 €</span>
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
                                                    <button
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
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Row 3 (Personnel / Non partagé) -->
                                        <tr class="hover:bg-slate-50/50 transition-colors group">
                                            <td class="px-5 py-4">
                                                <div class="flex items-center gap-4">
                                                    <div
                                                        class="w-10 h-10 rounded-xl bg-purple-50 text-purple-500 flex items-center justify-center flex-shrink-0">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.906 14.142 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <p class="text-sm font-bold text-slate-900 mb-0.5">Abonnement
                                                            Box Internet</p>
                                                        <div
                                                            class="flex items-center gap-2 text-xs text-slate-500 font-medium">
                                                            <span>15 Fév 2026</span>
                                                            <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                                                            <span
                                                                class="bg-slate-100 text-slate-600 px-1.5 py-0.5 rounded">Internet</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-4 align-middle">
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-xs font-bold bg-purple-50 text-purple-700 border border-purple-100">
                                                    Lucas
                                                </span>
                                            </td>
                                            <td class="px-5 py-4 text-right align-middle">
                                                <span class="text-base font-extrabold text-slate-900 block">30.00
                                                    €</span>
                                                <span class="text-xs text-red-600 font-bold block mt-0.5">Vous devez
                                                    10.00 €</span>
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
                                                    <button
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
                                                </div>
                                            </td>
                                        </tr>

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