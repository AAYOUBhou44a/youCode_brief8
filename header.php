<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookShine Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --sidebar-bg: #1e1b2e;
            --purple-primary: #7c3aed;
            --pink-accent: #f43f5e;
            --bg-body: #f3f4f6;
        }
        body { font-family: 'Inter', sans-serif; background-color: var(--bg-body); }
        .sidebar-bg { background-color: var(--sidebar-bg); }
        
        .menu-item.active11 {
            background-color: #f3f4f6;
            color: #1f2937;
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
            position: relative;
        }
        .menu-item.active11::before, .menu-item.active11::after {
            content: '';
            position: absolute;
            right: 0;
            width: 21px;
            height: 20px;
            background: transparent;
            pointer-events: none;
        }
        .menu-item.active11::before { top: -20px; box-shadow: 10px 10px 0 #f3f4f6; border-bottom-right-radius: 20px; }
        .menu-item.active11::after { bottom: -20px; box-shadow: 10px -10px 0 #f3f4f6; border-top-right-radius: 20px; }

        .toggle-checkbox:checked {
            right: 0;
            border-color: #7c3aed;
        }
        .toggle-checkbox:checked + .toggle-label {
            background-color: #7c3aed;
        }
    </style>
</head>
<body>
        <nav class="bg-white border-b border-gray-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="/articles/view/home" class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-500">
                        <i class="fa-solid fa-book-open text-purple-600 mr-2"></i>BookShine
                    </a>
                </div>
                <div class="flex items-center gap-4">
                    <span class="text-sm text-gray-600 hidden md:block">Bonjour, <strong><?= $_SESSION["user_firstName"] ?></strong></span>
                    <a href="/articles/view/articles" class="text-sm bg-purple-100 text-purple-700 px-3 py-1 rounded-full hover:bg-purple-200 transition">Dashboard</a>
                    <a href="/articles/view/login" class="text-gray-500 hover:text-red-500 transition-colors"><i class="fa-solid fa-power-off"></i></a>
                </div>
            </div>
        </div>
    </nav>