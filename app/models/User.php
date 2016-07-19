<?php

use Phalcon\Mvc\Model\Validator\Email as Email;

class User extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id;

    /**
     *
     * @var string
     */
    protected $name;

    /**
     *
     * @var string
     */
    protected $password;

    /**
     *
     * @var string
     */
    protected $email;

    /**
     *
     * @var string
     */
    protected $created_datetime;

    /**
     *
     * @var string
     */
    protected $created_user;

    /**
     *
     * @var string
     */
    protected $updated_datetime;

    /**
     *
     * @var string
     */
    protected $updated_user;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Method to set the value of field name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Method to set the value of field password
     *
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Method to set the value of field email
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Method to set the value of field created_datetime
     *
     * @param string $created_datetime
     * @return $this
     */
    public function setCreatedDatetime($created_datetime)
    {
        $this->created_datetime = $created_datetime;

        return $this;
    }

    /**
     * Method to set the value of field created_user
     *
     * @param string $created_user
     * @return $this
     */
    public function setCreatedUser($created_user)
    {
        $this->created_user = $created_user;

        return $this;
    }

    /**
     * Method to set the value of field updated_datetime
     *
     * @param string $updated_datetime
     * @return $this
     */
    public function setUpdatedDatetime($updated_datetime)
    {
        $this->updated_datetime = $updated_datetime;

        return $this;
    }

    /**
     * Method to set the value of field updated_user
     *
     * @param string $updated_user
     * @return $this
     */
    public function setUpdatedUser($updated_user)
    {
        $this->updated_user = $updated_user;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of field password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Returns the value of field email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Returns the value of field created_datetime
     *
     * @return string
     */
    public function getCreatedDatetime()
    {
        return $this->created_datetime;
    }

    /**
     * Returns the value of field created_user
     *
     * @return string
     */
    public function getCreatedUser()
    {
        return $this->created_user;
    }

    /**
     * Returns the value of field updated_datetime
     *
     * @return string
     */
    public function getUpdatedDatetime()
    {
        return $this->updated_datetime;
    }

    /**
     * Returns the value of field updated_user
     *
     * @return string
     */
    public function getUpdatedUser()
    {
        return $this->updated_user;
    }

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $this->validate(
            new Email(
                array(
                    'field'    => 'email',
                    'required' => true,
                )
            )
        );

        if ($this->validationHasFailed() == true) {
            return false;
        }

        return true;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'user';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return User[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return User
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Independent Column Mapping.
     * Keys are the real names in the table and the values their names in the application
     *
     * @return array
     */
    public function columnMap()
    {
        return array(
            'id' => 'id',
            'name' => 'name',
            'password' => 'password',
            'email' => 'email',
            'created_datetime' => 'created_datetime',
            'created_user' => 'created_user',
            'updated_datetime' => 'updated_datetime',
            'updated_user' => 'updated_user'
        );
    }

}
