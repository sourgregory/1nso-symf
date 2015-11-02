<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * "user"
 *
 * @ORM\Table(name="user", uniqueConstraints={
 *      @ORM\UniqueConstraint(name="user_username_key", columns={"username"}),
 *      @ORM\UniqueConstraint(name="user_email_key", columns={"email"}),
 *      @ORM\UniqueConstraint(name="user_password_reset_token_key", columns={"password_reset_token"
 * })})
 * @ORM\Entity
 */
class User
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="auth_key", type="string", length=32, nullable=false)
     */
    private $authKey;

    /**
     * @var string
     *
     * @ORM\Column(name="password_hash", type="string", length=255, nullable=false)
     */
    private $passwordHash;

    /**
     * @var string
     *
     * @ORM\Column(name="password_reset_token", type="string", length=255, nullable=true)
     */
    private $passwordResetToken;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="smallint", nullable=false)
     */
    private $status = '10';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt = 'now()';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName=""user"_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;


}

