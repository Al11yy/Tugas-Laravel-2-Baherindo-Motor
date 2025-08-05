<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Baherindo Motor')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        }
        
        body {
            background: #000000;
            color: #ffffff;
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 4px;
        }
        
        ::-webkit-scrollbar-track {
            background: #1a1a1a;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #333333;
            border-radius: 2px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #555555;
        }

        /* Tesla-like smooth animations */
        .smooth-transition {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .hero-fade {
            animation: heroFade 1.2s ease-out;
        }
        
        @keyframes heroFade {
            from { 
                opacity: 0; 
                transform: translateY(30px);
            }
            to { 
                opacity: 1; 
                transform: translateY(0);
            }
        }

        /* Tesla button style */
        .tesla-btn {
            background: transparent;
            border: 3px solid #ffffff;
            color: #ffffff;
            font-weight: 500;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }
        
        .tesla-btn:hover {
            background: #ffffff;
            color: #000000;
        }
        
        .tesla-btn-primary {
            background: #ffffff;
            color: #000000;
            border: 3px solid #ffffff;
        }
        
        .tesla-btn-primary:hover {
            background: transparent;
            color: #ffffff;
        }
    </style>
</head>
<body class="bg-black text-white antialiased">
    @include('layout.navbar')
    
    <main>
        @yield('content')
    </main>

    @include('layout.footer')
</body>
</html>
