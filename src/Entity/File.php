<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="files")
 * @ORM\HasLifecycleCallbacks
 */
class File
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fileName;

    /**
     * @Assert\File(maxSize="6000000")
     */
    private $file;

    private $temp;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function generateFileName()
    {
        if ($this->getFile() !== null) {
            $this->fileName = md5(uniqid()) . '.' . $this->getFile()->guessExtension();
        }
    }

    /**
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
        // check if we have an old image path
        if (isset($this->fileName)) {
            $this->temp = $this->fileName;
            $this->fileName = null;
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function uploadFile()
    {
        if ($this->getFile() !== null) {
            $this->getFile()->move($this->getUploadRootDir(), $this->fileName);
            // check if we have an old image
            if (isset($this->temp)) {
                // delete the old image
                unlink($this->getUploadRootDir() . '/' . $this->temp);
                // clear the temp image path
                $this->temp = null;
            }
            $this->file = null;
        }
    }

    /**
     * @ORM\PreRemove()
     */
    public function storeFilename()
    {
        if ($this->fileName === null) {
            $this->temp = null;
        } else {
            $this->temp = $this->getUploadRootDir() . '/' . $this->fileName;
        }
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeFile()
    {
        if ($this->temp !== null) {
            unlink($this->temp);
        }
    }

    public function getWebPath()
    {
        if ($this->fileName !== null) {
            return $this->getUploadDir() . '/' . $this->fileName;
        } else {
            return null;
        }
    }

    protected function getUploadRootDir()
    {
        return __DIR__ . '/../../public/' . $this->getUploadDir();
    }

    protected function getUploadDir()
    {
        return 'assets/uploads';
    }
}
