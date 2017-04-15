<?php
declare(strict_types=1);

namespace ConferenceManagement;

/**
 * @Entity
 * @AnemicDomainModel
 */
final class Conference
{
    const DATE_TIME_FORMAT = \DateTime::ATOM;

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $start;

    /**
     * @var string
     */
    private $end;

    /**
     * @var string
     */
    private $city;

    public function __construct(string $id, string $name, \DateTimeImmutable $start, \DateTimeImmutable $end, $city)
    {
        $this->setId($id);
        $this->setName($name);
        $this->setStart($start);
        $this->setEnd($end);
        $this->setCity($city);
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getStart(): \DateTimeImmutable
    {
        return \DateTimeImmutable::createFromFormat(self::DATE_TIME_FORMAT, $this->start);
    }

    /**
     * @param \DateTimeImmutable $start
     */
    public function setStart(\DateTimeImmutable $start): void
    {
        $this->start = $start->format(self::DATE_TIME_FORMAT);
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getEnd(): \DateTimeImmutable
    {
        return \DateTimeImmutable::createFromFormat(self::DATE_TIME_FORMAT, $this->end);
    }

    /**
     * @param \DateTimeImmutable $end
     */
    public function setEnd(\DateTimeImmutable $end): void
    {
        $this->end = $end->format(self::DATE_TIME_FORMAT);
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }
}
