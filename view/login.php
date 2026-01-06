<?php require_once __DIR__ . "/../controller/loginController.php" ?>

<h6 class="text-red-500"><?= $erreur["Db"] ?? "" ?></h6>
<h6 class="text-green-400"><?= $succes ?? "" ?></h6>
<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 bg-white p-10 rounded-2xl shadow-xl">
        <div>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Connexion à <span class="text-[--purple-primary]">BookShine</span>
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                Ou <a href="register" class="font-medium text-[--purple-primary] hover:text-[--pink-accent]">créez un compte gratuitement</a>
            </p>
        </div>
        <form class="mt-8 space-y-6" method="POST">
            <div class="rounded-md shadow-sm -space-y-px">
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Adresse Email</label>
                    <input id="email" name="email" type="email" required class="appearance-none rounded-lg relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-[--purple-primary] focus:border-[--purple-primary] focus:z-10 sm:text-sm" placeholder="nom@exemple.com">
                    <h6 class="text-red-500"><?= $erreur["email"] ?? "" ?></h6>
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
                    <input id="password" name="password" type="password" required class="appearance-none rounded-lg relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-[--purple-primary] focus:border-[--purple-primary] focus:z-10 sm:text-sm" placeholder="••••••••">
                    <h6 class="text-red-500"><?= $erreur["password"] ?? "" ?></h6>
                </div>
            </div>

            <div>
                <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-lg text-white bg-[--purple-primary] hover:bg-opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[--purple-primary] transition-all">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <i class="fa-solid fa-lock text-purple-300 group-hover:text-white"></i>
                    </span>
                    Se connecter
                </button>
            </div>
        </form>
    </div>
</div>