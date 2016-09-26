<?php
namespace Sushione\Entity;

/**
 * Created by PhpStorm.
 * User: wap48
 * Date: 30/11/15
 * Time: 09:05
 */
class ProduitMenu
{
    private $id = null;
    private $quantite = null;
    private $produit_id = null;
    private $menu_id = null;

    public function __construct()
    {

    }

    public function getId() { return $this->id; }

    public function getQuantite() { return $this->quantite; }
    public function setQuantite($quantite) { $this->quantite = $quantite; }

    public function getProduitId() { return $this->produit_id; }
    public function setProduitId($produit_id) { $this->produit_id = $produit_id; }

    public function getMenuId() { return $this->menu_id; }
    public function setMenuId($menu_id) { $this->menu_id = $menu_id; }

}