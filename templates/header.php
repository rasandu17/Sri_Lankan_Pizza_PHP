<head>    <title>Sri Lankan Pizza</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <style>        :root {
            --primary-color: #AF3E3E;
            --secondary-color: #0f172a;
            --accent-color: #e11d48;
            --text-dark: #1e293b;
            --text-light: #f8fafc;
            --bg-light: #f1f5f9;
            --bg-accent: #e2e8f0;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--bg-light);
            color: var(--text-dark);
            line-height: 1.7;
        }
        
        .brand {
            background: var(--primary-color) !important;
            transition: all 0.3s ease;
        }
        
        .brand:hover {
            background: var(--secondary-color) !important;
            box-shadow: 0 4px 8px rgba(15, 23, 42, 0.2);
        }        .brand-text {
            color: var(--primary-color) !important;
            font-weight: 600;
        }
        
        .logo-text {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            letter-spacing: 1px;
        }
        
        nav {
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            margin-bottom: 30px;
            height: 70px;
            line-height: 70px;
        }
        
        nav .nav-wrapper {
            padding: 0 15px;
        }
        
        nav ul a {
            font-weight: 500;
            color: var(--secondary-color);
            transition: color 0.3s ease;
        }
        
        nav ul a:hover {
            background: transparent;
            color: var(--primary-color);
        }        form {
            width: 100%;
            max-width: none;
            margin: 0;
            padding: 35px;
            box-sizing: border-box;
            border-radius: 4px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.04);
            background-color: #ffffff;
        }
        
        .btn {
            border-radius: 4px;
            padding: 0 25px;
            text-transform: none;
            font-weight: 500;
            letter-spacing: 0.3px;
            box-shadow: 0 2px 5px rgba(30, 58, 138, 0.15);
            height: 40px;
            line-height: 40px;
        }
        
        .btn-large {
            height: 48px;
            line-height: 48px;
            font-size: 15px;
        }
        
        .card {
            border-radius: 4px;
            overflow: hidden;
            transition: all 0.25s ease;
            border: 1px solid rgba(0,0,0,0.05);
        }
        
        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.08);
        }
          .card-content h6 {
            font-weight: 600;
            font-size: 1.1rem;
            color: var(--text-dark);
            margin-top: 0;
            margin-bottom: 16px;
        }
        
        .card-action {
            border-top: 1px solid rgba(0,0,0,0.05);
            padding: 16px 24px;
        }
        
        .card-action a {
            color: var(--primary-color) !important;
            font-weight: 500;
            transition: color 0.2s ease;
        }
        
        .card-action a:hover {
            color: var(--accent-color) !important;
        }
        
        .page-title {
            font-family: 'Playfair Display', serif;
            margin-bottom: 25px;
            position: relative;
            display: inline-block;
            font-weight: 700;
            color: var(--secondary-color);
        }
        
        .page-title::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 40px;
            height: 3px;
            background-color: var(--accent-color);
        }
        
        .center .page-title::after {
            left: 50%;
            transform: translateX(-50%);
        }
        
        input[type=text]:focus {
            border-bottom: 1px solid var(--primary-color) !important;
            box-shadow: 0 1px 0 0 var(--primary-color) !important;
        }
        
        .input-field input[type=text]:focus + label {
            color: var(--primary-color) !important;
        }
        
        .helper-text {
            font-size: 12px;
            color: rgba(0,0,0,0.6);
        }        /* Professional UI enhancements */
        .section {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }
        
        .chip {
            background-color: var(--bg-accent);
            font-weight: 500;
            font-size: 12px;
        }
        
        .breadcrumbs {
            padding: 10px 0;
            margin-bottom: 20px;
            color: rgba(0,0,0,0.5);
            font-size: 14px;
        }
        
        .breadcrumbs a {
            color: var(--primary-color);
        }
        
        .breadcrumbs .material-icons {
            font-size: 16px;
            vertical-align: text-bottom;
        }
        
        .info-block {
            padding: 24px;
            background: #fff;
            border-radius: 4px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            margin-bottom: 20px;
            border-left: 3px solid var(--primary-color);
        }
        
        table.highlight>tbody>tr:hover {
            background-color: rgba(30, 58, 138, 0.05);
        }
        
        .divider {
            margin: 20px 0;
            opacity: 0.6;
        }
        
        /* Responsive improvements */
        @media only screen and (max-width: 992px) {
            nav .brand-logo {
                font-size: 1.6rem;
            }
        }
        
        @media only screen and (max-width: 600px) {
            .container {
                width: 95%;
            }
            
            form {
                padding: 20px;
            }
        }
    </style>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems);
            
            // Initialize tooltips
            var tooltips = document.querySelectorAll('.tooltipped');
            var tooltipInstances = M.Tooltip.init(tooltips);
        });
    </script>
</head>

<body>
    <header>        <nav class="white z-depth-1">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="index.php" class="brand-logo brand-text logo-text">Sri Lankan Pizza</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="index.php">Our Menu</a></li>
                        <li><a href="add.php" class="btn brand z-depth-1 waves-effect waves-light">
                            <i class="material-icons left">add</i>Create Pizza
                        </a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
      <ul class="sidenav" id="mobile-demo">
        <li><div class="user-view">
            <div class="background" style="background-color: var(--bg-accent);"></div>
            <span class="logo-text" style="color: var(--primary-color); padding: 20px 0; display: block; text-align: center;">Sri Lankan Pizza</span>
        </div></li>
        <li><a href="index.php"><i class="material-icons">restaurant_menu</i>Our Menu</a></li>
        <li><a href="#"><i class="material-icons">info</i>About Us</a></li>
        <li><div class="divider"></div></li>
        <li><a href="add.php"><i class="material-icons">add_circle</i>Create Pizza</a></li>
    </ul>
    
    <div class="container"