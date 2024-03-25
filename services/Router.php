<?php

class Router 
{
	public function handleRequest(array $get) : void 
	{
                 $menuController = new MenuController();
                 $adminController = new AdminController();
                 
                if (isset($get["route"]))
                {
                  if ($get["route"] === "menu") {
                      
                    $menuController->Menu();
                } 
                else if($get["route"] === "menu-vegetarien") {
                    
                    $menuController->MenuVegetarian();
                }
                else if($get["route"] === "admin-menu") {
                    
                    $adminController->AdminMenu();
                }
        }
	}
}