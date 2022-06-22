<!DOCTYPE html>
<html  lang="fr">
    <head>
        <meta charset="utf-8"/>
        <!--Lien à corriger -->
        <link rel="stylesheet" href="http://localhost/todolistapi/Vue/Styles/main.css" type="text/css" />
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"  type="text/javascript"></script>
        <script src="javascript/main.js" type="text/javascript"></script>

        <title>Mes To Do Listes</title>
    </head>
    <body>
        <div id="page_wrapper">
            <div id="header_wrapper">
                <header>
                    <h1>Mon block note</h1>
                    <nav hidden>
                        <details class="dropdown-menu">
                            <summary>
                                <img id="avatar" src="Images/maPhoto.jpg" alt="Photo de profile" />
                            </summary>
                            <ul id="main_menu">
                                <li id="nav_my_profile">Mon compte</li>
                                <li id="nav_my_lists">Mes ToDo Listes</li>
                                <li id="nav_log_out">Déconnexion</li>
                            </ul>
                        </details>
                    </nav>

                </header>
            </div>
            <div id="content_wrapper">
                <aside hidden>
                    <a href="Images/maPhoto.jpg"><img src="Images/maPhoto.jpg" id="profile_photo" alt="Photo de profile"></a>
                </aside>

                    <?php echo $pageContent; ?>   
        </div>
        </div>
        
    </body>
    
</html>