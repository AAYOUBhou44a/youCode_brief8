<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'Article - BookShine</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 font-sans text-gray-800">

    <nav class="bg-white border-b border-gray-200 py-4 px-6 mb-8">
        <div class="max-w-4xl mx-auto flex justify-between items-center">
            <a href="articles.php" class="text-purple-600 font-bold text-lg"><i class="fa-solid fa-book-open"></i> BookShine</a>
            <a href="articles.php" class="text-gray-500 hover:text-purple-600 text-sm flex items-center gap-2">
                <i class="fa-solid fa-arrow-left"></i> Retour
            </a>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto px-6 pb-12">
        
        <div class="text-center mb-8">
            <span class="inline-block bg-purple-100 text-purple-700 text-xs px-3 py-1 rounded-full uppercase font-bold tracking-wide mb-3">
                Technologie
            </span>
            <h1 class="text-3xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-4">
                Le futur de l'Intelligence Artificielle en 2026
            </h1>
            
            <div class="flex flex-wrap justify-center items-center gap-6 text-sm text-gray-500">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center text-gray-600">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <span class="font-medium text-gray-900">Jean Dupont</span>
                </div>
                
                <div class="flex items-center gap-2">
                    <i class="fa-regular fa-calendar"></i>
                    <span>02 Jan 2026</span>
                </div>

                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-eye text-purple-400"></i>
                    <span>1,240 Vues</span>
                </div>
            </div>
        </div>

        <div class="mb-9 shadow-lg rounded-2xl overflow-hidden">
            <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995" 
                 alt="Article Cover" 
                 class="w-full h-[500px] object-cover hover:scale-105 transition-transform duration-700">
        </div>

        <article class="prose max-w-none text-lg leading-relaxed text-gray-700 bg-white p-8 md:p-12 rounded-2xl shadow-sm border border-gray-100">
            L'intelligence artificielle continue d'évoluer à un rythme sans précédent. Dans cet article, nous explorons comment les modèles génératifs transforment notre quotidien et redéfinissent les limites de la créativité humaine. 
            <br><br>
            La convergence entre le matériel spécialisé et les algorithmes avancés permet désormais des applications qui semblaient relever de la science-fiction il y a seulement quelques années.
        </article>

        <div class="mt-8 border-t border-gray-200 pt-6 flex flex-col md:flex-row justify-between items-center text-xs text-gray-400">
            <div class="mb-4 md:mb-0">
                <span class="bg-yellow-50 text-yellow-700 px-2 py-1 rounded border border-yellow-100">
                    <i class="fa-solid fa-pen-to-square"></i> Modifié le: 02/01/2026 10:30
                </span>
            </div>
            <div class="font-mono">
                ID Article: #42
            </div>
        </div>

        <div id="comments-section" class="mt-12 bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
            
            <div class="flex gap-2 items-center mb-6 border-b pb-4">
                <i class="fa-regular fa-comments text-purple-600"></i>
                <label class="text-gray-800 text-xl font-bold">
                    Commentaires (1)
                </label>
            </div>

            <div class="space-y-6 mb-10">
                <div class="flex gap-4 items-start">
                    <div class="flex-shrink-0 w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center text-purple-600 font-bold">
                        A
                    </div>
                    
                    <div class="flex-grow bg-gray-50 p-4 rounded-lg rounded-tl-none relative group">
                        <div class="flex justify-between items-start mb-1">
                            <span class="font-bold text-sm text-gray-900">Alice Martin</span>
                            <span class="text-xs text-gray-400">02 Jan 2026 à 11:15</span>
                        </div>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            Super article ! Très instructif pour comprendre les enjeux actuels de l'IA.
                        </p>

                        <div class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <a href="#" class="text-gray-400 hover:text-blue-600 text-xs bg-white px-2 py-1 rounded border shadow-sm">
                                <i class="fa-solid fa-pen"></i> Modifier
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="comments-form" class="border-t pt-6">
                <h3 class="text-sm font-bold text-gray-700 mb-3 uppercase tracking-wide">
                    Laisser un commentaire
                </h3>
                
                <form class="relative">
                    <textarea name="contenu" rows="4" required
                        class="w-full px-4 py-3 pb-14 rounded-lg border border-gray-300 bg-gray-50 focus:bg-white focus:border-purple-500 focus:ring-2 focus:ring-purple-200 outline-none resize-none transition-all placeholder-gray-400"
                        placeholder="Partagez votre avis..."
                    ></textarea>

                    <div class="absolute bottom-3 right-3 flex gap-2">
                        <button type="submit" 
                                class="bg-[#6d28d9] text-white font-medium py-2 px-6 rounded-lg hover:bg-[#5b21b6] transition-colors shadow-md text-sm">
                            Publier
                        </button>
                    </div>
                </form>
            </div>

        </div>

    </main>
</body>
</html>