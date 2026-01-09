<?php 
use App\models\Author;
use App\models\Admin;
 ?>
<?php if($_SESSION["user_role"] === 'author' && $_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["update_id"])):?>
<?php

require __DIR__ . "/../controller/articleController.php"; 

$authorInst = new Author();
$article = $authorInst->getArticle($_POST["update_id"]);

$adminInst = new Admin();
$categories = $adminInst->getcategories();
?>
<div class="bg-gray-100 flex items-center justify-center h-screen p-4">

    <div class="bg-white rounded-2xl shadow-xl w-full max-w-[600px] p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Modifier l'Article</h1>
            <a href="/articles/view/articles" class="text-gray-400 hover:text-gray-600 transition-colors">
                <i class="fa-solid fa-xmark text-2xl"></i>
            </a>
        </div>

        <form  method="POST">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-semibold mb-2"><?= $article["title"] ?></label>
                <input type="text" name="title" value="Les tendances du Web Design 2026" required 
                       class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 outline-none transition-all">
            </div>

            <!-- <div class="mb-4">
                <label class="block text-gray-700 text-sm font-semibold mb-2">Image URL</label>
                <input type="text" name="image_url" value="https://images.unsplash.com/photo-1498050108023-c5249f4df085" required 
                       class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 outline-none transition-all">
                <div class="mt-2 flex items-center gap-2 text-xs text-gray-500 italic">
                    <i class="fa-solid fa-eye"></i> Aperçu : 
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085" alt="Preview" class="h-10 w-16 object-cover rounded border">
                </div>
            </div> -->

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-semibold mb-2">Contenu</label>
                <textarea name="content" rows="5" required
                          class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-gray-50 focus:bg-white focus:border-purple-500 focus:ring-2 focus:ring-purple-200 outline-none resize-none transition-all"
                ><?= $article["content"] ?></textarea>
            </div>
            
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-semibold mb-2">Catégorie</label>
                <select name="cat_id" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 outline-none bg-white">
                    <option value="">Sélectionner une catégorie</option>
                    <?php foreach($categories as $categorie): ?>
                    <option value="<?= $categorie["categorie"] ?>" selected><?= $categorie["categorie"] ?></option>
                    <?php endforeach; ?>
                </select>
            </div> 

            <div class="flex gap-3">
                <a href="/articles/view/articles" class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium py-3 rounded-lg text-center transition-colors">
                    Annuler
                </a>
                <button type="submit" class="flex-[2] bg-purple-600 hover:bg-purple-700 text-white font-medium py-3 rounded-lg transition-colors shadow-md">
                    Mettre à jour l'article
                </button>
            </div>
        </form>
    </div>

</div>

<?php else: ?>
    <h1>not found</h1>
<?php endif;?>