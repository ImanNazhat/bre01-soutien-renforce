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
                
                else if($get["route"] === "admin-creer-menu"){
                    
                    $menuController->create();
                }
                else if($get["route"] === "admin-check-creer-menu"){
                    
                    $menuController->checkCreate();
                }
                else if($get["route"] === "admin-modifier-menu"){
                    
                    if (isset($get["menu_id"])) {
                        
                    $menuId = (int)$get["menu_id"];
                    $menuController->edit($menuId);
                    }
                }
                else if($get["route"] === "admin-check-modifier-menu"){
                    
                    $menuController->checkEdit();
                }
                else if($get["route"] === "admin-supprimer-menu"){
                    
                    if (isset($get["menu_id"])) {
                        
                    $menuId = (int)$get["menu_id"];
                    $menuController->delete($menuId);
                    }
                }
                else if($get["route"] === "admin-check-supprimer-menu"){
                    
                    $menuController->checkDelete();
                }
        }
         else {
                    $menuController->home();
                }
	}
}
