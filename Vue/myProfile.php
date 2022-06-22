<section id="my_profile">
                    <h2>Mon compte</h2>
                    <div>
                        <div class="element_header">
                            <h3>Mes informations</h3>
                            <button id="modify_profile">Modifier mes informations</button>
                        </div>
                        <div class="myProfile_field">
                            <?php echo $datas['name'] . ' ' . $datas['firstname']; ?>
                        </div>
                        <div class="myProfile_field">
                            <?php echo $datas['email']; ?>
                        </div>
                        <div class="myProfile_field">
                            <button id="modify_password">Modifier mon mot de passe</button>
                        </div>
        
                    </div>
                </section>