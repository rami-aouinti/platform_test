<?php

namespace App\Entity;

use App\Repository\ProfileRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProfileRepository::class)
 */
class Profile
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $photo;


    /**
     * @ORM\Column(type="datetime")
     */
    private $birthday;

    /**
     * @ORM\Column(type="datetime")
     */
    private $memberDate;


    /**
     * @ORM\Column(type="string", length=180)
     */
    private $country;

    /**
     * @ORM\Column(type="string", length=180)
     */
    private $city;

    /**
     * @ORM\Column(type="integer")
     */
    private $postcode;

    /**
     * @ORM\Column(type="string", length=180)
     */
    private $street;

    /**
     * @ORM\Column(type="integer")
     */
    private $homenumber;

    /**
     * @ORM\Column(type="string", length=180)
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=180)
     */
    private $facebook;


    /**
     * @ORM\Column(type="string", length=180)
     */
    private $tweeter;

    /**
     * @ORM\Column(type="float")
     */
    private $longitude;


    /**
     * @ORM\Column(type="float")
     */
    private $latitude;

    /**
     * @ORM\OneToOne(targetEntity=User::class, cascade={"persist", "remove"})
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity=Studium::class, mappedBy="profile")
     */
    private $studium;

    /**
     * @ORM\OneToMany(targetEntity=Skill::class, mappedBy="profile")
     */
    private $skill;

    /**
     * @ORM\OneToMany(targetEntity=Hobby::class, mappedBy="profile")
     */
    private $hobby;

    /**
     * @ORM\OneToMany(targetEntity=Experience::class, mappedBy="profile")
     */
    private $experience;

    /**
     * @ORM\OneToMany(targetEntity=Project::class, mappedBy="profile")
     */
    private $project;

    /**
     * Constuctor
     */
    public function __construct()
    {
        $this->studium = new ArrayCollection();
        $this->skill = new ArrayCollection();
        $this->hobby = new ArrayCollection();
        $this->experience = new ArrayCollection();
        $this->project = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo): void
    {
        $this->photo = $photo;
    }


    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday): void
    {
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getMemberDate()
    {
        return $this->memberDate;
    }

    /**
     * @param mixed $memberDate
     */
    public function setMemberDate($memberDate): void
    {
        $this->memberDate = $memberDate;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country): void
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param mixed $postcode
     */
    public function setPostcode($postcode): void
    {
        $this->postcode = $postcode;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street): void
    {
        $this->street = $street;
    }

    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param mixed $sex
     */
    public function setSex($sex): void
    {
        $this->sex = $sex;
    }

    /**
     * @return mixed
     */
    public function getHomenumber()
    {
        return $this->homenumber;
    }

    /**
     * @param mixed $homenumber
     */
    public function setHomenumber($homenumber): void
    {
        $this->homenumber = $homenumber;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel): void
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * @param mixed $facebook
     */
    public function setFacebook($facebook): void
    {
        $this->facebook = $facebook;
    }

    /**
     * @return mixed
     */
    public function getTweeter()
    {
        return $this->tweeter;
    }

    /**
     * @param mixed $tweeter
     */
    public function setTweeter($tweeter): void
    {
        $this->tweeter = $tweeter;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude): void
    {
        $this->longitude = $longitude;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude): void
    {
        $this->latitude = $latitude;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection|Studium[]
     */
    public function getStudium(): Collection
    {
        return $this->studium;
    }

    public function addStudium(Studium $studium): self
    {
        if (!$this->studium->contains($studium)) {
            $this->studium[] = $studium;
            $studium->setProfile($this);
        }

        return $this;
    }

    public function removeStudium(Studium $studium): self
    {
        if ($this->studium->removeElement($studium)) {
            // set the owning side to null (unless already changed)
            if ($studium->getProfile() === $this) {
                $studium->setProfile(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Skill[]
     */
    public function getSkill(): Collection
    {
        return $this->skill;
    }

    public function addSkill(Skill $skill): self
    {
        if (!$this->skill->contains($skill)) {
            $this->skill[] = $skill;
            $skill->setProfile($this);
        }

        return $this;
    }

    public function removeSkill(Skill $skill): self
    {
        if ($this->skill->removeElement($skill)) {
            // set the owning side to null (unless already changed)
            if ($skill->getProfile() === $this) {
                $skill->setProfile(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Hobby[]
     */
    public function getHobby(): Collection
    {
        return $this->hobby;
    }

    public function addHobby(Hobby $hobby): self
    {
        if (!$this->hobby->contains($hobby)) {
            $this->hobby[] = $hobby;
            $hobby->setProfile($this);
        }

        return $this;
    }

    public function removeHobby(Hobby $hobby): self
    {
        if ($this->hobby->removeElement($hobby)) {
            // set the owning side to null (unless already changed)
            if ($hobby->getProfile() === $this) {
                $hobby->setProfile(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Experience[]
     */
    public function getExperience(): Collection
    {
        return $this->experience;
    }

    public function addExperience(Experience $experience): self
    {
        if (!$this->experience->contains($experience)) {
            $this->experience[] = $experience;
            $experience->setProfile($this);
        }

        return $this;
    }

    public function removeExperience(Experience $experience): self
    {
        if ($this->experience->removeElement($experience)) {
            // set the owning side to null (unless already changed)
            if ($experience->getProfile() === $this) {
                $experience->setProfile(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Project[]
     */
    public function getProject(): Collection
    {
        return $this->project;
    }

    public function addProject(Project $project): self
    {
        if (!$this->project->contains($project)) {
            $this->project[] = $project;
            $project->setProfile($this);
        }

        return $this;
    }

    public function removeProject(Project $project): self
    {
        if ($this->project->removeElement($project)) {
            // set the owning side to null (unless already changed)
            if ($project->getProfile() === $this) {
                $project->setProfile(null);
            }
        }

        return $this;
    }
}
