<?php
namespace metastore;

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

class FireEventRequest
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'successful',
            'isRequired' => true,
            'type' => TType::BOOL,
        ),
        2 => array(
            'var' => 'data',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\metastore\FireEventRequestData',
        ),
        3 => array(
            'var' => 'dbName',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'tableName',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        5 => array(
            'var' => 'partitionVals',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => array(
                'type' => TType::STRING,
                ),
        ),
        6 => array(
            'var' => 'catName',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var bool
     */
    public $successful = null;
    /**
     * @var \metastore\FireEventRequestData
     */
    public $data = null;
    /**
     * @var string
     */
    public $dbName = null;
    /**
     * @var string
     */
    public $tableName = null;
    /**
     * @var string[]
     */
    public $partitionVals = null;
    /**
     * @var string
     */
    public $catName = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['successful'])) {
                $this->successful = $vals['successful'];
            }
            if (isset($vals['data'])) {
                $this->data = $vals['data'];
            }
            if (isset($vals['dbName'])) {
                $this->dbName = $vals['dbName'];
            }
            if (isset($vals['tableName'])) {
                $this->tableName = $vals['tableName'];
            }
            if (isset($vals['partitionVals'])) {
                $this->partitionVals = $vals['partitionVals'];
            }
            if (isset($vals['catName'])) {
                $this->catName = $vals['catName'];
            }
        }
    }

    public function getName()
    {
        return 'FireEventRequest';
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
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->successful);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRUCT) {
                        $this->data = new \metastore\FireEventRequestData();
                        $xfer += $this->data->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->dbName);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->tableName);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::LST) {
                        $this->partitionVals = array();
                        $_size810 = 0;
                        $_etype813 = 0;
                        $xfer += $input->readListBegin($_etype813, $_size810);
                        for ($_i814 = 0; $_i814 < $_size810; ++$_i814) {
                            $elem815 = null;
                            $xfer += $input->readString($elem815);
                            $this->partitionVals []= $elem815;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->catName);
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
        $xfer += $output->writeStructBegin('FireEventRequest');
        if ($this->successful !== null) {
            $xfer += $output->writeFieldBegin('successful', TType::BOOL, 1);
            $xfer += $output->writeBool($this->successful);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->data !== null) {
            if (!is_object($this->data)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('data', TType::STRUCT, 2);
            $xfer += $this->data->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->dbName !== null) {
            $xfer += $output->writeFieldBegin('dbName', TType::STRING, 3);
            $xfer += $output->writeString($this->dbName);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->tableName !== null) {
            $xfer += $output->writeFieldBegin('tableName', TType::STRING, 4);
            $xfer += $output->writeString($this->tableName);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->partitionVals !== null) {
            if (!is_array($this->partitionVals)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('partitionVals', TType::LST, 5);
            $output->writeListBegin(TType::STRING, count($this->partitionVals));
            foreach ($this->partitionVals as $iter816) {
                $xfer += $output->writeString($iter816);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->catName !== null) {
            $xfer += $output->writeFieldBegin('catName', TType::STRING, 6);
            $xfer += $output->writeString($this->catName);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
