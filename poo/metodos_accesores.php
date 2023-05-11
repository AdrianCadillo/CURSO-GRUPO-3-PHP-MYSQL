<?php 

class Usuario 
{
    /// atributos o propiedades

    private int $Id_Usuario;

    private string $Username;

    private string $email;

    private string $Password;


    /// metodos accesores

    

    /**
     * Get the value of Id_Usuario
     *
     * @return int
     */
    public function getIdUsuario(): int
    {
        return $this->Id_Usuario;
    }

    /**
     * Set the value of Id_Usuario
     *
     * @param int $Id_Usuario
     *
     * @return self
     */
    public function setIdUsuario(int $Id_Usuario): self
    {
        $this->Id_Usuario = $Id_Usuario;

        return $this;
    }

    /**
     * Get the value of Username
     *
     * @return string
     */
    public function getUsername(): string
    {
        return $this->Username;
    }

    /**
     * Set the value of Username
     *
     * @param string $Username
     *
     * @return self
     */
    public function setUsername(string $Username): self
    {
        $this->Username = $Username;

        return $this;
    }

    /**
     * Get the value of email
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of Password
     *
     * @return string
     */
    public function getPassword(): string
    {
        return $this->Password;
    }

    /**
     * Set the value of Password
     *
     * @param string $Password
     *
     * @return self
     */
    public function setPassword(string $Password): self
    {
        $this->Password = $Password;

        return $this;
    }
}

$usuario = new Usuario;

$usuario->setIdUsuario(23);

$usuario->setUsername("sistemas@4500");

$usuario->setEmail("sistemas@gmail.com");

$usuario->setPassword(password_hash("sistemas_*",PASSWORD_BCRYPT));

ECHO "USERNAME : ".$usuario->getUsername()."<br>PASSWORD : ".$usuario->getPassword();
