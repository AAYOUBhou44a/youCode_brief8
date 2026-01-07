<?php require_once __DIR__ . "/../controller/categorieController.php"; ?>

<?php if($_SESSION["user_role"] === 'admin'): ?>
<div class="bg-gray-100 flex items-center justify-center h-screen p-4">

    <div class="bg-white rounded-2xl shadow-xl w-full max-w-[600px] p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Ajouter une Catégorie</h1>
            <a href="/articles/view/categorie" class="text-gray-400 hover:text-gray-600 transition-colors">
                <i class="fa-solid fa-xmark text-2xl"></i>
            </a>
        </div>

        <form  method="POST">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-semibold mb-2">Nom de la catégorie</label>
                <input 
                    type="text" 
                    name="categorie" 
                    placeholder="Ex: Intelligence Artificielle, Santé..."
                    required 
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 outline-none transition-all placeholder-gray-400"
                >
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-semibold mb-2">Description</label>
                <textarea 
                    name="description"
                    rows="4" 
                    placeholder="Expliquez brièvement quels types d'articles seront classés ici..."
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 outline-none transition-all placeholder-gray-400"
                ></textarea>
            </div>

            <div class="flex gap-3">
                <a href="/articles/view/categorie" class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium py-3 rounded-lg text-center transition-colors">
                    Annuler
                </a>
                <button type="submit" class="flex-[2] bg-[#7c3aed] hover:bg-[#6d28d9] text-white font-medium py-3 rounded-lg transition-colors shadow-md">
                    Enregistrer la catégorie
                </button>
            </div>
        </form>
    </div>

</div>

<?php else: ?>
    <h1>not found</h1>
<?php endif;?>