<?php
/**
 * Autogenerated by Thrift Compiler (0.13.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class TTypeQualifierValue
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'i32Value',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        2 => array(
            'var' => 'stringValue',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var int
     */
    public $i32Value = null;
    /**
     * @var string
     */
    public $stringValue = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['i32Value'])) {
                $this->i32Value = $vals['i32Value'];
            }
            if (isset($vals['stringValue'])) {
                $this->stringValue = $vals['stringValue'];
            }
        }
    }

    public function getName()
    {
        return 'TTypeQualifierValue';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->i32Value);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->stringValue);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('TTypeQualifierValue');
        if ($this->i32Value !== null) {
            $xfer += $output->writeFieldBegin('i32Value', TType::I32, 1);
            $xfer += $output->writeI32($this->i32Value);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->stringValue !== null) {
            $xfer += $output->writeFieldBegin('stringValue', TType::STRING, 2);
            $xfer += $output->writeString($this->stringValue);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
