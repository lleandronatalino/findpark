<?php
defined('BASEPATH') OR exit('No direct script access allowed');

interface IRepository {
    public function Insert();
    public function Select();
	public function SelectById();
    public function Update();
    public function Delete();
}