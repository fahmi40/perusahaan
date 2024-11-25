<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                    <div class="menu_section">
                        <h3>General</h3>
                        <?=
                        \yiister\gentelella\widgets\Menu::widget(
                            [
                                "items" => [	
                                    ["label" => "Home", "url" => "site/index", "icon" => "home"],
                                    ["label" => "Perusahaan", "url" => ["perusahaan/index"], "icon" => "far fa-building"],
                                    ["label" => "Divisi", "url" => ["divisi/index"], "icon" => "fas fa-sitemap"],
                                    ["label" => "Karyawan", "url" => ["karyawan/index"], "icon" => "fas fa-user"],
                                ],
                            ]
                        )
                        ?>
                    </div>

                </div>