<?php if($_SESSION["user_role"] === "author"): ?>
<div class="bg-gray-100 flex items-center justify-center min-h-screen p-4">

    <div class="bg-white rounded-2xl shadow-xl w-full max-w-[600px] p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Ajouter un Article</h1>
            <a href="/articles/view/articles" class="text-gray-400 hover:text-gray-600 transition-colors">
                <i class="fa-solid fa-xmark text-2xl"></i>
            </a>
        </div>

        <form method="GET">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-semibold mb-2">Titre de l'article</label>
                <input type="text" name="title" placeholder="Entrez un titre accrocheur" required 
                       class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 outline-none transition-all">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-semibold mb-2">Image URL</label>
                <input type="text" name="image_url" placeholder="https://images.unsplash.com/..." required 
                       class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 outline-none transition-all">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-semibold mb-2">Contenu</label>
                <textarea name="contenu" rows="5" required
                          class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-gray-50 focus:bg-white focus:border-purple-500 focus:ring-2 focus:ring-purple-200 outline-none resize-none transition-all placeholder-gray-400"
                          placeholder="Écrivez le corps de votre article ici..."></textarea>
            </div>
            
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-semibold mb-2">Catégorie</label>
                <select name="cat_id" required 
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 outline-none bg-white">
                    <option value="">Sélectionner une catégorie</option>
                    <option value="1">Technologie</option>
                    <option value="2">Design</option>
                    <option value="3">Développement</option>
                    <option value="4">Lifestyle</option>
                </select>
            </div> 

            <div class="flex gap-3">
                <a href="/articles/view/articles" class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium py-3 rounded-lg text-center transition-colors">
                    Annuler
                </a>
                <button type="submit" class="flex-[2] bg-[#7c3aed] hover:bg-[#6d28d9] text-white font-medium py-3 rounded-lg transition-colors shadow-md">
                    Enregistrer l'article
                </button>
            </div>
        </form>
    </div>

</div>

<?php else: ?>
    <h6>not found</h6>
<?php endif; ?>