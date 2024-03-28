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
                        echo "méthode checkCreate";
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