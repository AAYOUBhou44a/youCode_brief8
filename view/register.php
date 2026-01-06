<?php require __DIR__ . "/../controller/registerController.php"; ?>
<h6 class="text-green-500 m-[10px]"><?= $succes ?? ""?></h6>
<h6 class="text-red-500 m-[10px]"><?= $erreur["erreurDb"] ?? "" ?></h6>
<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 bg-white p-10 rounded-2xl shadow-xl">
        <div>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Créer un compte
            </h2>
        </div>
        <form class="mt-8 space-y-4" method="POST">
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Prénom</label>
                    <input name="firstName" type="text" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-[--purple-primary] focus:border-[--purple-primary] sm:text-sm">
                    <h6 class="text-red-500"><?= $erreur["erreurFirstName"] ?? "" ?></h6>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Nom</label>
                    <input name="lastName" type="text" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-[--purple-primary] focus:border-[--purple-primary] sm:text-sm">
                    <h6 class="text-red-500"><?= $erreur["erreurLastName"] ?? "" ?></h6>
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input name="email" type="email" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-[--purple-primary] focus:border-[--purple-primary] sm:text-sm">
                <h6 class="text-red-500"><?= $erreur["erreurEmail"] ?? "" ?></h6>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Mot de passe</label>
                <input name="password" type="password" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-[--purple-primary] focus:border-[--purple-primary] sm:text-sm">
                <h6 class="text-red-500"><?= $erreur["erreurPassword"] ?? "" ?></h6>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Vous êtes ?</label>
                <select name="role" required class="mt-1 block w-full px-3 py-2 border border-gray-300 bg-white rounded-lg shadow-sm focus:ring-[--purple-primary] focus:border-[--purple-primary] sm:text-sm">
                    <option value="reader">Lecteur (Reader)</option>
                    <option value="author">Auteur (Author)</option>
                </select>
            </div>

            <div class="pt-4">
                <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-lg text-white bg-[--pink-accent] hover:bg-opacity-90 transition-all shadow-lg">
                    S'inscrire
                </button>
            </div>
            
            <p class="text-center text-sm text-gray-600 mt-4">
                Déjà membre ? <a href="/articles/view/login" class="text-[--purple-primary] font-bold">Connectez-vous</a>
            </p>
        </form>
    </div>
</div>