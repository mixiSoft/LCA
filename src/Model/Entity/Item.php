<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Item Entity
 *
 * @property int $id
 * @property string $cod_Pat
 * @property string $nombre
 * @property string $marca
 * @property string $descripcion
 * @property string|null $codigo
 * @property string $n_serie
 * @property string $image
 */
class Item extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'cod_Pat' => true,
        'nombre' => true,
        'marca' => true,
        'descripcion' => true,
        'codigo' => true,
        'n_serie' => true,
        'image' => true
    ];
}
