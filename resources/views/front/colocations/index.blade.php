<!DOCTYPE html>
<html lang="fr" class="h-full bg-slate-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Colocations - ColocManage</title>
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

    <!-- Sidebar / Topbar logic (Assuming Topbar for global navigation of this modern app) -->
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
                                class="px-4 py-2 rounded-lg bg-slate-100 text-slate-900 font-semibold text-sm transition-colors">Mes
                                Colocations</a>
                            <a href="expenses.html"
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
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12 space-y-12">

                <!-- Section 1 : Gestion des Catégories (Paramétrage global) -->
                

                <!-- Section 2 : Mes Colocations -->
                <section>
                    <div class="mb-6 flex flex-col sm:flex-row sm:items-end justify-between gap-4">
                        <div>
                            <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">Mes Colocations</h2>
                            <p class="text-slate-500 mt-1">Gérez vos collocations actuelles ou rejoignez-en une
                                nouvelle.</p>
                        </div>
                        <a href="{{ route('colocation.create') }}"
                            class="bg-white border border-slate-200 hover:border-slate-300 text-slate-700 font-bold py-2.5 px-5 rounded-xl shadow-sm hover:shadow transition-all flex items-center justify-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4"></path>
                            </svg>
                            Nouvelle Coloc
                        </a>
                    </div>

                    <!-- Grille de Colocations -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                        <!-- Coloc Card 1 (Owner) -->
                        <div
                            class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 hover:border-brand-200 hover:shadow-md transition-all flex flex-col h-full group relative overflow-hidden">
                            <!-- Déco graphique -->
                            <div
                                class="absolute top-0 right-0 w-32 h-32 bg-brand-50 rounded-bl-full -z-0 opacity-50 group-hover:scale-110 transition-transform">
                            </div>

                            <div class="flex justify-between items-start mb-5 relative z-10">
                                <div
                                    class="w-12 h-12 bg-brand-100 text-brand-600 rounded-xl flex items-center justify-center font-bold text-xl ring-4 ring-white shadow-sm">
                                    A
                                </div>
                                <!-- Badge Rôle -->
                                <span
                                    class="bg-brand-50 text-brand-700 border border-brand-200 text-xs font-bold px-2.5 py-1 rounded-md uppercase tracking-wide">
                                    Propriétaire (Owner)
                                </span>
                            </div>

                            <div class="relative z-10 flex-1">
                                <h3 class="text-xl font-bold text-slate-900 mb-1">Appart Gambetta</h3>
                                <div class="flex items-center gap-1.5 text-slate-500 text-sm mb-6">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                    <span>3 membres actifs</span>
                                </div>
                            </div>

                            <div class="pt-5 border-t border-slate-100 flex gap-3 relative z-10">
                                <button
                                    class="flex-1 bg-slate-900 hover:bg-slate-800 text-white font-bold py-2.5 rounded-lg text-sm transition-colors shadow-sm">
                                    Accéder au tableau
                                </button>
                                <!-- Bouton settings discret -->
                                <button
                                    class="px-3 bg-white border border-slate-200 hover:bg-slate-50 text-slate-500 rounded-lg transition-colors"
                                    title="Paramètres de la coloc">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Coloc Card 2 (Member) -->
                        <div
                            class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 hover:border-slate-300 hover:shadow-md transition-all flex flex-col h-full group relative overflow-hidden">
                            <!-- Déco graphique -->
                            <div
                                class="absolute top-0 right-0 w-32 h-32 bg-amber-50 rounded-bl-full -z-0 opacity-50 group-hover:scale-110 transition-transform">
                            </div>

                            <div class="flex justify-between items-start mb-5 relative z-10">
                                <div
                                    class="w-12 h-12 bg-amber-100 text-amber-600 rounded-xl flex items-center justify-center font-bold text-xl ring-4 ring-white shadow-sm">
                                    V
                                </div>
                                <!-- Badge Rôle -->
                                <span
                                    class="bg-amber-50 text-amber-700 border border-amber-200 text-xs font-bold px-2.5 py-1 rounded-md uppercase tracking-wide">
                                    Membre
                                </span>
                            </div>

                            <div class="relative z-10 flex-1">
                                <h3 class="text-xl font-bold text-slate-900 mb-1">Villa des Étudiants</h3>
                                <div class="flex items-center gap-1.5 text-slate-500 text-sm mb-6">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                    <span>5 membres actifs</span>
                                </div>
                            </div>

                            <div class="pt-5 border-t border-slate-100 flex gap-3 relative z-10">
                                <a href="{{ route('detaille.index') }}"
                                    class="flex-[3] bg-slate-900 hover:bg-slate-800 text-white font-bold py-2.5 text-center rounded-lg text-sm transition-colors shadow-sm">
                                    Accéder
                                </a>
                                <!-- Bouton Quitter (rouge) pour un membre -->
                                <button
                                    class="flex-1 bg-red-50 hover:bg-red-100 text-red-600 border border-red-200 font-bold py-2.5 rounded-lg text-sm transition-colors flex justify-center items-center"
                                    title="Quitter la colocation">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </div>
                </section>

            </div>
        </main>
    </div>

</body>

</html>