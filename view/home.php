
<div class="text-gray-800">

    <nav class="bg-white border-b border-gray-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="/articles/view/home" class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-500">
                        <i class="fa-solid fa-book-open text-purple-600 mr-2"></i>BookShine
                    </a>
                </div>
                <div class="flex items-center gap-4">
                    <span class="text-sm text-gray-600 hidden md:block">Bonjour, <strong>Admin</strong></span>
                    <a href="/articles/view/articles" class="text-sm bg-purple-100 text-purple-700 px-3 py-1 rounded-full hover:bg-purple-200 transition">Dashboard</a>
                    <a href="/articles/view/login" class="text-gray-500 hover:text-red-500 transition-colors"><i class="fa-solid fa-power-off"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="bg-gradient-to-r from-indigo-900 via-purple-900 to-pink-800 text-white py-12 px-4 shadow-lg">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold mb-2 text-center">Bienvenue sur BookShine</h1>
            <p class="text-center text-purple-200 mb-10 text-lg">Explorez, Lisez, Partagez vos connaissances.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-6 border border-white/20">
                    <div class="text-4xl font-bold mb-1">128</div>
                    <div class="text-sm text-purple-200 uppercase tracking-wider">Articles Publiés</div>
                </div>
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-6 border border-white/20">
                    <div class="text-4xl font-bold mb-1">12.5k</div>
                    <div class="text-sm text-pink-200 uppercase tracking-wider">Lectures Totales</div>
                </div>
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-6 border border-white/20">
                    <div class="text-4xl font-bold mb-1">14</div>
                    <div class="text-sm text-blue-200 uppercase tracking-wider">Catégories</div>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <div class="lg:col-span-2 space-y-8">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-2xl font-bold text-gray-800 border-l-4 border-purple-500 pl-3">Derniers Articles</h2>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300 flex flex-col md:flex-row h-auto md:h-64">
                    <div class="md:w-2/5 h-48 md:h-full relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?auto=format&fit=crop&q=80&w=800" alt="Cover" class="w-full h-full object-cover hover:scale-110 transition-transform duration-700">
                        <span class="absolute top-3 left-3 bg-purple-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                            Technologie
                        </span>
                    </div>

                    <div class="p-6 md:w-3/5 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-2 text-xs text-gray-400 mb-2">
                                <i class="fa-regular fa-calendar"></i> 02 Jan 2026
                                <span class="mx-1">•</span>
                                <i class="fa-regular fa-user"></i> Alex Admin
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3 leading-tight line-clamp-2 hover:text-purple-600 cursor-pointer transition-colors">
                                L'avenir du développement Web avec l'IA en 2026
                            </h3>
                            <p class="text-gray-500 text-sm line-clamp-2">
                                Découvrez comment les nouveaux modèles de langage transforment la manière dont nous écrivons le code et concevons les interfaces...
                            </p>
                        </div>
                        
                        <div class="mt-4 flex items-center justify-between border-t border-gray-100 pt-4">
                            <div class="flex items-center gap-3 text-gray-500 text-sm">
                                <span><i class="fa-solid fa-eye text-purple-400 mr-1"></i> 1,240</span>
                                <span><i class="fa-regular fa-comment text-pink-400 mr-1"></i> 18</span>
                            </div>
                            <a href="/articles/view/articleDetails" class="text-purple-600 font-bold text-sm hover:translate-x-1 transition-transform inline-flex items-center">
                                Lire la suite <i class="fa-solid fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-8">
                    <nav class="inline-flex rounded-md shadow-sm">
                        <button class="px-4 py-2 bg-white border border-gray-300 text-gray-500 rounded-l-lg hover:bg-gray-50">Précédent</button>
                        <button class="px-4 py-2 bg-purple-600 border border-purple-600 text-white font-bold">1</button>
                        <button class="px-4 py-2 bg-white border border-gray-300 text-gray-500 hover:bg-gray-50">2</button>
                        <button class="px-4 py-2 bg-white border border-gray-300 text-gray-500 rounded-r-lg hover:bg-gray-50">Suivant</button>
                    </nav>
                </div>
            </div>

            <div class="lg:col-span-1 space-y-8">
                
                <div class="sticky top-24 space-y-6">
                    <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-6 text-center">
                        <div class="w-20 h-20 mx-auto rounded-full bg-gradient-to-tr from-purple-500 to-pink-500 p-1 mb-4">
                            <div class="w-full h-full rounded-full bg-white flex items-center justify-center text-2xl font-bold text-gray-700 uppercase">
                                A
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Admin User</h3>
                        <span class="inline-block bg-purple-100 text-purple-700 text-xs px-3 py-1 rounded-full uppercase font-bold mt-2 mb-4">
                            Administrateur
                        </span>
                        
                        <div class="space-y-3">
                            <a href="/articles/view/articles" class="flex items-center justify-center w-full bg-gray-50 hover:bg-purple-50 text-gray-700 hover:text-purple-700 font-medium py-2.5 rounded-xl border border-gray-200 hover:border-purple-200 transition-all">
                                <i class="fa-solid fa-gauge mr-2"></i> Dashboard
                            </a>
                            <a href="logout.html" class="flex items-center justify-center w-full bg-red-50 hover:bg-red-100 text-red-600 font-medium py-2.5 rounded-xl border border-red-100 transition-all">
                                <i class="fa-solid fa-arrow-right-from-bracket mr-2"></i> Déconnexion
                            </a>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-indigo-600 to-purple-700 rounded-2xl p-6 text-white shadow-xl">
                        <h4 class="font-bold text-lg mb-2 flex items-center">
                            <i class="fa-solid fa-star mr-2 text-yellow-300"></i>Rejoignez-nous!
                        </h4>
                        <p class="text-sm text-indigo-100 leading-relaxed mb-4">
                            BookShine est une communauté de passionnés. Partagez vos propres articles et interagissez avec les autres.
                        </p>
                        <button class="w-full py-2 bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-lg text-sm font-semibold transition-colors">
                            En savoir plus
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    <footer class="bg-white border-t border-gray-200 py-10 mt-12">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <div class="text-2xl font-bold text-gray-300 mb-4 tracking-widest uppercase">BookShine</div>
            <div class="flex justify-center gap-6 mb-6 text-gray-400">
                <a href="#" class="hover:text-purple-600"><i class="fa-brands fa-twitter"></i></a>
                <a href="#" class="hover:text-purple-600"><i class="fa-brands fa-facebook"></i></a>
                <a href="#" class="hover:text-purple-600"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <p class="text-gray-500 text-sm">
                &copy; 2026 BookShine. Tous droits réservés. <br>
                <span class="text-xs opacity-50 italic">Fait avec passion pour les lecteurs.</span>
            </p>
        </div>
    </footer>

</div>
