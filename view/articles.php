<?php
use App\models\Author;

$authorInst = new Author();
$articles = $authorInst->getArticles();

require_once __DIR__ . "/../controller/likeController.php";
?>

<?php if(isset($articles) && count($articles) > 0): ?>
    <?php foreach($articles as $article): ?>
<div class="bg-gray-50 font-sans text-gray-800 pt-[30px]">

    <!-- <nav class="bg-white border-b border-gray-200 py-4 px-6 mb-8">
        <div class="max-w-4xl mx-auto flex justify-between items-center">
            <a href="/articles/view/articles" class="text-purple-600 font-bold text-lg"><i class="fa-solid fa-book-open"></i> BookShine</a>
            <a href="/articles/view/articles" class="text-gray-500 hover:text-purple-600 text-sm flex items-center gap-2">
                <i class="fa-solid fa-arrow-left"></i> Retour
            </a>
        </div>
    </nav> -->
    <!-- articleTAble : is likedId OR "user: likeArticleId"
articles->likes(userId , articleId) , $_SESSION["id"] = likes.user.id where articles.id = likes.articleId
je click sur le like likes(:userId , articleId);
$liked = $sql = SELECT likes.userId FROM likes WHERE likes.userId =  $_SESSION["user_id"] ;
if($liked){

} -->

<?php // echo $_SESSION["isLiked"]; ?>
    <main class="max-w-4xl mx-auto px-6 pb-12">
        
        <div class="text-center mb-8">
            <span class="inline-block bg-purple-100 text-purple-700 text-xs px-3 py-1 rounded-full uppercase font-bold tracking-wide mb-3">
                <?= $article["categorie"] ?>
            </span>
            <h1 class="text-3xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-4">
                <?= $article["title"] ?>
            </h1>
            
            <div class="flex flex-wrap justify-center items-center gap-6 text-sm text-gray-500">
                
                <!-- <div class="flex items-center gap-2">
                    <i class="fa-regular fa-calendar"></i>
                    <span>02 Jan 2026</span>
                </div>
                
                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-eye text-purple-400"></i>
                    <span>1,240 Vues</span>
                </div> -->
            </div>
        </div>
        
        <!-- <div class="mb-9 shadow-lg rounded-2xl overflow-hidden">
            <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995" 
            alt="Article Cover" 
            class="w-full h-[500px] object-cover hover:scale-105 transition-transform duration-700">
        </div> -->
        
        <article class="prose max-w-none text-lg leading-relaxed text-gray-700 bg-white p-8 md:p-12 rounded-2xl shadow-sm border border-gray-100">
            <div class="flex items-center gap-2 pb-[30px]">
                <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center text-gray-600">
                    <i class="fa-solid fa-user"></i>
                </div>
                <span class="font-medium text-gray-900"><?= $article["authorName"] ?></span>
            </div>

            <?= $article["content"] ?>
            
<div class="flex items-center justify-between pt-2 mt-[20px]">
    <div class="flex items-center gap-2 text-xs text-gray-400 font-medium">
        <i class="fa-regular fa-calendar text-gray-400"></i>
        <span>02 Jan 2026</span>
    </div>

    <div class="flex items-center gap-4">
        <form method="POST">
            <input type="hidden" name="articleId" value="<?= $article["id"] ?>">
            <input type="hidden" name="userId" value="<?= $_SESSION["user_id"] ?>">
            <button type="submit" 
                    onclick="toggleLike(this)" 
                    class="flex items-center gap-1 <?= $isliked ? "text-pink-500" : "text-gray-500";?> hover:text-pink-500 transition-colors group" 
                    title="J'aime">
                <i class="fa-regular fa-heart text-lg group-active:scale-125 transition-transform"></i>
                <span class="text-xs font-semibold"><?= $article["numberLikes"] ?></span>
            </button>
        </form>
        <form action="/articles/view/addComment" method="POST">
            <input type="hidden" name="articleId" value="<?= $article["id"] ?>">
            <button type="submit"
               class="flex items-center gap-1 text-gray-500 hover:text-blue-500 transition-colors" 
               title="Commenter">
                <i class="fa-regular fa-comment text-lg"></i>
                <span class="text-xs font-semibold"><?= $article["numberComments"] ?></span>
            </button>
        </form>
    </div>
</div>
   




</article>


<?php endforeach; ?>

</main>
</div>
<script>
    function toggleLike(button) {
        const icon = button.querySelector('i');
        
        // On bascule entre le coeur vide et le coeur plein
        if (icon.classList.contains('fa-regular')) {
            // Mode "Like" activé
            icon.classList.remove('fa-regular', 'text-gray-500');
        icon.classList.add('fa-solid', 'text-pink-500');
        button.classList.add('text-pink-500');
    } else {
        // Mode "Like" désactivé
        icon.classList.remove('fa-solid', 'text-pink-500');
        icon.classList.add('fa-regular', 'text-gray-500');
        button.classList.remove('text-pink-500');
    }
}
</script>

<?php else: ?>
    <h1>aucun article pour l'instant</h1>

<?php endif;?>