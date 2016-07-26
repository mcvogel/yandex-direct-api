<?php

namespace directapi\services\ads\models;


use directapi\components\constraints as DirectApiAssert;
use directapi\components\interfaces\ICallbackValidation;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class TextAdUpdate extends Model
{
    /**
     * @var string
     * @Assert\Length(
     *     max="33"
     * )
     */
    public $Title;

    /**
     * @var string
     * @Assert\Length(
     *     max="75"
     * )
     */
    public $Text;

    /**
     * @var string
     * @Assert\Length(
     *     max="1024"
     * )
     */
    public $Href;

    /**
     * @var \directapi\services\ads\enum\AgeLabelEnum
     * @DirectApiAssert\IsEnum(type="directapi\services\ads\enum\AgeLabelEnum")
     */
    public $AgeLabel;

    /**
     * @var int
     */
    public $VCardId;

    /**
     * @var string
     */
    public $AdImageHash;

    /**
     * @var string
     */
    public $DisplayUrlPath;
    
    /**
     * @var int
     */
    public $SitelinkSetId;
    
    /**
     * @var AdExtensionSetting
     */
    public $CalloutSetting;
}