<?php

class AMQPConnection
{
    /**
     * Establish a connection with the AMQP broker.
     *
     * This method will initiate a connection with the AMQP broker.
     *
     * @return bool TRUE on success or FALSE on failure.
     */
    public function connect()
    {
    }

    /**
     * Create an instance of AMQPConnection
     *
     * Creates an AMQPConnection instance representing a connection to an AMQP
     * broker. A connection will not be established until
     * AMQPConnection::connect() is called.
     *
     * @param  array $credentials optional array of credential information for
     *                            connecting to the AMQP broker.
     *
     * @return AMQPConnection     An AMQPConnection object.
     */
    public function __construct(array $credentials = array())
    {
    }

    /**
     * Closes the connection with the AMQP broker.
     *
     * This method will close an open connection with the AMQP broker.
     *
     * @return bool true if connection was successfully closed, false otherwise.
     */
    public function diconnect()
    {
    }

    /**
     * Get the configured host
     *
     * @return string The configured hostname of the broker
     */
    public function getHost()
    {
    }

    /**
     * Get the configured login
     *
     * @return string The configured login as a string.
     */
    public function getLogin()
    {
    }

    /**
     * Get the configured password
     *
     * @return string The configured password as a string.
     */
    public function getPassword()
    {
    }

    /**
     * Get the configured port
     *
     * @return int The configured port as an integer.
     */
    public function getPort()
    {
    }

    /**
     * Get the configured vhost
     *
     * @return string The configured virtual host as a string.
     */
    public function getVhost()
    {
    }

    /**
     * check whether the connection to the AMQP broker is still valid. It does
     * so by checking the return status of the last command.
     *
     * @return bool true if connected, false otherwise
     */
    public function isConnected()
    {
    }

    /**
     * close any open connections and initiate a new connection with the AMQP
     * broker.
     *
     * @return bool TRUE on success or FALSE on failure.
     */
    public function reconnect()
    {
    }

    /**
     * set the hostname used to connect to the AMQP broker.
     *
     * @param string $host             The hostname of the AMQP broker.
     *
     * @throws AMQPConnectionException if host is longer then 1024characters.
     *
     * @return bool                    TRUE on success or FALSE on failure.
     */
    public function setHost($host)
    {
    }

    /**
     * set the login string used to connect to the AMQP broker.
     *
     * @param  string $login           The login string used to authenticate
     *                                 with the AMQP broker.
     *
     * @throws AMQPConnectionException if login is longer then 32characters.
     *
     * @return bool                    TRUE on success or FALSE on failure.
     */
    public function setLogin($login)
    {
    }

    /**
     * set the password string used to connect to the AMQP broker.
     *
     * @param  string $password        The password string used to authenticate
     *                                 with the AMQP broker.
     *
     * @throws AMQPConnectionException if password is longer then 32characters.
     *
     * @return bool                    TRUE on success or FALSE on failure.
     */
    public function setPassword($password)
    {
    }

    /**
     * Set the port used to connect to the AMQP broker.
     *
     * @param  int $port               The port used to connect to the AMQP
     *                                 broker.
     *
     * @throws AMQPConnectionException if port is longer not between 1 and 65535
     *
     * @return bool                    TRUE on success or FALSE on failure.
     */
    public function setPort($port)
    {
    }

    /**
     * Sets the virtual host to which to connect on the AMQP broker.
     *
     * @param  string $vhost           The virtual host to use on the AMQP
     *                                 broker.
     *
     * @throws AMQPConnectionException if host is longer then 32characters.
     *
     * @return bool                    TRUE on success or FALSE on failure.
     */
    public function setVhost($vhost)
    {
    }
}
