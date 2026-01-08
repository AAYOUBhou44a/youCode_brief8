<?php 
use App\models\Reader;

$readerInst = new Reader();
$comments = $readerInst->getComments($_POST["articleId"]);

?>

<?php require_once __DIR__ . "/../controller/commentController.php"; ?>

<div class="max-w-4xl mx-auto w-full px-4 pb-12">

    <div class="mt-8 border-t border-gray-200 pt-6 flex flex-col md:flex-row justify-between items-center text-xs text-gray-400">
        </div>
    
    <div id="comments-section" class="mt-8 bg-white p-6 md:p-10 rounded-3xl shadow-md border border-gray-50">
        
        <div class="flex gap-3 items-center mb-8 border-b pb-5">
            <i class="fa-regular fa-comments text-purple-600 text-xl"></i>
            <label class="text-gray-800 text-xl font-bold">
                Commentaires (<?= count($comments); ?>)
            </label>
        </div>

        <div class="space-y-6 mb-10">
            <?php foreach($comments as $comment): ?>
                <div class="flex gap-4 items-start">
                    <div class="flex-shrink-0 w-11 h-11 bg-purple-100 rounded-full flex items-center justify-center text-purple-600 font-bold shadow-sm">
                        <?= strtoupper(substr("Alice", 0, 1)) ?> </div>
                    
                    <div class="flex-grow bg-slate-50 p-5 rounded-2xl rounded-tl-none relative group border border-slate-100">
                        <div class="flex justify-between items-start mb-2">
                            <span class="font-bold text-sm text-gray-900"><?= $comment["firstName"] . " " . $comment["lastName"] ?></span>
                            <span class="text-[10px] uppercase tracking-wide text-gray-400">02 Jan 2026</span>
                        </div>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            <?= $comment["comment"] ?>
                        </p>

                        <div class="absolute top-3 right-3 opacity-0 group-hover:opacity-100 transition-opacity">
                            <a href="#" class="text-gray-400 hover:text-purple-600 text-xs bg-white px-2 py-1 rounded border shadow-sm transition-colors">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <div id="comments-form" class="border-t pt-8">
            <h3 class="text-xs font-bold text-gray-400 mb-4 uppercase tracking-widest">
                Laisser un commentaire
            </h3>
            
            <form class="flex flex-col gap-4" method="POST">
                <input type="hidden" name="articleId" value="<?= $_POST["articleId"] ?? ''; ?>">
                
                <div class="relative">
                    <textarea name="comment" rows="4" required
                        class="w-full px-5 py-4 rounded-2xl border border-gray-200 bg-gray-50 focus:bg-white focus:border-purple-500 focus:ring-4 focus:ring-purple-100 outline-none resize-none transition-all placeholder-gray-400 shadow-inner"
                        placeholder="Partagez votre avis..."></textarea>
                    
                    <div class="mt-3 flex justify-end">
                        <button type="submit" 
                                class="bg-purple-600 text-white font-bold py-3 px-8 rounded-xl hover:bg-purple-700 transition-all shadow-lg hover:shadow-purple-200 transform hover:-translate-y-0.5 active:scale-95 text-sm">
                            Publier le commentaire
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>