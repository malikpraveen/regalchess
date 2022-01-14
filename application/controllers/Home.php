<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index()
	{
		$this->load->view('index');
	} 
	public function game_room_list()
	{
		$this->load->view('game_room_list');
	} 
	public function game_detail()
	 {
	 	$this->load->view('game-detail');
	 } 
	 public function tournament()
	 {
	 	$this->load->view('tournament');
	 } 
	 public function tournament_detail()
	 {
	 	$this->load->view('tournament-detail');
	 } 
	 public function token_purchase_list()
	 {
	 	$this->load->view('token-purchase-list');
	 } 
	 public function token_detail() 
	 {
		 $this->load->view('token-detail');
	 }
	 public function quiz_rule()
	 {
		 $this->load->view('quiz-rule');
	 }
	 public function quiz_rule_detail()
	 {
		 $this->load->view('quiz-rule-detail');
	 }
	 public function content_list()
	 {
       $this->load->view('content-list');
	 }
	 public function transaction_list()
	 {
		 $this->load->view('transaction-list');
	 }
	 public function content_detail()
	 {
		 $this->load->view('content-detail');
	 }
	public function forgot()
	{
		$this->load->view('forgot');
	} 
	public function otp()
	{
		$this->load->view('otp');
	} 
	public function reset()
	{
		$this->load->view('reset');
	}
	public function dashboard()
	{
		$this->load->view('dashboard');
	}
	 public function user_list()
    {
	 	$this->load->view('user_list');
	 } 
	public function user_detail()
	 {
	 	$this->load->view('user_detail');
	 } 
	public function video_detail()
	 {
	 	$this->load->view('video_detail');
	 } 
	public function participants_video()
	 {
	 	$this->load->view('participants_video');
	 }
	public function video_list()
	 {
	 	$this->load->view('video_list');
	 } 
     public function category_list()
     {
	$this->load->view('category_list');
     } 
     public function report_list()
     {
	$this->load->view('report_list');
     } 
     public function report_detail()
     {
	$this->load->view('report_detail');
     } 
     public function notifications_list()
     {
	$this->load->view('notifications_list');
     }
     public function notification_detail()
     {
	$this->load->view('notification_detail');
     } 
     public function query_list()
     {
	$this->load->view('query_list');
     } 
     public function query_detail()
     {
	$this->load->view('query_detail');
     } 
	
     public function compose_new()
     {
	$this->load->view('compose_new');
     } 
	 public function advertisement_list()
	 {
		 $this->load->view('advertisement-list');
	 }
	







  



 

   }
