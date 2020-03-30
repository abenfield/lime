<?php


	class site {

		private $header;
		private $topbar;
		private $footer;
		private $topbarUser;
		private $topBarCheckOut;
		private $topWishBar;
		
		public function addHeader($header) {
		
			$this->header = $header;
		
		}
									
		public function addTopbar($topbar) {
		
			$this->topbar = $topbar;
		
		}
		
		public function addTopbarUser($topbarUser) {
		
			$this->topbarUser = $topbarUser;
		
		}
		
			
		public function addCheckOutBar($topBarCheckOut) {
		
			$this->topBarCheckOut = $topBarCheckOut;
		
		}
		
					
		public function addWishBar($topWishBar) {
		
			$this->topWishBar= $topWishBar;
		
		}
		
		public function addFooter($footer) {
		
			$this->footer = $footer;
		

		}
		
		public function display($content, $title) {
			
		
			global $page;
		
			include $this->header;

			include $this->topbar;
			
				$page->display($content);
			
			include $this->footer;
		
		}

		public function displayBooks($content, $title) {
			
		
			global $page;
		
			include $this->header;

			include $this->topbar;
			
				$page->displayBooks($content);
			
			include $this->footer;
		
		}


		
		public function displayNoTitleBar($content, $title) {
				
			global $page;
		
			include $this->header;
					
				$page->display($content);
			
			include $this->footer;
		
		}
		public function displayUserBar($content, $title) {
				
			global $page;
		
			include $this->header;
			
		      include $this->topbarUser;
					
				$page->display($content);
			
			include $this->footer;
		
		}
		
	public function displayCheckOutBar($content, $title) {
				
			global $page;
		
			include $this->header;
			
		      include $this->topBarCheckOut;
					
				$page->display($content);
			
			include $this->footer;
		
		}
		
		public function displayWishBar($content, $title) {
				
			global $page;
		
			include $this->header;
			
		      include $this->topWishBar;
					
				$page->display($content);
			
			include $this->footer;
		
		}
		
		
		
	
	}

?>
