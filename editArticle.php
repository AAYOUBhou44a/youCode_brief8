<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookShine - Edit Article</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen p-4">

    <div class="bg-white rounded-2xl shadow-xl w-full max-w-[600px] p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Modifier l'Article</h1>
            <a href="articles.php" class="text-gray-400 hover:text-gray-600 transition-colors">
                <i class="fa-solid fa-xmark text-2xl"></i>
            </a>
        </div>

        <form action="#" method="GET">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-semibold mb-2">Titre de l'article</label>
                <input type="text" name="title" value="Les tendances du Web Design 2026" required 
                       class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 outline-none transition-all">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-semibold mb-2">Image URL</label>
                <input type="text" name="image_url" value="https://images.unsplash.com/photo-1498050108023-c5249f4df085" required 
                       class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 outline-none transition-all">
                <div class="mt-2 flex items-center gap-2 text-xs text-gray-500 italic">
                    <i class="fa-solid fa-eye"></i> Aperçu : 
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085" alt="Preview" class="h-10 w-16 object-cover rounded border">
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-semibold mb-2">Contenu</label>
                <textarea name="content" rows="5" required
                          class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-gray-50 focus:bg-white focus:border-purple-500 focus:ring-2 focus:ring-purple-200 outline-none resize-none transition-all"
                >Le design minimaliste continue de dominer le paysage numérique cette année, avec un accent particulier sur l'accessibilité et les micro-interactions...</textarea>
            </div>
            
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-semibold mb-2">Catégorie</label>
                <select name="cat_id" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 outline-none bg-white">
                    <option value="">Sélectionner une catégorie</option>
                    <option value="1" selected>Technologie</option>
                    <option value="2">Design</option>
                    <option value="3">Développement</option>
                </select>
            </div> 

            <div class="flex gap-3">
                <a href="articles.php" class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium py-3 rounded-lg text-center transition-colors">
                    Annuler
                </a>
                <button type="submit" class="flex-[2] bg-purple-600 hover:bg-purple-700 text-white font-medium py-3 rounded-lg transition-colors shadow-md">
                    Mettre à jour l'article
                </button>
            </div>
        </form>
    </div>

</body>
</html>