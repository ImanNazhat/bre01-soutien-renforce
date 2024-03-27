<?php

class AdminController extends AbstractController
                {
                    public function AdminMenu() : void
                    {
                        $menu = new MenuManager;
                        
                        $menus = $menu->findAll();
                        //dump ($menus);
                        
                       $this->render("admin/admin-menu.html.twig", [
                           "menus" => $menus
                       ]);
                       
                    }
                     
                }