<!DOCTYPE html>
<html lang="en" data-theme="bumblebee">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!--- Tailwind CSS & Daisy UI CSS -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.18.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <!-- Favicon -->
    <link rel="icon" href="res/favicon.svg">
    <title>Todo List</title>
</head>
<body>

    <!-- Copyright -->
   
    
    <div class="container">
        <header>
            <h1>Smart To-do List</h1>
            <!-- Error message -->
            <div class="alert-message">

            </div>

            <div class="input-section col-12">
                <input type="text" placeholder="Add a task name . . ." class="input input-bordered input-secondary w-full max-w-xs" />
                <button class="btn btn-secondary add-task-button">
                    <i class="bx bx-plus bx-sm"></i>
                </button>
                
            </div>

            <div class="input-section col-12 mt-5">
                <input type="datetime-local" placeholder="Add time . . ." class="input input-bordered input-secondary w-full max-w-xs" />
                <button class="btn btn-secondary add-task-button">
                    <i class="bx bx-plus bx-sm"></i>
                </button>
                
            </div>
        </header>

        <div class="todos-filter">
            <!-- <div class="dropdown">
                <label tabindex="0" class="btn m-1">Filter</label>
                <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a>All</a></li>
                    <li><a>Pending</a></li>
                    <li><a>Completed</a></li>
                </ul>
            </div> -->

            <button class="btn btn-secondary delete-all-btn">
                Delete All
            </button>
        </div>

        <ul class="todos-list">
            
        </ul>
    </div>

    <!--Theme switcher-->
    <div class="theme-switcher">
        <div class="dropdown dropdown-left">
            <label tabindex="0" class="btn m-1">
                <i class='bx bxs-palette bx-sm'></i>
            </label>
            <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                <li class="theme-item" theme="cupcake"><a>cupcake</a></li>
                <li class="theme-item" theme="dark"><a>dark</a></li>
                <li class="theme-item" theme="light"><a>light</a></li>
                <li class="theme-item" theme="bumblebee"><a>bumblebee</a></li>
                <li class="theme-item" theme="synthwave"><a>synthwave</a></li>
                <li class="theme-item" theme="halloween"><a>halloween</a></li>
                <li class="theme-item" theme="fantasy"><a>fantasy</a></li>
                <li class="theme-item" theme="dracula"><a>dracula</a></li>
                <li class="theme-item" theme="aqua"><a>aqua</a></li>
                <li class="theme-item" theme="luxury"><a>luxury</a></li>
                <li class="theme-item" theme="night"><a>night</a></li>
            </ul>
        </div>
    </div>
    <!-- JS -->
    <script src="js/main.js"></script>
    <script src="js/theme_switcher.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        flatpickr("#myID", {});
    </script>
     
</body>
</html>