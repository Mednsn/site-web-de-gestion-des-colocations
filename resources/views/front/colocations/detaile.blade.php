<!DOCTYPE html>
<html lang="fr" class="h-full bg-slate-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails Colocation - ColocManage</title>
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
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12 space-y-8">

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

                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                        <div>
                            <div class="flex items-center gap-3 mb-2">
                                <div
                                    class="w-12 h-12 bg-brand-100 text-brand-600 rounded-xl flex items-center justify-center font-bold text-xl ring-4 ring-white shadow-sm">
                                    A
                                </div>
                                <div>
                                    <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Appart Gambetta
                                    </h2>
                                    <p class="text-slate-500 text-sm mt-0.5">Colocation au centre avec balcon. Idéal
                                        étudiants.</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <span
                                class="bg-brand-50 text-brand-700 border border-brand-200 text-xs font-bold px-3 py-1.5 rounded-lg uppercase tracking-wide">
                                Propriétaire
                            </span>
                            <form action="" method="POST">
                                @csrf
                            <button
                                class="bg-white border border-slate-200 hover:border-slate-300 text-slate-700 p-2.5 rounded-xl shadow-sm hover:shadow transition-all"
                                title="Modifier">
                                <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                    </path>
                                </svg>
                            </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Tabs (si on veut ajouter de la navigation interne un jour) -->
                <div class="border-b border-slate-200">
                    <nav class="-mb-px flex space-x-8">
                        <a href="#"
                            class="border-brand-500 text-brand-600 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                            Membres & Paramètres
                        </a>
                        <a href="expenses.html"
                            class="border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                            Dépenses récentes
                        </a>
                    </nav>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                    <!-- Colonne gauche : Liste des membres -->
                    <div class="lg:col-span-2 space-y-6">

                        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                            <div
                                class="px-6 py-5 border-b border-slate-100 flex justify-between items-center bg-slate-50/50">
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900">Membres actuels</h3>
                                    <p class="text-sm text-slate-500">3 personnes dans cette colocation</p>
                                </div>
                            </div>

                            <ul class="divide-y divide-slate-100">
                                <!-- Membre 1 (Moi - Admin/Propriétaire) -->
                                <li class="p-6 flex items-center justify-between hover:bg-slate-50 transition-colors">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="h-12 w-12 rounded-full bg-gradient-to-tr from-brand-500 to-emerald-400 text-white flex items-center justify-center font-bold shadow-sm border border-white">
                                            JD
                                        </div>
                                        <div>
                                            <p class="font-bold text-slate-900">Moi (Jean Dupont)</p>
                                            <p class="text-sm text-slate-500">jean.dupont@email.com</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="bg-slate-100 text-slate-600 text-xs font-bold px-2.5 py-1 rounded border border-slate-200">Owner</span>
                                    </div>
                                </li>

                                <!-- Membre 2 -->
                                <li class="p-6 flex items-center justify-between hover:bg-slate-50 transition-colors">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="h-12 w-12 rounded-full bg-slate-200 text-slate-600 flex items-center justify-center font-bold border border-white shadow-sm">
                                            MR
                                        </div>
                                        <div>
                                            <p class="font-bold text-slate-900">Marie Rousseau</p>
                                            <p class="text-sm text-slate-500">marie.rousseau@email.com</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <button
                                            class="text-slate-400 hover:text-red-600 transition-colors p-2 rounded-lg hover:bg-red-50"
                                            title="Retirer de la coloc">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </li>

                                <!-- Membre 3 -->
                                <li class="p-6 flex items-center justify-between hover:bg-slate-50 transition-colors">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="h-12 w-12 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold border border-white shadow-sm">
                                            PL
                                        </div>
                                        <div>
                                            <p class="font-bold text-slate-900">Paul Leroy</p>
                                            <p class="text-sm text-slate-500">paul.leroy@email.com</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <button
                                            class="text-slate-400 hover:text-red-600 transition-colors p-2 rounded-lg hover:bg-red-50"
                                            title="Retirer de la coloc">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1-1v3M4 7h16">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <!-- Colonne droite : Inviter & Infos -->
                    <div class="space-y-6">

                        <!-- Bloc Inviter -->
                        <div
                            class="bg-white rounded-2xl shadow-sm border border-brand-200 overflow-hidden relative group">
                            <!-- Background decoration -->
                            <div
                                class="absolute top-0 right-0 w-24 h-24 bg-brand-50 rounded-bl-full -z-0 opacity-50 group-hover:scale-110 transition-transform">
                            </div>

                            <div class="p-6 relative z-10">
                                <div
                                    class="w-10 h-10 bg-brand-100 text-brand-600 rounded-lg flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-slate-900 mb-2">Inviter un colocataire</h3>
                                <p class="text-sm text-slate-500 mb-5">Ajoutez un nouveau membre pour qu'il puisse
                                    participer aux dépenses.</p>

                                <form class="space-y-4">
                                    <div>
                                        <label for="email" class="sr-only">Adresse email</label>
                                        <input type="email" id="email" required placeholder="adresse@email.com"
                                            class="w-full rounded-xl border-slate-300 shadow-sm focus:border-brand-500 focus:ring-brand-500 transition-colors sm:text-sm px-4 py-2.5 border bg-slate-50 focus:bg-white outline-none">
                                    </div>
                                    <button type="button"
                                        class="w-full bg-slate-900 hover:bg-slate-800 text-white font-bold py-2.5 px-4 rounded-xl transition-colors shadow-sm flex justify-center items-center gap-2">
                                        Envoyer l'invitation
                                    </button>
                                </form>
                            </div>
                        </div>

                        <!-- Bloc Infos coloc -->
                        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
                            
                            <!-- <div class="mt-6 pt-5 border-t border-slate-100"> -->
                                <button
                                    class="w-full text-red-600 hover:bg-red-50 font-semibold py-2.5 px-4 rounded-xl transition-colors border border-transparent hover:border-red-100 text-sm flex justify-center items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                        </path>
                                    </svg>
                                    Supprimer la colocation
                                </button>
                            <!-- </div> -->
                        </div>

                    </div>
                </div>

            </div>
        </main>
    </div>

</body>

</html>