
<div class="flex h-screen overflow-hidden">

    <aside class="w-64 sidebar-bg text-gray-300 flex flex-col transition-all duration-300 hidden md:flex">
        <div class="h-16 flex items-center px-6 border-b border-gray-700">
            <div class="flex items-center gap-2 font-bold text-white text-xl">
                <div class="w-8 h-8 bg-gradient-to-br from-purple-500 to-blue-500 rounded-full flex items-center justify-center">
                    <i class="fa-solid fa-moon"></i>
                </div>
                <span>Dashboard</span>
            </div>
        </div>
        <nav class="flex-1 py-4 overflow-y-auto">
            <div class="px-6 mb-2 text-xs uppercase text-gray-500 font-semibold">System</div>
            <button id="blog-toggle" class="w-full flex items-center justify-between p-3 bg-purple-600 text-white rounded-lg mb-1 transition-colors hover:bg-purple-700">
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-newspaper"></i>
                    <span>Blog</span>
                </div>
                <i id="blog-arrow" class="fa-solid fa-chevron-down transition-transform duration-300"></i>
            </button>

            <ul id="blog-menu" class="pl-0 space-y-1 hidden transition-all duration-300">
                <li>
                    <a href="/articles/view/categorie" class="flex items-center gap-3 p-3 hover:text-white transition-colors pl-8">
                        <i class="fa-regular fa-file"></i> Categories
                    </a>
                </li>
                <li class="relative">
                    <a href="/articles/view/articles" class="menu-item active11 flex items-center gap-3 p-3 font-medium pl-8 w-[calc(100%+1.5rem)]">
                        <i class="fa-solid fa-file-lines"></i> Articles
                    </a>
                </li>
                <li>
                    <a href="/articles/view/comments" class="flex items-center gap-3 p-3 hover:text-white transition-colors pl-8">
                        <i class="fa-regular fa-comments"></i> Comments
                    </a>
                </li>
            </ul>

            <div class="mt-5 px-6 mb-2 text-xs uppercase text-gray-500 font-semibold">Modules</div>
            <ul class="px-3">
                <li><a href="/articles/view/users" class="flex items-center gap-3 p-3 hover:text-white rounded-lg"><i class="fa-solid fa-users"></i> Users</a></li>
            </ul>
        </nav>

        <div class="p-4 border-t border-gray-700">
            <div class="flex items-center gap-3">
                <img src="https://ui-avatars.com/api/?name=User&background=random" class="w-10 h-10 rounded-full bg-blue-100">
                <div class="overflow-hidden">
                    <h4 class="text-sm font-white text-white">Utilisateur</h4>
                </div>
                <a href="logout.html">
                    <button class="ml-auto text-gray-500 hover:text-red-400"><i class="fa-solid fa-power-off"></i></button>
                </a>
            </div>
        </div>
    </aside>

    <main class="flex-1 flex flex-col h-screen overflow-hidden bg-gray-100">
        <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-6">
            <div class="flex items-center text-sm text-gray-500">
                <span class="text-gray-700">Articles Management</span>
            </div>
        </header>

        <div class="flex-1 overflow-y-auto p-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-semibold text-gray-800">Articles Gallery</h1>
                <a href="/articles/view/addArticle" class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg text-sm font-medium flex items-center gap-2 shadow-sm">
                    <i class="fa-solid fa-plus"></i> Create Article
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 border border-gray-100 overflow-hidden flex flex-col h-full">
                    <div class="relative h-48 w-full">
                       <a href="/articles/view/articleDetail">
                         <img src="https://images.unsplash.com/photo-1544640808-32ca72ac7f67?q=80&w=1000&auto=format&fit=crop" 
                              alt="Cover" 
                              class="w-full h-full object-cover">
                        </a>
                    </div>

                    <div class="p-5 flex-1 flex flex-col">
                        <h3 class="text-lg font-bold text-gray-800 mb-2 line-clamp-2" title="Titre de l'article">
                            Titre de l'article exemplaire
                        </h3>
                        
                        <div class="flex items-center justify-between text-sm text-gray-500 mb-4 mt-auto">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-user-circle text-gray-400"></i>
                                <span>Auteur Nom</span>
                            </div>
                            <div class="flex items-center gap-1 bg-gray-100 px-2 py-1 rounded-full text-xs">
                                <i class="fa-solid fa-eye text-purple-500"></i>
                                <span>124</span>
                            </div>
                        </div>

                        <div class="border-t border-gray-100 my-3"></div>

                        <div class="flex items-center justify-between pt-2">
                            <div class="flex items-center gap-2 text-xs text-gray-400 font-medium">
                                <i class="fa-regular fa-calendar text-gray-400"></i>
                                <span>02 Jan 2026</span>
                            </div>

                            <div class="flex items-center gap-2">
                                <a href="/articles/view/editArticle" class="w-8 h-8 rounded bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white transition-colors flex items-center justify-center shadow-sm" title="Edit">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>
                                <a href="#" onclick="return confirm('Supprimer cet article ?')" class="w-8 h-8 rounded bg-pink-50 text-pink-500 hover:bg-pink-600 hover:text-white transition-colors flex items-center justify-center shadow-sm" title="Delete">
                                    <i class="fa-regular fa-trash-can"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </div>
    </main>

    <script src="blog.js"></script>
</div>
