<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AutomovilsClient Entity
 *
 * @property int $id
 * @property \Cake\I18n\Time $feprestamo
 * @property \Cake\I18n\Time $fedevolucion
 * @property int $automovil_id
 * @property int $client_id
 * @property float $psvalor_cobrar
 *
 * @property \App\Model\Entity\Automovil $automovil
 * @property \App\Model\Entity\Client $client
 */
class AutomovilsClient extends Entity
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
        '*' => true,
        'id' => false
    ];
}
