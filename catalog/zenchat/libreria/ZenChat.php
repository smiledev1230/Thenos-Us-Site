<?php 
## © copyright by zengrafic.com ||  please read the license ##
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) exit('No direct access allowed.');
 ### replace admin with your folders name HERE ###
include_once(dirname(__FILE__).'/../../../panel_admin_1023/config.php');

// ** DO NOT TOUCH ANYTHING BELOW THIS LINE !! ** //

/** 
 * Database class
 */ 
class Bancadati {
   private $PDO;
   private $config;
   private $where;
     
	 public function __construct() {
	 
		if (!extension_loaded('pdo')) {
			
			die('The PDO extension is required.');
			
		}
	 
	    $this->connect();
		}
   private function connect() {
	$driver = strtoupper('mysql');
		switch ($driver) {
              case 'MYSQL':
                 try {
					
					$this->PDO = new PDO('mysql:host=' . DB_HOSTNAME . ';dbname=' . DB_DATABASE, DB_USERNAME, DB_PASSWORD);
					//$this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
					$this->PDO->query('SET NAMES utf8');				
					
				} catch (PDOException $exception) {
                      die($exception->getMessage());
				}
				return $this->PDO;
				
			break;

			default:
				die('This database driver does not support: mysql');

		}

	}
        
	public function query($statement) {
		
		try {
			
			return $this->PDO->query($statement);
		
		} catch (PDOException $exception) {
			
			die($exception->getMessage());
			
		}
		
	}

	 public function row_count($statement) {
	
		try {
		
			return $this->PDO->query($statement)->rowCount();

		} catch (PDOException $exception) {

			die($exception->getMessage());
			
		}

    }

	public function fetch_all($statement, $fetch_style = PDO::FETCH_ASSOC) {
		
		try {
			
			return $this->PDO->query($statement)->fetchAll($fetch_style);

		} catch (PDOException $exception) {

			die($exception->getMessage());
			
		}
		
	}
	
	public function fetch_row_assoc($statement) {
	
		try {
			
			return $this->PDO->query($statement)->fetch(PDO::FETCH_ASSOC);

		} catch (PDOException $exception) {

			//die($exception->getMessage());
			echo $exception->getMessage();
		}
		
    }

	public function last_insert_id() {
		
		return $this->PDO->lastInsertId();
	
	}

	public function where($value) {

		$this->where = $value;
		
		return $this;
		
	}
	
	public function insert($table, $values) {			
	
		try {
		
			foreach ($values as $key => $value) {
				
				$field_names[] = $key . ' = :' . $key;
				
			}
			
			$sql = "INSERT INTO " . $table . " SET " . implode(', ', $field_names);

			$stmt = $this->PDO->prepare($sql);
			
			foreach ($values as $key => $value) {
				
				$stmt->bindValue(':' . $key, $value);
				
			}
			
			$stmt->execute();

		} catch (PDOException $exception) {

			die($exception->getMessage());
			
		}

	}
	
	public function update($table, $values) {

		try {

			foreach ($values as $key => $value) {
				
				$field_names[] = $key . ' = :' . $key;
				
			}
			
			$sql  = "UPDATE " . $table . " SET " . implode(', ', $field_names) . " ";
			
			$counter = 0;
			
			foreach ($this->where as $key => $value) {

				if ($counter == 0) {
					
					$sql .= "WHERE {$key} = :{$key} ";
					
				} else {
					
					$sql .= "AND {$key} = :{$key} ";
					
				}
				
				$counter++;
				
			}
			
			$stmt = $this->PDO->prepare($sql);
			
			foreach ($values as $key => $value) {
				
				$stmt->bindValue(':' . $key, $value);
				
			}
			
			foreach ($this->where as $key => $value) {
				
				$stmt->bindValue(':' . $key, $value);
				
			}
			
			$stmt->execute();

		} catch (PDOException $exception) {

			die($exception->getMessage());
			
		}

	}

	public function delete($table) {

		$sql = "DELETE FROM " . $table . " ";
		
		$counter = 0;
		
		foreach ($this->where as $key => $value) {

			if ($counter == 0) {
				
				$sql .= "WHERE {$key} = :{$key} ";
				
			} else {

				
				$sql .= "AND {$key} = :{$key} ";
				
			}
			
			$counter++;
			
		}
		
		$stmt = $this->PDO->prepare($sql);
		
		foreach ($this->where as $key => $value) {
			
			$stmt->bindValue(':' . $key, $value);
			
		}

		$stmt->execute();

    }

}
/*sessione*/
class Sessione {
	 public function __construct() {	
		
		if (!session_id()) {
			
			session_start();
			}
		}
	 public function set($name, $value) {
	
		$_SESSION[$name] = $value;
	
	}
   public function get($name) {
	
		if (isset($_SESSION[$name])) {
			
			return $_SESSION[$name];
			
		} else {
			
			return false;
			
		}
		
	}
    public function delete($name) {
	    unset($_SESSION[$name]);
	
	}
    public function destroy() {
		
		$_SESSION = array();
		session_destroy();
		
	}
	
}

class Template {
    private $tpl_path;
	private $values = array();
    public function __construct() {
		
      $this->tpl_path =  dirname(__FILE__).'/../';
	}

	public function set($name, $value = null) {
		
		if (is_array($name)) {
		
			foreach ($name as $key => $value) {
			
				$this->values[$key] = $value;
			
			}
		
		} else {
			
			$this->values[$name] = $value;
			
		}
		
    }

	public function display($template, $return_string = false) {

		if ($this->values) {
			
			extract($this->values);
			
		}
		
		if (file_exists($this->tpl_path . $template)) {

			ob_start();

			include($this->tpl_path . $template);

			$output = ob_get_contents();

			ob_end_clean();
			
		} else {
			
			die('Template file '. $this->tpl_path . $template . ' not found.');
			
		}

		if ($return_string) {
			
			return $output;
			
		} else {
			
			echo $output;
			
		}
		
	} 

}
/** 
 * Chat class
 */ 
class Chat {

	private $dba;
    private $session;
    private $tpl;

	public function __construct() {
		
		$this->dba = new Bancadati();
		$this->session = new Sessione();
		$this->tpl = new Template();
		
	}

	public function visitor_get_chat_status($json = FALSE) {

	
		$result = $this->dba->fetch_row_assoc("SELECT MAX(last_activity) AS last_activity FROM zen_operators");
		
		

		if ($this->session->get('visitor_chat_id')) {
			
			$result = $this->dba->fetch_row_assoc("SELECT department_name FROM zen_chat WHERE chat_id = '" . $this->session->get('visitor_chat_id') . "'");
			
			$data = array(
				'success' => TRUE, 
				'content' => translate('Chat started with: ', TRUE) . $result['department_name']
			);

		
			 } elseif ($result['last_activity'] == false || $this->count_visitors() >= get_option('max_visitors', TRUE)) {

			$data = array(
				'success' => FALSE 
				
			);

		} else {

			$data = array(
				'success' => TRUE, 
				'content' => translate('Questions? Need help? Click here to chat with us!', TRUE)
			);

		}
		
		if ($json) {
			
			echo json_encode($data);
			
		} else {
		
			return $data;
			
		}

	}

	public function visitor_contact_operator($json = FALSE) {

	    $result = $this->dba->fetch_row_assoc("SELECT MAX(last_activity) AS last_activity FROM zen_operators");
		
			if ($this->session->get('visitor_chat_id')) {

				$result = $this->dba->fetch_row_assoc("SELECT department_name FROM zen_chat WHERE chat_id = '" . $this->session->get('visitor_chat_id') . "'");

				$data = array(
					'success' => TRUE,
					'content' => $this->tpl->display('tpl/chat.tpl', TRUE),
					'department_name' => translate('Chat started with: ', TRUE) . $result['department_name']
				);

		
			} elseif ($result['last_activity'] == false|| $this->count_visitors() >= get_option('max_visitors', TRUE)) {

				$sql = "SELECT d.department_id, d.department_name FROM zen_departments d JOIN zen_department_operators do ON d.department_id = do.department_id GROUP BY d.department_name ORDER BY d.department_id ASC";
				
				$departments = array();
				
				foreach ($this->dba->query($sql) as $row) {
					
					$departments[] = array(
						'department_id'		=> $row['department_id'],
						'department_name'	=> $row['department_name']
					);
					
				}

				$this->tpl->set('departments', $departments);

				$data = array(
					'success' => FALSE 
					
					
				);

			} else {

			$sql = "SELECT MAX(o.last_activity) AS last_activity, d.department_id, d.department_name FROM zen_operators o JOIN zen_department_operators do ON o.operator_id = do.operator_id JOIN zen_departments d ON do.department_id = d.department_id GROUP BY d.department_name ORDER BY o.last_activity DESC";
				
				$departments = array();
				
				foreach ($this->dba->query($sql) as $row) {
					
					$total = $row['last_activity'];
					
					$departments[] = array(
						'total'				=> $total,
						'department_id'		=> $row['department_id'],
						'department_name'	=> $row['department_name']
					);
					
				}
				
				$this->tpl->set('departments', $departments);

				$data = array(
					'success' => FALSE, 
					'content' => $this->tpl->display('tpl/online.tpl', TRUE)
				);

			}
			
		//}

		if ($json) {
			
			echo json_encode($data);
			
		} else {
		
			return $data;
			
		}

	}

	public function visitor_start_chat($department_id, $username, $email, $message, $json = FALSE) {
		
		$department_id = filter_var($department_id, FILTER_SANITIZE_STRING);
		$username = filter_var($username, FILTER_SANITIZE_STRING);
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		$message = filter_var($message, FILTER_SANITIZE_STRING);
		
		$result = $this->dba->fetch_row_assoc("SELECT MAX(o.last_activity) AS last_activity FROM zen_operators o JOIN zen_department_operators do ON do.department_id = '" . $department_id . "' WHERE do.operator_id = o.operator_id");

		$total = time() - $result['last_activity'];

	    if ($result['last_activity'] == false || $this->count_visitors() >= get_option('max_visitors', TRUE)) {

			$sql = "SELECT d.department_id, d.department_name FROM zen_departments d JOIN zen_department_operators do ON d.department_id = do.department_id GROUP BY d.department_name ORDER BY d.department_id ASC";
			
			$departments = array();
			
			foreach ($this->dba->query($sql) as $row) {
				
				$departments[] = array(
					'department_id'		=> $row['department_id'],
					'department_name'	=> $row['department_name']
				);
				
			}

			$this->tpl->set('departments', $departments);
			
			$data = array(
				'success' => FALSE
			);

		} elseif ($this->dba->row_count("SELECT ip_address FROM zen_chat WHERE ip_address = '" . $_SERVER['REMOTE_ADDR'] . "' AND chat_status = 0 OR chat_status = 2") >= get_option('max_connections', TRUE)) {

			$data = array(
				'success' => FALSE, 
				'content' => translate('Too many requests are being made from your IP address.', TRUE), 
				'message' => translate('Questions? Need help? Click here to chat with us!', TRUE)
			);

		} else {

			if ($this->session->get('chat_hash')) {

				$chat_hash = $this->session->get('chat_hash');
				
			} else { 

				$chat_hash = uniqid();
				$this->session->set('chat_hash', $chat_hash);
				
			}

			if (!$this->session->get('username')) {
				
				$this->session->set('username', $username);
				
			}
			
			if ($this->dba->row_count("SELECT chat_hash FROM zen_chat WHERE chat_hash = '" . $chat_hash . "'") > 0) {

				$result = $this->dba->fetch_row_assoc("SELECT chat_id FROM zen_chat WHERE chat_hash = '" . $chat_hash . "'");
				
				$values = array(
					'chat_id'	=> $result['chat_id'],
					'message'	=> $message,
					'time'		=> time()
				); 			

				$this->dba->insert('zen_messages', $values);
				
			} else {
				
				$result = $this->dba->fetch_row_assoc("SELECT department_name FROM zen_departments WHERE department_id = '" . $department_id . "'");
				
				$values = array(
					'chat_status'			=> 0,
					'chat_hash'				=> $chat_hash,
					'time_start'			=> time(),
					'last_activity'			=> time(),
					'ip_address'			=> $_SERVER['REMOTE_ADDR'],
					'email'					=> $email,
					'username'				=> $this->session->get('username'),
					'referer'				=> $_SERVER['HTTP_REFERER'],
					'department_name'		=> $result['department_name'],
					'department_id'			=> $department_id
				); 			

				$this->dba->insert('zen_chat', $values);

				$chat_id = $this->dba->last_insert_id();

				$values = array(
					'chat_id'	=> $chat_id,
					'message'	=> $message,
					'time'		=> time()
				); 			

				$this->dba->insert('zen_messages', $values);

			}

			if (!$this->session->get('visitor_chat_id')) {
				
				$this->session->set('visitor_chat_id', $chat_id);
				
			}
			
			$result = $this->dba->fetch_row_assoc("SELECT department_name FROM zen_departments WHERE department_id = '" . $department_id . "'");

			$data = array(
				'success' => TRUE,
				'content' => $this->tpl->display('tpl/chat.tpl', TRUE),
				'department_name' => translate('Chat started with: ', TRUE) . $result['department_name']
			);

		}

		if ($json) {
			
			echo json_encode($data);
			
		} else {
		
			return $data;
			
		}

	}

	public function visitor_stop_chat($json = FALSE) {

		$result = $this->dba->fetch_row_assoc("SELECT chat_status FROM zen_chat WHERE chat_id = '" . $this->session->get('visitor_chat_id') . "'");

		$values = array(
			'chat_status' => 3
		); 			

		if ($result['chat_status'] != 3) {
			
			$values['time_end'] = time();
			
		}
		
		$where = array(
			'chat_id' => $this->session->get('visitor_chat_id')
		);

		$this->dba->where($where);
		$this->dba->update('zen_chat', $values);

		$values = array(
			'chat_id'	=> $this->session->get('visitor_chat_id'),
			'message'	=> translate('User has left the chat', TRUE),
			'time'		=> time()
		); 			

		$this->dba->insert('zen_messages', $values);

		$this->session->delete('username');
		$this->session->delete('chat_hash');
		$this->session->delete('operator_last_message_id[' . $this->session->get('visitor_chat_id') . ']');
		$this->session->delete('visitor_chat_id');
		
		$data = array('success' => TRUE);
		
		if ($json) {
			
			echo json_encode($data);
			
		} else {
		
			return $data;
			
		}

	}

	public function visitor_send_message($message, $json = FALSE) {

		$message = filter_var($message, FILTER_SANITIZE_STRING);
		
		if ($this->session->get('visitor_chat_id')) {
			
			$values = array(
				'chat_id'	=> $this->session->get('visitor_chat_id'),
				'message'	=> $message,
				'time'		=> time()
			); 			

			$this->dba->insert('zen_messages', $values);

			$values = array(
				'user_typing'	=> 0,
				'last_activity'	=> time()
			); 			

			$where = array(
				'chat_id' => $this->session->get('visitor_chat_id')
			);

			$this->dba->where($where);
			$this->dba->update('zen_chat', $values);
			
			$data = array(
				'success' => TRUE
			);
			
		} else {
			
			$data = array(
				'success' => FALSE
			);
			
		}

		if ($json) {
			
			echo json_encode($data);
			
		} else {
		
			return $data;
			
		}

	}

	public function visitor_typing($visitor_typing, $json = FALSE) {
		
		$visitor_typing = filter_var($visitor_typing, FILTER_SANITIZE_STRING);
		
		if ($this->session->get('visitor_chat_id')) {
			
			$values = array(
				'user_typing' => $visitor_typing
			); 			

			$where = array(
				'chat_id' => $this->session->get('visitor_chat_id')
			);

			$this->dba->where($where);
			$this->dba->update('zen_chat', $values);
			
			$data = array(
				'success' => TRUE
			);
			
		} else {
			
			$data = array(
				'success' => FALSE
			);
			
		}

		if ($json) {
			
			echo json_encode($data);
			
		} else {
		
			return $data;
			
		}

	}

	public function visitor_get_chat($json = FALSE) {

		$result = $this->dba->fetch_row_assoc("SELECT last_activity FROM zen_chat WHERE chat_id = '" . $this->session->get('visitor_chat_id') . "'");
		
		$total = time() - $result['last_activity'];
		
		if ($total > get_option('chat_expire', TRUE)) {

			$this->session->delete('username');
			$this->session->delete('chat_hash');
			$this->session->delete('operator_last_message_id[' . $this->session->get('visitor_chat_id') . ']');
			$this->session->delete('visitor_chat_id');
			
			$data = array(
				'success' => FALSE
			);
			
		} else {

			$sql = "SELECT m.message, m.time, m.operator_name, c.username FROM zen_messages m JOIN zen_chat c ON m.chat_id = c.chat_id WHERE m.chat_id = '" . $this->session->get('visitor_chat_id') . "' ORDER BY m.message_id ASC";

			if ($this->dba->row_count($sql) > 0) {
				
				$messages = array();
				
				foreach ($this->dba->query($sql) as $row) {
					
					if ($row['operator_name'] == '') {
						
						$name = $row['username'];
						
					} else {
					
						$name = $row['operator_name'];
						
					}
					
					$messages[] = array(
						'message'	=> $row['message'],
						'name'		=> $name,
						'time'		=> date('H:i:s', $row['time'])
					);
					
				}
				
				$this->tpl->set('messages', $messages);

				$data = array(
					'success' => TRUE, 
					'content' => $this->tpl->display('tpl/chat_messages.tpl', TRUE)
				);
				
			} else {
				
				$data = array(
					'success' => FALSE
				);
				
			}

			$result = $this->dba->fetch_row_assoc("SELECT chat_status, operator_typing FROM zen_chat WHERE chat_id = '" . $this->session->get('visitor_chat_id') . "'");

			if ($result['chat_status'] == 0) {
				
				$data['queue'] = 0;
				
			} else {
			
				$data['queue'] = 1;
				
			}

			if ($result['operator_typing']) {
				
				$data['operator_typing'] = 1;
				
			} else {
				
				$data['operator_typing'] = 0;
				
			}
			
			$result = $this->dba->fetch_row_assoc("SELECT message_id FROM zen_messages WHERE chat_id = '" . $this->session->get('visitor_chat_id') . "' ORDER BY message_id DESC LIMIT 1");
		
			$data['last_id'] = $result['message_id'];

			if (!$this->session->get('operator_last_message_id[' . $this->session->get('visitor_chat_id') . ']')) {
				
				$this->session->set('operator_last_message_id[' . $this->session->get('visitor_chat_id') . ']', 0);
			
			}
			
			if ($result['message_id'] > $this->session->get('operator_last_message_id[' . $this->session->get('visitor_chat_id') . ']')) {
				
				$data['new_message'] = 1;
				$this->session->set('operator_last_message_id[' . $this->session->get('visitor_chat_id') . ']', $result['message_id']);

			}
			
		}

		if ($json) {
			
			echo json_encode($data);
			
		} else {
		
			return $data;
			
		}

	}

	public function operator_get_pending_chat($json = FALSE) {

		$this->dba->query("UPDATE zen_chat SET chat_status = 3, time_end = UNIX_TIMESTAMP() WHERE chat_status != 3 AND chat_status != 1 AND last_activity < (UNIX_TIMESTAMP() - " . get_option('chat_expire', TRUE) . ")");

		$sql = "SELECT * FROM zen_chat c JOIN zen_department_operators do ON c.department_id = do.department_id JOIN zen_operators o ON do.operator_id = o.operator_id WHERE c.chat_status != 3 AND c.chat_status != 1 AND o.user_id = '" . $this->session->get('user_id') . "'";

		if ($this->dba->row_count($sql) > 0) {
			
			$pending_chat = array();
			
			foreach ($this->dba->query($sql) as $row) {
				
				$pending_chat[] = array(
					'chat_id'			=> $row['chat_id'],
					'chat_status'		=> $row['chat_status'],
					'username'			=> $row['username'],
					'ip_address'		=> $row['ip_address'],
					'department_name'	=> $row['department_name'],
					'elapsed_time'		=> elapsed_time(time(), $row['time_start'])
				);
				
			}
			
			$this->tpl->set('pending_chat', $pending_chat);

			$data = array(
				'success' => TRUE, 
				'content' => $this->tpl->display('tpl/admin/pending_chat.tpl', TRUE)
			);
			
		} else {
			
			$data = array(
				'success' => FALSE, 
				'content' => translate('The list of awaiting visitors is empty.', TRUE)
			);
			
		}

		$result = $this->dba->fetch_row_assoc("SELECT chat_id FROM zen_chat ORDER BY chat_id DESC LIMIT 1");

		$data['last_chat_id'] = $result['chat_id'];
           
		if (!$this->session->get('last_chat_id')) {
			
			$this->session->set('last_chat_id', 0);
			
		}
		
		if ($result['chat_id'] > $this->session->get('last_chat_id') || $result['chat_id'] == '') {
			
			$data['new_chat'] = 1;
			$this->session->set('last_chat_id', $result['chat_id']);
			
		}
              
		if ($json) {
			
			echo json_encode($data);
			
		} else {
		
			return $data;
			
		}

	}

	public function operator_get_online_visitors($json = FALSE) {

		foreach ($this->dba->query("SELECT visitor_id, time FROM zen_online_visitors") as $row) {
			
			$total = time() - $row['time'];
			
			if ($total > 120) {
				
				$where = array(
					'visitor_id' => $row['visitor_id']
				);
				
				$this->dba->where($where);
				$this->dba->delete('zen_online_visitors');
				
			}
			
		}

		$sql = "SELECT DISTINCT ip_address, referer FROM zen_online_visitors";

		if ($this->dba->row_count($sql) > 0) {
			
			$online_visitors = array();
			
			foreach ($this->dba->query($sql) as $row) {

				$online_visitors[] = array(
					'ip_address'	=> $row['ip_address'],
					'referer'		=> $row['referer']
				);
				
			}
			
			$this->tpl->set('online_visitors', $online_visitors);
			
			$data = array(
				'success' => TRUE, 
				'content' =>  array()  
			);
			foreach($online_visitors as $valore){
				$val = (strlen($valore['referer']) > 20)? substr($valore['referer'], 0, 16) .'...' : $valore['referer'] ;
$data['content'][] = '<li><span class="indirizzo">'.$valore['ip_address'].'</span><span class="pagina"><a href="'.$valore['referer'].'" target="_blank">'.$val.'</a></span></li>';
				
			}
		} else {
			
			$data = array(
				'success' => FALSE, 
				'content' => '<li id="nobody">'.translate('No visitors.', TRUE).'</li>'
			);
			
		}

		if ($json) {
			
			echo json_encode($data);
			
		} else {
		
			return $data;
			
		}

	}
	
	public function operator_get_status($json = FALSE) {

		$sql = "SELECT last_activity FROM zen_operators WHERE user_id = '" . $this->session->get('user_id') . "'";

		if ($this->dba->row_count($sql) > 0) {
			
			$result = $this->dba->fetch_row_assoc($sql);
			
			$total = time() - $result['last_activity'];
			
		    if ($result['last_activity'] == false) {

				$data = array(
					'success' => TRUE, 
					'content' => translate('You are offline', TRUE)
				);
				
			} else {
				
				$data = array(
					'success' => FALSE, 
					'content' => translate('You are online', TRUE)
				);
				
			}
		
		} else {
			
			$data = array(
				'success' => FALSE, 
				'content' => ''
			);
			
		}

		if ($json) {
			
			echo json_encode($data);
			
		} else {
		
			return $data;
			
		}

	}
	
	public function operator_get_online_departments($json = FALSE) {
		
		$departments = array();

		foreach ($this->dba->query("SELECT MAX(o.last_activity) AS last_activity, d.department_id, d.department_name FROM zen_operators o JOIN zen_department_operators do ON o.operator_id = do.operator_id JOIN zen_departments d ON do.department_id = d.department_id GROUP BY d.department_name ORDER BY d.department_id ASC") as $row) {
			
              if($row['last_activity'] == false) {
		       $data = array(
					'success' => FALSE,
					'content' => array()
				);			
                    foreach($departments as $value){
				$data['content'][] = '<li><a data-id=' . $value["department_id"] . ' class="transfer_chat"> ' .$value['department_name'] .'</a></li>'  ;
				         } 
			} else {

				$departments[] = array(
					'department_id'		=> $row['department_id'],
					'department_name'	=> $row['department_name']
				);
				
				
				
				$data = array(
					'success' => TRUE, 
					'content' => array()
	              
				);
				foreach($departments as $value){
				$data['content'][] = '<li><a data-id=' . $value["department_id"] . ' class="transfer_chat"> ' .$value['department_name'] .'</a></li>'  ;
				}
			}

		}
			
		if ($json) {
			
			echo json_encode($data);
			
		} else {
	
			return $data;
			
		}

	}
	
	public function operator_start_chat($chat_id, $json = FALSE) {
		
		$chat_id = filter_var($chat_id, FILTER_SANITIZE_STRING);
		
		if ($this->dba->row_count("SELECT chat_id FROM zen_chat WHERE chat_id = '" . $chat_id . "'") > 0) {
			
			$values = array(
				'chat_id'		=> $chat_id,
				'message'		=> '<script>$(function(){$("#tesa").parent().remove();});</script><span id="tesa"></span>',
				'operator_name'	=> $this->operator_get_full_name($this->session->get('user_id'), TRUE),
				'time'			=> time()
			); 			

			$this->dba->insert('zen_messages', $values);

			$values = array(
				'chat_status'	=> 2,
				'last_activity'	=> time()
			); 			

			$where = array(
				'chat_id' => $chat_id
			);

			$this->dba->where($where);
			$this->dba->update('zen_chat', $values);
			
			$this->session->set('chat_id', $chat_id);

			$data = array(
				'success' => TRUE
			);
		
		} else {
			
			$data = array(
				'success' => FALSE
			);
			
		}
	
		if ($json) {
			
			echo json_encode($data);
			
		} else {
		
			return $data;
			
		}

	}
	
	public function operator_open_chat($chat_id, $json = FALSE) {
		
		$chat_id = filter_var($chat_id, FILTER_SANITIZE_STRING);
		
		if ($this->dba->row_count("SELECT chat_id FROM zen_chat WHERE chat_id = '" . $chat_id . "'") > 0) {
			
			$this->session->set('chat_id', $chat_id);

			$data = array(
				'success' => TRUE
			);
			
		} else {
			
			$data = array(
				'success' => FALSE
			);
			
		}
		
		if ($json) {
			
			echo json_encode($data);
			
		} else {
		
			return $data;
			
		}

	}
	
	public function operator_watch_chat($chat_id, $json = FALSE) {
		
		$chat_id = filter_var($chat_id, FILTER_SANITIZE_STRING);
		
		if ($this->dba->row_count("SELECT chat_id FROM zen_chat WHERE chat_id = '" . $chat_id . "'") > 0) {
			
			$this->session->set('chat_id', $chat_id);

			$data = array(
				'success' => TRUE
			);
		
		} else {
			
			$data = array(
				'success' => FALSE
			);
			
		}
		
		if ($json) {
			
			echo json_encode($data);
			
		} else {
		
			return $data;
			
		}

	}
	
	public function operator_stop_chat($json = FALSE) {
		
		if ($this->session->get('chat_id')) {
			
			$result = $this->dba->fetch_row_assoc("SELECT chat_status FROM zen_chat WHERE chat_id = '" . $this->session->get('chat_id') . "'");
			
			$values = array(
				'chat_status' => 3
			); 			

			if ($result['chat_status'] != 3) {
				
				$values['time_end'] = time();
				
			}
			
			$where = array(
				'chat_id' => $this->session->get('chat_id')
			);

			$this->dba->where($where);
			$this->dba->update('zen_chat', $values);

			$values = array(
				'chat_id'		=> $this->session->get('chat_id'),
				'message'		=> '<span id="fine">'.translate('Operator has left the chat', TRUE).'</span>'.'<script>$(function(){$(".utente_area,.utente_send").prop("disabled",true);$("#fine").parent().children(".username").remove()});</script>',
				'operator_name' => $this->operator_get_full_name($this->session->get('user_id'), TRUE),
				'time'			=> time()
			); 			

			$this->dba->insert('zen_messages', $values);
			
			$this->session->delete('visitor_last_message_id[' . $this->session->get('chat_id') . ']');
			$this->session->delete('chat_id');

			$data = array(
				'success' => TRUE
			);
			
		} else {
			
			$data = array(
				'success' => FALSE
			);
			
		}
		
		if ($json) {
			
			echo json_encode($data);
			
		} else {
		
			return $data;
			
		}

	}
	
	public function operator_send_message($message, $json = FALSE) {

		$message = filter_var($message, FILTER_SANITIZE_STRING);
		
		$values = array(
			'chat_id'		=> $this->session->get('chat_id'),
			'message'		=> $message,
			'operator_name'	=> $this->operator_get_full_name($this->session->get('user_id'), TRUE),
			'time'			=> time()
		); 			
			
		$this->dba->insert('zen_messages', $values);

		$values = array(
			'last_activity'	=> time()
		); 			

		$where = array(
			'user_id' => $this->session->get('user_id')
		);

		$this->dba->where($where);
		$this->dba->update('zen_operators', $values);

		$values = array(
			'operator_typing'	=> 0,
			'last_activity'		=> time()
		); 			

		$where = array(
			'chat_id' => $this->session->get('chat_id')
		);

		$this->dba->where($where);
		$this->dba->update('zen_chat', $values);

		$data = array(
			'success' => TRUE
		);

		if ($json) {
			
			echo json_encode($data);
			
		} else {
		
			return $data;
			
		}

	}
	
	public function operator_typing($operator_typing, $json = FALSE) {
		
		$operator_typing = filter_var($operator_typing, FILTER_SANITIZE_STRING);
		
		$values = array(
			'operator_typing' => $operator_typing
		); 			

		$where = array(
			'chat_id' => $this->session->get('chat_id')
		);

		$this->dba->where($where);
		$this->dba->update('zen_chat', $values);

		$data = array(
			'success' => TRUE
		);

		if ($json) {
			
			echo json_encode($data);
			
		} else {
		
			return $data;
			
		}

	}
	
	public function operator_get_chat($json = FALSE) {

		$result = $this->dba->fetch_row_assoc("SELECT last_activity FROM zen_chat WHERE chat_id = '" . $this->session->get('chat_id') . "'");
		
		$total = time() - $result['last_activity'];
		
		if ($total > get_option('chat_expire', TRUE)) {

			$this->session->delete('visitor_last_message_id[' . $this->session->get('chat_id') . ']');
			$this->session->delete('chat_id');
			
			$data = array(
				'success' => FALSE
			);
			
		} else {
			
			$sql = "SELECT m.message, m.time, m.operator_name, c.username FROM zen_messages m JOIN zen_chat c ON m.chat_id = c.chat_id WHERE m.chat_id = '" . $this->session->get('chat_id') . "' ORDER BY m.message_id ASC";

			if ($this->dba->row_count($sql) > 0) {
				
				$messages = array();
				
				foreach ($this->dba->query($sql) as $row) {
					
					if ($row['operator_name'] == '') {
						
						$name = $row['username'];
						
					} else {
					
						$name = $row['operator_name'];
						
					}
					
					$messages[] = array(
						'message'	=> $row['message'],
						'name'		=> $name,
						'time'		=> date('H:i:s', $row['time'])
					);
					
				}
				
				$this->tpl->set('messages', $messages);
				
				$data = array(
					'success' => TRUE, 
					'content' => array() 
				);
				foreach($messages as $message){
					$data['content'][] = '<div class="riga_zenchat"><div class="time">'. $message['time'].'</div><span class="username">'. $message['name'].':&nbsp;</span>'. $message['message'] .'</div>';
					
					
				}
			} else {
				
				$data = array(
					'success' => FALSE
				);
				
			}

			$result = $this->dba->fetch_row_assoc("SELECT user_typing FROM zen_chat WHERE chat_id = '" . $this->session->get('chat_id') . "'");

			if ($result['user_typing']) {
				
				$data['user_typing'] = 1;
				
			} else {
			
				$data['user_typing'] = 0;
				
			}
			
			$result = $this->dba->fetch_row_assoc("SELECT message_id FROM zen_messages WHERE chat_id = '" . $this->session->get('chat_id') . "' ORDER BY message_id DESC LIMIT 1");

			$data['last_id'] = $result['message_id'];
			
			if (!$this->session->get('visitor_last_message_id[' . $this->session->get('chat_id') . ']')) {
				
				$this->session->set('visitor_last_message_id[' . $this->session->get('chat_id') . ']', 0);
				
			}
			
			if ($result['message_id'] > $this->session->get('visitor_last_message_id[' . $this->session->get('chat_id') . ']')) {
				
				$data['new_message'] = 1;
				$this->session->set('visitor_last_message_id[' . $this->session->get('chat_id') . ']', $result['message_id']);

			}

		}

		if ($json) {
			
			echo json_encode($data);
			
		} else {
		
			return $data;
			
		}

	}
	
	public function operator_update_status($json = FALSE) {
		
		if ($this->session->get('user_id')) {
			
			$result = $this->dba->fetch_row_assoc("SELECT last_activity FROM zen_operators WHERE user_id = '" . $this->session->get('user_id') . "'");
			$values = array();

		    if ($result['last_activity'] == false) {	
				$values['last_activity'] = time();
			
			} else {
				
				$values['last_activity'] = 0;
			
			}
			
			$where = array(
				'user_id' => $this->session->get('user_id')
			);

			$this->dba->where($where);
			$this->dba->update('zen_operators', $values);

			$data = array(
				'success' => TRUE
			);
			
		} else {
			
			$data = array(
				'success' => FALSE
			);
			
		}
		
		if ($json) {
			
			echo json_encode($data);
			
		} else {
		
			return $data;
			
		}

	}
	
    public function operator_transfer_chat($department_id, $json = FALSE) {
		
		$department_id = filter_var($department_id, FILTER_SANITIZE_STRING);
		
		if ($this->dba->row_count("SELECT department_id FROM zen_departments WHERE department_id = '" . $department_id . "'") > 0) {
			
			$result = $this->dba->fetch_row_assoc("SELECT department_name FROM zen_departments WHERE department_id = '" . $department_id . "'");
		
			$values = array(
				'chat_status'		=> 0,
				'department_name'	=> $result['department_name'],
				'department_id'		=> $department_id
			); 			

			$where = array(
				'chat_id' => $this->session->get('chat_id')
			);

			$this->dba->where($where);
			$this->dba->update('zen_chat', $values);

			$values = array(
				'chat_id'		=> $this->session->get('chat_id'),
				'message'		=> translate('Chat transfered to another operator, please wait.', TRUE),
				'operator_name'	=> $this->operator_get_full_name($this->session->get('user_id'), TRUE),
				'time'			=> time()
			); 			

			$this->dba->insert('zen_messages', $values);

			$data = array(
				'success' => TRUE
			);
		
		} else {

			$data = array(
				'success' => FALSE
			);
			
		}

		if ($json) {
			
			echo json_encode($data);
			
		} else {
		
			return $data;
			
		}

	}

	
	public function operator_get_full_name($user_id, $return_string = FALSE) {
		
		$user_id = filter_var($user_id, FILTER_SANITIZE_STRING);
		
		$result = $this->dba->fetch_row_assoc("SELECT CONCAT_WS(' ', first_name, last_name) AS full_name FROM zen_operators WHERE user_id = '" . $user_id . "'");
		 
		if ($return_string) {
			
			return rtrim($result['full_name']);
			
		} else {
			
			echo rtrim($result['full_name']);
			
		}
		
	}
	
	public function unique_id($prefix, $return_string = FALSE) {

		if (!$this->session->get($prefix)) {
			
			$this->session->set($prefix, uniqid($prefix));
			$unique_id = $this->session->get($prefix);
			
		} else {
			
			$unique_id = $this->session->get($prefix);
			
		}
		
		if ($return_string) {
			
			return $unique_id;
			
		} else {
			
			echo $unique_id;
			
		}
		
	}
	
	public function get_unique_id($prefix, $json = FALSE) {
		
		if (!$this->session->get($prefix)) {

			$data = array(
				'success' => FALSE
			);
			
		} else {
			
			$data = array(
				'success'	=> TRUE,
				'unique_id' => $this->session->get($prefix)
			);

		}
		
		if ($json) {
			
			echo json_encode($data);
			
		} else {
		
			return $data;
			
		}

	}
	
	public function online_visitors() {

		$sql = "SELECT ip_address FROM zen_online_visitors WHERE ip_address = '" . $_SERVER['REMOTE_ADDR'] . "'";

		if ($this->dba->row_count($sql) > 0) {
			
			$values = array(
				'time' => time()
			); 			

			$where = array(
				'ip_address' => $_SERVER['REMOTE_ADDR']
			);

			$this->dba->where($where);
			$this->dba->update('zen_online_visitors', $values);
			
		} else {
			
			$values = array(
				'ip_address'	=> $_SERVER['REMOTE_ADDR'],
				'referer'		=> $_SERVER['HTTP_REFERER'],
				'time'			=> time()
			); 			

			$this->dba->insert('zen_online_visitors', $values);

		}

	}

	public function count_visitors() {
		
		return $this->dba->row_count("SELECT chat_id FROM zen_chat WHERE chat_status = 0 OR chat_status = 2");
		
	}
	
}

?>
