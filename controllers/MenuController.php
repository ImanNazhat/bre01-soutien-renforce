<?php

class MenuController extends AbstractController
                {
                    public function Menu() : void
                    {
                       echo "méthode Menu";
                    }
                    public function MenuVegetarian() : void
                    {
                        //pour essayer que ma function marche bien
                    //     $menuManager = new MenuManager();
                    //   $vegetarians = $menuManager->findAll();
                    //   dump($vegetarians);
                       
                    //   $menuManager = new MenuManager();
                    //   $vegetarians = $menuManager->findOne(3); //ici il faut que j'ai ecrir le numero de l'item que je le veux
                    //   dump($vegetarians);
                       
                    //   $menuManager = new MenuManager();
                    //   $vegetarians = $menuManager->findVegetarian();
                    //   dump($vegetarians);
                    }
                    public function home() : void
                    {
                        $this->render("home.html.twig" , []);
                    }
                    public function create() : void{
                        $this->render("admin/create-menu.html.twig" , []);
                    }
                    
                    public function checkCreate() : void{
                        
                        if(isset($_POST["name"]) && isset($_POST["Description"]) && isset($_POST["image-url"]) && isset($_POST["select"]))
                            {
                                $name = $_POST["name"];
                                $description = $_POST["Description"];
                                $imageUrl = $_POST["image-url"];
                                $select = $_POST["select"];
                                
                                $menu = new Menu($name, $description, $imageUrl,$select);
                                
                                $menuManager = new MenuManager();
                                
                                $createdMenu = $menuManager->create($menu);
                            }
                    }
                    public function edit(int $menuId) : void{
                        $this->render("admin/edit-menu.html.twig" , []);
                    }
                    public function checkEdit() : void{
                        echo "méthode checkEdit";
                    }
                    public function delete(int $menuId) : void{
                        $this->render("admin/delete-menu.html.twig" , []);
                    }
                    public function checkDelete() : void{
                        echo "méthode checkDelete";
                    }
                    
                }