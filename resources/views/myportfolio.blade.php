
<!DOCTYPE html>
<html>
<head>
    <title>My Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class= "top-bar">
        <h1 class = "header-title">KylV</h1>
    
                <div class = "profile-piture">
                <img src="{{ asset('images/profile.jpg') }}" alt="Profile Picture" class="profile-picture">
                <div class = "profile-info">
                    
                    </div>
                </div>
    </header>
    </body>

    <main class="content-card">
        <p class="content-text">Welcome to my portfolio! Here you can find information about my skills, projects, and experience. Feel free to explore and learn more about me.</p>
    </main>
</html>