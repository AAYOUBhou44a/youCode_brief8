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