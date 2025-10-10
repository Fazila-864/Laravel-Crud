
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dried Fruits</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #556B2F; /* Olive green */
            --primary-light: #6B8E23; /* Lighter olive */
            --primary-dark: #4A5A23; /* Darker olive */
            --accent: #8A9A5B; /* Muted olive accent */
            --light: #ffffff;
            --dark: #2C3E50;
            --gray: #f5f7f9;
            --text: #333333;
            --text-light: #7f8c8d;
            --sidebar-width: 260px;
            --bottom-bar-height: 70px;
            --transition: all 0.3s ease;
            --border-radius: 10px;
        }

        body {
            display: flex;
            min-height: 100vh;
            background-color: var(--light);
            color: var(--text);
            overflow-x: hidden;
        }
        .card-price{
            font-size:15px;
            color:var(--primary-light);
        }
        .card-title{
            color: var(--primary-dark)
        }
        .main-para{
            font-size:15px;
            color:var(--primary-light);
            
        }
        .main-head{
            font-size:40px;
            color:var(--primary-dark);
            padding-bottom:20px;
            line-height:2px;
            font-weight:500;
            
        }
         .main-para1{
            font-size:16px;
            color:var(--primary);
        }
        
        /* Sidebar Styles */
        .sidebar {
            width: var(--sidebar-width);
            background: var(--light);
            color: var(--text);
            height: 100vh;
            position: fixed;
            padding: 20px 0;
            display: flex;
            flex-direction: column;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);
            transition: var(--transition);
            z-index: 100;
            border-right: 1px solid rgba(0, 0, 0, 0.05);
        }

        .logo {
            padding: 0 20px 20px;
            text-align: center;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
        }

        .logo h2 {
            font-weight: 700;
            font-size: 22px;
            letter-spacing: 0.5px;
            color: var(--primary);
        }

        .logo span {
            color: var(--accent);
            font-weight: 600;
        }

        .nav-links {
            flex: 1;
            overflow-y: auto;
            padding: 10px 0;
        }

        .nav-item {
            display: flex;
            align-items: center;
            padding: 14px 20px;
            margin: 8px 15px;
            border-radius: var(--border-radius);
            transition: var(--transition);
            cursor: pointer;
            color: var(--text);
        }

        .nav-item:hover {
            background: rgba(85, 107, 47, 0.1);
            color: var(--primary);
        }

        .nav-item.active ,.nav-item.active a{
            background: var(--primary);
            color: white;
            box-shadow: 0 5px 15px rgba(85, 107, 47, 0.2);
        }
        .nav-item a{
            text-decoration:none;
            color:black;
        }

        .nav-item i {
            font-size: 18px;
            margin-right: 12px;
            width: 24px;
            text-align: center;
        }

        .nav-item span {
            font-size: 15px;
            font-weight: 500;
        }

        /* Login/Logout Section */
        .auth-section {
            padding: 15px 20px;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
        }

        .user-info {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            font-weight: bold;
        }

        .user-details {
            flex: 1;
        }

        .user-name {
            font-weight: 600;
            font-size: 14px;
            color: var(--dark);
        }

        .user-role {
            font-size: 12px;
            color: var(--text-light);
        }

        .auth-button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: var(--border-radius);
            background: var(--primary);
            color: white;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }

        .auth-button:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(85, 107, 47, 0.3);
        }

        .auth-button i {
            margin-right: 8px;
            transition: transform 0.3s ease;
        }

        .auth-button:hover i {
            transform: translateX(3px);
        }

        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            padding: 30px;
            transition: var(--transition);
            background: var(--gray);
        }

        .content-header {
            margin-bottom: 30px;
            background: white;
            padding: 25px;
            border-radius: var(--border-radius);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
        }

        .content-header h1 {
            font-size: 28px;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .content-header p {
            color: var(--text-light);
            font-size: 16px;
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .card {
            background: white;
            border-radius: var(--border-radius);
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
            transition: var(--transition);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        }

        .card h3 {
            color: var(--primary);
            margin-bottom: 15px;
            font-size: 18px;
        }

        .card p {
            color: var(--text-light);
            line-height: 1.5;
            font-size: 14px;
        }

        /* Bottom Navigation for Mobile */
        .bottom-nav {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: white;
            box-shadow: 0 -2px 15px rgba(0, 0, 0, 0.08);
            z-index: 90;
            padding: 10px 0;
        }

        .nav-icons {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .nav-icon {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            color: var(--text-light);
            font-size: 12px;
            transition: var(--transition);
            padding: 8px 12px;
            border-radius: 8px;
        }

        .nav-icon:hover {
            color: var(--primary);
            background: rgba(85, 107, 47, 0.1);
        }

        .nav-icon i {
            font-size: 20px;
            margin-bottom: 4px;
        }

        .nav-icon.active {
            color: var(--primary);
            background: rgba(85, 107, 47, 0.1);
        }

        /* Animation for login/logout */
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .pulse {
            animation: pulse 0.5s ease;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-100%);
            }
            
            .sidebar.open {
                transform: translateX(0);
            }
            
            .main-content {
                margin-left: 0;
                padding-bottom: 80px;
            }
            
            .bottom-nav {
                display: block;
            }
            
            .menu-toggle {
                display: block;
                position: fixed;
                top: 20px;
                left: 20px;
                z-index: 99;
                background: var(--primary);
                color: white;
                border: none;
                border-radius: 8px;
                padding: 10px 15px;
                cursor: pointer;
                transition: var(--transition);
                box-shadow: 0 5px 15px rgba(85, 107, 47, 0.3);
            }
            
            .menu-toggle:hover {
                background: var(--primary-dark);
            }
        }

        @media (max-width: 576px) {
            .main-content {
                padding: 20px 15px 80px 15px;
            }
            
            .dashboard-grid {
                grid-template-columns: 1fr;
            }
            
            .content-header h1 {
                font-size: 24px;
            }
            
            .content-header {
                padding: 20px;
            }
        }
 /* Additional styling for the form */
        .form-container {
            margin: auto;
            width: 90%;
            max-width: 600px;
            background: var(--light);
            border-radius: var(--border-radius);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            animation: fadeIn 0.5s ease-out;
        }

        .form-header {
            background: var(--primary);
            color: var(--light);
            padding: 25px;
            text-align: center;
        }

        .form-header h1 {
            font-weight: 600;
            font-size: 1.8rem;
            margin-bottom: 5px;
        }

        .form-header p {
            opacity: 0.9;
        }

        .form-body {
            padding: 30px;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
            opacity: 0;
            transform: translateY(20px);
            animation: slideUp 0.5s forwards;
        }

        .form-group:nth-child(1) { animation-delay: 0.1s; }
        .form-group:nth-child(2) { animation-delay: 0.2s; }
        .form-group:nth-child(3) { animation-delay: 0.3s; }
        .form-group:nth-child(4) { animation-delay: 0.4s; }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark);
            transition: var(--transition);
        }

        .input-icon {
            position: relative;
        }

        .input-icon i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
            transition: var(--transition);
        }

        input, textarea {
            width: 100%;
            padding: 15px 15px 15px 45px;
            border: 2px solid #e1e5eb;
            border-radius: var(--border-radius);
            font-size: 16px;
            transition: var(--transition);
            outline: none;
            font-family: inherit;
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        input:focus, textarea:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(85, 107, 47, 0.2);
        }

        input:focus + i, textarea:focus + i {
            color: var(--primary);
        }

        .file-input {
            display: none;
        }

        .file-label {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border: 2px dashed #e1e5eb;
            border-radius: var(--border-radius);
            padding: 30px;
            text-align: center;
            cursor: pointer;
            transition: var(--transition);
        }

        .file-label:hover {
            border-color: var(--primary);
            background-color: rgba(85, 107, 47, 0.05);
        }

        .file-label i {
            font-size: 2.5rem;
            color: var(--primary-light);
            margin-bottom: 10px;
        }

        .file-label span {
            color: var(--primary);
            font-weight: 600;
        }

        .file-label p {
            color: var(--text-light);
            font-size: 0.9rem;
            margin-top: 5px;
        }

        .btn {
            background: var(--primary);
            color: var(--light);
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: var(--border-radius);
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .btn:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .btn:active {
            transform: translateY(0);
        }

        .image-preview {
            margin-top: 20px;
            display: none;
            text-align: center;
        }

        .image-preview img {
            max-width: 100%;
            max-height: 200px;
            border-radius: var(--border-radius);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .form-body {
                padding: 20px;
            }
            
            input, textarea {
                padding: 12px 12px 12px 40px;
            }
        }

        @media (max-width: 480px) {
            .form-header {
                padding: 20px;
            }
            
            .form-header h1 {
                font-size: 1.5rem;
            }
            
            .file-label {
                padding: 20px;
            }
            
            .btn {
                padding: 12px;
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    {{-- Sidebar / Dashboard Layout --}}
    @include('partial.dashboard')

    {{-- Page Content --}}
    <div class="main-content">
    <div class="container">
        @yield('content')
    </div>
</div>
</body>
</html>