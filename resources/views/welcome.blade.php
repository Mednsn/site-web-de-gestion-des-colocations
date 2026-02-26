<!DOCTYPE html>
<html lang="fr" class="bg-slate-50 scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ColocManage - Nouveau Design Accueil</title>
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
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

<body class="text-slate-800 antialiased selection:bg-brand-500/30 overflow-x-hidden">

    <!-- Navbar Minimaliste -->
    @if (Route::has('login'))
    <nav class="absolute top-0 w-full z-50 py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <a href="#" class="flex items-center gap-2 group">
                <div
                    class="w-10 h-10 rounded-2xl bg-slate-900 flex items-center justify-center shadow-md shadow-slate-900/10 group-hover:bg-brand-600 transition-colors">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2.5"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                </div>
                <span
                    class="font-black text-2xl tracking-tight text-slate-900 group-hover:text-brand-600 transition-colors">ColocManage</span>
            </a>
            @auth
            <div>
                <form action="/logout" method="POST">
                @csrf
                <button type="submit"
                    class="bg-brand-500 hover:bg-brand-600 text-white text-sm font-bold py-3 px-6 rounded-xl shadow-lg shadow-brand-500/30 transition-all hover:scale-105">
                    desconected
                </button>
                </form>
            </div>
            @else
            <div class="flex items-center gap-4">
                <div>
                    <a href="{{ route('login') }}"
                        class="bg-slate-50 hover:bg-brand-300 text-blue-700 text-sm font-bold py-3 px-6 rounded-xl shadow-lg shadow-green-500/30 transition-all hover:scale-105">
                        connexion
                    </a>
                </div>
                @if (Route::has('register'))
                <div>
                    <a href="{{ route('register') }}"
                        class="bg-brand-500 hover:bg-brand-600 text-white text-sm font-bold py-3 px-6 rounded-xl shadow-lg shadow-brand-500/30 transition-all hover:scale-105">
                        inscription
                    </a>
                </div>
                @endif
            </div>
            @endauth
        </div>
    </nav>
    @endif

    <!-- Split Hero Section -->
    <header class="relative min-h-screen flex items-center pt-24 pb-12 overflow-hidden bg-slate-50">
        <div
            class="absolute inset-0 z-0 bg-[radial-gradient(#e2e8f0_1px,transparent_1px)] [background-size:24px_24px] opacity-60">
        </div>

        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 items-center">

            <div class="max-w-2xl">
                <div
                    class="inline-flex items-center gap-3 px-3 py-1.5 rounded-full bg-white border border-slate-200 shadow-sm mb-8">
                    <span
                        class="bg-amber-100 text-amber-700 text-[10px] font-black uppercase tracking-widest px-2 py-0.5 rounded-full">V
                        2.0</span>
                    <span class="text-xs font-bold text-slate-600 pr-2">Tout nouveau design 2025</span>
                </div>

                <h1
                    class="text-5xl sm:text-6xl lg:text-[4.5rem] font-black text-slate-900 tracking-tight leading-[1.05] mb-6">
                    Votre colocation <br>
                    <span class="relative inline-block">
                        <span class="relative z-10 text-white px-2">100% carrée.</span>
                        <div
                            class="absolute inset-0 bg-brand-600 transform -skew-x-[12deg] rounded-lg -z-0 h-full w-full">
                        </div>
                    </span>
                </h1>

                <p class="text-xl text-slate-500 font-medium mb-10 max-w-lg leading-relaxed">
                    Ajoutez vos factures, visualisez qui doit quoi, et réglez vos dettes en quelques secondes. Simple,
                    visuel et entièrement gratuit.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('register') }}"
                        class="bg-slate-900 hover:bg-slate-800 text-white font-bold text-lg py-4 px-8 rounded-2xl shadow-xl shadow-slate-900/20 transition-all hover:-translate-y-1 text-center flex items-center justify-center gap-2">
                        Créer une coloc
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>

                <div class="mt-10 flex items-center gap-4">
                    <div class="flex -space-x-3 overflow-hidden">
                        <div
                            class="w-10 h-10 rounded-full bg-blue-100 border-2 border-slate-50 flex items-center justify-center font-bold text-blue-700 text-xs">
                            AM</div>
                        <div
                            class="w-10 h-10 rounded-full bg-brand-100 border-2 border-slate-50 flex items-center justify-center font-bold text-brand-700 text-xs">
                            JP</div>
                        <div
                            class="w-10 h-10 rounded-full bg-purple-100 border-2 border-slate-50 flex items-center justify-center font-bold text-purple-700 text-xs">
                            KL</div>
                        <div
                            class="w-10 h-10 rounded-full bg-orange-100 border-2 border-slate-50 flex items-center justify-center font-bold text-orange-700 text-xs shadow-inner">
                            +9k</div>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-slate-900">Utilisé par 9 540 colocataires</p>
                        <div class="flex items-center text-amber-400 gap-0.5 mt-0.5">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>

            </div>

            <div
                class="relative h-[500px] lg:h-[600px] w-full mt-10 lg:mt-0 flex items-center justify-center pointer-events-none">

                <div
                    class="absolute z-20 w-80 bg-white rounded-3xl shadow-2xl shadow-slate-900/10 border border-slate-100 p-6 transform rotate-3 hover:rotate-0 transition-transform duration-500">
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 bg-brand-100 text-brand-600 rounded-xl flex items-center justify-center font-black">
                                M</div>
                            <div>
                                <h3 class="font-bold text-slate-900">Marie C.</h3>
                                <p class="text-[10px] text-slate-500 font-bold uppercase tracking-widest">Vous doit</p>
                            </div>
                        </div>
                        <div class="bg-brand-50 text-brand-700 px-3 py-1 rounded-lg border border-brand-100">
                            <span class="text-xl font-black">21,50€</span>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <div
                            class="bg-slate-50 p-3 rounded-xl border border-slate-100 flex justify-between items-center">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-8 h-8 rounded-lg bg-orange-100 flex items-center justify-center text-orange-600">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-bold text-slate-900">Courses SuperU</span>
                                    <span class="text-[10px] text-slate-400 font-medium">Aujourd'hui</span>
                                </div>
                            </div>
                            <span class="text-sm font-bold text-slate-900">43.00€</span>
                        </div>
                        <div
                            class="bg-slate-50 p-3 rounded-xl border border-slate-100 flex justify-between items-center">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center text-blue-600">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-bold text-slate-900">Électricité EDF</span>
                                    <span class="text-[10px] text-slate-400 font-medium">Hier</span>
                                </div>
                            </div>
                            <span class="text-sm font-bold text-slate-900">85.20€</span>
                        </div>
                    </div>
                    <div
                        class="mt-6 w-full h-10 bg-brand-600 rounded-xl flex items-center justify-center text-white text-sm font-bold shadow-md shadow-brand-500/20">
                        Rappeler à Marie
                    </div>
                </div>

                <div
                    class="absolute z-10 w-72 bg-white/70 backdrop-blur-md rounded-3xl shadow-xl border border-white p-5 transform -translate-x-16 -translate-y-20 -rotate-6">
                    <div class="w-full h-8 bg-slate-200 rounded-lg mb-4 opacity-50"></div>
                    <div class="w-3/4 h-8 bg-slate-200 rounded-lg opacity-30"></div>
                </div>

                <div class="absolute z-30 right-10 bottom-20 w-24 h-24 bg-brand-500 rounded-full blur-2xl opacity-40">
                </div>
                <div class="absolute z-0 left-10 top-10 w-48 h-48 bg-blue-400 rounded-full blur-3xl opacity-30"></div>

            </div>

        </div>
    </header>
    <!-- Logo Cloud / Press -->
    <section class="border-y border-slate-200 bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-center text-xs font-bold text-slate-400 uppercase tracking-widest mb-8">La simplicité avant
                tout, adapté pour les banques :</p>
            <div
                class="flex flex-wrap justify-center gap-10 md:gap-20 opacity-50 grayscale hover:grayscale-0 transition-all duration-500">
                <!-- Logos fictifs -->
                <div class="text-xl font-black text-slate-900 flex items-center gap-1"><span
                        class="w-4 h-4 bg-slate-900 rounded-full block"></span>Lydia</div>
                <div class="text-xl font-black text-slate-900 flex items-center gap-1"><span
                        class="w-4 h-4 bg-slate-900 rotate-45 block"></span>Revolut</div>
                <div class="text-xl font-black text-slate-900 flex items-center gap-1"><span
                        class="w-4 h-4 border-4 border-slate-900 block rounded-full"></span>Paypal</div>
                <div class="text-xl font-black text-slate-900 flex items-center gap-1"><span
                        class="w-4 h-4 bg-slate-900 rounded-sm block"></span>N26</div>
            </div>
        </div>
    </section>

    <!-- Bento Grid Features (Modern 2024 Layout) -->
    <section id="features" class="py-24 bg-slate-50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tight leading-tight mb-4">
                    Tout ce dont votre<br>coloc a besoin.
                </h2>
                <p class="text-lg text-slate-500 font-medium">Pas de fioritures. Rien que l'essentiel pour garder la
                    paix ménagère.</p>
            </div>

            <!-- Bento Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- Bento Item 1 (Large) -->
                <div class="md:col-span-2 bg-slate-900 rounded-[2rem] p-10 relative overflow-hidden group">
                    <div
                        class="absolute top-0 right-0 w-64 h-64 bg-brand-500 blur-[80px] opacity-20 group-hover:opacity-40 transition-opacity duration-700">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-14 h-14 bg-slate-800 border border-slate-700 rounded-2xl flex items-center justify-center text-brand-400 mb-6 shadow-inner">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">Calcul Intelligent des dettes croisées.</h3>
                        <p class="text-slate-400 font-medium leading-relaxed max-w-md">L'algorithme de ColocManage
                            simplifie automatiquement les remboursements. Si A doit à B, et B doit à C, A paiera
                            directement C. Moins de virements, plus de simplicité.</p>
                    </div>
                </div>

                <!-- Bento Item 2 (Small Vertical) -->
                <div
                    class="bg-white rounded-[2rem] p-8 border border-slate-200 shadow-sm relative overflow-hidden hover:border-brand-300 transition-colors">
                    <div
                        class="w-12 h-12 bg-blue-50 border border-blue-100 rounded-xl flex items-center justify-center text-blue-600 mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Membres Illimités</h3>
                    <p class="text-slate-500 font-medium text-sm leading-relaxed">Que vous soyez un couple, 3 étudiants,
                        ou une grande maison de 10 personnes, vous pouvez tous être sur le même compte sans aucun frais
                        caché.</p>
                </div>

                <!-- Bento Item 3 (Small Horizontal) -->
                <div
                    class="bg-brand-50 rounded-[2rem] p-8 border border-brand-100 relative overflow-hidden flex flex-col justify-between">
                    <div>
                        <div
                            class="w-12 h-12 bg-white rounded-xl flex items-center justify-center text-brand-600 mb-6 shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-brand-900 mb-3">100% Gratuit. Pour toujours.</h3>
                        <p class="text-brand-700/80 font-medium text-sm leading-relaxed">Pas de version Premium
                            frustrante. Tous les outils pour gérer vos dépenses sont gratuits et le resteront.</p>
                    </div>
                </div>

                <!-- Bento Item 4 (Image / Graph Placeholder) -->
                <div
                    class="md:col-span-2 bg-white rounded-[2rem] p-8 border border-slate-200 shadow-sm flex flex-col md:flex-row items-center gap-8 group hover:shadow-md transition-shadow">
                    <div class="flex-1">
                        <div
                            class="w-12 h-12 bg-orange-50 border border-orange-100 rounded-xl flex items-center justify-center text-orange-600 mb-6">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-3">Tableaux de bord visuels clairs.</h3>
                        <p class="text-slate-500 font-medium leading-relaxed">Repérez en un coup d'œil les factures
                            impayées, les montants que vous devez ou qu'on vous doit grace à notre code couleur direct :
                            Vert et Rouge.</p>
                    </div>
                    <!-- Mini Graphique Fake -->
                    <div
                        class="w-full md:w-64 h-48 bg-slate-50 rounded-2xl border border-slate-100 p-4 flex items-end gap-2 group-hover:bg-slate-100 transition-colors">
                        <div class="w-full bg-brand-500 rounded-t-lg h-[40%]"></div>
                        <div class="w-full bg-blue-500 rounded-t-lg h-[60%]"></div>
                        <div class="w-full bg-red-400 rounded-t-lg h-[20%]"></div>
                        <div class="w-full bg-amber-400 rounded-t-lg h-[80%]"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer Simple -->
    <footer class="bg-white py-12 border-t border-slate-200">
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-lg bg-brand-600 flex items-center justify-center">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                </div>
                <span class="font-extrabold text-slate-900 tracking-tight">ColocManage &copy; 2026</span>
            </div>

            <div class="flex gap-8 text-sm font-bold text-slate-500">
                <a href="login.html" class="hover:text-brand-600 transition-colors">Se connecter</a>
                <a href="register.html" class="hover:text-brand-600 transition-colors">Créer une coloc</a>
                <a href="#" class="hover:text-brand-600 transition-colors">Contact</a>
            </div>
        </div>
    </footer>

</body>

</html>