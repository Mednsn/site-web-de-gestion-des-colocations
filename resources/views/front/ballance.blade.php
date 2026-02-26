<!DOCTYPE html>
<html lang="fr" class="h-full bg-slate-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soldes de la Coloc - ColocManage</title>
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
                                class="px-4 py-2 rounded-lg text-slate-500 hover:text-slate-900 hover:bg-slate-50 font-medium text-sm transition-colors">Dépenses</a>
                            <a href="balances.html"
                                class="px-4 py-2 rounded-lg bg-slate-100 text-slate-900 font-semibold text-sm transition-colors">Soldes</a>
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
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">

                <div class="mb-10 flex flex-col md:flex-row md:items-end justify-between gap-4">
                    <div>
                        <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">Règlements & Soldes</h1>
                        <p class="text-slate-500 mt-2 text-sm sm:text-base">Visualisez en un coup d'œil qui doit de
                            l'argent à qui.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">

                    <!-- Colonne 1 : Mes Dettes (Rouge) -->
                    <div class="space-y-6">
                        <div class="flex items-center justify-between pb-4 border-b-2 border-slate-200">
                            <h2 class="text-xl font-bold flex items-center gap-2 text-slate-900">
                                <span
                                    class="w-8 h-8 rounded-full bg-red-100 text-red-600 flex items-center justify-center">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                    </svg>
                                </span>
                                Mes Dettes
                            </h2>
                            <div class="text-right">
                                <span class="block text-xs font-semibold text-slate-500 uppercase tracking-widest">Total
                                    à payer</span>
                                <span class="text-xl font-black text-red-600 tracking-tight">- 21.66 €</span>
                            </div>
                        </div>

                        <!-- Card Dette Active -->
                        <div
                            class="bg-white rounded-2xl shadow-sm border-2 border-red-100 p-6 relative overflow-hidden group">
                            <!-- Visual Rouge discret -->
                            <div
                                class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-bl from-red-50 to-transparent -z-0">
                            </div>

                            <div class="flex justify-between items-start mb-6 relative z-10">
                                <div class="flex gap-4 items-center">
                                    <div
                                        class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold text-xl ring-4 ring-white shadow-sm">
                                        M</div>
                                    <div>
                                        <p class="text-sm font-semibold text-slate-500">Vous devez à</p>
                                        <h3 class="text-lg font-bold text-slate-900 leading-tight">Marie</h3>
                                    </div>
                                </div>
                                <div class="bg-red-50 text-red-700 px-3 py-1.5 rounded-lg border border-red-100">
                                    <span class="text-2xl font-black tracking-tight">21.66<span
                                            class="text-base text-red-500 ml-0.5">€</span></span>
                                </div>
                            </div>

                            <div class="bg-slate-50 rounded-xl p-4 mb-6 border border-slate-100">
                                <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2">Concerne :
                                </p>
                                <ul class="space-y-1.5 text-sm font-medium text-slate-700">
                                    <li class="flex justify-between">
                                        <span>Facture Électricité</span>
                                        <span class="text-slate-500 opacity-70">21.66 €</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="flex gap-3 relative z-10">
                                <button
                                    class="flex-[2] bg-slate-900 hover:bg-slate-800 text-white py-3 rounded-xl font-bold text-sm shadow-md shadow-slate-900/10 transition-all flex items-center justify-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                    Payer Marie
                                </button>
                                <button
                                    class="flex-1 bg-white border border-slate-200 hover:bg-slate-50 hover:text-red-600 text-slate-600 font-bold py-3 rounded-xl text-sm transition-colors text-center"
                                    title="Marquer comme payé hors de l'application">
                                    Marquer payé
                                </button>
                            </div>
                        </div>

                    </div>


                    <!-- Colonne 2 : On me doit (Vert) -->
                    <div class="space-y-6">
                        <div class="flex items-center justify-between pb-4 border-b-2 border-slate-200">
                            <h2 class="text-xl font-bold flex items-center gap-2 text-slate-900">
                                <span
                                    class="w-8 h-8 rounded-full bg-brand-100 text-brand-600 flex items-center justify-center">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                                    </svg>
                                </span>
                                On Me Doit
                            </h2>
                            <div class="text-right">
                                <span class="block text-xs font-semibold text-slate-500 uppercase tracking-widest">Total
                                    à recevoir</span>
                                <span class="text-xl font-black text-brand-600 tracking-tight">+ 83.00 €</span>
                            </div>
                        </div>

                        <!-- Card Créance -->
                        <div
                            class="bg-white rounded-2xl shadow-sm border-2 border-brand-100 p-6 relative overflow-hidden group">
                            <!-- Visual Vert discret -->
                            <div
                                class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-bl from-brand-50 to-transparent -z-0">
                            </div>

                            <div class="flex justify-between items-start mb-6 relative z-10">
                                <div class="flex gap-4 items-center">
                                    <div
                                        class="w-12 h-12 bg-purple-100 text-purple-600 rounded-full flex items-center justify-center font-bold text-xl ring-4 ring-white shadow-sm">
                                        L</div>
                                    <div>
                                        <p class="text-sm font-semibold text-slate-500">Doit vous payer</p>
                                        <h3 class="text-lg font-bold text-slate-900 leading-tight">Lucas</h3>
                                    </div>
                                </div>
                                <div class="bg-brand-50 text-brand-700 px-3 py-1.5 rounded-lg border border-brand-100">
                                    <span class="text-2xl font-black tracking-tight">83.00<span
                                            class="text-base text-brand-500 ml-0.5">€</span></span>
                                </div>
                            </div>

                            <div class="bg-slate-50 rounded-xl p-4 mb-6 border border-slate-100">
                                <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2">Concerne :
                                </p>
                                <ul class="space-y-1.5 text-sm font-medium text-slate-700">
                                    <li class="flex justify-between">
                                        <span>Courses hebdomadaires</span>
                                        <span class="text-slate-500 opacity-70">83.00 €</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="flex gap-3 relative z-10">
                                <button
                                    class="flex-1 bg-white border border-slate-200 hover:bg-slate-50 text-slate-700 py-3 rounded-xl font-bold text-sm transition-colors flex items-center justify-center gap-2">
                                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                                        </path>
                                    </svg>
                                    Relancer
                                </button>
                                <button
                                    class="flex-[2] bg-brand-50 hover:bg-brand-100 text-brand-700 border border-brand-200 font-bold py-3 rounded-xl text-sm transition-colors text-center"
                                    title="Confirmer que l'argent a été reçu">
                                    Valider le paiement
                                </button>
                            </div>
                        </div>

                        <!-- État Zéro (Exemple si une personne ne doit rien) -->
                        <div
                            class="bg-slate-50/50 rounded-2xl border-2 border-dashed border-slate-200 p-8 flex flex-col items-center justify-center text-center">
                            <div
                                class="w-12 h-12 rounded-full bg-brand-100 text-brand-500 flex items-center justify-center mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="3"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900">Tout est à jour</h3>
                            <p class="text-sm text-slate-500 mt-1">Personne d'autre ne vous doit d'argent.</p>
                        </div>
                    </div>

                </div>
            </div>
        </main>
    </div>

</body>

</html>