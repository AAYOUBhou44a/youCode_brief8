
<div class="bg-gray-100 flex items-center justify-center h-screen p-4">

    <div class="bg-white rounded-2xl shadow-xl w-full max-w-[600px] p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Modifier la Catégorie</h1>
            <a href="categorie.php" class="text-gray-400 hover:text-gray-600 transition-colors">
                <i class="fa-solid fa-xmark text-2xl"></i>
            </a>
        </div>

        <form action="#" method="GET">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-semibold mb-2">Nom de la catégorie</label>
                <input 
                    type="text" 
                    name="nom_cat" 
                    value="Technologie" 
                    placeholder="Ex: Voyage, Cuisine..."
                    required 
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 outline-none transition-all"
                >
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-semibold mb-2">Description</label>
                <textarea 
                    name="description" 
                    rows="4" 
                    placeholder="Décrivez brièvement cette catégorie..."
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 outline-none transition-all"
                >Articles sur les innovations, le développement web et le hardware.</textarea>
            </div>

            <div class="flex gap-3">
                <a href="categorie.php" class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium py-3 rounded-lg text-center transition-colors">
                    Annuler
                </a>
                <button type="submit" class="flex-[2] bg-purple-600 hover:bg-purple-700 text-white font-medium py-3 rounded-lg transition-colors shadow-md">
                    Mettre à jour
                </button>
            </div>
        </form>
    </div>

</div>
