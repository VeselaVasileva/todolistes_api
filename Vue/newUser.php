<section id="new_user">
                    <h2>Mon compte</h2>
                    <div id="creation" method="POST">
                        <div class="element_header">
                            <h3>Mes informations</h3>
                            <button id="modify_profile">Modifier mes informations</button>
                        </div>
                        <div class="creation_field">
                            <label for="user_photo">Photo</label>
                            <input type="file" name="user_photo" id="user_photo" />
                        </div>
                        <div class="creation_field">
                            <label for="user_name">Nom</label>
                            <input type="text" name="name" id="user_name"/>
                        </div>
                        <div class="creation_field">
                            <label for="user_firstname">Prénom</label>
                            <input type="text" name="firstname" id="user_firstname"/>
                        </div>
                        <div class="creation_field">
                            <label for="user_email">Email</label>
                            <input type="email" name="email" id="user_email"/>
                        </div>
                        <div class="creation_field">
                            <label for="user_email_confirme">Confirmer votre email</label>
                            <input type="email" name="email_confirm" id="user_email_confirme"/>
                        </div>
                        <div class="creation_field">
                            <label for="password">Mot de passe</label>
                            <input type="password" name="password" id="password"/>
                        </div>
                        <div class="creation_field">
                            <label for="password_confirme">Confirmer votre mot de passe</label>
                            <input type="password" name="password_confirme" id="password_confirme"/>
                        </div>
                        <button id="test">Créer</button>
                    </div>
                </section>