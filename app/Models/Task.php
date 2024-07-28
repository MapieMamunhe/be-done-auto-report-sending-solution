<?php

namespace App\Models;

use Illuminate\Support\Facades\Date;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
	use HasFactory;
	private string $id;
	private Date $date;
	private string $description;
	private string $duration;

	public function __construct(string $id, Date $date, string $description, string $duration)
	{
		$this->id = $id;
		$this->date = $date;
		$this->description = $description;
		$this->duration = $duration;
	}


	public function getId(): string
	{
		return $this->id;
	}

	public function getDate(): Date
	{
		return $this->date;
	}

	public function getDescription(): string
	{
		return $this->description;
	}

	public function getDuration(): string
	{
		return $this->duration;
	}

	public function setId(string $id): void
	{
		$this->id = $id;
	}

	public function setDate(Date $date): void
	{
		$this->date = $date;
	}

	public function setDescription(string $description): void
	{
		$this->description = $description;
	}

	public function setDuration(string $duration): void
	{
		$this->duration = $duration;
	}
}
