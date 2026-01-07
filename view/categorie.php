<?php
use App\models\Admin;
$adminInst = new Admin();
$categories = $adminInst->getcategories();

require_once __DIR__ . "/../controller/categorieController.php";
?>

<?php if($_SESSION["user_role"] === "admin"): ?>

<div class="flex h-screen overflow-hidden">

<aside class="w-64 sidebar-bg text-gray-300 flex flex-col transition-all duration-300 hidden md:flex h-screen sticky top-0">
    <div class="h-16 flex items-center px-6 border-b border-gray-700">
        <div class="flex items-center gap-2 font-bold text-white text-xl">
            <div class="w-8 h-8 bg-gradient-to-br from-purple-500 to-blue-500 rounded-full flex items-center justify-center">
                <i class="fa-solid fa-moon"></i>
            </div>
            <span>Dashboard</span>
        </div>
    </div>

    <nav class="flex-1 py-4 overflow-y-auto">
        <div class="px-6 mb-2 text-xs uppercase text-gray-500 font-semibold tracking-wider">Administration</div>
        
        <button id="blog-toggle" class="w-full flex items-center justify-between p-3 bg-purple-600 text-white rounded-lg mb-1 transition-colors hover:bg-purple-700">
            <div class="flex items-center gap-3">
                <i class="fa-solid fa-newspaper"></i>
                <span>Gestion</span>
            </div>
            <i id="blog-arrow" class="fa-solid fa-chevron-down transition-transform duration-300"></i>
        </button>

        <ul id="blog-menu" class="pl-0 space-y-1 transition-all duration-300">
            <li>
                <a href="/articles/view/categorie" class="flex items-center gap-3 p-3 hover:text-white hover:bg-gray-700/50 transition-colors pl-8 rounded-lg mx-2">
                    <i class="fa-regular fa-folder-open"></i> Catégories
                </a>
            </li>
        </ul>

        <div class="mt-5 px-6 mb-2 text-xs uppercase text-gray-500 font-semibold tracking-wider">Modules</div>
        <ul class="px-3">
            <li>
                <a href="/articles/view/users" class="flex items-center gap-3 p-3 hover:text-white hover:bg-gray-700/50 rounded-lg transition-colors">
                    <i class="fa-solid fa-users"></i> Utilisateurs
                </a>
            </li>
        </ul>
    </nav>

    <div class="p-4 border-t border-gray-700 bg-black/10">
        <div class="flex items-center gap-3">
            <img src="https://ui-avatars.com/api/?name=<?= $_SESSION['user_firstName'] ?? 'Admin' ?>&background=random" class="w-10 h-10 rounded-full border border-gray-600">
            <div class="overflow-hidden flex-1">
                <h4 class="text-sm font-semibold text-white truncate"><?= $_SESSION['user_firstName'] ?? 'Admin' ?></h4>
                <p class="text-[10px] text-gray-500 uppercase"><?= $_SESSION['user_role'] ?? 'Administrateur' ?></p>
            </div>
            <a href="/articles/view/logout" class="text-gray-500 hover:text-red-400 p-2 transition-colors" title="Déconnexion">
                <i class="fa-solid fa-power-off"></i>
            </a>
        </div>
    </div>
</aside>

    <main class="flex-1 flex flex-col h-screen overflow-hidden bg-gray-100">
        <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-6">
            <div class="flex items-center text-sm text-gray-500">
                <a href="#" class="text-pink-500 hover:text-pink-600"><i class="fa-solid fa-house"></i></a>
                <span class="mx-2">/</span>
                <span class="text-gray-700">categories</span>
            </div>

            <div class="flex items-center gap-4">
                <input type="text" placeholder="Search..." class="bg-gray-100 text-sm rounded-lg pl-4 pr-10 py-2 w-64 focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>
        </header>

        <div class="flex-1 overflow-y-auto p-8">
            <h1 class="text-2xl font-semibold text-gray-800 mb-6">categories Management</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <div class="text-3xl font-bold text-gray-800 mb-1"><?= count($categories) ?></div>
                    <div class="text-gray-500 text-sm">Total categories</div>
                </div>
            </div>

            <div class="flex justify-between gap-4 mb-6">
                <a href="/articles/view/addcategorie" class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg text-sm font-medium flex items-center gap-2 shadow-sm">
                    <i class="fa-solid fa-plus"></i> Add categorie
                </a>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-100 text-xs uppercase text-gray-500 font-semibold">
                            <th class="p-4 w-16">
                                <div class="flex items-center gap-1 cursor-pointer">ID <i class="fa-solid fa-sort"></i></div>
                            </th>
                            <th class="p-4">categorie Name</th>
                            <th class="p-4">Description</th>
                            <th class="p-4 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 text-sm text-gray-700">


                    <?php foreach($categories as $categorie): ?>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="p-4">
                                <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded text-xs font-bold"><?= $categorie["id"] ?></span>
                            </td>
                            <td class="p-4 font-medium text-gray-900"><?= $categorie["categorie"] ?></td>
                            <td class="p-4 text-gray-600"><?= $categorie["description"] ?></td>
                            <td class="p-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="/articles/view/editcategorie" class="w-10 h-8 rounded bg-purple-600 text-white hover:bg-purple-700 flex items-center justify-center shadow-sm">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                    <form method="POST">
                                        <input type="hidden" name="categorie_id" value="<?= $categorie["id"]?>">
                                        <button type="submit" class="inline-flex w-8 h-8 rounded bg-pink-500 text-white hover:bg-pink-600 items-center justify-center shadow-sm">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                    <?php endforeach; ?>


                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <script src="blog.js"></script>
    </div>
    <?php else: ?>
        <h1>not found</h1>
    <?php endif; ?>
