<?php


namespace TFT\personneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\CommentBundle\Entity\Comment as BaseComment;
use FOS\CommentBundle\Model\SignedCommentInterface;
use Symfony\Component\Security\Core\User\UserInterface;


/**
 * @ORM\Entity
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 */
class Comment extends BaseComment implements SignedCommentInterface
{
 /**
  * @ORM\Id
  * @ORM\Column(type="integer")
  * @ORM\GeneratedValue(strategy="AUTO")
  */
 protected $id;
 /**
  * Thread of this comment
  *
  * @var Thread
  * @ORM\ManyToOne(targetEntity="Thread")
  */
 protected $thread;
 /**
  *
  * @ORM\ManyToOne(targetEntity="Forum")
  */
 protected $id_sujet;
 /**
     * Author of the comment
     *
     * @ORM\ManyToOne(targetEntity="TFT\personneBundle\Entity\User")
     * @var User
     */
    protected $author;
 public function getAuthor() {
     return $this->author;
        
    }
 

    public function setAuthor(UserInterface $author) {
        $this->author = $author;
        
    }
         public function getAuthorName()
    {
        if (null === $this->getAuthor()) {
            return 'Anonymous';
        }

        return $this->getAuthor()->getUsername();
    }

}
